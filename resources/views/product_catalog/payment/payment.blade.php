@extends('layouts.master')

@section('content')

@include('partials.header_main')

<body>
    <section class="section-main">
        <div class="container-fluid overflow-hidden">
            <nav class="col-lg-12 mt-3 mb-4 ms-4" aria-label="breadcrumb">
                <ol class="ms-5 breadcrumb" style="font-family: 'Crimson Text'; font-size: 18px">
                    <li class="breadcrumb-item"><a href="/" style="text-decoration: none; color: black;">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product') }}" style="text-decoration: none; color: black;">Product</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('shoppingCart') }}" style="text-decoration: none; color: black;">Shopping Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: black;">Payment</li>
                </ol>
            </nav>
            <div class="row my-5 d-flex justify-content-around align-items-center">
                <div class="col-md-7 payment-item">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-md-10 mb-5">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-around">
                                        <div class="col-md-3 d-flex justify-content-center align-items-center" style="border-radius: 15px; background-color: #fff5eb">
                                            <img src="{{ URL('images/product_catalog/product 1.svg') }}" class="img-fluid my-5" alt="Vas Bunga Mini 1" width="100px" height="120px">
                                        </div>
                                        <div class="col-md-7">
                                            <p class="mt-2" style="font-family: 'Scheherazade New'; font-size: 28px"><b>Vas Bunga Mini</b></p>
                                            <p style="font-family: 'Crimson Text'; font-size: 20px">Rp. 40.000,00</p>
                                            <p style="font-family: 'Scheherazade New'; font-size: 26px"><b>Quantity (1)</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-around">
                                        <div class="col-md-3 d-flex justify-content-center align-items-center" style="border-radius: 15px; background-color: #fff5eb">
                                            <img src="{{ URL('images/product_catalog/product 2.svg') }}" class="img-fluid my-5" alt="Vas Bunga Mini 2" width="111px" height="128px">
                                        </div>
                                        <div class="col-md-7">
                                            <p class="mt-2" style="font-family: 'Scheherazade New'; font-size: 28px"><b>Vas Bunga Mini</b></p>
                                            <p style="font-family: 'Crimson Text'; font-size: 20px">Rp.50.000,00</p>
                                            <p style="font-family: 'Scheherazade New'; font-size: 26px"><b>Quantity (1)</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                </div>
                <div class="col-md-4 payment-method">
                    <div class="card shadow">
                        <div class="card-body m-5">
                            <h5 class="mb-3 d-flex justify-content-center align-items-center" style="font-family: 'Scheherazade New'; font-size: 20px">
                                <b>Payment</b>
                            </h5>
                            <div class="form-check d-flex justify-content-between align-items-center">
                                <div>
                                    <input class="form-check-input" type="radio" name="payment" id="credit-debit" value="credit-debit">
                                    <label class="form-check-label" for="credit-debit" style="font-family: 'Crimson Text'; font-size: 17px">Credit/Debit Card</label>
                                </div>
                                
                                <div class="d-flex justify-content-between">
                                    <div class="card" style="padding: 15px">
                                        <img src="{{ URL('images/payment_brand/Mastercard.svg') }}" alt="mastercard">
                                    </div>
                                    <div class="card" style="padding: 15px">
                                        <img src="{{ URL('images/payment_brand/Visa.svg') }}" alt="visa">
                                    </div>
                                </div>
                            </div>
                            <div style="border-top: 1px solid black; width: 100%;"></div>
                            <div class="form-check d-flex justify-content-between align-items-center">
                                <div >
                                    <input class="form-check-input" type="radio" name="payment" id="bank-transfer" value="bank-transfer">
                                    <label class="form-check-label" for="bank-transfer" style="font-family: 'Crimson Text'; font-size: 17px">Bank Transfer</label>
                                </div>
                                <div class="card" style="padding: 14px">
                                    <img src="{{ URL('images/payment_brand/credit card.svg') }}" alt="credit_card">
                                </div>
                            </div>
                            <div style="border-top: 1px solid black; width: 100%;"></div>

                            <div class="form-check d-flex justify-content-between align-items-center">
                                <div>
                                    <input class="form-check-input" type="radio" name="payment" id="qris" value="qris">
                                    <label class="form-check-label" for="qris" style="font-family: 'Crimson Text'; font-size: 17px">Qris</label>
                                </div>
                                <div class="card" style="padding: 14px">
                                    <img src="{{ URL('images/payment_brand/Qris.svg') }}" alt="qris">
                                </div>
                            </div>
                            <div style="border-top: 1px solid black; width: 100%; margin-top: 3px"></div>

                            <div class="form-check d-flex justify-content-between align-items-center">
                                <div>
                                    <input class="form-check-input" type="radio" name="payment" id="cash" value="cash">
                                    <label class="form-check-label" for="cash" style="font-family: 'Crimson Text'; font-size: 17px">Cash</label>
                                </div>
                                <div class="card" style="padding: 10px">
                                    <img src="{{ URL('images/payment_brand/Cash.svg') }}" alt="cash">
                                </div>
                            </div>
                            <div style="border-top: 1px solid black; width: 100%;"></div>
                            
                            <div class="mx-auto" style="margin-top: 70px; width: 80%">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <p class="card-text mb-2" style="font-family: 'Scheherazade New'; font-size: 22px"><b>Subtotal (2)</b></p>
                                        <p class="card-text" style="font-family: 'Crimson Text'; font-size: 19px">Taxes and Fees</p>
                                    </div>
                                    <div class="col-6 text-end" style="font-family: 'Crimson Text'; font-size: 19px; margin-top: 6px">
                                        <p class="card-text mb-2">Rp. 99.000,00</p>
                                        <p class="card-text">Rp. 9.000,00</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark" href="{{ route('paymentSuccess') }}" style="font-family: 'Scheherazade New'; font-size: 20px; width: 85%">Payment Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

@include('partials.footer_main')

@endsection