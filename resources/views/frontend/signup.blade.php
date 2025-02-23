@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">




        <section class="registration form-wrap">
            <div class="container ">
                <form action="{{ route('register') }}" method="post">
                    @csrf

                    <p class="text-danger col-lg-10 mx-auto">
                    </p>
                    <div class="col-lg-6 mx-auto sign-up-wrap">
                        <h3 class="text-center mb-4">Registration</h3>
                        <div class="row">

                            <div class="col-12 mb-4 mb-lg-0">
                                <h5>Primary Contact Information</h5>

                                <div class="form-group mb-3">
                                    <label for="">First Name <span>*</span></label>
                                    <input type="text" placeholder="First Name" value="{{ old("fname") }}" id="fname"
                                        name="fname" class="form-control @error('fname') is-invalid @enderror">
                                    @error('fname')
                                        <p class="d-block invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Last Name <span>*</span></label>
                                    <input type="text" placeholder="Last Name" value="{{ old("lname") }}" id="lname"
                                        name="lname" class="form-control @error('lname') is-invalid @enderror">
                                    @error('lname')
                                        <p class="d-block invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Email Address <span>*</span></label>
                                    <input type="email" placeholder="Email Address" value="{{ old("email") }}" name="email"
                                        id="email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <p class="d-block invalid-feedback">{{ $message }}</p>
                                    @enderror

                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Phone <span>*</span></label>
                                    <input type="number" placeholder="Phone" value="{{ old("phone") }}" id="phone" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror">
                                        @error('phone')
                                        <p class="d-block invalid-feedback">{{ $message }}</p>
                                    @enderror

                                </div>


                                <div class="form-group mb-3">
                                    <label for="">Password <span>*</span> </label>
                                    <input type="password" placeholder="Password" value="{{ old("password") }}" name="password"
                                        id="password" class="form-control @error('password') is-invalid @enderror">
                                        @error('password')
                                        <p class="d-block invalid-feedback">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Confirm Password <span>*</span> </label>
                                    <input type="password" placeholder="Confirm Password" value="{{ old("password_confirmation") }}"
                                        name="password_confirmation" id="cpassword " class="form-control @error('password_confirmation') is-invalid @enderror">
                                        @error('password_confirmation')
                                        <p class="d-block invalid-feedback">{{ $message }}</p>
                                    @enderror

                                </div>

                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <div class="mt-2">
                                <button class="main-btn">Register</button>
                            </div>

                        </div>
                        <p class="px-0 my-2 mt-4">Already have an account? <a href="{{ route("login") }}">Login</a> </p>


                    </div>
                </form>
            </div>
        </section>









    </div>
@endsection
