@isset($TopTenPlayersProvider)

    <div>
        <button type="button" class="collapsible">
            <h3>{{ __('sidebar.topten-players.title') }}</h3>
        </button>
        <div class="content">
            <div class="sidebar1">
                <table class="table table-hover table-striped mt-2">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{__('sidebar.topten-players.name')}}</th>
                        <th>{{__('sidebar.topten-players.points')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($TopTenPlayersProvider as $count => $player)
                        <tr>
                            <td>{{$count+1}}</td>
                            <td>
                                <a href="{{ route('information-player', ['CharName16' => Str::lower($player->CharName16)]) }}">
                                    {{ $player->CharName16 }}
                                </a></td>
                            <td>{{$player->ItemPoints}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>{{ __('sidebar.topten-players.empty') }}</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endisset
