@extends('layouts.base')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/gamepage.css') }}">

@endsection


@section('content')
    <section class="section gamepage">
        <div class="main">
            <h1>F1® 2021</h1>
            <div class="display-section">
                <div class="showcase">
                    <video autoplay loop muted controls>
                        <source src="https://cdn.akamai.steamstatic.com/steam/apps/256851324/movie480_vp9.webm?t=1631530629"
                            type="">
                    </video>
                    <div class="thumbnails">
                        <div class="image-container">
                            <img src="https://cdn.akamai.steamstatic.com/steam/apps/1134570/ss_1e96e891f5bba7cab6c8321af3936b0d42ddbd41.600x338.jpg?t=1636296403"
                                alt="">
                        </div>
                        <div class="image-container">
                            <img src="https://cdn.akamai.steamstatic.com/steam/apps/1134570/ss_e548290d5d6b92171b1c0467613982badec1ff4e.600x338.jpg?t=1636296403"
                                alt="">
                        </div>
                        <div class="image-container">
                            <img src="https://cdn.akamai.steamstatic.com/steam/apps/1134570/ss_817126d9ac6b610396eebfaf241db6c620bc245e.600x338.jpg?t=1636296403"
                                alt="">
                        </div>
                        <div class="image-container">
                            <img src="https://cdn.akamai.steamstatic.com/steam/apps/1134570/ss_06ec0d462384aeede236e97e15e35eff1e1fd1d0.600x338.jpg?t=1636296403"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="side">
                    <img src="https://cdn.akamai.steamstatic.com/steam/apps/1134570/header.jpg?t=1636296403" alt="">
                    <div class="info">
                        <div class="description">
                            <p>Every story has a beginning in F1® 2021, the official videogame of the 2021 FIA FORMULA ONE
                                WORLD CHAMPIONSHIP™. Enjoy the stunning new features of F1® 2021, including the thrilling
                                story experience ‘Braking Point’, two-player Career, and get even closer to the grid with
                                ‘Real-Season Start’.
                            </p>
                        </div>
                        <div class="reviews">
                            <p><span class="gray-text">All Reviews:</span><span class="blue-text">Very
                                    Positive</span> </p>
                        </div>
                        <div class="release-date">
                            <p><span class="gray-text">Release Date:</span><span class="date">12th Jun,
                                    2019</span> </p>
                        </div>
                        <div class="developers">
                            <p><span class="gray-text">Developers:</span><span class="blue-text"><a
                                        href="">Codemasters</a> </span> </p>
                        </div>
                        <div class="publishers">
                            <p><span class="gray-text">Publishers:</span><span class="blue-text"><a href="">
                                        Electoric Arts</a></span> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buy-section">
                <div class="offer">
                    <h2>Buy F1 2021 <span class="logo"><i class="fab fa-windows"></i><i
                                class="fab fa-linux"></i></span></h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores architecto recusandae corporis vel
                        iusto necessitatibus delectus aspernatur odit quam nesciunt?</p>
                    <div class="button-container">
                        <p class="price">$23.99</p>
                        <button class="get-button">Get Now</button>
                    </div>
                </div>
                <div class="offer">
                    <h2>Buy F1 2021 <span class="logo"><i class="fab fa-windows"></i><i
                                class="fab fa-linux"></i></span></h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores architecto recusandae corporis vel
                        iusto necessitatibus delectus aspernatur odit quam nesciunt?</p>
                    <div class="button-container">
                        <p class="price">$23.99</p>
                        <button class="get-button">Get Now</button>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
