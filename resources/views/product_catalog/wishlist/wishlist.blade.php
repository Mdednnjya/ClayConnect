@extends('layouts.master')


@section('content')
    <header>
        @include('partials.header_main')
    </header>

    <style>
        .breadcrumb {
            font-family: 'Crimson Text', serif;
            font-size: 16px;
        }

        .breadcrumb-item a {
            color: black !important;
        }

        .breadcrumb-item.active {
            color: black !important;
        }

        table.table-bordered thead th {
            background-color: #FFF5EB;
            font-family: Garamond, serif;
            text-align: center;
        }

    </style>

    <body>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" style="text-decoration: none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product') }}" style="text-decoration: none">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                </ol>

                <div class="row" style="font-family: 'Crimson Text'">
                    <div class="col-9">
                        <table class="table table-bordered" style="text-align: center">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" onclick="toggleAll(this)">All</th>
                                    <th>Photo</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <div class="py-3" style="background-color: #FFF5EB; display: flex; align-items: center; justify-content: center; width: auto; height: auto;">
                                        <img src="{{ asset('images/account/product-1.png') }}" alt="Photo Product" style="max-width: 100%; height: auto; display: block;">
                                    </div>
                                </td>
                                <td style="font-family: Garamond; font-weight: bold">Vas Bunga Corak</td>
                                <td>Rp. 40.000,00</td>
                                <td><input type="number" value="1" min="1" class="form-control text-center"></td>
                                <td>Rp. 40.000,00</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <div class="py-3" style="background-color: #FFF5EB; display: flex; align-items: center; justify-content: center; width: auto; height: auto;">
                                        <img src="{{ asset('images/account/product-2.png') }}" alt="Photo Product" style="max-width: 80px; height: auto; display: block;">
                                    </div>
                                </td>
                                <td style="font-family: Garamond; font-weight: bold">Vas Bunga Cembung</td>
                                <td>Rp. 50.000,00</td>
                                <td><input type="number" value="1" min="1" class="form-control text-center"></td>
                                <td>Rp. 50.000,00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <div class="card shadow" style="background-color: #FFFCF9">
                            <div class="card-header" style="text-align: center; font-weight: bold; background-color: #FFFCF9; border-bottom: none;">
                                Order Summary (1) Item(s)
                            </div>
                            <div class="card-body">
                                <div class="row px-2">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-auto">
                                            Item(s) Subtotal
                                        </div>
                                        <div class="col-auto p-0">
                                            Rp.40.000.00
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-auto">
                                            Taxes and Fees
                                        </div>
                                        <div class="col-auto p-0">
                                            Rp.4.000
                                        </div>
                                    </div>
                                    <div class="row d-flex my-3 justify-content-between align-items-center" style="font-weight: bold">
                                        <div class="col-auto">
                                            Subtotal
                                        </div>
                                        <div class="col-auto p-0">
                                            Rp.44.000.00
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <a class="btn mx-5 rounded-5" href="{{ route('payment') }}" style="background-color: black; color: white; font-family: 'Scheherazade New'; display: inline-block; width: auto;">
                                        <span class="m-5">Buy</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </body>
@endsection
