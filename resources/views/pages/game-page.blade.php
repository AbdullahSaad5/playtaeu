@extends('layouts.base')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/gamepage.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
@endsection


@section('content')
    <section class="section gamepage">
        <div class="main">
            <h1>{{ $data->game_title }}</h1>
            <div class="display-section">
                <div class="showcase">
                    <div class="main-content">
                        <video class="main-video" autoplay muted controls>
                            <source src="{{ $data->game_detail_video }}" type="">
                        </video>
                        <img class="main-img hidden" src="" alt="">
                    </div>
                    <div class="thumbnails">
                        <div class="image-container">
                            <video class="main-video" preload="metadata">
                                <source src="{{ $data->game_detail_video }}#t=30" type="">
                            </video>
                        </div>
                        <div class="image-container">
                            <img src="{{ $data->game_detail_image1 }}" alt="">
                        </div>
                        <div class="image-container">
                            <img src="{{ $data->game_detail_image2 }}" alt="">
                        </div>
                        <div class="image-container">
                            <img src="{{ $data->game_detail_image3 }}" alt="">
                        </div>
                        <div class="image-container">
                            <img src="{{ $data->game_detail_image4 }}" alt="">
                        </div>

                    </div>
                </div>
                <div class="side">
                    <img src="{{ $data->game_cover_image }}" alt="">
                    <div class="info">
                        <div class="description">
                            <p>{{ $data->game_description }}</p>
                        </div>
                        <div class="reviews">
                            <p><span class="gray-text">All Reviews:</span><span class="blue-text">Very
                                    Positive</span> <span class="gray-text">({{ count($reviews) }})</span></p>
                        </div>
                        <div class="release-date">
                            <p><span class="gray-text">Release Date:</span><span
                                    class="date">{{ $data->game_release_date }}</span> </p>
                        </div>
                        <div class="developers">
                            <p><span class="gray-text">Developers:</span>
                                <span class="blue-text">
                                    @foreach ($data->developers as $developer)
                                        <a href="{{ $developer->developer_website }}"
                                            target="_blank">{{ $developer->developer_name }}</a>
                                    @endforeach
                                </span>
                            </p>
                        </div>
                        <div class="publishers">
                            <p><span class="gray-text">Publishers:</span>
                                <span class="blue-text">
                                    @foreach ($data->publishers as $publisher)
                                        <a href="{{ $publisher->publisher_website }}"
                                            target="_blank">{{ $publisher->publisher_name }}</a>
                                    @endforeach
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buy-section">
                <div class="offer">
                    <h2>
                        @if ($data->game_price == 0)
                            Get {{ $data->game_title }} for Free!
                        @else
                            Buy {{ $data->game_title }}
                        @endif
                        <span class="logo">
                            @if ($data->game_windows_support)
                                <i class="fab fa-windows"></i>
                            @endif
                            @if ($data->game_linux_support)
                                <i class="fab fa-linux"></i>
                            @endif
                            @if ($data->game_mac_support)
                                <i class="fab fa-apple"></i>
                            @endif
                        </span>
                    </h2>
                    <p>Get {{ $data->game_title }} Today for
                        {{ $data->game_price ? '$' . $data->game_price : 'Free' }}.
                        Sieze the chance.</p>
                    <div class="button-container">

                        @if (Auth::user()->user_type == 'admin')
                            <p class="price">{{ $data->game_price ? '$' . $data->game_price : 'Free' }}</p>
                            <a class="get-button" href="/edit-game/id={{ $data->game_id }}">Edit Details</a>
                            <a class="get-button delete" href="/delete-game/id={{ $data->game_id }}">Delete Game</a>
                        @else
                            @php
                                $cart = DB::select('SELECT cart.game_id FROM cart WHERE cart.username = ? AND cart.game_id = ?', [Auth::user()->username, $data->game_id]);
                                $own = DB::select('SELECT owns.game_id FROM owns WHERE owns.username = ? AND owns.game_id = ?', [Auth::user()->username, $data->game_id]);
                            @endphp
                            @if (count($cart) > 0)
                                <a class="get-button" href="/cart/">Game In Cart</a>

                            @elseif (count($own) > 0)
                                <a class="get-button" href="">Owned</a>
                                <button class="get-button review-button">Add a review</button>
                            @else
                                @if ($data->game_price == 0)
                                    <p class="price">Free</p>
                                    <a class="get-button" href="/add-to-cart/id={{ $data->game_id }}">Get
                                        Now</a>
                                @else
                                    <p class="price">${{ $data->game_price }}</p>
                                    <a class="get-button" href="/add-to-cart/id={{ $data->game_id }}">Buy
                                        Now</a>
                                @endif
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Review Section --}}
    <section class="section review-section">
        <div class="container">
            <div class="reviews">
                <p class="heading">Game Reviews</p>
                @foreach ($reviews as $review)
                    <x-user-review :id="$review->review_id" :username="$review->username" :userAvatar="$review->user_avatar"
                        :opinion="$review->opinion ? 'Recommended' : 'Not Recommended'" :message="$review->message"
                        :date="$review->post_date" :likes="$review->likes" :dislikes="$review->dislikes" />
                @endforeach

            </div>
        </div>
    </section>
    {{-- Review Form Section --}}
    <section class="review-form-section hidden">
        <x-review-form :gameTitle="$data->game_title" />
    </section>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {

            $('.review-button').click(function() {
                $('.review-form-section').removeClass('hidden');
            })

            $('.review-form-section button.cancel').click(function() {
                $('.review-form-section').addClass('hidden');
            })
            // Thumbnails controller
            let main_video = document.querySelector('.main-video');
            let main_img = document.querySelector('.main-img');
            let main_content = $('.main-content');
            let thumbnails = $('.thumbnails')[0];
            thumbnails.addEventListener('click', function(e) {
                let target = e.target;
                let src = target.src
                if (target.tagName === 'IMG') {
                    main_content.fadeOut(100, () => {
                        main_video.pause();
                        main_img.src = src;
                        main_img.classList.remove('hidden');
                        main_video.classList.add('hidden');
                    }).fadeIn(100);

                } else {
                    main_content.fadeOut(200, () => {
                        main_img.classList.add('hidden');
                        main_video.classList.remove('hidden');
                        main_video.children[0].src = src;
                        main_video.currentTime = 0;
                        main_video.play();
                    });
                    main_content.fadeIn(200);
                }
            });

            // Likes/Dislikes controller
            let likeButton = $('.reaction-button');
            likeButton.click(function() {
                if (!$(this).hasClass('clicked')) {
                    likeButton.removeClass('clicked');
                    $(this).addClass('clicked');
                    let url = $(this).attr('src');
                    console.log(url);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: url,
                        type: 'POST',
                        complete: async function(response) {
                            response = await response.responseText;
                            response = await JSON.parse(response);
                            console.log(response);
                            // Change span.like-count text
                            $('.likes .like-count').html(response.totalLikes);
                            // Change span.dislike-count text
                            $('.dislikes .dislike-count').html(response.totalDislikes);
                        },
                        error: function() {
                            console.log('error');
                        }
                    });
                }
            });
        })
    </script>
@endsection
