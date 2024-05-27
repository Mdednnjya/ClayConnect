@extends('layouts.master')

@section('content')

    @include('partials.header_auth', ['isLoginPage' => true])
    <body>
    <div class="container-fluid">
        <div class="row">
            <!-- adjust top margin -->
            <!-- blue -->
            <div class="col-md-4 px-sm-5 my-sm-5 my-lg-5 mx-lg-5">
                <!-- red -->
                <div class="text px-3 my-4 mb-5" style="font-family: Garamond; font-size: 60px">
                    <a>
                        Handmade Pottery <br/>
                        for Your Home <br/>
                        Aesthetic
                    </a>
                </div>
                <!-- input form here -->
                <!-- yellow -->
                <div class="form px-4 pb-3">
                    <form>
                        <div class="mb-4">
                            <!-- form untuk email -->
                            <label for="email" class="form-label" style="font-size: 18px; font-family: 'Crimson Text'">Email
                                or Phone</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"/>
                        </div>
                        <div class="mb-3">
                            <!-- form untuk pw -->
                            <label for="exampleInputPassword1" class="form-label"
                                   style="font-size: 18px; font-family: 'Crimson Text'">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"/>
                        </div>
                        <div class="text-left">
                            <a href="#" class="text-decoration-none"
                               style="color: black; font-size: 15px; font-family: 'Crimson Text'; font-weight: 400;">Forgot
                                password?</a>
                        </div>
                        <div class="form-check"></div>
                        <div class="d-flex justify-content-center">
                            <a href="homepage" class="text-decoration-none px-5 py-1 bg-black w-100 text-center"
                               style="font-family: 'Scheherazade New'; color: white; border-radius: 22px; font-size: 20px;">
                                <b>Sign In</b> </a>
                        </div>
                        <div class="col-12">
                            <p class="small mb-0m mt-sm-2 text-center pt-xl-2 pt-lg-2 pt-xl-2 pt-lg-2">
                                        <span
                                            style="color: black; font-size: 15px; font-family: 'Crimson Text'; font-weight: 400; line-height: 24px; word-wrap: break-word">Don't have an account? </span
                                        ><a href="register" class="" style="text-decoration: none"><span
                                        style="color: #C36A3F; font-size: 15px; font-family: 'Crimson Text'; font-weight: 400; line-height: 24px; word-wrap: break-word">Sign Up</span></a>
                            </p>
                        </div>
                    </form>
                </div>
                <!-- <div class="text-center">
                Don't have an account? Sign up
                </div> -->
            </div>
            <!-- <div class="col d-none d-md-block bg-secondary">Kolom 3</div> -->
            <!-- grey -->
            <div class="col py-sm-5 mx-sm-4 my-lg-5 mx-lg-5 mb-3">
                <div class="d-flex justify-content-center">
                    <img src="{{ URL('images/login/login-asset1.svg') }}" alt="Image" width="66%" height="auto"/>
                </div>
            </div>
        </div>
    </div>
    </body>
    @include('partials.footer_auth')


@endsection
