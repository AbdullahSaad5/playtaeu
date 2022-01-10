<nav>
    <ul>
        <li class="logo">
            <a href="/homepage">
                <img src="{{ asset('logo.svg') }}" alt=""></a>
        </li>
        <li><a href="/homepage">Store</a></li>
        @if (Auth::check() && Auth::user()->user_type == 'admin')
            <li class="nav-item">
                <a href="/add-game">Add Game</a>
            </li>
        @else
            <li><a href="">Community</a></li>
        @endif
        <li><a href="">About</a></li>
        <li><a href="">Support</a></li>
        @if (Auth::check())
            <li><a href="/edit-profile">{{ Auth::user()->username }}</a></li>
            <li><a href="/logout">Logout</a></li>
        @else
            <li><a href="/login">Login</a></li>
        @endif

    </ul>
</nav>
