<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Playtaeu</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    @yield('links')
</head>

<body>
    <div class="loading show">
        <img src="{{ asset('images/loading.svg') }}" alt="">
    </div>
    <x-navbar />
    <x-mobile-nav />
    <section class="main-section">
        @yield('content')
    </section>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('scripts')
    <script>
        $(window).on('load', function() {
            setTimeout(function() {
                $('.loading').removeClass('show');

            }, 250);
        })
        $(document).ready(function() {
            $('.hamburger').click(function() {
                $('.mobile-nav').toggleClass('show');
                $('.hamburger i').fadeOut(200, function() {
                    $(this).toggleClass('fa-bars').toggleClass('fa-times')
                }).fadeIn(200);
            })

            setTimeout(function() {
                $('.error').fadeOut('slow');
            }, 5000);
            setTimeout(function() {
                $('.success').fadeOut('slow');
            }, 5000);
        })
    </script>
</body>

</html>
