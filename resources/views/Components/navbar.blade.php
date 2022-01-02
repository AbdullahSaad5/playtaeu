<nav>
    <ul>
        <li class="logo"><a href="/homepage"><i class="fab fa-steam"></i></a></li>
        <li><a href="">Store</a></li>
        <li><a href="">Community</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Support</a></li>
        @if (Auth::check())
            <li><a href="/profile">{{ Auth::user()->username }}</a></li>
            <li><a href="/logout">Logout</a></li>
        @else
            <li><a href="/login">Login</a></li>
        @endif

    </ul>
</nav>
