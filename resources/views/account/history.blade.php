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
    </style>

    <body>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" style="text-decoration: none;">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('account') }}" style="text-decoration: none;">My Account</a></li>
                    <li class="breadcrumb-item active" aria-current="page">History</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-4">
                    @include('account.partials.sidebar')
                    @include('account.partials.dropdown')
                </div>
                <div class="col-md-8">
                    <div class="card" >
                        <div class="card-header" style="background-color: white; font-family: 'Scheherazade New'; font-size: 18px; font-weight: bold; border-bottom: 1px solid black;">History</div>
                        <div class="card-body">
                            <div class="container mb-5">
                                <div class="card">
                                    <div class="container p-4" style="font-family: 'Crimson Text'">
                                        <div class="row p-3">
                                            <div class="col-12 col-md-2">
                                                <div class="py-3" style="background-color: #FFF5EB; display: flex; align-items: center; justify-content: center; width: auto; height: auto;">
                                                    <img src="{{ asset('images/account/product-1.png') }}" alt="Photo Product" style="max-width: 100%; height: auto; display: block;">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="row d-flex justify-content-between align-items-center">
                                                    <div class="col-auto mt-2 mt-md-1 font-weight-bold" style="font-size: 19px">
                                                        Vas Bunga Mini
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-between align-items-center">
                                                    <div class="col-auto">
                                                        Size: S
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="col-auto text-end font-weight-bold">
                                                    Rp.40.000.00
                                                </div>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="row my-1 d-flex justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    Transaction Date
                                                </div>
                                                <div class="col-auto">
                                                    Sunday, 19 May 2024
                                                </div>
                                            </div>
                                            <div class="row my-1 d-flex justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    Payment Method
                                                </div>
                                                <div class="col-auto">
                                                    Bank Transfer
                                                </div>
                                            </div>
                                            <div class="row my-1 d-flex justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    Tax and Fees
                                                </div>
                                                <div class="col-auto">
                                                    Rp.4000
                                                </div>
                                            </div>
                                            <div class="row my-2 d-flex justify-content-between align-items-center" style="font-size: 19px">
                                                <div class="col-auto font-weight-bold">
                                                    Total
                                                </div>
                                                <div class="col-auto font-weight-bold" style="font-size: 19px">
                                                    Rp.44.000.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
