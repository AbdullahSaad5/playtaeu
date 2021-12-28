@extends('layouts.base')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection

@section('content')
    <section class="section homepage">
        <div class="highlights">
            @for ($i = 0; $i < 3; $i++)
                <x-game-thumbnail image="https://upload.wikimedia.org/wikipedia/en/a/a5/Grand_Theft_Auto_V.png"
                    price="14" />
            @endfor
        </div>
    </section>
@endsection
