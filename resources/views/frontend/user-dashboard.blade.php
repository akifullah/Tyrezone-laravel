@extends('frontend.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/user-dashboard.css') }}">
@endsection


@section('main')
    <div class="wrapper">






        <!-- USER DASHBOARD -->
        <div class="user-dashboard">

            <div class="">
                <!-- HERO BANNER SECTION START -->
                <section class="hero-banner user-profile-banner overlay"
                    style="background-image: url({{ asset('frontend/assets/imgs/profile-bg.jpg') }});">
                    <div class="container">
                        <div class="banner-text text-center">
                            <h1>Welcome Back {{ Auth::user()->fname . ' ' . Auth::user()->lname }}
                            </h1>
                        </div>
                    </div>
                </section>
                <!-- HERO BANNER SECTION END -->


                <div class="row">
                    <div class="col-lg-3">
                        @include('frontend.includes.sidebar')
                    </div>

                    <div class="col-lg-9 pe-4 my-lg-4">
                        @include('frontend.common.alert')



                        <div class="user-main border rounded my-5">
                            <h5>User Information</h5>
                            <div class="user-profile">
                                <h4>{{ Auth::user()->fname . ' ' . Auth::user()->lname }}</h4>


                                <div class="row">

                                    <div class="col-md-6">
                                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Phone:</strong> {{ Auth::user()->phone }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Company:</strong> {{ Auth::user()->company }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>City:</strong> {{ Auth::user()->city }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Postal Code:</strong> {{ Auth::user()->post_code }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>State:</strong> {{ Auth::user()->state }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Country:</strong> {{ Auth::user()->country }}</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p><strong>Address:</strong> {{ Auth::user()->address }}</p>
                                    </div>


                                </div>




                                <div class="row">

                                    <div class="col-12  mt-3">
                                        <a href="{{ route('profile.edit') }}" class="main-btn d-inline-block">Update
                                            Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- USER DASHBOARD END -->







    </div>
@endsection
