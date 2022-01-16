<div class="game-thumbnail">
    {{-- Anchor tag --}}
    <a class="overlay-link" href="game/id={{ $gameID }}">

    </a>
    {{-- Main thumbnail --}}
    <div class="main">
        <img src="{{ $image }}" alt="" />
        @if ($price == 0)
            <p>Free</p>
        @else
            <p>${{ $price }}</p>
        @endif
    </div>
    {{-- Reveal on hover thumbnail --}}
    <div class="hover">
        <div class="autoplay">
            <video autoplay loop muted>
                <source src="{{ $video }}" type="video/mp4">
            </video>
        </div>
        <div class="info">
            <h4 class="game-title"><a href="game/id={{ $gameID }}"
                    class="info-links">{{ $title }}</a></h4>
            <p class="developer-info">
                <span class="gray-text">Developer:</span>
                @php
                    $developer = json_decode($developer);
                @endphp
                <span>
                    @foreach ($developer as $item)
                        <a href="" class="info-links">{{ $item->developer_name }}</a>
                    @endforeach
                </span>
            </p>

            <p class="publisher-info">
                <span class="gray-text">Publisher:</span>
                @php
                    $publisher = json_decode($publisher);
                @endphp
                <span>
                    @foreach ($publisher as $item)
                        <a href="" class="info-links">{{ $item->publisher_name }}</a>
                    @endforeach
                </span>
            </p>

            <p class="review-count">
                <span class="gray-text">All Reviews:</span>
                <span>{{ $reviewCount }}</span>
            </p>
            @php
                $record = DB::select('SELECT cart.game_id FROM cart WHERE cart.username = ? AND cart.game_id = ?', [Auth::user()->username, $gameID]);
                $own = DB::select('SELECT owns.game_id FROM owns WHERE owns.username = ? AND owns.game_id = ?', [Auth::user()->username, $gameID]);
                
            @endphp
            @if (count($record) > 0)
                <a class="get-button" href="/cart/">Game In Cart</a>

            @elseif (count($own) > 0)
                <a class="get-button" href="">Owned</a>

            @else
                @if (Auth::user()->user_type == 'admin')
                    <a class="get-button" href="/edit-game/id={{ $gameID }}/edit">Edit Details</a>
                @else
                    @if ($price == 0)
                        <a class="get-button" href="/add-to-cart/id={{ $gameID }}">Get Now</a>
                    @else
                        <a class="get-button" href="/add-to-cart/id={{ $gameID }}">Add to Cart</a>
                    @endif
                @endif
            @endif

        </div>
    </div>
</div>
