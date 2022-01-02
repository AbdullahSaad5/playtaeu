<div class="game-thumbnail">
    {{-- Anchor tag --}}
    <a class="overlay-link" href="game/{{ $gameID }}">

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
            <h4 class="game-title"><a href="" class="info-links">{{ $title }}</a></h4>
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
                <span><a href="" class="info-links">{{ $reviewCount }}</a></span>
            </p>
            @if ($price == 0)
                <button class="get-button">Get Now</button>
            @else
                <button class="get-button">Add to Cart</button>
            @endif
        </div>
    </div>
</div>
