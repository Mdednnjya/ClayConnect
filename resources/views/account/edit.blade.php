@extends('layouts.master')

@section('title', 'My Account')

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
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-4">
                @include('account.partials.sidebar')
                @include('account.partials.dropdown')
            </div>
            <div class="col-md-8">
                <div class="card p-3" style="font-family: 'Crimson Text'">
                    <div class="card-header" style="background-color: white; font-family: 'Scheherazade New'; font-size: 18px; font-weight: bold; border-bottom: 1px solid black;">Edit Account</div>
                    <div class="card-body">
                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group text-center">
                                <img src="{{ asset($data['photo']) }}" alt="Profile Photo" class="img-thumbnail rounded-circle mb-3" style="width: 150px; height: 150px;">
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
