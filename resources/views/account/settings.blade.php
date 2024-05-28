@extends('layouts.master')

@section('content')
    <header>
        @include('partials.header_product')
    </header>

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
                        <div class="card-header">Settings</div>
                        <div class="card-body">
                            <p>Ini adalah halaman Settings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
