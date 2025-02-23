@extends('frontend.layout.app')

@section('main')
    <div class="wrapper contact-wrapper">


        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner overlay"
            style="background-image: url({{ asset('frontend/assets/imgs/dunlop-banner.jpg') }});">
            <div class="container">
                {{-- <div class="banner-text">
                    <h1>Contact Us</h1>
                </div> --}}
                <div class="section-heading text-start">
                    <h1 class="mb-0">Contact Us</h1>
                    <p class=" mb-5">Any question or remarks? Just write us a message!
                    </p>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->

        <!-- HERO BANNER SECTION START -->
        {{-- <section class="hero-banner " style="background-image: url('assets/imgs/contact-us-banner.jpg');">
            <div class="container">
                <div class="banner-text">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </section> --}}
        <!-- HERO BANNER SECTION END -->

        <div class="container mt-4">
            @include('frontend.common.alert')
        </div>

        <!-- CONTACT SECTION START -->
        <section class="contacts container-fluid">
            {{-- <div class="section-heading text-center">
                <h2 class="mb-0">Contact Us</h2>
                <p class="text-center col-md-8 col-lg-6 mx-auto mb-5">Any question or remarks? Just write us a message!</p>
            </div> --}}

            <div class="container contact-box">
                <div class="row">
                    <div class="col-md-5 mb-4 mb-md-0 ">
                        <div class="contact-text h-100 ">


                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-5">Contact Information</h5>

                                </div>
                                <div class="col-12">
                                    <p>
                                        <i class="fa-solid fa-phone"></i>
                                        <a href="tel:07563896325">07563 896325</a><br />
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>Higginshaw Lane, Oldham, OL2 6HQ</span>
                                    </p>
                                    <p>
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <a href="https://www.facebook.com/TyreZoneOldhamLTD" target="_blank">
                                            facebook.com/TyreZoneOldhamLTD
                                        </a>
                                    </p>

                                </div>
                            </div>

                            <div class=" py-3">
                                {{-- <h5>Find Us on Facebook</h5> --}}

                            </div>


                        </div>



                    </div>

                    <div class="col-md-7 ">
                        {{-- <h3 class="contact-label">Contact Us</h3> --}}
                        <form action="{{ route('contact.send') }}" method="post">
                            @csrf
                            <div class="contact-form ">
                                <div class="row">

                                    <div class="col-6 mb-3 px-2">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Your Name"
                                                class="form-control @error('name') is-invalid @enderror">
                                            @error('name')
                                                <small class="invalid-feedback d-block">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6 mb-3 px-2">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="E-Mail Address"
                                                class="form-control @error('email') is-invalid @enderror">
                                            @error('email')
                                                <small class="invalid-feedback d-block">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3 px-2">
                                        <div class="form-group">
                                            <input type="number" name="phone" placeholder="Phone Number"
                                                class="form-control @error('phone') is-invalid @enderror">
                                            @error('phone')
                                                <small class="invalid-feedback d-block">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="col-12 mb-3 px-2">
                                        <div class="form-group">
                                            <textarea name="message" rows="5" placeholder="Message" class="form-control" id=""></textarea>
                                            @error('message')
                                                <small class="invalid-feedback d-block">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button class="main-btn">Submit</button>
                                    </div>


                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- CONTACT SECTION END -->


        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2369.978091290581!2d-2.106833324188195!3d53.558158558855126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb8319b03acc5%3A0x56b3fd2233812fcd!2sHigginshaw%20Ln%2C%20Oldham%2C%20UK!5e0!3m2!1sen!2s!4v1730281607474!5m2!1sen!2s"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>






    </div>
@endsection
