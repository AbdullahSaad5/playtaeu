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
                    <x-cart-item :gameID="$item->game_id" :itemImage="$item->game_cover_image" :itemTitle="$item->game_title" :windowsSupport="$item->game_windows_support" :macSupport="$item->game_mac_support"
                        :linuxSupport="$item->game_linux_support" :itemPrice="$item->game_price" />
                @endforeach

            </div>
            <div class="order-summary">
                <p class="total-price"><span>Estimated Total:</span><span>${{ $total }}</span></p>
                <p class="note">Payment Info will be asked on the next page.</p>
                </p>
                <div class="button-container">
                    @if ($total > 0)
                        <a href="/choose-card">Purchase</a>
                    @else
                        <a href="/checkout">Purchase</a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection




@section('scripts')
@endsection
