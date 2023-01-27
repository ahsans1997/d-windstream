<div class="menu">
    <nav class="navbar navbar-expand-lg">
        <div class="d-flex navbar-light bg-light mnav">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="menu-close">X</span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="text-left mnav">
                <a href="{{ url('/') }}"><img class="logo-image" style="width:80%;padding:10px"
                        src="{{ asset('/') }}frontend_asset/img/niterlogo.png" alt=""></a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul>
                <li><a class="{{ request()->path() == '/' ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li><a class="{{ request()->path() == 'about' ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                <li><a class="{{ request()->path() == 'program' ? 'active' : '' }}" href="{{ route('program') }}">Programs</a></li>
                <li><a class="{{ request()->path() == 'news' ? 'active' : '' }}" href="{{ route('news') }}">News</a></li>
                <li><a class="{{ request()->path() == 'event' ? 'active' : '' }}" href="{{ route('event') }}">Events</a></li>
                <li><a class="{{ request()->path() == 'department' ? 'active' : '' }}"  href="{{ route('department') }}">Departments</a></li>
                <li><a class="{{ request()->path() == 'research' ? 'active' : '' }}" href="{{ route('research') }}">Research</a></li>
                <li><a class="{{ request()->path() == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a></li>
            </ul>

        </div>
    </nav>
</div>
