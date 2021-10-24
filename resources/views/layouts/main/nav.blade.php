<div class="navbar-fixed">
    <!-- Dropdown Structure -->
    <ul id="loggedin" class="dropdown-content collection" style="background-color: #1a202c;border:none;">
        <li style="background-color: #1a202c;"><a href="{{ route('home') }}" class="dropdown-style">Profil</a></li>
        @role('Admin|Super-Admin')
        <li style="background-color: #1a202c;"><a href="{{ route('admin.index') }}">Admin</a></li>
        @endrole
        <li class="nav-item dropdown" style="background-color: #1a202c;">
            <a class="dropdown-item" href="{{ route('logout') }}"
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
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down bold">
                @if (Auth::guest())
                <li><a href="{{ route('register') }}" id="download-button"
                       class="btn-small waves-effect waves-light teal lighten-1">Jetzt bewerben</a></li>
                @else

                    @if (Auth::user()->whitelisted = '0')
                        @elseif(Auth::user()->whitelist_send = 0)
                            <li><a href="{{ route('whitelisting.index') }}" id="download-button"
                                   class="btn-small waves-effect waves-light lighten-1">jetzt whitelisten</a></li>
                    @endif
                @endif
                <li><a href="{{ route('index') }}">Start</a></li>
                <li><a href="{{ route('rules') }}">Regeln</a></li>
                <li><a href="#">News</a></li>
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Anmelden</a></li>
                @else
                    <li><a class="dropdown-trigger" href="#!" data-target="loggedin">Hallo {{ Auth::user()->nickname }}<i
                                class="material-icons right" style="line-height:90px">arrow_drop_down</i></a></li>
                @endif
                <li><a href="#"></a></li>
            </ul>
        </div>
    </nav>
</div>

