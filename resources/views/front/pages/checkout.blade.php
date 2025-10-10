@extends('front.layout.master', ['title' => "Checkout"])
@section('content')
    <x-front.breadcrumb title="Checkout" />
    <section class="checkout-wrapper section">
        <div class="container">
            <form action="{{ route('front.checkout.store', ['cart' => $cart]) }}" method="post">
                @csrf
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-steps-form-style-1">
                        <ul id="accordionExample">
                            <li>
                                <h6 class="title" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseThree">Your Personal Details </h6>
                                <section class="checkout-steps-form-content collapse show" id="collapseThree"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>User Name</label>
                                                    <div class="form-input form">
                                                        <input type="text" name="name" value="{{ $user->name ?? "" }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>Email Address</label>
                                                    <div class="form-input form">
                                                        <input type="text" name="email" value="{{ $user->email ?? "" }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>Phone Number</label>
                                                    <div class="form-input form">
                                                        <input type="text" name="phone" value="{{ $user->phone ?? "" }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>Country Code</label>
                                                    <div class="form-input form">
                                                        <input type="text" name="country_code"
                                                            value="{{ $user->country_code ?? "" }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>Address</label>
                                                    <div class="form-input form">
                                                        <input type="text" name="address"
                                                            value="{{ $user->address ?? "" }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar">
                        <div class="checkout-sidebar-coupon">
                            <p>Appy Coupon to get discount!</p>
                            <form action="#">
                                <div class="single-form form-default">
                                    <div class="form-input form">
                                        <input type="text" placeholder="Coupon Code">
                                    </div>
                                    <div class="button">
                                        <button class="btn">apply</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="checkout-sidebar-price-table mt-30">
                            <h5 class="title">Pricing Table</h5>
                            <div class="sub-total-price">
                                <div class="total-price">
                                    <p class="value">Subotal Price:</p>
                                    <p class="price">${{$cart->total()}}</p>
                                </div>
                                <div class="total-price shipping">
                                    <p class="value">Shipping Price:</p>
                                    <p class="price">$10.50</p>
                                </div>
                                <div class="total-price discount">
                                    <p class="value">Saved:</p>
                                    <p class="price">${{ $cart->saved() }}</p>
                                </div>
                            </div>
                            <div class="total-payable">
                                <div class="payable-price">
                                    <p class="value">Subotal Price:</p>
                                    <p class="price">${{$cart->total() + 10.50 - $cart->saved()}}</p>
                                </div>
                            </div>
                            <div class="price-table-btn button">
                                <button type="submit" class="btn btn-alt">Checkout</button>
                            </div>
                        </div>
                        <div class="checkout-sidebar-banner mt-30">
                            <a href="product-grids.html">
                                <img src="{{ asset('front/assets/images/banner/banner.jpg') }}" alt="#">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </section>
@endsection
