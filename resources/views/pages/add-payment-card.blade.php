@extends('layouts.base')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/addPaymentCard.css') }}">
@endsection

@section('content')
    <section class="section add-payment">
        <div class="add-payment-card">
            <h1 class="main-heading">Payment Method</h1>

            <form action="/addPaymentCard/user={{ Auth::user()->username }}" method="POST">
                @csrf
                <div class="card-info">
                    <div class="select-method">
                        <label for="">Please select a payment method</label>
                        <select name="payment_method" id="" required>
                            <option value="MasterCard">MasterCard</option>
                            <option value="Visa">Visa</option>
                            <option value="American Express">American Express</option>
                            <option value="Discover">Discover</option>
                            <option value="JCB">JCB</option>
                        </select>
                    </div>
                    <div class="card-numbers">
                        <div class="card-number">
                            <label for="">Card number</label>
                            <input type="text" name="card-number" required>
                        </div>
                        <div class="security-code">
                            <label for="">Security code</label>
                            <input type="text" name="security-code" required>
                        </div>
                    </div>
                    <div class="expiration-date">
                        <label for="">Expiration date</label>
                        <input type="month" value="2022-01" name="expiration-date" required>
                    </div>

                </div>
                <div class="heading-container">
                    <h1 class="main-heading">Billing Information</h1>
                </div>
                <div class="personal-info">
                    <div class="names">
                        <div class="first-name">
                            <label for="">First name</label>
                            <input type="text" name="first-name" required>
                        </div>
                        <div class="last-name">
                            <label for="">Last name</label>
                            <input type="text" name='last-name' required>
                        </div>
                    </div>
                    <div class="city">
                        <label for="">City</label>
                        <input type="text" name="city" required>
                    </div>
                    <div class="billing-address">
                        <label for="">Billing Address</label>
                        <input type="text" name="billing-address" required>
                    </div>
                    <div class="zipcode">
                        <label for="">Zip or postal code</label>
                        <input type="text" name="zipcode" required>
                    </div>
                    <div class="secondary-billing-address">
                        <label for="">Billing address, line 2</label>
                        <input type="text" name="secondary-billing-address">
                    </div>
                    <div class="country">
                        <label for="">Country</label>
                        <select name="country" id="" required>
                            <option value="Pakistan" selected>Pakistan</option>
                        </select>
                    </div>
                    <div class="phone-number">
                        <label for="">Phone number</label>
                        <input type="text" name="phone-number" required>
                    </div>
                </div>

                <p>You'll have a chance to review your order before it's placed. </p>
                <p><strong>Note:</strong> The card linked with this account cannot be used on other accounts.</p>
                <div class="button-container">
                    <button type="submit" class="submit-button">Continue</button>
            </form>
        </div>
        </div>

    @endsection
