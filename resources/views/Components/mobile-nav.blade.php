<div class="mobile-nav">
    @if (Auth::check())
        <div class="profile">
            <div class="personal">
                <img src="{{ Auth::user()->user_avatar }}" alt="">
                <p>{{ Auth::user()->username }}</p>
            </div>
            <div class="cart">
                @php
                    $count = DB::select('select count(*) as count from cart where username = ?', [Auth::user()->username]);
                @endphp
                <a href="">Cart ({{ $count[0]->count }})</a>
            </div>
        </div>
    @endif
    <div class="links">
        <ul>
            <li><a href="">Store</a></li>
            <li><a href="">Library</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </div>
</div>
