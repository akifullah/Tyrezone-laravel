@extends('frontend.layout.app')


    @section('main')
        <div class="wrapper">

            @include('frontend.includes.header')





            <!-- REGISTRATION FORM START-->
            <section class="registration form-wrap">
                <div class="container ">
                    <div class="col-lg-5 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">
                        @include('frontend.common.alert')

                        <h5 class="text-center mb-4">RESET PASSWORD</h5>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <div class="form-group mb-4">
                                <input class="form-control" type="hidden" name="token" value="{{ $token }}">
                                <input value="{{ old('email') }}"  class="form-control @error("email") is-invalid @enderror" type="email" name="email" placeholder="Enter your email"
                                    >
                            </div>
                            <div class="form-group mb-4">
                                <input value="{{ old('password') }}" class="form-control  @error("password") is-invalid @enderror" type="password" name="password" placeholder="Enter new password"
                                    >
                            </div>
                            <div class="form-group mb-4">
                                <input value="{{ old('password_confirmation') }}"  class="form-control  @error("password_confirmation") is-invalid @enderror" type="password" name="password_confirmation"
                                    placeholder="Confirm new password" >
                            </div>
                            <button class="main-btn w-100" type="submit">Reset Password</button>

                            <p class="px-0 my-2">Login Here <a href="{{ route('login') }}">Login</a> </p>

                        </form>





                    </div>
                </div>
            </section>
            <!-- REGISTRATION FORM END -->







            @include('frontend.includes.footer')

        </div>
    @endsection



