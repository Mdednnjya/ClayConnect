@extends('layouts.master')

@php
    $googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
@endphp

@section('content')
    <div class="container-fluid">
        <!-- Header -->
        @include('partials.header_home')

        <!-- Body -->
        <div class="row text-center mx-2 my-5">
            <h1 style="font-family: 'Scheherazade New'; font-size: 50px; text-align: center; margin-top: 24px; margin-bottom: 39px">Crafted with Love</h1>
            <h2 style="font-family: 'Garamond'; font-size: 32px; text-align: center;">Handmade Pottery for Your Home Aesthetic</h2>
        </div>

        <!-- 5 vas -->
        <div class="row justify-content-center" style="background-color: #F4F2F0; margin-top: 122px; margin-bottom: 71px">
            <div class="container py-4">
                <div class="row justify-content-center mx-0">
                    @foreach(['vas-5.png', 'vas-4.png', 'vas-3.png', 'vas-2.png', 'vas-1.png'] as $vas)
                        <div class="col-12 col-sm-6 col-md-2 text-center py-2">
                            <div style="background-color: #E7E7E7; padding: 10px; width: 100%; max-width: 196px; height: 208px; display: flex; align-items: center; justify-content: center; margin: 10px auto;">
                                <img src="{{ asset('images/homepage/' . $vas) }}" alt="Vas {{ substr($vas, 4, 1) }}" class="img-fluid">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- About -->
        <div id="about" class="container px-5 my-5">
            <div class="row justify-content-center">
                <div class="col-md-6 px-5 mb-sm-3">
                    <h2 style="font-family: 'Garamond'; font-size: 32px; text-align: center">About us</h2>
                    <h1 style="font-family: 'Scheherazade New'; font-size: 50px; text-align: center">Discover the Finest Pottery at Malang</h1>
                </div>
                <div class="col-md-6 pt-3">
                    <p style="font-family: 'Crimson Text'; font-size: 19px; text-align: center">
                        UD. Putra Ilham, now rebranded as ClayConnect, is an arts and crafts store located in Malang City that specializes in the production and sale of various flower vases, pots, and other craft items with good quality and affordable prices. ClayConnect has been established for several years and has embarked on a long journey in the pottery craft industry, creating high-quality and unique products to meet customer needs.
                    </p>
                </div>
            </div>
        </div>

        <!-- Goals -->
        <div id="goals" class="row text-center justify-content-center px-5">
            <div class="col-md-4">
                <div class="card mb-5" style="background-color: #F4F2F0; border: none; border-radius: 15px">
                    <div class="card-body rounded-1">
                        <h5 class="card-title p-2 px-5 mt-2 rounded-4" style="font-family: 'Scheherazade New'; font-size: 26px; background-color: #000; color: #fff; display: inline-block">Vision</h5>
                        <p class="card-text px-5 pb-5 pt-3" style="font-family: 'Crimson Text'; font-size: 17px;">To become the foremost arts and crafts store renowned for product quality and superior service in Malang City</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="background-color: #F4F2F0; border: none; border-radius: 15px">
                    <div class="card-body rounded-1">
                        <h5 class="card-title p-2 px-5 mt-2 rounded-4" style="font-family: 'Scheherazade New'; font-size: 26px; background-color: #000; color: #fff; display: inline-block">Mission</h5>
                        <p class="card-text px-5 pb-5 pt-3" style="font-family: 'Crimson Text'; font-size: 17px;">To provide high-quality pottery products with unique and innovative designs, and to deliver friendly and professional service to every customer.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Location -->
        <div id="location" class="row justify-content-center align-items-center mt-5">
            <div class="col-md-12 text-center py-2">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="font-family: 'Scheherazade New'; font-size: 32px; line-height: 48px;">
                            📍 Location
                        </h2>
                    </div>
                </div>
                <div class="row px-5">
                    <p style="font-family: 'Crimson Text'; font-size: 19px;">Jalan Mayjend Panjaitan no. 167, Kel. Penanggungan, Kec. Klojen, Kota Malang.</p>
                </div>
            </div>
            <div class="col-md-12 mt-5 mb-5 text-center py-2">
                <div id="map" style="width: 400px; height: 370px; border-radius: 15px; margin: auto; border-radius: 15px;"></div>
            </div>
        </div>

        <!-- Contact -->
        <div id="contact" class="row mb-2 py-5 mx-0">
            <div class="col-12 text-center">
                <h2 style="font-family: 'Scheherazade New'; font-size: 28px;">CONTACT US</h2>
                <p style="font-family: 'Scheherazade New'; font-size: 19px;">+62 852-5903-7001</p>
            </div>
        </div>

    </div>
@endsection
