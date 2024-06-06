@extends('layouts.master')

@section('content')

@include('partials.header_main')

<body>
    <section class="section-main">
        <div class="container-fluid overflow-hidden">
            <nav class="col-lg-12 mt-3 mb-4 ms-4" aria-label="breadcrumb">
                <ol class="ms-5 breadcrumb" style="font-family: 'Crimson Text'; font-size: 18px">
                    <li class="breadcrumb-item"><a href="/" style="text-decoration: none; color: black;">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('cart.view') }}" style="text-decoration: none; color: black;">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: black;">Shopping Cart</li>
                </ol>
            </nav>
            <div class="col-lg-12">
                <div class="row">
                    @if($cart && $cart->cartItems->count() > 0)
                        @foreach($cart->cartItems as $cartItem)
                            <div class="col-md-4 product-image">
                                <div class="card align-self-end mb-3" style="background-color: #fff5eb;">
                                    <div class="d-flex justify-content-center">
                                        <a class="" href="#">
                                            <img src="{{ URL('images/product_catalog/'.$cartItem->product->image) }}" alt="Logo" class="d-lg-inline-block" style="margin: 130px; width: 275px; height: 456px" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-5 product-details">
                                <div class="card align-self-start mb-3 mx-3" style="background-color: #fffcf9; padding: 20px;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h1 style="font-family: 'Scheherazade New'"><b>{{ $cartItem->product->name }}</b></h1>
                                        <p class="stock mb-0" style="font-family: 'Crimson Text'; font-size: 20px">Stock: Ready</p>
                                    </div>

                                    <p class="price mb-5" style="font-family: 'Crimson Text'; font-size: 18px">Rp. {{ number_format($cartItem->product->price, 2) }}</p>

                                    <span class="me-3 mb-3 mt-5" style="font-family: 'Scheherazade New'; font-size: 28px"><b>Quantity</b></span>
                                    <div class="input-group" style="width: 120px;">
                                        <button class="btn btn-outline-secondary" type="button" id="minus">-</button>
                                        <input type="text" class="form-control text-center" id="quantity-input" value="{{ $cartItem->quantity }}">
                                        <button class="btn btn-outline-secondary" type="button" id="plus">+</button>
                                    </div>
                                    <div class="mb-2">
                                        <hr style="border-top: 2px solid black; margin-bottom: 20px;">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text" style="font-family: 'Crimson Text'; font-size: 18px">Details</span>
                                            <a class="arrow" href="#">&rsaquo;</a>
                                        </div>
                                        <hr style="border-top: 2px solid black; margin-bottom: 20px;">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text" style="font-family: 'Crimson Text'; font-size: 18px">Materials</span>
                                            <a class="arrow" href="#">&rsaquo;</a>
                                        </div>
                                        <hr style="border-top: 2px solid black; margin-bottom: 20px;">
                                    </div>
                                    <div class="reviews">
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9734;</span>
                                    </div>
                                    <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST" class="mt-3">
                                        @csrf
                                        @method('DELETE')
                                        <input type="number" name="quantity" value="1" min="1" max="{{ $cartItem->quantity }}" class="form-control mb-2">
                                        <button type="submit" class="btn btn-danger">Remove from Cart</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center align-items-center product-payment">
                                <div class="card mb-4 shadow" style="padding: 30px">
                                    <div class="order-summary">
                                        <h2 class="card-title d-flex justify-content-center mb-5" style="font-family: 'Crimson Text'; font-size: 30px"><b>Order Summary (1) Item(s)</b></h2>
                                        <div class="row mb-4">
                                            <div class="col-6" style="font-family: 'Crimson Text'; font-size: 17px">
                                                <p class="card-text mb-4">Item(s) Subtotal</p>
                                                <p class="card-text mb-5">Taxes and Fees</p>
                                                <p class="card-text">Subtotal</p>
                                            </div>
                                            <div class="col-6 text-end" style="font-family: 'Crimson Text'; font-size: 17px">
                                                <p class="card-text mb-4">Rp. {{ number_format($cartItem->product->price * $cartItem->quantity, 2) }}</p>
                                                <p class="card-text mb-5">Rp. 4.000,00</p>
                                                <p class="card-text">Rp. {{ number_format(($cartItem->product->price * $cartItem->quantity) + 4000, 2) }}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                        <a class="btn btn-dark" href="{{ route('payment.show') }}" style="font-family: 'Scheherazade New'; font-size: 20px; width: 85%">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-12 text-center">
                            <h3>No items in the cart</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</body>

@include('partials.footer_main')

@endsection
