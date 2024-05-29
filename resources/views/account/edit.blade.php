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
                    <div class="card-body">
                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group text-center">
                                <img src="{{ $data['photo'] }}" alt="Profile Photo" class="img-thumbnail rounded-circle mb-3" style="width: 150px; height: 150px;">
                                <label for="photo">Profile Photo</label>
                                <input type="file" class="form-control-file" id="photo" name="photo">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $data['name'] }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $data['email'] }}" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $data['phone'] }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
