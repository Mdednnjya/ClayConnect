@extends('layouts.master')

@section('content')

    @include('partials.header_auth', ['isLoginPage' => false])
    <body>
        <div class="container mt-3 mb-xl-5 mb-lg-5">
            <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-5 d-flex flex-column align-items-center justify-content-center">

                    <div class="card mb-5 bg px-5 shadow rounded-2 border-0">
                        <div class="card-body">
                        <div class="pt-5 pb-5">
                            <p class="card-title text-center pb-0" style="font-family: Garamond; font-size: 30px">Create New Account</p>
                        </div>

                        <!-- Display error messages -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="row g-xl-3 g-lg-3 g-md-3 g-2 needs-validation" novalidate method="POST" action="{{ route('register') }}">
                            @csrf
                            <div>
                                <label for="name" style="font-family: 'Crimson Text'; font-size: 18px" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div>
                                <label for="email" style="font-family: 'Crimson Text'; font-size: 18px" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div>
                                <label for="phone" style="font-family: 'Crimson Text'; font-size: 18px" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                            </div>
                            <div>
                                <label for="password" style="font-family: 'Crimson Text'; font-size: 18px" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div>
                                <label for="password_confirmation" style="font-family: 'Crimson Text'; font-size: 18px" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <div class="col-12 mt-5">
                                <p class="small mb-0 text-center pt-xl-2 pt-lg-2">
                                    <button type="submit" class="btn btn-dark text-decoration-none px-5 py-1 bg-black" style="font-family: 'Scheherazade New'; color: white; border-radius: 22px; font-size: 16px;"><b>Create an account</b></button>
                                </p>
                            </div>
                            <div class="input-group mb-3">
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>
        </div>
    </body>
    @include('partials.footer_auth')

@endsection
