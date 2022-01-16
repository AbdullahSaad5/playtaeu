@extends('layouts.base')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection

@section('content')
    <section class="section homepage">
        <div class="highlights">
            @foreach ($data as $obj)
                <x-game-thumbnail :gameID="$obj->game_id" :image="$obj->game_thumbnail_image"
                    :video="$obj->game_thumbnail_video" :title="$obj->game_title" :price="$obj->game_price"
                    :developer="$obj->developers" :publisher="$obj->publishers"
                    :reviewCount="$obj->rating.'% ('.$obj->reviewCount .' reviews)'" />

            @endforeach
        </div>
    </section>
@endsection
