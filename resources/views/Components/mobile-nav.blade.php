<div class="mobile-nav">
    @if (Auth::check())
        <div class="profile">
            <div class="personal">
                <img src="{{ Auth::user()->user_avatar }}" alt="">
                <p><a href="/edit-profile">{{ Auth::user()->username }}</a></p>
            </div>
            <div class="cart">
                @php
                    $count = DB::select('select count(*) as count from cart where username = ?', [Auth::user()->username]);
                @endphp
                <a href="/cart">Cart ({{ $count[0]->count }})</a>
            </div>
        </div>
    @endif
    <div class="links">
        <ul>
            <li><a href="/homepage">Store</a></li>
            <li><a href="/library">Library</a></li>
            <li><a href="/about">About</a></li>
            @if (Auth::check())
                <li><a href="/logout">Logout</a></li>
            @else
                <li><a href="/login">Login</a></li>
            @endif
        </ul>
    </div>
</div>
