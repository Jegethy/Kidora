@isset($UniqueKillsProvider)

    <div>
        <button type="button" class="collapsible">
            <h3>{{ __('sidebar.unique.title') }}</h3>
        </button>
        <div class="content">
            <div class="sidebar1">
                <ul class="list-group small overflow-auto py-1 pl-1">
                    @forelse($UniqueKillsProvider as $Unique)
                        <li class="font-weight-light">
                            <span class="font-weight-bold">
                                {{ $Unique->CharName16 }}
                            </span> {{ __('sidebar.unique.killed') }}
                            <span class="font-weight-bold">
                                {{ $Unique->unique_name }}
                            </span>
                            {{ \Carbon\Carbon::make($Unique->killed_at)->diffForHumans() }}
                        </li>
                    @empty
                        <li>
                            {{ __('sidebar.unique.empty') }}
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

@endisset
