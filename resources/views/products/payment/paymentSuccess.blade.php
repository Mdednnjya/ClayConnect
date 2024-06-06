@extends('layouts.master')

@section('content')

@include('partials.header_main')

<body>
    <section class="section-main">
        <div class="container-fluid overflow-hidden">
            <nav class="col-lg-12 mt-3 mb-4 ms-4" aria-label="breadcrumb">
                <ol class="ms-5 breadcrumb" style="font-family: 'Crimson Text'; font-size: 18px">
                    <li class="breadcrumb-item"><a href="/" style="text-decoration: none; color: black;">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}" style="text-decoration: none; color: black;">Product</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('cart.view') }}" style="text-decoration: none; color: black;">Shopping Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: black;">Payment</li>
                </ol>
            </nav>

            <div class="d-flex flex-column align-items-center">
                <div class="success-icon mb-4">
                    <div class="outer-circle">
                        <div class="inner-circle">
                            <span class="checkmark"></span>
                        </div>
                    </div>
                </div>
                <p style="font-family: Garamond; font-size: 20px"><b>Payment Successful!</b></p>
                
                <div class="col-md-6">
                    <div class="card mt-4 shadow">
                        <div class="card-body">
                            @foreach($order->orderItems as $orderItem)
                            <div class="d-flex align-items-center mb-3">
                                <div class="card" style="padding: 20px; background-color: #af8f6f">
                                <img src="{{ asset('images/product_catalog/'.$orderItem->product->image) }}" alt="{{ $orderItem->product->name }}" style="width: 70px;">
                                </div>
                                <span class="ml-4" style="font-family: 'Scheherazade New'; font-size: 18px"><b>{{ $orderItem->product->name }}</b></span>
                                <span class="ms-auto" style="font-family: 'Crimson Text'; font-size: 17px"><b>Rp. {{ $orderItem->product->price }}</b></span>
                            </div>
                            <hr>
                            @endforeach
                            <div class="mb-3 d-flex justify-content-between" style="font-family: 'Crimson Text'; font-size: 17px">
                                <span>Transaction Date</span>
                                <span>{{ $order->created_at->format('l, d F Y') }}</span>
                            </div>
                            <div class="mb-3 d-flex justify-content-between" style="font-family: 'Crimson Text'; font-size: 17px">
                                <span>Payment Method</span>
                                <span>{{ $order->payment_method }}</span>
                            </div>
                            <div class="mb-5 d-flex justify-content-between" style="font-family: 'Crimson Text'; font-size: 17px">
                                <span>Tax and Fees</span>
                                <span>Rp. {{ $order->tax }}</span> <!-- Pastikan variabel tax telah ada pada model Order -->
                            </div>
                            <div class="d-flex justify-content-between" style="font-family: 'Crimson Text'; font-size: 17px">
                                <span><strong>Total</strong></span>
                                <span><strong>Rp. {{ $order->total_price }}</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-dark mt-4" href="{{ route('products.index') }}" style="font-family: 'Scheherazade New'; font-size: 20px; border-radius: 22px"><b>Continue Shopping</b></a>
            </div>
        </div>
    </section>
</body>

@include('partials.footer_main')

@endsection
