<!DOCTYPE html>
<html lang="de">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
<!--Import materialize.css-->
    {{--<link type="text/css" rel="stylesheet" href="/css/materialize.min.css" media="screen,projection"/>--}}
    {{--<link type="text/css" rel="stylesheet" href="/css/admin.css" media="screen,projection"/>--}}
    <link type="text/css" rel="stylesheet" href="{{ asset('css/admin.css') }}" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/adminstyle.css') }}" media="screen,projection"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">

    <!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<header>
    <ul id="admin-nav-dropdown" class="dropdown-content">
        <li><a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
    <nav>
        <div class="nav-wrapper white">
            <a href="#" data-target="slide-out" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a class="dropdown-trigger" href="#!" data-target="admin-nav-dropdown">{{ Auth::user()->nickname }}<i class="material-icons right">arrow_drop_down</i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<ul id="slide-out" class="sidenav sidenav-fixed white-text">
    <li>
        <div class="user-view">
            <div class="background">
                <!-- <img src="/images/bga.jpg">-->
            </div>
            <h5 class="headline-font">Admin-Dashboard</h5>
            <a href="#name"><span
                    class="white-text name">{{ Auth::user()->nickname }}</span></a>
            <a href="#email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
        </div>
    </li>
    <li><a href="{{ route('admin.index') }}"><i class="material-icons white-text">cloud</i>Dashboard</a></li>
    <div class="divider"></div>
    <div class="divider2"></div>
    <li><a href="#"><i class="material-icons white-text">comment</i>Beiträge</a></li>
    <div class="divider"></div>
    <div class="divider2"></div>
    <li><a href="{{ route('admin.user.index') }}"><i class="material-icons white-text">face</i>Benutzer</a></li>
    <div class="divider"></div>
    <div class="divider2"></div>
    <li><a href="{{ route('admin.whitelist') }}"><i class="material-icons white-text">event</i>Whitelist</a></li>
    <div class="divider"></div>
    <div class="divider2"></div>
    <li><a href="#"><i class="material-icons white-text">share</i>Links</a></li>
    <div class="divider"></div>
    <div class="divider2"></div>
    @role('Super-Admin')
    <li><a href="{{ route('admin.roles.index') }}"><i class="material-icons white-text">fingerprint</i>Berechtigungen</a></li>
    <div class="divider"></div>
    <div class="divider2"></div>
    @endrole
    <li><a href="{{ route('index') }}"><i class="material-icons white-text">reply</i>Zur Seite</a></li>
    <li>
        <div class="divider"></div>
        <div class="divider2"></div>
    </li>

</ul>

<main>
    @yield('content')
</main>
<!--JavaScript at end of body for optimized loading-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ asset('js/materialize.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>
</body>
</html>
