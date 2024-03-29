<nav>
    <ul>
        <li class="hamburger">
            <i class="fas fa-bars"></i>
        </li>
        <li class="logo">
            <a href="/homepage">
                <img src="{{ asset('logo.svg') }}" alt=""></a>
        </li>
        <li><a href="/homepage">Store</a></li>
        @if (Auth::check() && Auth::user()->user_type == 'admin')
            <li class="nav-item">
                <a href="/add-game">Add Game</a>
            </li>
            <li class="nav-item">
                <a href="/manage-developers-publishers">Developers/Publishers</a>
            </li>
        @else
            <li><a href="/library">Library</a></li>
        @endif
        <li><a href="">About</a></li>
        @if (Auth::check())
            <li><a href="/edit-profile">{{ Auth::user()->username }}</a></li>
            <li><a href="/logout">Logout</a></li>
        @else
            <li><a href="/login">Login</a></li>
        @endif

    </ul>
</nav>
