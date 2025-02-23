@extends('frontend.layout.app')


    @section('main')
        <div class="wrapper">






            <!-- REGISTRATION FORM START-->
            <section class="registration form-wrap">
                <div class="container ">
                    <div class="col-lg-5 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">
                        @include('frontend.common.alert')
                        <form action="{{ route("loginAuth") }}" method="post">
                            @csrf
                            <h5 class="text-center mb-4">PLEASE LOGIN</h5>
                            <div class="row">

                                <div class="col-12  mb-4 mb-lg-0">
                                    <div class="form-group mb-3">
                                        <label for="">Email Address <span>*</span></label>
                                        <input type="email" name="email" value="{{ old("email") }}" placeholder="Email Address" class="form-control  @error('email') is-invalid @enderror">
                                        @error('email')
                                            <p class="d-block invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-1">
                                        <label for="">Password <span>*</span> </label>
                                        <input type="password" value="{{ old("password") }}" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror">
                                        @error('password')
                                            <p class="d-block invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div
                                        class="d-flex flex-wrap flex-row-reverse align-items-center justify-content-between">

                                        <div class="text-end">
                                            <p class="m-0"><a href="{{ route("password.request") }}">Forgot Password?</a></p>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="remeber">
                                            <label for="remeber">Remember me</label>
                                        </div>
                                    </div>


                                </div>



                            </div>
                            <div class="mt-2 px-0">
                                <button class="main-btn w-100">Signin</button>
                            </div>
                        </form>
                        <p class="px-0 my-2">Don't have an account? <a href="{{ route("signup") }}">Register</a> </p>





                    </div>
                </div>
            </section>
            <!-- REGISTRATION FORM END -->








        </div>
    @endsection



