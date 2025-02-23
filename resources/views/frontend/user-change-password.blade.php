@extends('frontend.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/user-dashboard.css') }}">
@endsection


@section('main')
    <div class="wrapper">






        <!-- USER DASHBOARD -->
        <div class="user-dashboard">

            <div class="">



                <div class="row">
                    <div class="col-lg-3">
                        @include('frontend.includes.sidebar')
                    </div>

                    <div class="col-lg-9 pe-4 my-lg-4">


                        <div class="user-main ">
                            <h5>Change Password</h5>

                            <section class="registration form-wrap  py-3 mt-0">
                                <div class="container px-0">

                                    <form action="{{ route('udpatePassword') }}" method="POST">
                                        @csrf
                                        <div class="col-lg-6 col-md-12   sign-up-wrap px-2 px-sm-3">
                                            @include('frontend.common.alert')
                                            <div class="row ">

                                                <div class="col-12  mb-4 mb-lg-0">

                                                    <div class="form-group mb-3">
                                                        <label for="">Old Password <span>*</span></label>
                                                        <input type="password" value="{{ old('old_password') }}"
                                                            name="old_password" placeholder="Enter Old Password"
                                                            class="form-control  @error('old_password') is-invalid @enderror"">
                                                        @error('old_password')
                                                            <p class="d-block invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="">New Password <span>*</span></label>
                                                        <input type="password" value="{{ old('password') }}"
                                                            name="password" placeholder="Enter New Password"
                                                            class="form-control @error('password') is-invalid @enderror">
                                                        @error('password')
                                                            <p class="d-block invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="">Confirm Password <span>*</span></label>
                                                        <input type="password" value="{{ old('password_confirmation') }}"
                                                            name="password_confirmation"
                                                            placeholder="Enter Confirm Password" class="form-control  @error('password_confirmation') is-invalid @enderror">
                                                        @error('password_confirmation')
                                                            <p class="d-block invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>



                                                </div>



                                            </div>
                                            <div class="mt-2 px-0">
                                                <button class="main-btn w-100">Change Password</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- USER DASHBOARD END -->







    </div>
@endsection
