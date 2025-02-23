@extends('frontend.layout.app')

    @section('main')
        <div class="wrapper">



            <!-- REGISTRATION FORM START-->
            <section class="registration form-wrap">
                <div class="container ">
                    <div class="col-lg-5 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">

                        @include("frontend.common.alert")
                        <h5 class="text-center mb-4">FORGOT PASSWORD</h5>
                        <form action="{{ route('password.email') }}" method="post">
                            @csrf
                            <div class="row">

                                <div class="col-12  mb-4 mb-lg-0">

                                    <div class="form-group mb-3">
                                        <label for="">Email Address <span>*</span></label>
                                        <input type="email" name="email" placeholder="Email Address" class="form-control  @error("email") is-invalid @enderror">
                                    </div>



                                </div>



                            </div>
                            <div class="mt-2 px-0">
                                <button class="main-btn w-100">Reset Password</button>
                            </div>
                        </form>
                        <p class="px-0 my-2">Login Here <a href="{{ route("login") }}">Login</a> </p>





                    </div>
                </div>
            </section>
            <!-- REGISTRATION FORM END -->








        </div>
    @endsection




