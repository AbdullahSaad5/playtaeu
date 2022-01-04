@extends('layouts.base')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/chooseCard.css') }}">
@endsection
@section('content')
    <section class="choose-card section">

        <div class="choose-payment-card">
            @foreach ($data as $card)
                @php
                    $ending_number = substr($card->card_number, -4);
                    $expire_month = substr($card->expiration_date, -2);
                    $expire_year = substr($card->expiration_date, 0, 4);
                @endphp
                <x-card-info :cardID="$card->card_id" :cardType='$card->payment_method'
                    :ownerName="$card->first_name . ' ' . $card->last_name" :endingNumber="$ending_number"
                    :expireMonth="$expire_month" :expireYear="$expire_year  " />
            @endforeach

            <div class="card">
                <h2>
                    Add New Card
                </h2>
                <div class="button-container">
                    <a class="get-button" href="/addPaymentCard">Add a card</a>
                </div>
            </div>
        </div>
    </section>
@endsection
