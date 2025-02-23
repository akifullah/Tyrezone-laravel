@extends('frontend.layout.app')


        <div class="wrapper">

            @include('frontend.includes.header')





            <!-- REGISTRATION FORM START-->
            <section class="registration form-wrap">
                <div class="container ">
                    <div class="col-lg-5 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">
                        <h5 class="text-center mb-4">Reset PASSWORD</h5>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="email" name="email" placeholder="Enter your email" required>
                            <input type="password" name="password" placeholder="Enter new password" required>
                            <input type="password" name="password_confirmation" placeholder="Confirm new password" required>
                            <button type="submit">Reset Password</button>
                        </form>
                        <p class="px-0 my-2">Login Here <a href="login.html">Login</a> </p>





                    </div>
                </div>
            </section>
            <!-- REGISTRATION FORM END -->








        </div>
    @endsection

