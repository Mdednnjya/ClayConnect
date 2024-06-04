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
                    <div class="card">
                        <div class="card-header" style="background-color: white; font-family: 'Scheherazade New'; font-size: 17px; font-weight: bold; border-bottom: 1px solid black;">My Account</div>
                        <div class="card-body text-center">
                            <img src="{{ asset($data['photo']) }}" alt="Profile Photo" class="img-thumbnail rounded-circle mb-1" style="width: 150px; height: 150px;">
                            <div>
                                <a href="{{ route('profile.edit') }}" class="" style="font-family: 'Crimson Text'; text-decoration: none; color: gray;">
                                    <img src="{{ asset('images/account/edit-profil-icon.svg') }}" alt="Edit Profile Icon" style="width: 15px; height: 15px; vertical-align: middle;">
                                    Edit Profile
                                </a>
                            </div>
                            <div class="m-4">
                                <p style="font-family: 'Crimson Text'; font-size: 18px">Name:</p>
                                <p style="font-family: 'Crimson Text'; color: gray; font-size: 16px;">{{ $data['name'] }}
                                <p style="font-family: 'Crimson Text'; font-size: 18px">Email:</p>
                                <p style="font-family: 'Crimson Text'; color: gray; font-size: 16px;">{{ $data['email'] }}</p>
                                <p style="font-family: 'Crimson Text'; font-size: 18px">Phone:</p>
                                <p style="font-family: 'Crimson Text'; color: gray; font-size: 16px;">{{ $data['phone'] }}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
