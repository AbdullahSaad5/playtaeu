@extends('layouts.base')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

@endsection


@section('content')
    <section class="section profile">
        <div class="container">
            <div class="header">
                <img src="{{ Auth()->user()->user_avatar }}" alt="">
                <p>
                    {{ Auth::user()->username }}
                </p>
            </div>
            <div class="settings-container">
                <div class="navigation">
                    <ul>
                        <li class="active">
                            General
                        </li>
                        <li>
                            Avatar
                        </li>
                        <li>
                            Security
                        </li>
                        <li>
                            Account
                        </li>
                    </ul>
                </div>

                <div class="form-container">
                    @if (session('error'))
                        <p class="error">
                            {{ session()->get('error') }}
                        </p>
                    @endif

                    @if (session('success'))
                        <p class="success">
                            {{ session()->get('success') }}
                        </p>
                    @endif
                    <x-profile-form />
                </div>
            </div>
        </div>
    </section>
@endsection




@section('scripts')

    <script>
        $(document).ready(function() {
            $('.navigation ul li').click(function() {
                $('.navigation ul li').removeClass('active');
                $(this).addClass('active');
                let index = $(this).index();
                $('.form-container').empty();
                if (index == 0) {
                    $('.form-container').append(`
                        <x-profile-form />
                    `);
                } else if (index == 1) {
                    $('.form-container').append(`
                        <x-avatar-form />
                    `);
                } else if (index == 2) {
                    $('.form-container').append(`
                        <x-password-form />
                    `);
                } else if (index == 3) {
                    $('.form-container').append(`
                        <x-account-deletion />
                    `);
                }
            });


        });
    </script>
@endsection
