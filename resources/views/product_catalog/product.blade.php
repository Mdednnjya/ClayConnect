@extends('layouts.master')

@section('content')

@include('partials.header_main')
<body>
    <section class="section-main">
        <div class="container-fluid overflow-hidden">
            <nav class="col-lg-12 mt-3 mb-5 ms-4 d-flex justify-content-between" aria-label="breadcrumb">
                <ol class="ms-5 breadcrumb" style="font-family: 'Crimson Text'; font-size: 18px">
                    <li class="breadcrumb-item"><a href="/" style="text-decoration: none; color: black;">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: black;">Product</li>
                </ol>
                <div class="d-lg-none">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Garamond">
                        Filter
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filterDropdown" style="background-color: #f4f2f0">
                        <div class="card" style="background-color: #f4f2f0">
                            <div class="card-body">
                                <h5 class="card-title mb-3" style="font-family: Garamond; font-size: 25px"><b>Showing Item</b></h5>
                                <hr style="border-top: 2px solid black; margin-bottom: 20px;">
                                <h6 class="card-subtitle mb-3 text-body-secondary" style="font-family: 'Crimson Text'; font-size: 18px"><b>Colors</b></h6>
                                <div class="d-flex justify-content-center justify-content-between mb-4">
                                    <a href="#" class="btn" style="background-color: #EBEEEB; width: 30px; height: 30px; border-radius: 0; border-color: black"></a>
                                    <a href="#" class="btn" style="background-color: #E4996D; width: 30px; height: 30px; border-radius: 0; border-color: black"></a>
                                    <a href="#" class="btn" style="background-color: #6392BC; width: 30px; height: 30px; border-radius: 0; border-color: black"></a>
                                    <a href="#" class="btn" style="background-color: #666B6F; width: 30px; height: 30px; border-radius: 0; border-color: black"></a>
                                    <a href="#" class="btn" style="background-color: #9B7354; width: 30px; height: 30px; border-radius: 0; border-color: black"></a>
                                </div>
                                <hr style="border-top: 2px solid black; margin-bottom: 20px;">
                                <h6 class="card-subtitle mb-3 text-body-secondary" style="font-family: 'Crimson Text'; font-size: 18px"><b>Price Range</b></h6>
                                <div class="row align-items-center mb-4">
                                    <div class="col input-group">
                                        <span class="input-group-text text-center" style="font-family: 'Crimson Text'; font-size: 16px; width: 100%; background-color: #f4f2f0; border-radius: 20px; border: 2px solid black">Rp. 0</span>
                                    </div>
                                    <div class="col">
                                        <p style="border-top: 2px solid black; margin-bottom: 0; width: 100%"></p>
                                    </div>
                                    <div class="col input-group">
                                        <span class="input-group-text" style="font-family: 'Crimson Text'; font-size: 16px; width: 100%; background-color: #f4f2f0; border-radius: 20px; border: 2px solid black">Rp. 100.000</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <input type="range" class="form-range" min="0" max="100000" step="5000" id="priceRange" value="0">
                                </div>
                                <hr style="border-top: 2px solid black; margin-bottom: 20px;">
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-9 col-12 d-flex justify-content-between items-list product-list">
                        <div class="col-lg-12 mx-auto" style="width: 90%">
                            <div class="row">
                                @include('partials.product_item')
                                @include('partials.product_item')
                                @include('partials.product_item')
                                @include('partials.product_item')
                                @include('partials.product_item')
                                @include('partials.product_item')
                                @include('partials.product_item')
                                @include('partials.product_item')
                                @include('partials.product_item')
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-3 d-none d-lg-block product-filter">
                        <div class="col-lg-12 mx-auto" style="width: 90%">
                            <div class="card" style="background-color: #f4f2f0">
                                <div class="card-body">
                                    <h5 class="card-title mb-3" style="font-family: Garamond; font-size: 25px"><b>Showing Item</b></h5>
                                    <hr style="border-top: 2px solid black; margin-bottom: 20px;">
                                    <h6 class="card-subtitle mb-3 text-body-secondary" style="font-family: 'Crimson Text'; font-size: 18px"><b>Colors</b></h6>
                                    <div class="d-flex justify-content-center justify-content-between mb-4">
                                        <a href="#" class="btn" style="background-color: #EBEEEB; width: 30px; height: 30px; border-radius: 0; border-color: black"></a>
                                        <a href="#" class="btn" style="background-color: #E4996D; width: 30px; height: 30px; border-radius: 0; border-color: black"></a>
                                        <a href="#" class="btn" style="background-color: #6392BC; width: 30px; height: 30px; border-radius: 0; border-color: black"></a>
                                        <a href="#" class="btn" style="background-color: #666B6F; width: 30px; height: 30px; border-radius: 0; border-color: black"></a>
                                        <a href="#" class="btn" style="background-color: #9B7354; width: 30px; height: 30px; border-radius: 0; border-color: black"></a>
                                    </div>
                                    <hr style="border-top: 2px solid black; margin-bottom: 20px;">
                                    <h6 class="card-subtitle mb-3 text-body-secondary" style="font-family: 'Crimson Text'; font-size: 18px"><b>Price Range</b></h6>
                                    <div class="row align-items-center mb-4">
                                        <div class="col input-group">
                                            <span class="input-group-text text-center" style="font-family: 'Crimson Text'; font-size: 16px; width: 100%; background-color: #f4f2f0; border-radius: 20px; border: 2px solid black">Rp. 0</span>
                                        </div>
                                        <div class="col">
                                            <p style="border-top: 2px solid black; margin-bottom: 0; width: 100%"></p>
                                        </div>
                                        <div class="col input-group">
                                            <span class="input-group-text" style="font-family: 'Crimson Text'; font-size: 16px; width: 100%; background-color: #f4f2f0; border-radius: 20px; border: 2px solid black">Rp. 100.000</span>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <input type="range" class="form-range" min="0" max="100000" step="5000" id="priceRange" value="0">
                                    </div>
                                    <hr style="border-top: 2px solid black; margin-bottom: 20px;">
                                </div>
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
