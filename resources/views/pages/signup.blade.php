@extends('layouts.base')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
@endsection


@section('content')
    <section class="login">
        <div class="container">
            <h3 class="heading">Create Your Account</h3>
            @if (session('error'))
                <p class="error">
                    {{ session()->get('error') }}
                </p>
            @endif
            <form action="/signup" method="POST">
                @csrf
                <div class="form-section">
                    <label for="username">Playtaeu Account Name</label>
                    <input type="text" name="username" id="username" placeholder="Username" required autocomplete>
                </div>
                <div class="form-section">
                    <label for="confirm">Confirm Account Name</label>
                    <input type="text" name="confirm" id="confirm" placeholder="Confirm Username" required autocomplete>
                </div>
                <div class="form-section">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>

                <div class="form-section submit">
                    <input type="submit" value="Sign Up">
                </div>
            </form>

        </div>
    </section>
@endsection
