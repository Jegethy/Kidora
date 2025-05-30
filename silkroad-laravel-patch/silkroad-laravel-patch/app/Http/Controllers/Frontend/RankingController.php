<?php

namespace App\Http\Controllers\Frontend;

use App\HideRanking;
use App\HideRankingGuild;
use App\Http\Controllers\Controller;
use App\Http\Library\Services\SRO\Log\UniqueService;
use App\Http\Model\SRO\Log\PvpRecordsLog;
use App\Http\Model\SRO\Log\UniqueKillLog;
use App\Http\Model\SRO\Shard\Char;
use App\Http\Model\SRO\Shard\CharTrijob;
use App\Http\Model\SRO\Shard\Guild;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Throwable;

class RankingController extends Controller
{
    /**
     * @var UniqueService
     */
    public UniqueService $uniqueService;

    /**
     * RankingController constructor.
     * @param UniqueService $uniqueService
     */
    public function __construct(UniqueService $uniqueService)
    {
        $this->uniqueService = $uniqueService;
    }

    /**
     * @param Request $request
     * @param null|string $mode
     * @return array|Factory|View
     * @throws Throwable
     */
    public function index(Request $request, $mode = 'charname')
    {
        //check for deleted Characters
        $deleted_chars = Char::where('Deleted', true)
            ->pluck('CharName16');
        // check for hide ranking and add deleted_chars to it
        $hideRanking = HideRanking::all()
            ->pluck('charname')
            ->union($deleted_chars);

        //check for hidden guilds from ranking.
        $hideRankingGuild = HideRankingGuild::all()
            ->pluck('guild_id')
            ->diff([0]);

        $search = $request->get('search');
        $type = $request->get('type');

        if ($mode !== null) {
            $data = $this->mode(
                $mode,
                $hideRanking,
                $hideRankingGuild
            );
        } elseif ($search && $type) {
            $data = $this->searching(
                $type,
                $search,
                $hideRanking,
                $hideRankingGuild
            );
        } else {
            $chars = Char::orderBy('ItemPoints', 'DESC')
                ->whereNotIn('CharName16', $hideRanking)
                ->whereNotIn('GuildID', $hideRankingGuild)
                ->with('getGuildUser')
                ->paginate(25);

            $data = view('theme::frontend.ranking.results.chars', [
                'data' => $chars,
            ])->render();
        }

        return view('theme::frontend.ranking.index', [
            'data' => $data,
            'mode' => $mode
        ]);
    }

    /**
     * @param $type
     * @param $search
     * @param $hideRanking
     * @param $hideRankingGuild
     * @return string
     */
    private function searching($type, $search, $hideRanking, $hideRankingGuild)
    {
        if ($type === config('ranking.search-charname') && config('siteSettings.char_ranking')) {
            $chars = Char::orderBy('ItemPoints', 'DESC')
                ->where('CharName16', 'like', '%' . $search . '%')
                ->whereNotIn('CharName16', $hideRanking)
                ->whereNotIn('GuildID', $hideRankingGuild)
                ->with('getGuildUser')
                ->paginate(25);
            return view('theme::frontend.ranking.results.chars', [
                'data' => $chars,
            ])->render();
        }

        if ($type === config('ranking.search-guild') && config('siteSettings.guild_ranking')) {
            $guilds = Guild::orderBy('ItemPoints', 'DESC')
                ->where('Name', 'like', '%' . $search . '%')
                ->whereNotIn('ID', $hideRankingGuild)
                ->where('ID', '!=', 0)
                ->paginate(25);
            return view('theme::frontend.ranking.results.guilds', [
                'data' => $guilds,
            ])->render();
        }

        if ($type === config('ranking.search-job') && config('siteSettings.job_ranking')) {
            $jobs = CharTrijob::whereHas(
                'getCharacter',
                static function ($q) use ($search, $hideRanking, $hideRankingGuild) {
                    $q->where('NickName16', 'like', '%' . $search . '%');
                    $q->whereNotIn('CharName16', $hideRanking);
                    $q->whereNotIn('GuildID', $hideRankingGuild);
                }
            )
                ->with('getCharacter')
                ->whereIn('JobType', [1, 2, 3])
                ->orderBy('Level', 'DESC')
                ->orderBy('Exp', 'DESC')
                ->paginate(25);
            return view('theme::frontend.ranking.results.jobs', [
                'data' => $jobs
            ])->render();
        }

        //abort 404 if non of the above.
        return abort(404);
    }

