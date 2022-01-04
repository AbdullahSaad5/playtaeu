@extends('layouts.base')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/shoppingCart.css') }}">
@endsection


@section('content')

    <section class="section shopping-cart">
        <div class="container">
            <h1>Your Shopping Cart</h1>
            <div class="items-container">
                @foreach ($data as $item)
                    <x-cart-item :gameID="$item->game_id" :itemImage="$item->game_cover_image"
                        :itemTitle="$item->game_title" :windowsSupport="$item->game_windows_support"
                        :macSupport="$item->game_mac_support" :linuxSupport="$item->game_linux_support"
                        :itemPrice="$item->game_price" />
                @endforeach

                {{-- <x-cart-item itemNumber="1"
                    itemImage="https://cdn.akamai.steamstatic.com/steam/apps/359550/capsule_sm_120.jpg?t=1639409141"
                    itemTitle="Tom Clancy's Rainbow Six Siege" supportedOS="HELLO" itemPrice="5.99" /> --}}
            </div>
            <div class="order-summary">
                <p class="total-price"><span>Estimated Total:</span><span>${{ $total }}</span></p>
                <p class="note">Payment Info will be asked on the next page.</p>
                </p>
                <div class="button-container">
                    <a href="/choose-card">Purchase</a>
                </div>
            </div>
        </div>
    </section>
@endsection




@section('scripts')
@endsection
