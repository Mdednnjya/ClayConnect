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
                    <li class="breadcrumb-item active" aria-current="page" style="color: black;">View</li>
                </ol>

                </nav>
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                      <div class="col-md-4 product-image">
                        <div class="card align-self-end mb-3" style="background-color: #fff5eb;">
                          <div class="d-flex justify-content-center">
                            <a class="" href="#">
                              <img src="{{ URL('images/product_catalog/product 1.svg') }}" alt="Logo" class="d-lg-inline-block" style="margin: 130px; width: 275px; height: 456px" />
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 py-5 product-details">
                        <div class="card align-self-start mb-3 mx-3" style="background-color: #fffcf9; padding: 20px;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h1 style="font-family: 'Scheherazade New'"><b>Vas Bunga Corak</b></h1>
                                    <p class="stock mb-0" style="font-family: 'Crimson Text'; font-size: 20px">Stock: Ready</p>
                                </div>

                                <p class="price mb-5" style="font-family: 'Crimson Text'; font-size: 18px">Rp. 40.000,00</p>

                                <span class="me-3 mb-3 mt-5" style="font-family: 'Scheherazade New'; font-size: 28px"><b>Quantity</b></span>
                                <div class="input-group d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex">
                                        <button class="btn btn-outline-secondary" type="button" id="minus" style="width: 40px; border-bottom-right-radius: 0px; border-top-right-radius: 0px">-</button>
                                        <input type="text" class="form-control text-center" id="quantity-input" value="1" style="width: 40px; border-radius: 0px">
                                        <button class="btn btn-outline-secondary" type="button" id="plus" style="width: 40px; border-bottom-left-radius: 0px; border-top-left-radius: 0px">+</button>
                                    </div>
                                    <button class="btn ms-3 flex-grow-1" style="font-family: 'Scheherazade New'; font-size: 20px;border: 2px solid black; border-radius: 5px">Add To Cart</button>
                                </div>

                                <a class="btn btn-dark mb-3" href="{{ route('shoppingCart') }}" style="font-family: 'Scheherazade New'; font-size: 20px">Buy Now</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>
</body>
@include('partials.footer_main')

@endsection
