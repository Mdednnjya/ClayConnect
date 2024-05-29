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

                        <form class="row g-xl-3 g-lg-3 g-md-3 g-2 needs-validation" novalidate>
                            <div>
                                <label for="exampleFormControlInput1" style="font-family: 'Crimson Text'; font-size: 18px" class="form-label">Name</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div >
                                <label for="exampleFormControlInput1" style="font-family: 'Crimson Text'; font-size: 18px" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div>
                                <label for="exampleFormControlInput1" style="font-family: 'Crimson Text'; font-size: 18px" class="form-label">Phone</label>
                                <input type="phone" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div>
                                <label for="exampleFormControlInput1" style="font-family: 'Crimson Text'; font-size: 18px" class="form-label">Password</label>
                                <input type="password" class="form-control" aria-describedby="passwordHelpBlock">
                            </div>
                            <div class="col-12 mt-5">
                                <p class="small mb-0 text-center pt-xl-2 pt-lg-2">
                                    <a href="login" class="btn btn-dark text-decoration-none px-5 py-1 bg-black" style="font-family: 'Scheherazade New'; color: white; border-radius: 22px; font-size: 16px;"><b>Create an account</b></a>
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
