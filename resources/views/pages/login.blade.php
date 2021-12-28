@extends('layouts.base')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection


@section('content')
    <section class="login">
        <div class="container">
            <h3 class="heading">Sign In</h3>
            <form action="/login" method="POST">
                <div class="form-section">
                    <label for="username">Playtaeu Account Name</label>
                    <input type="text" name="username" id="username" placeholder="Username" required autocomplete>
                </div>
                <div class="form-section">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>

                <div class="form-section submit">
                    <input type="submit" value="Sign In">
                </div>
            </form>
            <a class="signup">Join Playtaeu</a>
        </div>
    </section>
@endsection
