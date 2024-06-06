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
                                <!-- Color filter -->
                                <form action="{{ route('products.index') }}" method="GET">
                                    <div class="d-flex justify-content-center justify-content-between mb-4">
                                        <button type="submit" name="color" value="EBEEEB" class="btn" style="background-color: #EBEEEB; width: 30px; height: 30px; border-radius: 0; border-color: black"></button>
                                        <button type="submit" name="color" value="E4996D" class="btn" style="background-color: #E4996D; width: 30px; height: 30px; border-radius: 0; border-color: black"></button>
                                        <button type="submit" name="color" value="6392BC" class="btn" style="background-color: #6392BC; width: 30px; height: 30px; border-radius: 0; border-color: black"></button>
                                        <button type="submit" name="color" value="666B6F" class="btn" style="background-color: #666B6F; width: 30px; height: 30px; border-radius: 0; border-color: black"></button>
                                        <button type="submit" name="color" value="9B7354" class="btn" style="background-color: #9B7354; width: 30px; height: 30px; border-radius: 0; border-color: black"></button>
                                    </div>
                                </form>
                                <hr style="border-top: 2px solid black; margin-bottom: 20px;">
                                <!-- Price range filter -->
                                <h6 class="card-subtitle mb-3 text-body-secondary" style="font-family: 'Crimson Text'; font-size: 18px"><b>Price Range</b></h6>
                                <form action="{{ route('products.index') }}" method="GET">
                                    <div class="row align-items-center mb-4">
                                        <div class="col input-group">
                                            <input type="number" name="min_price" class="form-control" placeholder="Min Price" style="font-family: 'Crimson Text'; font-size: 16px; background-color: #f4f2f0; border-radius: 20px; border: 2px solid black">
                                        </div>
                                        <div class="col">
                                            <p style="border-top: 2px solid black; margin-bottom: 0; width: 100%"></p>
                                        </div>
                                        <div class="col input-group">
                                            <input type="number" name="max_price" class="form-control" placeholder="Max Price" style="font-family: 'Crimson Text'; font-size: 16px; background-color: #f4f2f0; border-radius: 20px; border: 2px solid black">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark" style="font-family: 'Scheherazade New';color: white; border-radius: 22px; font-size: 16px;">Apply</button>
                                </form>
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
                            @foreach($products as $product)
                            <div class="col-xxl-4 col-md-6" style="margin-bottom: 30px">
                                <div class="card mx-4 mb-5" style="background-color: #fff5eb;">
                                    <div class="col-lg-12 d-flex justify-content-center align-items-center" style="margin-top: 100px; margin-bottom: 100px">
                                        <a class="navbar-brand d-flex" href="{{ route('products.show', ['id' => $product->id]) }}">
                                            <img src="{{ asset('images/product_catalog/'.$product->image) }}" alt="Logo" width="142" height="162" class="d-lg-inline-block" style="margin-left: 10px" />
                                        </a>
                                    </div>

                                    <div class="col-lg-12" style="background-color: white; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3" style="font-family: Garamond; font-size: 23px"><b>{{ $product->name }}</b></h5>
                                            <p class="card-title mb-3" style="font-family: 'Crimson Text'; font-size: 18px">Rp. {{ number_format($product->price, 2) }}</p>
                                            <p class="card-title mb-3 fw-semibold" style="font-family: 'Crimson Text';">{{ $product->description }}</p>
                                            <p class="small mb-2 text-center pt-xl-2 pt-lg-2">
                                                <a href="{{ route('cart.add', ['id' => $product->id]) }}" class="btn btn-dark text-decoration-none px-5 py-1 bg-black" style="font-family: 'Scheherazade New';color: white; border-radius: 22px; font-size: 16px;"><b>Add To cart</b></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{ $products->links('pagination::bootstrap-4') }}
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
                                    <form action="{{ route('products.index') }}" method="GET">
                                        <div class="d-flex justify-content-center justify-content-between mb-4">
                                            <button type="submit" name="color" value="EBEEEB" class="btn" style="background-color: #EBEEEB; width: 30px; height: 30px; border-radius: 0; border-color: black"></button>
                                            <button type="submit" name="color" value="E4996D" class="btn" style="background-color: #E4996D; width: 30px; height: 30px; border-radius: 0; border-color: black"></button>
                                            <button type="submit" name="color" value="6392BC" class="btn" style="background-color: #6392BC; width: 30px; height: 30px; border-radius: 0; border-color: black"></button>
                                            <button type="submit" name="color" value="666B6F" class="btn" style="background-color: #666B6F; width: 30px; height: 30px; border-radius: 0; border-color: black"></button>
                                            <button type="submit" name="color" value="9B7354" class="btn" style="background-color: #9B7354; width: 30px; height: 30px; border-radius: 0; border-color: black"></button>
                                        </div>
                                    </form>
                                    <hr style="border-top: 2px solid black; margin-bottom: 20px;">
                                    <h6 class="card-subtitle mb-3 text-body-secondary" style="font-family: 'Crimson Text'; font-size: 18px"><b>Price Range</b></h6>
                                    <form action="{{ route('products.index') }}" method="GET">
                                        <div class="row align-items-center mb-4">
                                            <div class="col input-group">
                                                <input type="number" name="min_price" class="form-control" placeholder="Min Price" style="font-family: 'Crimson Text'; font-size: 16px; background-color: #f4f2f0; border-radius: 20px; border: 2px solid black">
                                            </div>
                                            <div class="col">
                                                <p style="border-top: 2px solid black; margin-bottom: 0; width: 100%"></p>
                                            </div>
                                            <div class="col input-group">
                                                <input type="number" name="max_price" class="form-control" placeholder="Max Price" style="font-family: 'Crimson Text'; font-size: 16px; background-color: #f4f2f0; border-radius: 20px; border: 2px solid black">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-dark" style="font-family: 'Scheherazade New';color: white; border-radius: 22px; font-size: 16px;">Apply</button>
                                    </form>
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
