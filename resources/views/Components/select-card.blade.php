    <div class="card">
        <h2>
            {{ $cardType }}
            <span class="logo">
                <i class="far fa-credit-card"></i>
            </span>
        </h2>
        <p>Owner Name: {{ $ownerName }}</p>
        <p>Card Number: **** **** **** {{ $endingNumber }}</p>
        <p>Expires: {{ $expireMonth }}/{{ $expireYear }}</p>
        <a href="/update-card/id={{ $cardID }}">Update This</a>
        <div class="button-container">
            <a class="get-button">Select This Card</a>
        </div>
    </div>