    /**
     * @param $mode
     * @param $hideRanking
     * @param $hideRankingGuild
     * @return void|array|Factory|View|string
     */
    private function mode($mode, $hideRanking, $hideRankingGuild)
    {
        if ($mode === config('ranking.search-charname') && config('siteSettings.char_ranking', true)) {
            $chars = Char::orderBy('ItemPoints', 'DESC')
                ->whereNotIn('CharName16', $hideRanking)
                ->whereNotIn('GuildID', $hideRankingGuild)
                ->with('getGuildUser')
                ->paginate(25);
            return view('theme::frontend.ranking.results.chars', [
                'data' => $chars,
            ])->render();
        }

        if ($mode === config('ranking.search-guild') && config('siteSettings.guild_ranking', true)) {
            $guilds = Guild::orderBy('ItemPoints', 'DESC')
                ->whereNotIn('ID', $hideRankingGuild)
                ->where('ID', '!=', 0)
                ->paginate(25);
            return view('theme::frontend.ranking.results.guilds', [
                'data' => $guilds,
            ])->render();
        }

        if ($mode === config('ranking.search-job') && config('siteSettings.job_ranking', true)) {
            $jobs = CharTrijob::whereHas('getCharacter', static function ($q) use ($hideRanking, $hideRankingGuild) {
                $q->whereNotIn('CharName16', $hideRanking);
                $q->whereNotIn('GuildID', $hideRankingGuild);
            })
                ->with('getCharacter')
                ->whereIn('JobType', [1, 2, 3])
                ->orderBy('Level', 'DESC')
                ->orderBy('Exp', 'DESC')
                ->paginate(25);
            return view('theme::frontend.ranking.results.jobs', [
                'data' => $jobs
            ]);
        }

        if ($mode === config('ranking.search-trader') && config('siteSettings.trader_ranking', true)) {
            $jobs = CharTrijob::whereHas('getCharacter', static function ($q) use ($hideRanking, $hideRankingGuild) {
                $q->whereNotIn('CharName16', $hideRanking);
                $q->whereNotIn('GuildID', $hideRankingGuild);
            })
                ->with('getCharacter')
                ->where('JobType', 1)
                ->orderBy('Level', 'DESC')
                ->orderBy('Exp', 'DESC')
                ->paginate(25);
            return view('theme::frontend.ranking.results.jobs', [
                'data' => $jobs
            ]);
        }

        if ($mode === config('ranking.search-hunter') && config('siteSettings.hunter_ranking', true)) {
            $jobs = CharTrijob::whereHas('getCharacter', static function ($q) use ($hideRanking, $hideRankingGuild) {
                $q->whereNotIn('CharName16', $hideRanking);
                $q->whereNotIn('GuildID', $hideRankingGuild);
            })
                ->with('getCharacter')
                ->where('JobType', 3)
                ->orderBy('Level', 'DESC')
                ->orderBy('Exp', 'DESC')
                ->paginate(25);
            return view('theme::frontend.ranking.results.jobs', [
                'data' => $jobs
            ]);
        }

        if ($mode === config('ranking.search-thief') && config('siteSettings.thief_ranking', true)) {
            $jobs = CharTrijob::whereHas('getCharacter', static function ($q) use ($hideRanking, $hideRankingGuild) {
                $q->whereNotIn('CharName16', $hideRanking);
                $q->whereNotIn('GuildID', $hideRankingGuild);
            })
                ->with('getCharacter')
                ->where('JobType', 2)
                ->orderBy('Level', 'DESC')
                ->orderBy('Exp', 'DESC')
                ->paginate(25);
            return view('theme::frontend.ranking.results.jobs', [
                'data' => $jobs
            ]);
        }

        if ($mode === config('ranking.search-unique') && config('siteSettings.unique_ranking', true)) {
            /** @var array $uniques */
            $all_uniques = app('config')->get('unique');
            foreach ($all_uniques as $key => $unique) {
                $uniques[] = $key;
            }
            $jobs = UniqueKillLog::whereNotIn('CharName16', $hideRanking)
                ->whereIn('UniqueName', $uniques)
                ->with([
                    'getCharacter' => static function ($query) use ($hideRankingGuild) {
                        $query->whereNotIn('GuildID', $hideRankingGuild);
                    }
                ])
                ->with('getCharacter')
                ->get();

            //get the character unique kills points
            $jobs = $this->uniqueService->getUniquePoints($jobs);

            //get current page number
            $page = (isset($_GET['page'])) ? $_GET['page'] : 1;

            //this is the number of results per page
            $perPage = 25;

            //start the paginating
            $jobs = new LengthAwarePaginator(
                $jobs->forPage($page, $perPage),
                $jobs->count(),
                $perPage,
                $page,
                [
                    'path' => route('ranking-index', ['mode' => config('ranking.search-unique')]),
                    'pageName' => 'page'
                ]
            );

            return view('theme::frontend.ranking.results.unique', [
                'data' => $jobs
            ])->render();
        }

        if ($mode === config('ranking.search-free-pvp') && config('siteSettings.free_pvp_ranking', true)) {
            $chars = PvpRecordsLog::whereNotIn('CharName', $hideRanking)
                ->whereType(0)
                ->with([
                    'getKillerCharacter' => static function ($query) use ($hideRankingGuild) {
                        $query->whereNotIn('GuildID', $hideRankingGuild);
                    }
                ])
                ->select(DB::raw('count(pvp_records.CharName) as points'), 'CharName')
                ->groupBy('CharName')
                ->orderBy('points', 'DESC')
                ->get();
            foreach ($chars as $key => $char) {
                $chars[$key]['count'] = $key + 1;
            }
            //get current page number
            $page = (isset($_GET['page'])) ? $_GET['page'] : 1;

            //this is the number of results per page
            $perPage = 25;

            //start the paginating
            $chars = new LengthAwarePaginator(
                $chars->forPage($page, $perPage),
                $chars->count(),
                $perPage,
                $page,
                [
                    'path' => route('ranking-index', ['mode' => config('ranking.search-free-pvp')]),
                    'pageName' => 'page'
                ]
            );
            return view('theme::frontend.ranking.results.free-pvp', [
                'data' => $chars
            ])->render();
        }

        if ($mode === config('ranking.search-job-pvp') && config('siteSettings.job_pvp_ranking', true)) {
            $chars = PvpRecordsLog::whereNotIn('CharName', $hideRanking)
                ->where('type', '>', 0)
                ->with([
                    'getKillerCharacter' => static function ($query) use ($hideRankingGuild) {
                        $query->whereNotIn('GuildID', $hideRankingGuild);
                    }
                ])
                ->select(DB::raw('count(pvp_records.CharName) as points'), 'pvp_records.CharName')
                ->groupBy('CharName')
                ->orderBy('points', 'DESC')
                ->get();
            foreach ($chars as $key => $char) {
                $chars[$key]['count'] = $key + 1;
                $type = PvpRecordsLog::where('CharName', $char->CharName)
                    ->where('type', '>', 0)
                    ->first()->type;
                if ($type === 1) {
                    $chars[$key]['type'] = 'Trader';
                } elseif ($type === 2) {
                    $chars[$key]['type'] = 'Thief';
                } else {
                    $chars[$key]['type'] = 'Hunter';
                }
            }
            //get current page number
            $page = $_GET['page'] ?? 1;

            //this is the number of results per page
            $perPage = 25;

            //start the paginating
            $chars = new LengthAwarePaginator(
                $chars->forPage($page, $perPage),
                $chars->count(),
                $perPage,
                $page,
                [
                    'path' => route('ranking-index', ['mode' => config('ranking.search-free-pvp')]),
                    'pageName' => 'page'
                ]
            );
            return view('theme::frontend.ranking.results.job-pvp', [
                'data' => $chars
            ])->render();
        }

        //abort 404 if non of the above.
        return abort(404);
    }
}
