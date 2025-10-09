@php
    $cart = app(App\Repositories\Cart\CartRepository::class);
    $cartItems = $cart->get();
@endphp
<div>
    <div class="cart-items">
        <a href="javascript:void(0)" class="main-btn">
            <i class="lni lni-cart"></i>
            <span class="total-items">{{ count($cartItems) }}</span>
        </a>
        <!-- Shopping Item -->
        <div class="shopping-item">
            <div class="dropdown-cart-header">
                <span>{{ count($cartItems) }} Items</span>
                <a href="{{ route('front.cart.index') }}">View Cart</a>
            </div>
            <ul class="shopping-list">
                @foreach ($cartItems as $id => $item)
                    <li>
                        <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                                class="lni lni-close"></i></a>
                        <div class="cart-img-head">
                            <a class="cart-img" href="{{ route('front.products.show', $item->id) }}"><img
                                    src="{{ asset(json_decode($item->product->images)[0]) }}" alt="#" /></a>
                        </div>
                        <div class="content">
                            <h4>
                                <a href="{{ route('front.products.show', $item->id) }}">
                                    {{ $item->product->name }}</a>
                            </h4>
                            <p class="quantity">
                                {{ $item->quantity }}x - <span class="amount">${{ $item->product->price }}</span>
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
                    <a href="{{route('front.checkout.index')}}" class="btn animate">Checkout</a>
                </div>
            </div>
        </div>
        <!--/ End Shopping Item -->
    </div>
</div>
