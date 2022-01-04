<div class="cart-item">
    <div class="group1">
        <div class="cart-image">
            <img src="{{ $itemImage }}" alt="">
        </div>
        <div class="item-name">
            <p>{{ $itemTitle }}</p>
        </div>
    </div>
    <div class="group2">
        <div class="supported-os">
            <p>
                @if ($windowsSupport)
                    <i class="fab fa-windows"></i>
                @endif
                @if ($macSupport)
                    <i class="fab fa-apple"></i>
                @endif
                @if ($linuxSupport)
                    <i class="fab fa-linux"></i>
                @endif

            </p>
        </div>
        <div class="actions">
            <div class="item-price">
                @if ($itemPrice)
                    <p>${{ $itemPrice }}</p>
                @else
                    <p>Free</p>
                @endif
            </div>
            <div class="remove-button">
                <a href="/cart/remove/id={{ $gameID }}">Remove</a>
            </div>
        </div>
    </div>
</div>
