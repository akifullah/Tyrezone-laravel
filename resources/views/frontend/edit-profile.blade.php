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

                        @include('frontend.common.alert')

                        <div class="user-main ">

                            <section class="registration mt-0 form-wrap">
                                <div class="container ">
                                    <form action="{{ route('profile.update') }}" method="post">
                                        @csrf
                                        <div class="col-lg-6  sign-up-wrap">
                                            <h3 class="text-center mb-4">Edit Profile</h3>
                                            <div class="row">

                                                <div class="col-md-12 mb-4 mb-lg-0">

                                                    <div class="form-group mb-3">
                                                        <label for="">First Name <span>*</span></label>
                                                        <input type="text" name="fname" value="{{ $user->fname }}"
                                                            placeholder="First Name" class="form-control">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="">Last Name <span>*</span></label>
                                                        <input type="text" name="lname" value="{{ $user->lname }}"
                                                            placeholder="Last Name" class="form-control">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="">Email Address <span>*</span></label>
                                                        <input type="email" name="email" value="{{ $user->email }}" disabled
                                                            placeholder="Email Address" class="form-control bg-muted">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="">Phone </label>
                                                        <input type="number" name="phone" value="{{ $user->phone }}"
                                                            placeholder="Phone" class="form-control">
                                                    </div>


                                                </div>




                                            </div>

                                            <div class="d-flex flex-column align-items-center justify-content-center">

                                                <div class="mt-2">
                                                    <button class="main-btn">Update</button>
                                                </div>

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
