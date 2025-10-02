<div>
    <div class="cart-items">
        <a href="javascript:void(0)" class="main-btn">
            <i class="lni lni-cart"></i>
            <span class="total-items">2</span>
        </a>
        <!-- Shopping Item -->
        <div class="shopping-item">
            <div class="dropdown-cart-header">
                <span>2 Items</span>
                <a href="cart.html">View Cart</a>
            </div>
            <ul class="shopping-list">
                @foreach ($cartItems as $item)
                <li>
                    <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                            class="lni lni-close"></i></a>
                    <div class="cart-img-head">
                        <a class="cart-img" href="{{ route('front.product.details', $item->id) }}"><img
                                src="{{ asset('front/assets/images/header/cart-items/item1.jpg') }}" alt="#" /></a>
                    </div>
                    <div class="content">
                        <h4>
                            <a href="{{ route('front.product.details', $item->id) }}">
                                {{ $item->name }}</a>
                        </h4>
                        <p class="quantity">
                            {{ $item->quantity }}x - <span class="amount">${{ $item->price }}</span>
                        </p>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="bottom">
                <div class="total">
                    <span>Total</span>
                    <span class="total-amount">$134.00</span>
                </div>
                <div class="button">
                    <a href="checkout.html" class="btn animate">Checkout</a>
                </div>
            </div>
        </div>
        <!--/ End Shopping Item -->
    </div>
</div>
