@extends('frontend.layout.app')


@section('main')
    <!-- HERO SECTION START -->
    <section class="hero-section">
        <div class="hero">
            <div class="container">

                <div class="tab-wrap">
                    <div class="size" style="height: auto;">

                        <h4 class="">Find tyres by size</h4>
                        <form action="{{ route('search') }}">
                            <div class="row">

                                <div class="col-6 ">
                                    <div class="form-group">
                                        <label for="">Width</label>
                                        <select name="width" id="" class="form-select">
                                            <option disabled selected>Select</option>
                                            @if ($sizes->isNotEmpty())
                                                @foreach ($sizes as $size)
                                                    <option value="{{ $size->width }}">
                                                        {{ $size->width }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-6 ">
                                    <div class="form-group">
                                        <label for="">Profile</label>
                                        <select name="profile" id="" required class="form-select">
                                            <option disabled selected>Select</option>
                                            @if ($sizes->isNotEmpty())
                                                @foreach ($sizes as $size)
                                                    <option value="{{ $size->profile }}">
                                                        {{ $size->profile }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-6 ">
                                    <div class="form-group">
                                        <label for="">Rim Size</label>
                                        <select name="rim_size" id="" class="form-select">
                                            <option disabled selected>Select</option>
                                            @if ($sizes->isNotEmpty())
                                                @foreach ($sizes as $size)
                                                    <option value="{{ $size->rim_size }}">
                                                        {{ $size->rim_size }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-6 ">
                                    <div class="form-group">
                                        <label for="">Speed</label>
                                        <select name="speed" id="" class="form-select">
                                            <option disabled selected>Select</option>
                                            @if ($sizes->isNotEmpty())
                                                @foreach ($sizes as $size)
                                                    <option value="{{ $size->speed }}">
                                                        {{ $size->speed }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12  mt-3">
                                    <button class="main-btn w-100">Search </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- <div class="hero-content">
                                                    <div class="col-md-9">
                                                        <h1>Dynamite savings for you.</h1>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas a nemo magni id enim
                                                            omnis deserunt cupiditate commodi odio debitis alias autem, dolores dolorum, quod esse
                                                            suscipit ullam eum repudiandae!</p>
                                                        <div class="">
                                                            <a href="#">Find Tyres</a>
                                                        </div>
                                                    </div>
                                                </div> -->
            </div>
        </div>
    </section>
    <!-- HERO SECTION END -->


    <!-- DESCOUNT SECTION START -->
    <section class="descount-section">
        <div class="container">
            <h2 class="text-center">Dynamite savings for you.</h2>

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="dicount-card">
                        <div class="row align-items-end">
                            <div class="col-7 px-0">
                                <h3>15% OFF on
                                    Continental Tyres</h3>
                                <p>It offers a variety of tyres in the summer, winter and all-season segment to
                                    assist you to drive comfortably on dry, wet
                                    and uneven roads with ease.</p>
                            </div>
                            <div class="col-4 ms-auto text-end">
                                <div class="dicount-card-img">
                                    <img src="{{ asset('frontend/assets_v2/imgs/discount-tyre.png') }}" width="70px"
                                        alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="dicount-card">
                        <div class="row align-items-end">
                            <div class="col-7 px-0">
                                <h3>15% OFF on
                                    Continental Tyres</h3>
                                <p>It offers a variety of tyres in the summer, winter and all-season segment to
                                    assist you to drive
                                    comfortably on dry, wet
                                    and uneven roads with ease.</p>
                            </div>
                            <div class="col-4 ms-auto text-end">
                                <div class="dicount-card-img">
                                    <img src="{{ asset('frontend/assets_v2/imgs/discount-tyre.png') }}" width="70px"
                                        alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="dicount-card">
                        <div class="row align-items-end">
                            <div class="col-7 px-0">
                                <h3>15% OFF on
                                    Continental Tyres</h3>
                                <p>It offers a variety of tyres in the summer, winter and all-season segment to
                                    assist you to drive
                                    comfortably on dry, wet
                                    and uneven roads with ease.</p>
                            </div>
                            <div class="col-4 ms-auto text-end">
                                <div class="dicount-card-img">
                                    <img src="{{ asset('frontend/assets_v2/imgs/discount-tyre.png') }}" width="70px"
                                        alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- DESCOUNT SECTION END -->


    <!-- FEATURE SECTION START -->
    <section class="feature-section">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend/assets_v2/imgs/feature1.png') }}" alt="">
                        </div>
                        <div class="feature-text">
                            <h3>AIR CONDITIONING</h3>
                            <p>We offer a full range of garage services to vehicle owners in Tucson</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend/assets_v2/imgs/feature2.png') }}" alt="">
                        </div>
                        <div class="feature-text">
                            <h3>BELT AND HOSES</h3>
                            <p>We offer a full range of garage services to vehicle owners in Tucson</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend/assets_v2/imgs/feature3.png') }}" alt="">
                        </div>
                        <div class="feature-text">
                            <h3>LUBE, OILS AND FILTERS</h3>
                            <p>We offer a full range of garage services to vehicle owners in Tucson</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend/assets_v2/imgs/feature4.png') }}" alt="">
                        </div>
                        <div class="feature-text">
                            <h3>LUBE, OILS AND FILTERS</h3>
                            <p>We offer a full range of garage services to vehicle owners in Tucson</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend/assets_v2/imgs/feature5.png') }}" alt="">
                        </div>
                        <div class="feature-text">
                            <h3>BRAKE REPAIR</h3>
                            <p>We offer a full range of garage services to vehicle owners in Tucson</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend/assets_v2/imgs/feature6.png') }}" alt="">
                        </div>
                        <div class="feature-text">
                            <h3>ENGINE DIAGNOSTIC</h3>
                            <p>We offer a full range of garage services to vehicle owners in Tucson</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- FEATURE SECTION END -->

    <!-- STEP CARD DESIGN SECTION START  -->
    <section class="step-card-section">
        <div class="container">
            <div class="section-heading mb-5">
                <h2 class="text-center">Order Tyres In 4 Easy Steps</h2>
            </div>

            <div class="row pt-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="step-card">
                        <div class="step-count">
                            <h3>Step</h3>
                            <h2>01</h2>
                        </div>

                        <div class="step-card-text">
                            <h3>Choose Your Tyres</h3>
                            <p>Use the vehicle registration tool above and select the correct tyre size that fit
                                your make and model.</p>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="step-card">
                        <div class="step-count">
                            <h3>Step</h3>
                            <h2>02</h2>
                        </div>

                        <div class="step-card-text">
                            <h3>Choose Your Tyres</h3>
                            <p>Use the vehicle registration tool above and select the correct tyre size that fit
                                your make and model.</p>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="step-card">
                        <div class="step-count">
                            <h3>Step</h3>
                            <h2>03</h2>
                        </div>

                        <div class="step-card-text">
                            <h3>Choose Your Tyres</h3>
                            <p>Use the vehicle registration tool above and select the correct tyre size that fit
                                your make and model.</p>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="step-card">
                        <div class="step-count">
                            <h3>Step</h3>
                            <h2>04</h2>
                        </div>

                        <div class="step-card-text">
                            <h3>Choose Your Tyres</h3>
                            <p>Use the vehicle registration tool above and select the correct tyre size that fit
                                your make and model.</p>
                        </div>

                    </div>
                </div>

            </div>

            <!-- <div class="row mt-5">
                                                <div class="col-md-6">
                                                    <div class="step-card ">
                                                        <div class="step-card-text">
                                                            <h3>Choose Your Tyres</h3>
                                                            <p>Use the vehicle registration tool above and select the correct tyre size that fit
                                                                your make and model.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="step-card ">
                                                        <div class="step-card-text">
                                                            <h3>Choose Your Tyres</h3>
                                                            <p>Use the vehicle registration tool above and select the correct tyre size that fit
                                                                your make and model.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="step-card ">
                                                        <div class="step-card-text">
                                                            <h3>Choose Your Tyres</h3>
                                                            <p>Use the vehicle registration tool above and select the correct tyre size that fit
                                                                your make and model.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="step-card ">
                                                        <div class="step-card-text">
                                                            <h3>Choose Your Tyres</h3>
                                                            <p>Use the vehicle registration tool above and select the correct tyre size that fit
                                                                your make and model.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> -->

        </div>
    </section>
    <!-- STEP CARD DESIGN SECTION END  -->

    <!-- OUR CLIENT SECTION START -->
    <section class="our-client">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="section-heading text-center text-lg-start mb-5 mb-lg-0">
                        <h6>TAKE A LOOK AT</h6>
                        <h2>Our Happy Clients</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="our-client-card">
                                <div class="client-logo">
                                    <img src="{{ asset('frontend/assets_v2/imgs/honda.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="our-client-card">
                                <div class="client-logo">
                                    <img src="{{ asset('frontend/assets_v2/imgs/mercedes.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="our-client-card">
                                <div class="client-logo">
                                    <img src="{{ asset('frontend/assets_v2/imgs/audi.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="our-client-card">
                                <div class="client-logo">
                                    <img src="{{ asset('frontend/assets_v2/imgs/porsche.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR CLIENT SECTION END -->


    <!-- RECOMMENDED TYRE SECTION START -->
    <section class="recommended-section">
        <div class="container">
            <div class="section-heading mb-5">
                <h2 class="text-center">Recommended Tyres</h2>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="recommended-card h-100">
                        <div class="card-header">
                            <h3>Continental Tyres</h3>
                        </div>

                        <div class="card-body">
                            <div class="card-img">
                                <img src="{{ asset('frontend/assets_v2/imgs/recommend-tyre.png') }}" alt="">
                            </div>

                            <div class="card-text">
                                <p>Continental tyres are made up of high-quality materials and offers top-notch
                                    performance. It offers a variety of tyres
                                    in the summer, winter and all-season segment to assist you to drive comfortably
                                    on dry, wet and uneven roads with ease.</p>

                                <div class="text-center">
                                    <a href="#" class="rec-btn">View All</a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="recommended-card h-100">
                        <div class="card-header">
                            <h3>Continental Tyres</h3>
                        </div>

                        <div class="card-body">
                            <div class="card-img">
                                <img src="{{ asset('frontend/assets_v2/imgs/recommend-tyre.png') }}" alt="">
                            </div>

                            <div class="card-text">
                                <p>Continental tyres are made up of high-quality materials and offers top-notch
                                    performance. It offers a
                                    variety of tyres
                                    in the summer, winter and all-season segment to assist you to drive comfortably
                                    on dry, wet and
                                    uneven roads with ease.</p>

                                <div class="text-center">
                                    <a href="#" class="rec-btn">View All</a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="recommended-card h-100">
                        <div class="card-header">
                            <h3>Continental Tyres</h3>
                        </div>

                        <div class="card-body">
                            <div class="card-img">
                                <img src="{{ asset('frontend/assets_v2/imgs/recommend-tyre.png') }}" alt="">
                            </div>

                            <div class="card-text">
                                <p>Continental tyres are made up of high-quality materials and offers top-notch
                                    performance. It offers a
                                    variety of tyres
                                    in the summer, winter and all-season segment to assist you to drive comfortably
                                    on dry, wet and
                                    uneven roads with ease.</p>

                                <div class="text-center">
                                    <a href="#" class="rec-btn">View All</a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- RECOMMENDED TYRE SECTION END -->



    <!-- MAIN SLIDER SECTION START -->
    {{-- <section class="main-img-slider owl-carousel owl-theme" id="main-slider-1">

        <div class="slide-img">
            <img src="{{ asset('frontend/assets_v2/imgs/main-slider1.webp') }}" width="100%" alt="">
        </div>

        <div class="slide-img">
            <img src="{{ asset('frontend/assets_v2/imgs/main-slider2.webp') }}" width="100%" alt="">
        </div>

        <div class="slide-img">
            <img src="{{ asset('frontend/assets_v2/imgs/main-slider3.webp') }}" width="100%" alt="">
        </div>

        <div class="slide-img">
            <img src="{{ asset('frontend/assets_v2/imgs/main-slider4.webp') }}" width="100%" alt="">
        </div>

        <div class="slide-img">
            <img src="{{ asset('frontend/assets_v2/imgs/main-slider5.webp') }}" width="100%" alt="">
        </div>


    </section> --}}
    <!-- MAIN SLIDER SECTION END -->

    {{-- <!-- ABOUT SECTION START -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="about-card">
                        <div class="card-img">
                            <img src="{{ asset("frontend/assets_v2/imgs/about1.png")}}" alt="">
                        </div>

                        <div class="card-text">
                            <h3>Highly-trained technicians</h3>
                            <p>When it comes to safety on the road, it's vital to have expert technicians working on
                                your car. Our recruitment process
                                includes industry-leading, Ofsted-accredited training to ensure that, when our
                                technicians get out of the academy to
                                start inspecting, servicing, and repairing your vehicle, they're the best in the
                                trade.</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="about-card">
                        <div class="card-img">
                            <img src="{{ asset("frontend/assets_v2/imgs/about2.png")}}" alt="">
                        </div>

                        <div class="card-text">
                            <h3>Vehicle maintenance</h3>
                            <p>When it comes to safety on the road, it's vital to have expert technicians working on
                                your car. Our recruitment process
                                includes industry-leading, Ofsted-accredited training to ensure that, when our
                                technicians get out of the academy to
                                start inspecting, servicing, and repairing your vehicle, they're the best in the
                                trade.</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="about-card">
                        <div class="card-img">
                            <img src="{{ asset("frontend/assets_v2/imgs/about3.png")}}" alt="">
                        </div>

                        <div class="card-text">
                            <h3>Centres on your doorstep</h3>
                            <p>When it comes to safety on the road, it's vital to have expert technicians working on
                                your car. Our recruitment process
                                includes industry-leading, Ofsted-accredited training to ensure that, when our
                                technicians get out of the academy to
                                start inspecting, servicing, and repairing your vehicle, they're the best in the
                                trade.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ABOUT SECTION END --> --}}

    <!-- STOCK SECTION START -->
    <section class="stock-section">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="">WE STOCK A LARGE RANGE OF TYRES FOR ALL VEHICLES.</h2>
                <p>We are stockists of over 10,000+ Part worn tyres of all ranges and sizes from 12″ to 22″ for cars
                    and also stock
                    commercial van and trailer tyres. If there is a specific size that you cant find please let us
                    know and we will be more
                    than happy to help. Wholesale enquiries welcome</p>
            </div>


            <div class="row g-0 mt-5 pt-4">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/bridgestone-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/nexen-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/dunlop-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/continental-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/goodyear-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/maxxis-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/michelin-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/pirelli-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/uniroyal-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/roadstone-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/matador-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/riken-logo.webp') }}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- STOCK SECTION END -->

    <!-- OLDHAM SECTION START -->
    <section class="oldham-section">
        <div class="container">
            <div class="row align-items-center g-0 oldham-content">
                <div class="col-lg-6 ps-4 pe-md-5 ">
                    <div class="oldham-text">
                        <h2>TYRE ZONE OLDHAM</h2>
                        <h3>PROVIDING QUALITY PART WORN TYRES.</h3>

                        <p>We pride ourselves in providing superior quality products at affordable prices. All our
                            tyres are thoroughly checked
                            visually by trained tyre technicians and mechanically with a tyre pressure testing
                            machine with a aqua system, which
                            allows us to examine the tyres for any punctures or damages, we do this to ensure you
                            get a safe and quality product.</p>

                        <p>It is in the nature of part worn tyres to have puncture repairs, tiny cuts or nicks to
                            the side wall protectors however
                            this does not affect the use and performance of the tyre.</p>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="oldham-img">
                        <img src="{{ asset('frontend/assets_v2/imgs/oldham.png') }}" width="100%" alt="">
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- OLDHAM SECTION END -->


    <!-- BRAND SLIDER SECTION START -->
    <section class="logos-section-wrap ">
        <h2 class="text-center">We supply & fit tyres for all major vehicle manufacturers</h2>

        <div class="brands-wrapper">
            <div class="container ">
                <div class="brands-slide owl-carousel owl-theme" id="logo-slides">
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m1.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m2.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m2.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m3.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m4.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m5.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m6.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m7.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m8.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m9.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m10.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m11.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m12.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m13.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m15.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m16.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m17.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m18.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m19.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m20.webp') }}" alt="">
                    </div>
                    <div class="slide-logo"><img src="{{ asset('frontend/assets_v2/imgs/m21.webp') }}" alt="">
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- BRAND SLIDER SECTION END -->


    <!-- GOOGLE REVIEWS SECTION  -->
    <section class="reviews">
        <div class="container">
            <h2 class="text-center mb-5">Our Recent Google Reviews</h2>


            <div class="review-banner">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-6 mb-4 mb-sm-0">
                        <div class="review-rating">
                            <h3>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 85 36"
                                    class="injected-svg"
                                    data-src="https://static.elfsight.com/icons/app-all-in-one-reviews-logos-google-logo-multicolor.svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g clip-path="url(#a-102)">
                                        <path fill="#4285F4"
                                            d="M20.778 13.43h-9.862v2.927h6.994c-.345 4.104-3.76 5.854-6.982 5.854-4.123 0-7.72-3.244-7.72-7.791 0-4.43 3.429-7.841 7.73-7.841 3.317 0 5.272 2.115 5.272 2.115l2.049-2.122s-2.63-2.928-7.427-2.928C4.725 3.644 0 8.8 0 14.367c0 5.457 4.445 10.777 10.988 10.777 5.756 0 9.969-3.942 9.969-9.772 0-1.23-.179-1.941-.179-1.941Z">
                                        </path>
                                        <path fill="#EA4335"
                                            d="M28.857 11.312c-4.047 0-6.947 3.163-6.947 6.853 0 3.744 2.813 6.966 6.994 6.966 3.786 0 6.887-2.893 6.887-6.886 0-4.576-3.607-6.933-6.934-6.933Zm.04 2.714c1.99 0 3.876 1.609 3.876 4.201 0 2.538-1.878 4.192-3.885 4.192-2.205 0-3.945-1.766-3.945-4.212 0-2.394 1.718-4.181 3.954-4.181Z">
                                        </path>
                                        <path fill="#FBBC05"
                                            d="M43.965 11.312c-4.046 0-6.946 3.163-6.946 6.853 0 3.744 2.813 6.966 6.994 6.966 3.785 0 6.886-2.893 6.886-6.886 0-4.576-3.607-6.933-6.934-6.933Zm.04 2.714c1.99 0 3.876 1.609 3.876 4.201 0 2.538-1.877 4.192-3.885 4.192-2.205 0-3.945-1.766-3.945-4.212 0-2.394 1.718-4.181 3.955-4.181Z">
                                        </path>
                                        <path fill="#4285F4"
                                            d="M58.783 11.319c-3.714 0-6.634 3.253-6.634 6.904 0 4.16 3.385 6.918 6.57 6.918 1.97 0 3.017-.782 3.79-1.68v1.363c0 2.384-1.448 3.812-3.633 3.812-2.11 0-3.169-1.57-3.537-2.46l-2.656 1.11c.943 1.992 2.839 4.07 6.215 4.07 3.693 0 6.508-2.327 6.508-7.205V11.734h-2.897v1.17c-.89-.96-2.109-1.585-3.726-1.585Zm.269 2.709c1.821 0 3.69 1.554 3.69 4.21 0 2.699-1.865 4.187-3.73 4.187-1.98 0-3.823-1.608-3.823-4.161 0-2.653 1.914-4.236 3.863-4.236Z">
                                        </path>
                                        <path fill="#EA4335"
                                            d="M78.288 11.302c-3.504 0-6.446 2.788-6.446 6.901 0 4.353 3.28 6.934 6.782 6.934 2.924 0 4.718-1.6 5.789-3.032l-2.389-1.59c-.62.962-1.656 1.902-3.385 1.902-1.943 0-2.836-1.063-3.39-2.094l9.266-3.845-.48-1.126c-.896-2.207-2.984-4.05-5.747-4.05Zm.12 2.658c1.263 0 2.171.671 2.557 1.476l-6.187 2.586c-.267-2.002 1.63-4.062 3.63-4.062Z">
                                        </path>
                                        <path fill="#34A853" d="M67.425 24.727h3.044V4.359h-3.044v20.368Z"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="a-102">
                                            <path fill="#fff" d="M0 0h84.515v36H0z"></path>
                                        </clipPath>
                                    </defs>
                                </svg>
                                Reviews
                            </h3>
                            <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                                <h3>4.7 </h3>
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <span>(14,567)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-center text-sm-end">
                            <a href="#" class="review-btn d-inline-block">Review us on Google</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="owl-carousel owl-theme" id="reviews">


                <div class="review-card">
                    <div class="rev-header">
                        <div class="user-detail d-flex align-items-center">
                            <div class="avatar">
                                <img src="{{ asset('frontend/assets_v2/imgs/avatar.png') }}" alt="">

                                <div class="g-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 25"
                                        class="injected-svg"
                                        data-src="https://static.elfsight.com/icons/app-all-in-one-reviews-icons-google-multicolor-stroke.svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g clip-path="url(#a-219)">
                                            <path fill="#fff" stroke="#fff" stroke-linejoin="round" stroke-width="2"
                                                d="M11.8 1.5C5.835 1.5 1 6.335 1 12.3v.4c0 5.965 4.835 10.8 10.8 10.8 5.965 0 10.8-4.835 10.8-10.8v-.4c0-5.965-4.835-10.8-10.8-10.8Z">
                                            </path>
                                            <path fill="#2A84FC"
                                                d="M21.579 12.734c0-.677-.055-1.358-.172-2.025h-9.403v3.839h5.384a4.614 4.614 0 0 1-1.992 3.029v2.49h3.212c1.886-1.736 2.97-4.3 2.97-7.333Z">
                                            </path>
                                            <path fill="#00AC47"
                                                d="M12.004 22.474c2.688 0 4.956-.882 6.608-2.406l-3.213-2.491c-.893.608-2.047.952-3.392.952-2.6 0-4.806-1.754-5.597-4.113H3.095v2.567a9.97 9.97 0 0 0 8.909 5.491Z">
                                            </path>
                                            <path fill="#FFBA00"
                                                d="M6.407 14.416a5.971 5.971 0 0 1 0-3.817V8.03H3.095a9.977 9.977 0 0 0 0 8.952l3.312-2.567Z">
                                            </path>
                                            <path fill="#FC2C25"
                                                d="M12.004 6.482a5.417 5.417 0 0 1 3.824 1.494l2.846-2.846a9.581 9.581 0 0 0-6.67-2.593A9.967 9.967 0 0 0 3.095 8.03l3.312 2.57c.787-2.363 2.996-4.117 5.597-4.117Z">
                                            </path>
                                        </g>
                                        <defs>
                                            <clipPath id="a-219">
                                                <path fill="#fff" d="M0 0h24v24H0z" transform="translate(0 .5)">
                                                </path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>

                            </div>
                            <div class="username">
                                <h5>Bilal Khan</h5>
                                <span>1 day ago</span>
                            </div>
                        </div>

                    </div>
                    <div class="rev-content">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <p>Very good tyres at very good prices. I have been using this tyre garage for the past four
                            years and have always had a fast and professional service.</p>
                    </div>
                </div>

                <div class="review-card">
                    <div class="rev-header">
                        <div class="user-detail d-flex align-items-center">
                            <div class="avatar">
                                <img src="{{ asset('frontend/assets_v2/imgs/avatar.png') }}" alt="">

                                <div class="g-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 25"
                                        class="injected-svg"
                                        data-src="https://static.elfsight.com/icons/app-all-in-one-reviews-icons-google-multicolor-stroke.svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g clip-path="url(#a-219)">
                                            <path fill="#fff" stroke="#fff" stroke-linejoin="round" stroke-width="2"
                                                d="M11.8 1.5C5.835 1.5 1 6.335 1 12.3v.4c0 5.965 4.835 10.8 10.8 10.8 5.965 0 10.8-4.835 10.8-10.8v-.4c0-5.965-4.835-10.8-10.8-10.8Z">
                                            </path>
                                            <path fill="#2A84FC"
                                                d="M21.579 12.734c0-.677-.055-1.358-.172-2.025h-9.403v3.839h5.384a4.614 4.614 0 0 1-1.992 3.029v2.49h3.212c1.886-1.736 2.97-4.3 2.97-7.333Z">
                                            </path>
                                            <path fill="#00AC47"
                                                d="M12.004 22.474c2.688 0 4.956-.882 6.608-2.406l-3.213-2.491c-.893.608-2.047.952-3.392.952-2.6 0-4.806-1.754-5.597-4.113H3.095v2.567a9.97 9.97 0 0 0 8.909 5.491Z">
                                            </path>
                                            <path fill="#FFBA00"
                                                d="M6.407 14.416a5.971 5.971 0 0 1 0-3.817V8.03H3.095a9.977 9.977 0 0 0 0 8.952l3.312-2.567Z">
                                            </path>
                                            <path fill="#FC2C25"
                                                d="M12.004 6.482a5.417 5.417 0 0 1 3.824 1.494l2.846-2.846a9.581 9.581 0 0 0-6.67-2.593A9.967 9.967 0 0 0 3.095 8.03l3.312 2.57c.787-2.363 2.996-4.117 5.597-4.117Z">
                                            </path>
                                        </g>
                                        <defs>
                                            <clipPath id="a-219">
                                                <path fill="#fff" d="M0 0h24v24H0z" transform="translate(0 .5)">
                                                </path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>

                            </div>
                            <div class="username">
                                <h5>Bilal Khan</h5>
                                <span>1 day ago</span>
                            </div>
                        </div>

                    </div>
                    <div class="rev-content">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <p>Very good tyres at very good prices. I have been using this tyre garage for the past four
                            years and have always had a fast and professional service.</p>
                    </div>
                </div>

                <div class="review-card">
                    <div class="rev-header">
                        <div class="user-detail d-flex align-items-center">
                            <div class="avatar">
                                <img src="{{ asset('frontend/assets_v2/imgs/avatar.png') }}" alt="">

                                <div class="g-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 25"
                                        class="injected-svg"
                                        data-src="https://static.elfsight.com/icons/app-all-in-one-reviews-icons-google-multicolor-stroke.svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g clip-path="url(#a-219)">
                                            <path fill="#fff" stroke="#fff" stroke-linejoin="round" stroke-width="2"
                                                d="M11.8 1.5C5.835 1.5 1 6.335 1 12.3v.4c0 5.965 4.835 10.8 10.8 10.8 5.965 0 10.8-4.835 10.8-10.8v-.4c0-5.965-4.835-10.8-10.8-10.8Z">
                                            </path>
                                            <path fill="#2A84FC"
                                                d="M21.579 12.734c0-.677-.055-1.358-.172-2.025h-9.403v3.839h5.384a4.614 4.614 0 0 1-1.992 3.029v2.49h3.212c1.886-1.736 2.97-4.3 2.97-7.333Z">
                                            </path>
                                            <path fill="#00AC47"
                                                d="M12.004 22.474c2.688 0 4.956-.882 6.608-2.406l-3.213-2.491c-.893.608-2.047.952-3.392.952-2.6 0-4.806-1.754-5.597-4.113H3.095v2.567a9.97 9.97 0 0 0 8.909 5.491Z">
                                            </path>
                                            <path fill="#FFBA00"
                                                d="M6.407 14.416a5.971 5.971 0 0 1 0-3.817V8.03H3.095a9.977 9.977 0 0 0 0 8.952l3.312-2.567Z">
                                            </path>
                                            <path fill="#FC2C25"
                                                d="M12.004 6.482a5.417 5.417 0 0 1 3.824 1.494l2.846-2.846a9.581 9.581 0 0 0-6.67-2.593A9.967 9.967 0 0 0 3.095 8.03l3.312 2.57c.787-2.363 2.996-4.117 5.597-4.117Z">
                                            </path>
                                        </g>
                                        <defs>
                                            <clipPath id="a-219">
                                                <path fill="#fff" d="M0 0h24v24H0z" transform="translate(0 .5)">
                                                </path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>

                            </div>
                            <div class="username">
                                <h5>Bilal Khan</h5>
                                <span>1 day ago</span>
                            </div>
                        </div>

                    </div>
                    <div class="rev-content">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <p>Very good tyres at very good prices. I have been using this tyre garage for the past four
                            years and have always had a fast and professional service.</p>
                    </div>
                </div>

                <div class="review-card">
                    <div class="rev-header">
                        <div class="user-detail d-flex align-items-center">
                            <div class="avatar">
                                <img src="{{ asset('frontend/assets_v2/imgs/avatar.png') }}" alt="">

                                <div class="g-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 25"
                                        class="injected-svg"
                                        data-src="https://static.elfsight.com/icons/app-all-in-one-reviews-icons-google-multicolor-stroke.svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g clip-path="url(#a-219)">
                                            <path fill="#fff" stroke="#fff" stroke-linejoin="round" stroke-width="2"
                                                d="M11.8 1.5C5.835 1.5 1 6.335 1 12.3v.4c0 5.965 4.835 10.8 10.8 10.8 5.965 0 10.8-4.835 10.8-10.8v-.4c0-5.965-4.835-10.8-10.8-10.8Z">
                                            </path>
                                            <path fill="#2A84FC"
                                                d="M21.579 12.734c0-.677-.055-1.358-.172-2.025h-9.403v3.839h5.384a4.614 4.614 0 0 1-1.992 3.029v2.49h3.212c1.886-1.736 2.97-4.3 2.97-7.333Z">
                                            </path>
                                            <path fill="#00AC47"
                                                d="M12.004 22.474c2.688 0 4.956-.882 6.608-2.406l-3.213-2.491c-.893.608-2.047.952-3.392.952-2.6 0-4.806-1.754-5.597-4.113H3.095v2.567a9.97 9.97 0 0 0 8.909 5.491Z">
                                            </path>
                                            <path fill="#FFBA00"
                                                d="M6.407 14.416a5.971 5.971 0 0 1 0-3.817V8.03H3.095a9.977 9.977 0 0 0 0 8.952l3.312-2.567Z">
                                            </path>
                                            <path fill="#FC2C25"
                                                d="M12.004 6.482a5.417 5.417 0 0 1 3.824 1.494l2.846-2.846a9.581 9.581 0 0 0-6.67-2.593A9.967 9.967 0 0 0 3.095 8.03l3.312 2.57c.787-2.363 2.996-4.117 5.597-4.117Z">
                                            </path>
                                        </g>
                                        <defs>
                                            <clipPath id="a-219">
                                                <path fill="#fff" d="M0 0h24v24H0z" transform="translate(0 .5)">
                                                </path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>

                            </div>
                            <div class="username">
                                <h5>Bilal Khan</h5>
                                <span>1 day ago</span>
                            </div>
                        </div>

                    </div>
                    <div class="rev-content">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <p>Very good tyres at very good prices. I have been using this tyre garage for the past four
                            years and have always had a fast and professional service.</p>
                    </div>
                </div>

                <div class="review-card">
                    <div class="rev-header">
                        <div class="user-detail d-flex align-items-center">
                            <div class="avatar">
                                <img src="{{ asset('frontend/assets_v2/imgs/avatar.png') }}" alt="">

                                <div class="g-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 25"
                                        class="injected-svg"
                                        data-src="https://static.elfsight.com/icons/app-all-in-one-reviews-icons-google-multicolor-stroke.svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g clip-path="url(#a-219)">
                                            <path fill="#fff" stroke="#fff" stroke-linejoin="round" stroke-width="2"
                                                d="M11.8 1.5C5.835 1.5 1 6.335 1 12.3v.4c0 5.965 4.835 10.8 10.8 10.8 5.965 0 10.8-4.835 10.8-10.8v-.4c0-5.965-4.835-10.8-10.8-10.8Z">
                                            </path>
                                            <path fill="#2A84FC"
                                                d="M21.579 12.734c0-.677-.055-1.358-.172-2.025h-9.403v3.839h5.384a4.614 4.614 0 0 1-1.992 3.029v2.49h3.212c1.886-1.736 2.97-4.3 2.97-7.333Z">
                                            </path>
                                            <path fill="#00AC47"
                                                d="M12.004 22.474c2.688 0 4.956-.882 6.608-2.406l-3.213-2.491c-.893.608-2.047.952-3.392.952-2.6 0-4.806-1.754-5.597-4.113H3.095v2.567a9.97 9.97 0 0 0 8.909 5.491Z">
                                            </path>
                                            <path fill="#FFBA00"
                                                d="M6.407 14.416a5.971 5.971 0 0 1 0-3.817V8.03H3.095a9.977 9.977 0 0 0 0 8.952l3.312-2.567Z">
                                            </path>
                                            <path fill="#FC2C25"
                                                d="M12.004 6.482a5.417 5.417 0 0 1 3.824 1.494l2.846-2.846a9.581 9.581 0 0 0-6.67-2.593A9.967 9.967 0 0 0 3.095 8.03l3.312 2.57c.787-2.363 2.996-4.117 5.597-4.117Z">
                                            </path>
                                        </g>
                                        <defs>
                                            <clipPath id="a-219">
                                                <path fill="#fff" d="M0 0h24v24H0z" transform="translate(0 .5)">
                                                </path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>

                            </div>
                            <div class="username">
                                <h5>Bilal Khan</h5>
                                <span>1 day ago</span>
                            </div>
                        </div>

                    </div>
                    <div class="rev-content">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <p>Very good tyres at very good prices. I have been using this tyre garage for the past four
                            years and have always had a fast and professional service.</p>
                    </div>
                </div>


            </div>


            <!-- <div class="owl-carousel owl-theme" id="reviews">

                                                <div class="review-card">
                                                    <div class="rev-header">
                                                        <h5>Bilal Khan</h5>
                                                        <div class="stars">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="rev-content">
                                                        <p>Very good tyres at very good prices. I have been using this tyre garage for the past four
                                                            years and have always had a fast and professional service.</p>
                                                    </div>
                                                </div>
                                                <div class="review-card">
                                                    <div class="rev-header">
                                                        <h5>Bilal Khan</h5>
                                                        <div class="stars">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="rev-content">
                                                        <p>Very good tyres at very good prices. I have been using this tyre garage for the past four
                                                            years and have always had a fast and professional service.</p>
                                                    </div>
                                                </div>
                                                <div class="review-card">
                                                    <div class="rev-header">
                                                        <h5>Bilal Khan</h5>
                                                        <div class="stars">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="rev-content">
                                                        <p>Very good tyres at very good prices. I have been using this tyre garage for the past four
                                                            years and have always had a fast and professional service.</p>
                                                    </div>
                                                </div>
                                                <div class="review-card">
                                                    <div class="rev-header">
                                                        <h5>Bilal Khan</h5>
                                                        <div class="stars">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="rev-content">
                                                        <p>Very good tyres at very good prices. I have been using this tyre garage for the past four
                                                            years and have always had a fast and professional service.</p>
                                                    </div>
                                                </div>
                                                <div class="review-card">
                                                    <div class="rev-header">
                                                        <h5>Bilal Khan</h5>
                                                        <div class="stars">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="rev-content">
                                                        <p>Very good tyres at very good prices. I have been using this tyre garage for the past four
                                                            years and have always had a fast and professional service.</p>
                                                    </div>
                                                </div>


                                            </div> -->


        </div>
    </section>
    <!-- GOOGLE REVIEWS SECTION ENS -->




@endsection


@section('customjs')
    <script>
        // main image slider
        $('#main-slider-1').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            autoplaySpeed: 1000,
            margin: 0,
            dots: true,
            nav: false,
            items: 1,
            responsive: {
                0: {
                    items: 1
                }

            }
        });


        $('#reviews').owlCarousel({
            loop: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplaySpeed: 1000,
            autoplayHoverPause: true,
            margin: 25,
            dots: true,
            nav: false,
            items: 3,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                992: {
                    items: 3
                }

            }
        });





        $('#logo-slides').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplaySpeed: 1000,
            autoplayHoverPause: true,
            margin: 0,
            dots: false,
            nav: false,
            items: 7,
            responsive: {
                0: {
                    items: 3
                },
                576: {
                    items: 4
                },
                992: {
                    items: 5
                },
                1200: {
                    items: 7
                }

            }
        });
    </script>


    {{-- <script>
        $("#width").change(function() {
            let val = $("#width").val();
            $.ajax({
                url: "{{ route('get.profiles') }}",
                type: "post",
                data: {
                    id: val
                },
                success: function(res) {
                    console.log(res);
                    $("#profile").find("option").not(":first").remove();
                    $.each(res.profiles, function(key, item) {
                        $("#profile").append(
                            `<option value='${item.id}' >${item.profile}</option>`
                        )
                    });
                }
            })
        });

        $("#profile").change(function() {
            let val = $("#profile").val();
            $.ajax({
                url: "{{ route('get.rim.size') }}",
                type: "post",
                data: {
                    id: val
                },
                success: function(res) {
                    console.log(res);
                    $("#rim_size").find("option").not(":first").remove();
                    $.each(res.rim_sizes, function(key, item) {
                        $("#rim_size").append(
                            `<option value='${item.id}' >${item.rim_size}</option>`
                        )
                    });
                }
            })
        });
    </script> --}}
@endsection
