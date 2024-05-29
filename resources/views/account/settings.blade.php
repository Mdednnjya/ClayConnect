@extends('layouts.master')

@section('content')
    <header>
        @include('partials.header_product')
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
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item"><a href="">My Account</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-4">
                    @include('account.partials.sidebar')
                    @include('account.partials.dropdown')
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="background-color: white; font-family: 'Scheherazade New'; font-size: 18px; font-weight: bold; border-bottom: 1px solid black;">Settings</div>
                        <div class="card-body">
                            <div class="container" style="font-family: 'Crimson Text'; font-size: 17px">
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <p style="font-weight: bold;">Account</p>
                                    </div>
                                    <div class="col">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-auto">
                                                Account & Security
                                            </div>
                                            <div class="col-auto">
                                                <img src="{{ asset('images/account/arrow-to-right.svg') }}" alt="Arrow Icon" style="max-width: 10px; max-height: 10px;">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-auto">
                                                My Addresses
                                            </div>
                                            <div class="col-auto">
                                                <img src="{{ asset('images/account/arrow-to-right.svg') }}" alt="Arrow Icon" style="max-width: 10px; max-height: 10px;">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-auto">
                                                Bank Account / Cards
                                            </div>
                                            <div class="col-auto">
                                                <img src="{{ asset('images/account/arrow-to-right.svg') }}" alt="Arrow Icon" style="max-width: 10px; max-height: 10px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <p style="font-weight: bold;">Settings</p>
                                    </div>
                                    <div class="col">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-auto">
                                                Notification Settings
                                            </div>
                                            <div class="col-auto">
                                                <img src="{{ asset('images/account/arrow-to-right.svg') }}" alt="Arrow Icon" style="max-width: 10px; max-height: 10px;">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-auto">
                                                Privacy Settings
                                            </div>
                                            <div class="col-auto">
                                                <img src="{{ asset('images/account/arrow-to-right.svg') }}" alt="Arrow Icon" style="max-width: 10px; max-height: 10px;">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-auto">
                                                Language
                                            </div>
                                            <div class="col-auto">
                                                <img src="{{ asset('images/account/arrow-to-right.svg') }}" alt="Arrow Icon" style="max-width: 10px; max-height: 10px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-3">
                                        <p style="font-weight: bold;">Support</p>
                                    </div>
                                    <div class="col">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-auto">
                                                Help Centre
                                            </div>
                                            <div class="col-auto">
                                                <img src="{{ asset('images/account/arrow-to-right.svg') }}" alt="Arrow Icon" style="max-width: 10px; max-height: 10px;">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-auto">
                                                Rate Us!
                                            </div>
                                            <div class="col-auto">
                                                <img src="{{ asset('images/account/arrow-to-right.svg') }}" alt="Arrow Icon" style="max-width: 10px; max-height: 10px;">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-auto">
                                                About
                                            </div>
                                            <div class="col-auto">
                                                <img src="{{ asset('images/account/arrow-to-right.svg') }}" alt="Arrow Icon" style="max-width: 10px; max-height: 10px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-5 justify-content-center">
                                    <div class="btn mx-5" style="background-color: black; color: white; font-family: 'Scheherazade New'; display: inline-block; width: auto;">
                                        <span class="m-5">Logout</span>
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
