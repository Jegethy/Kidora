<!--
<div class="modal fade" id="modalStatus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content2">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalSearchLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalSearchLabel">Search</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text">
                <form method="get" action="&#x2F;ranking&#x2F;search.html">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <select name="type" class="form-control">
                                <option value="char">Character</option>
                                <option value="guild">Guild</option>
                            </select>
                        </div>
                        <input type="text" name="search" placeholder="Charname,&#x20;Guild" class="form-control" value="">
                        <div class="input-group-append">
                            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
-->

<div class="sticky-top">

    <!--
    <div class="top">
        <div class="container">
            <ul class="loginbar float-right">
                <li><span class="cursor" data-toggle="modal" data-target="#modalSearch"><i class="fas fa-search"></i></span></li>
                <li><span class="strich">|</span></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    -->

    <div class="header">
        <div class="container">
            <nav class="navbar-default navbar1 navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('navbar.toggle') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link{{(isset($alias) && $alias === 'Home') ? ' active' : ''}}" href="{{ url('/') }}">
                                {{ __('navbar.nav.home') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{(isset($alias) && $alias === 'Downloads') ? ' active' : ''}}" href="{{ route('downloads-index') }}">
                                {{ __('navbar.nav.download') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{(isset($alias) && $alias === 'Ranking') ? ' active' : ''}}" href="{{ route('ranking.char') }}">
                                {{ __('navbar.nav.ranking') }}
                            </a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link{{(isset($alias) && $alias === 'AuctionHouse') ? ' active' : ''}}" href="{{ route('auctions-house') }}">
                                    {{ __('navbar.nav.auction-house') }}
                                </a>
                            </li>
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link{{(isset($alias) && $alias === 'WorldMap') ? ' active' : ''}}" href="{{ route('worldmap') }}">
                                {{ __('navbar.nav.worldmap') }}
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle{{(isset($alias) && $alias === 'pages') ? ' active' : ''}}" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('navbar.nav.pages') }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu navbar-dropdown dropdown-menu-right pr-0 pl-0" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item{{(isset($alias) && $alias === 'ServerInfomation') ? ' active' : ''}}" href="{{ route('server-information') }}">
                                    {{ __('navbar.nav.serverinformation') }}
                                </a>
                                @foreach($NavbarPagesProvider as $pages)
                                    <a class="dropdown-item{{(isset($slug) && $slug === $pages->slug) ? ' active' : ''}}"
                                       href="{{ route('pages-content', ['slug' => $pages->slug]) }}">
                                        {{ $pages->title }}
                                    </a>
                                @endforeach
                            </div>
                        </li>

                    </ul>

                    <ul class="navbar-nav ml-auto">
                        @if(count(config('language')) > 1)
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img class="small" src="{{ config('language.' . Session::get('locale', 'en') . '.icon') }}" width="26px" height="16px"> {{ config('language.' . Session::get('locale', 'en') . '.name') }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @foreach(config('language') as $key => $lang)
                                        @if($key !== 'example')
                                            <a class="dropdown-item" href="{{ route('change-language', ['lang' => $key]) }}">
                                                <img class="small" src="{{ $lang['icon'] }}" width="26px" height="16px"> {{ $lang['name'] }}
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        @endif

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('navbar.login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('navbar.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        {{ __('navbar.home') }}
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('navbar.logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @role('administrator')
                                    <a class="dropdown-item" href="{{ route('index-backend') }}">
                                        {{ __('navbar.backend') }}
                                    </a>
                                    @endrole
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('notification') }}" class="nav-link">
                                    <i class="fas fa-bell"></i>
                                    @if($NotificationsCountProvider > 0)
                                        <span class="badge badge-danger align-top">
                                {{ $NotificationsCountProvider }}
                            </span>
                                    @endif
                                </a>
                            </li>
                        @endguest
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</div>
