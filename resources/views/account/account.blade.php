@extends('layouts.master')

@section('title', 'My Account')

@section('content')
    <header>
        @include('partials.header_product')
    </header>

    <body>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">My Account</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-4">
                    @include('account.partials.sidebar')
                    @include('account.partials.dropdown')
                </div>
                {{--        Column Account settings        --}}
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">My Account</div>
                        <div class="card-body text-center">
                            <img src="{{ asset($data['photo']) }}" alt="Profile Photo" class="img-thumbnail rounded-circle mb-3" style="width: 150px; height: 150px;">
                            <p><strong>Name: {{ $data['name'] }}</strong> </p>
                            <p><strong>Email: {{ $data['email'] }}</strong>
                            <p><strong>Phone: {{ $data['phone'] }}</strong> </p>
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary mt-3">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
