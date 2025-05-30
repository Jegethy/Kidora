@isset($TopTenGuildsProvider)

    <div>
        <button type="button" class="collapsible">
            <h3>{{ __('sidebar.topten-guilds.title') }}</h3>
        </button>
        <div class="content">
            <div class="sidebar1">
                <table class="table table-hover table-striped mt-2">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{__('sidebar.topten-guilds.name')}}</th>
                        <th>{{__('sidebar.topten-guilds.points')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($TopTenGuildsProvider as $count => $guild)
                        <tr>
                            <td>{{$count+1}}</td>
                            <td>{{$guild->Name}}</td>
                            <td>{{$guild->ItemPoints}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>{{ __('sidebar.topten-guilds.empty') }}</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endisset
