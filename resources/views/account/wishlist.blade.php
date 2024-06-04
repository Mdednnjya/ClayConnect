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
                    <li class="breadcrumb-item"><a href="{{ route('account') }}" style="text-decoration: none;">My Account</a></li>t</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-4">
                    @include('account.partials.sidebar')
                    @include('account.partials.dropdown')
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="background-color: white; font-family: 'Scheherazade New'; font-size: 18px; font-weight: bold; border-bottom: 1px solid black;">Wishlist</div>
                        <div class="card-body">
                            <p>Ini adalah halaman Wishlist.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
