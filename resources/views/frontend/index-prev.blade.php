@extends('frontend.layout.app')


@section('main')
    <div class="wrapper">

        <div class="main-hero">
            <!-- HERO BG SLIDER -->
            <div class="bg-slider owl-carousel owl-theme">
                <div class="bg-slide-img slide1"
                    style="background-image: url({{ asset('frontend/assets/imgs/hero-slides/Website-banner.jpg') }});">
                </div>
                <div class="bg-slide-img slide2"
                    style="background-image: url({{ asset('frontend/assets/imgs/hero-slides/Website-banner-2.jpg') }});">
                </div>
            </div>
            <!-- HERO BG SLIDER END -->
            @include('frontend.includes.header')

            <!-- HERO SECTION START -->
            <section class="hero-section">
                <div class="container">



                    <div class="tab-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tyre-fitting">Search
                                    by
                                    Tyre</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#car-services">Search by Reg.</button>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <!-- <div class="tab-content  pt-4"> -->

                            <div class="tab-pane fade show active position-relative" id="tyre-fitting">

                                <div class="row ">

                                    <div class="col-lg-12">
                                        <div class="size" style="height: auto;">

                                            <h4 class="">Find tyres by size</h4>
                                            <form action="{{ route('search') }}">
                                                <div class="row">

                                                    <div class="col-6 ">
                                                        <div class="form-group">
                                                            <label for="">Width</label>
                                                            <select name="width" id="width" class="form-select">
                                                                <option disabled selected>Select</option>
                                                                @if ($widths->isNotEmpty())
                                                                    @foreach ($widths as $width)
                                                                        <option value="{{ $width->id }}">
                                                                            {{ $width->width }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 ">
                                                        <div class="form-group">
                                                            <label for="">Profile</label>
                                                            <select name="profile" id="profile" required
                                                                class="form-select">
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
                                                            <select name="rim_size" id="rim_size" class="form-select">
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

                                                    <!-- <div class="col-lg-8 px-5 d-none d-md-block">
                                                                                                    <img src="assets/imgs/tyre.png" width="100%" alt="">
                                                                                                    -->
                                                    <div class="col-12  mt-3">
                                                        <button class="main-btn w-100">Search </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>




                                        <!-- <div class="d-flex justify-content-between align-items-center">
                                                                                                <div class="d-flex flex-wrap radio">
                                                                                                    <div class="form-check ps-0 me-4">
                                                                                                        <input type="radio" name="fit-opt" id="sgarage">
                                                                                                        <label for="sgarage">Garage Fitted</label>
                                                                                                    </div>

                                                                                                    <div class="form-check ps-0">
                                                                                                        <input type="radio" name="fit-opt" id="smobile">
                                                                                                        <label for="smobile">Mobile Fitted</label>
                                                                                                    </div>

                                                                                                </div>
                                                                                                <button class="m-btn mt-3">Search</button>
                                                                                            </div> -->

                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- </div> -->

                            <div class="tab-pane fade position-relative" id="car-services">

                                <div class="row cars">
                                    <div class="col-lg-12">
                                        <form action="">
                                            <div class="number">
                                                <h4>Enter your registration</h4>

                                                <div class=" d-flex flex-column gap-2 flex-sm-row align-items-stretch mt-4">
                                                    <div class="input-wrap">
                                                        <input type="text" placeholder="VEHICLE REG.NO.">
                                                    </div>
                                                    <button class="main-btn">Search</button>
                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="row"> -->
                <!-- <div class="col-md-9">
                                                                        <div class="">
                                                                            <h1>Tyres</h1>
                                                                            <form action="">
                                                                                <div class="">
                                                                                    <p>BY SIZE ____</p>
                                                                                    <div class="row">

                                                                                        <div class="col-md-4 mb-3">
                                                                                            <div class="form-group">
                                                                                                <select name="" class="form-select" id="">
                                                                                                    <option value="">Diameter</option>
                                                                                                    <option>215</option>
                                                                                                    <option>225</option>
                                                                                                    <option>235</option>
                                                                                                    <option>245</option>
                                                                                                    <option>305</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-4 mb-3">
                                                                                            <div class="form-group">
                                                                                                <select name="" class="form-select" id="">
                                                                                                    <option value="">Width</option>
                                                                                                    <option>215</option>
                                                                                                    <option>225</option>
                                                                                                    <option>235</option>
                                                                                                    <option>245</option>
                                                                                                    <option>305</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-4 mb-3">
                                                                                            <div class="form-group">
                                                                                                <select name="" class="form-select" id="">
                                                                                                    <option value="">Rim</option>
                                                                                                    <option>215</option>
                                                                                                    <option>225</option>
                                                                                                    <option>235</option>
                                                                                                    <option>245</option>
                                                                                                    <option>305</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>


                                                                                    </div>
                                                                                </div>
                                                                                <div class="">
                                                                                    <div class="row">

                                                                                        <div class="col-md-4 mb-3">
                                                                                            <div class="form-group">
                                                                                                <p>BY VEHICLE</p>
                                                                                                <div class="row">

                                                                                                    <div class="col-6">

                                                                                                        <select class="form-select">
                                                                                                            <option value="">Make</option>
                                                                                                            <option>Acura</option>
                                                                                                            <option>BMW</option>
                                                                                                            <option>Ferrari</option>
                                                                                                            <option>Ford</option>
                                                                                                        </select>

                                                                                                    </div>

                                                                                                    <div class="col-6">
                                                                                                        <select name="" class="form-select" id="">
                                                                                                            <option value="">Model</option>
                                                                                                            <option>2010</option>
                                                                                                            <option>2012</option>
                                                                                                            <option>2009</option>
                                                                                                            <option>2014</option>
                                                                                                            <option>2020</option>
                                                                                                        </select>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-4 mb-3">
                                                                                            <div class="form-group">
                                                                                                <p>BRAND _____</p>
                                                                                                <select name="" class="form-select" id="">
                                                                                                    <option value="">Width</option>
                                                                                                    <option>Accelera</option>
                                                                                                    <option>Anchee</option>
                                                                                                    <option>Aoteli</option>
                                                                                                    <option>ATLAS</option>
                                                                                                    <option>Avon</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-4 mb-3">
                                                                                            <div class="form-group">
                                                                                                <p>TYPE ____</p>
                                                                                                <select name="" class="form-select" id="">
                                                                                                    <option value="">Select</option>
                                                                                                    <option>Winter</option>
                                                                                                    <option>Summer</option>
                                                                                                    <option>All Season</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>


                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-end">
                                                                                    <button class="main-btn">Search</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div> -->





                <!-- </div  -->
            </section>
            <!-- HERO SECTION END -->
        </div>





        <!-- STEPS SETION START -->
        <section class="steps">
            <div class="container-fluid">
                <div class="row g-0">

                    <div class="col-lg-3 col-sm-6">
                        <div class="step-card">
                            <span class="step-count">01</span>
                            <div class="step-img">
                                <img src="{{ asset('frontend/assets/imgs/step-car.png') }}" alt="">
                            </div>
                            <div class="step-text">
                                <h5>PICK A SUITABLE DATE</h5>
                                <p>TYRE ZONE tyres Ltd recovery team are on standby 24/7 to provide fast roadside tyre
                                    fitting services when needed.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="step-card">
                            <span class="step-count">02</span>
                            <div class="step-img">
                                <img src="{{ asset('frontend/assets/imgs/step-calendar.png') }}" alt="">
                            </div>
                            <div class="step-text">
                                <h5 class="text-uppercase">PICK A SUITABLE DATE.</h5>
                                <p>Pick a date and time and pay on deliver</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="step-card">
                            <span class="step-count">03</span>
                            <div class="step-img">
                                <img src="{{ asset('frontend/assets/imgs/step-mechanic.png') }}" alt="">
                            </div>
                            <div class="step-text">
                                <h5 class="text-uppercase">COME TO US OR WE COME TO YOU.</h5>
                                <p>Visit our garage or opt for our Car Services</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="step-card active">
                            <div class="step-img">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="step-text">
                                <h5 class="text-uppercase">FOR A QUICK CALL</h5>
                                <a href="tel:07563896325">07563 896325</a>
                                <p>Get free advice from our experts who are on hand to help</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- STEPS SETION END -->

        <!-- SERVICES SECTION START -->
        <section class="services overlay">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-6 gy-4">
                        <div class="service-card d-flex ">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/imgs/1.PNG') }}" alt="">
                            </div>
                            <div class="service-text">
                                <h6>AIR CONDITIONING</h6>
                                <p>We offer a full range of garage services to vehicle owners in Tucson.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 gy-4">
                        <div class="service-card d-flex ">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/imgs/2.PNG') }}" alt="">
                            </div>
                            <div class="service-text">
                                <h6>BELT AND HOSES</h6>
                                <p>We offer a full range of garage services to vehicle owners in Tucson.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 gy-4">
                        <div class="service-card d-flex ">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/imgs/3.PNG') }}" alt="">
                            </div>
                            <div class="service-text">
                                <h6>LUBE, OILS AND FILTERS</h6>
                                <p>We offer a full range of garage services to vehicle owners in Tucson.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 gy-4">
                        <div class="service-card d-flex ">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/imgs/3.PNG') }}" alt="">
                            </div>
                            <div class="service-text">
                                <h6>LUBE, OILS AND FILTERS</h6>
                                <p>We offer a full range of garage services to vehicle owners in Tucson.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 gy-4">
                        <div class="service-card d-flex ">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/imgs/4.PNG') }}" alt="">
                            </div>
                            <div class="service-text">
                                <h6>BRAKE REPAIR</h6>
                                <p>We offer a full range of garage services to vehicle owners in Tucson.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 gy-4">
                        <div class="service-card d-flex ">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/imgs/5.PNG') }}" alt="">
                            </div>
                            <div class="service-text">
                                <h6>ENGINE DIAGNOSTIC</h6>
                                <p>We offer a full range of garage services to vehicle owners in Tucson.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>


        <!-- ORDER STEP SECTION  -->
        <section class="order-step">
            <div class="container">
                <h2 class="text-center">Order Tyres in 4 easy steps</h2>
                <div class="row">

                    <div class="col-lg-6 mb-3">
                        <div class="order-step-card">
                            <div class="o-step-count">
                                <h4>01</h4>
                                <div class="icon-box">
                                    <i class="fa-regular fa-snowflake"></i>
                                </div>
                            </div>

                            <div class="o-step-text">
                                <h5>Choose Your Tyres</h5>
                                <p>Use the vehicle registration tool above and select the correct tyre size that fit
                                    your make and model.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="order-step-card">
                            <div class="o-step-count">
                                <h4>02</h4>
                                <div class="icon-box">
                                    <i class="fa-solid fa-circle-radiation"></i>
                                </div>
                            </div>

                            <div class="o-step-text">
                                <h5>Shop our range</h5>
                                <p>Shop from a range fo tyres available for your vehicle and select your chosen tyre.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="order-step-card">
                            <div class="o-step-count">
                                <h4>03</h4>
                                <div class="icon-box">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                            </div>

                            <div class="o-step-text">
                                <h5>Select a date and time</h5>
                                <p>Find your local garage or choose our 'We'll come to you option' for tyres fitted on
                                    your drive.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="order-step-card">
                            <div class="o-step-count">
                                <h4>04</h4>
                                <div class="icon-box">
                                    <i class="fa-solid fa-volleyball"></i>
                                </div>
                            </div>

                            <div class="o-step-text">
                                <h5>Get your tyres fitted</h5>
                                <p>Our trained technicians will fit your tyres at the selected location so you can drive
                                    away happy.</p>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- ORDER STEP SECTION END -->



        <!-- RECOMMENDED SECTION START -->
        <section class="recommended-section">
            <div class="container">
                <h2 class="text-center">Recommended Tyres
                </h2>

                <div class="row">

                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="recommended-card">
                            <!-- <div class="b-logo">
                                                                            <img src="assets/imgs/continental-logo.webp" alt="">
                                                                        </div> -->

                            <div class="card-img">
                                <img src="{{ asset('frontend/assets/imgs/continental01.webp') }}" alt="">
                            </div>

                            <div class="rem-card-text">
                                <h3>Continental Tyres</h3>
                                <p>Continental tyres are made up of high-quality materials and offers top-notch
                                    performance. It offers a variety of tyres in the summer, winter and all-season
                                    segment to assist you to drive comfortably on dry, wet and uneven roads with ease.
                                </p>
                            </div>

                            <div class="rem-card-btn mt-5">
                                <a href="#">View all Continental Tyres</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="recommended-card">


                            <div class="card-img">
                                <img src="{{ asset('frontend/assets/imgs/michelin01.png') }}" alt="">
                            </div>

                            <div class="rem-card-text">
                                <h3>Michelin Tyres</h3>
                                <p>Michelin tyres is a premium tyre brands with diverse varieties of tyres like summer,
                                    winter, all-season and high-performance as per the motorist’s need. The brand
                                    promises agility, control, and superior balance with every purchase. It even comes
                                    with advanced benefits like hydroplaning resistance, inter-connected grooves to
                                    deliver a high-quality driving experience that you deserve.</p>
                            </div>

                            <div class="rem-card-btn">
                                <a href="#" class="blue-btn">View all Continental Tyres</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="recommended-card">

                            <div class="card-img">
                                <img src="{{ asset('frontend/assets/imgs/pirelli-tyres.png') }}" alt="">
                            </div>

                            <div class="rem-card-text">
                                <h3>Pirelli Tyres</h3>
                                <p>Pirelli Tyres are engineered with superior quality compounds and advanced groove
                                    design that enables the motorist to drive comfortably on wet, icy and dry road
                                    services. The brand provides its customers with diverse tyre types to maintain
                                    traction even on the most challenging terrains. It also has a lug-groove patterns,
                                    so the vehicle never sways to alternate sides.</p>
                            </div>

                            <div class="rem-card-btn">
                                <a href="#" class="blue-btn">View all Continental Tyres</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- RECOMMENDED SECTION END -->



        <!-- MAIN SLIDER SECTION START -->
        <section class="main-img-slider owl-carousel owl-theme" id="main-slider-1">

            <div class="slide-img">
                <img src="{{ asset('frontend/assets/imgs/main-slider/main-slider1.webp') }}" width="100%"
                    alt="">
            </div>

            <div class="slide-img">
                <img src="{{ asset('frontend/assets/imgs/main-slider/main-slider2.webp') }}" width="100%"
                    alt="">
            </div>

            <div class="slide-img">
                <img src="{{ asset('frontend/assets/imgs/main-slider/main-slider3.webp') }}" width="100%"
                    alt="">
            </div>

            <div class="slide-img">
                <img src="{{ asset('frontend/assets/imgs/main-slider/main-slider4.webp') }}" width="100%"
                    alt="">
            </div>

            <div class="slide-img">
                <img src="{{ asset('frontend/assets/imgs/main-slider/main-slider5.webp') }}" width="100%"
                    alt="">
            </div>


        </section>
        <!-- MAIN SLIDER SECTION END -->

        <!-- WHY CHOOSE US START -->
        <section class="why-choose">
            <div class="container">
                <h2 class="text-center">Why Tyre Zone?</h2>

                <div class="row mt-5">

                    <div class="col-lg-4 mb-5 mb-lg-3">
                        <div class="why-card h-100">
                            <div class="why-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#e8eaed">
                                    <path
                                        d="M42-120v-112q0-33 17-62t47-44q51-26 115-44t141-18q77 0 141 18t115 44q30 15 47 44t17 62v112H42Zm80-80h480v-32q0-11-5.5-20T582-266q-36-18-92.5-36T362-320q-71 0-127.5 18T142-266q-9 5-14.5 14t-5.5 20v32Zm240-240q-66 0-113-47t-47-113h-10q-9 0-14.5-5.5T172-620q0-9 5.5-14.5T192-640h10q0-45 22-81t58-57v38q0 9 5.5 14.5T302-720q9 0 14.5-5.5T322-740v-54q9-3 19-4.5t21-1.5q11 0 21 1.5t19 4.5v54q0 9 5.5 14.5T422-720q9 0 14.5-5.5T442-740v-38q36 21 58 57t22 81h10q9 0 14.5 5.5T552-620q0 9-5.5 14.5T532-600h-10q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T442-600H282q0 33 23.5 56.5T362-520Zm300 160-6-30q-6-2-11.5-4.5T634-402l-28 10-20-36 22-20v-24l-22-20 20-36 28 10q4-4 10-7t12-5l6-30h40l6 30q6 2 12 5t10 7l28-10 20 36-22 20v24l22 20-20 36-28-10q-5 5-10.5 7.5T708-390l-6 30h-40Zm20-70q12 0 21-9t9-21q0-12-9-21t-21-9q-12 0-21 9t-9 21q0 12 9 21t21 9Zm72-130-8-42q-9-3-16.5-7.5T716-620l-42 14-28-48 34-30q-2-5-2-8v-16q0-3 2-8l-34-30 28-48 42 14q6-6 13.5-10.5T746-798l8-42h56l8 42q9 3 16.5 7.5T848-780l42-14 28 48-34 30q2 5 2 8v16q0 3-2 8l34 30-28 48-42-14q-6 6-13.5 10.5T818-602l-8 42h-56Zm28-90q21 0 35.5-14.5T832-700q0-21-14.5-35.5T782-750q-21 0-35.5 14.5T732-700q0 21 14.5 35.5T782-650ZM362-200Z" />
                                </svg>
                            </div>

                            <div class="card-text">
                                <h5>Highly-trained technicians</h5>
                                <p>When it comes to safety on the road, it's vital to have expert technicians working on
                                    your car. Our recruitment process includes industry-leading, Ofsted-accredited
                                    training to ensure that, when our technicians get out of the academy to start
                                    inspecting, servicing, and repairing your vehicle, they're the best in the trade.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-3">
                        <div class="why-card h-100">
                            <div class="why-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#e8eaed">
                                    <path
                                        d="M440-346q-43-14-70.5-50T342-480q0-58 41-99t99-41q58 0 99 41t41 99h-42q-11 0-20.5 1.5T541-474v-7q0-25-17-42t-42-17q-25 0-42.5 17.5T422-480q0 21 12.5 36.5T467-423q-12 17-19 36t-8 41Zm42-134ZM370-80l-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v13.5h-80q-1-19-3-33.5t-6-27.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q24 25 54 42t65 22v184h-70Zm210 0q-25 0-42.5-17.5T520-140v-200q0-18 9-32t24-22l27 54h60l-30-60h60l30 60h60l-30-60h60l30 60h60l-30-60h10q25 0 42.5 17.5T920-340v200q0 25-17.5 42.5T860-80H580Zm0-60h280v-140H580v140Zm-98-340Z" />
                                </svg>
                            </div>

                            <div class="card-text">
                                <!-- to suit your needs & budget -->
                                <h5>Vehicle maintenance </h5>
                                <p>It's not just about the tyres. Our services run the whole range of what you need to
                                    keep your car reliable and happy – from MOT tests and vehicle servicing, to battery
                                    and brake inspections & replacements, exhausts, suspension components, and much
                                    more.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-3">
                        <div class="why-card h-100">
                            <div class="why-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#e8eaed">
                                    <path
                                        d="M519-82v-80q42-6 81.5-23t74.5-43l58 58q-47 37-101 59.5T519-82Zm270-146-56-56q26-33 42-72.5t22-83.5h82q-8 62-30.5 115.5T789-228Zm8-292q-6-45-22-84.5T733-676l56-56q38 44 61.5 98T879-520h-82ZM439-82q-153-18-255.5-131T81-480q0-155 102.5-268T439-878v80q-120 17-199 107t-79 211q0 121 79 210.5T439-162v80Zm238-650q-36-27-76-44t-82-22v-80q59 5 113 27.5T733-790l-56 58ZM480-280q-58-49-109-105t-51-131q0-68 46.5-116T480-680q67 0 113.5 48T640-516q0 75-51 131T480-280Zm0-200q18 0 30.5-12.5T523-523q0-17-12.5-30T480-566q-18 0-30.5 13T437-523q0 18 12.5 30.5T480-480Z" />
                                </svg>
                            </div>

                            <div class="card-text">
                                <h5>Centres on your doorstep</h5>
                                <p>What's more, we have over 600 centres in the United Kingdom with centres across
                                    England, Scotland, Wales, and Northern Ireland, so you'll be hard pressed to find a
                                    Tyre Zone centre that's not local to you!
                                </p>
                            </div>

                        </div>
                    </div>


                </div>


            </div>
        </section>
        <!-- WHY CHOOSE US END -->

        <!-- CONTACT SECTION -->
        <section class="home-contact-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="contact-context d-flex h-100">
                            <div class="icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="contact-text">
                                <h4>FEEL FREE TO CONTACT</h4>
                                <p>
                                    <a href="tel:07563896325">07563 896325</a>

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="contact-context d-flex h-100">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-text">
                                <h4>OUR ADDRESS</h4>
                                <p>
                                    Buckley Transport, The Old Gas Works, Higginshaw Lane, Oldham, OL2 6HQ
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="contact-context border-0 d-flex h-100">
                            <div class="icon">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div class="contact-text">
                                <h4>OPENING HOURS</h4>
                                <p>
                                    Monday to Saturday 7:30am - 5:30pm
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- CONTACT SECTION -->

        <!-- BRANDS SECTION START -->
        <section class="brands">
            <h2 class="text-center">WE STOCK A LARGE RANGE OF TYRES FOR ALL VEHICLES.</h2>
            <p class="text-center">We are stockists of over 10,000+ Part worn tyres of all ranges and sizes from 12″ to
                22″ for cars and also stock commercial van and trailer tyres. If there is a specific size that you cant
                find please let us know and we will be more than happy to help. Wholesale enquiries welcome</p>


            <div class="row g-0">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets/imgs/brands/bridgestone-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets/imgs/brands/nexen-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets/imgs/brands/dunlop-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets/imgs/brands/continental-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets/imgs/brands/goodyear-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets/imgs/brands/maxxis-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets/imgs/brands/michelin-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets/imgs/brands/pirelli-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets/imgs/brands/uniroyal-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets/imgs/brands/roadstone-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets/imgs/brands/matador-logo.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="{{ asset('frontend/assets/imgs/brands/riken-logo.webp') }}" alt="">
                    </div>
                </div>
            </div>



        </section>
        <!-- BRANDS SECTION END -->



        <!-- ABOUT SECTION START -->
        <section class="about-section">

            <div class="about-header container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="{{ asset('frontend/assets/imgs/about-image.jpg') }}" width="100%" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="about-h-text">
                            <h3 class="mb-2">TYRE ZONE OLDHAM</h3>
                            <h6>PROVIDING QUALITY PART WORN TYRES.</h6>

                            <p>We pride ourselves in providing superior quality products at affordable prices. All our
                                tyres are thoroughly checked visually by trained tyre technicians and mechanically with
                                a tyre pressure testing machine with a aqua system, which allows us to examine the tyres
                                for any punctures or damages, we do this to ensure you get a safe and quality product.

                            </p>

                            <p>It is in the nature of part worn tyres to have puncture repairs, tiny cuts or
                                nicks to the side wall protectors however this does not affect the use and
                                performance of the tyre.</p>

                        </div>
                    </div>
                </div>


            </div>




        </section>
        <!-- ABOUT SECTION END -->


        <!-- BRANDS SLIDER SECTION -->
        <section class="logos-section">
            <h2 class="text-center">We supply & fit tyres for all major vehicle manufacturers</h2>

            <div class="brands-slide owl-carousel owl-theme" id="logo-slides">
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m1.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m2.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m2.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m3.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m4.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m5.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m6.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m7.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m8.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m9.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m10.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m11.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m12.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m13.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m15.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m16.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m17.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m18.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m19.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m20.webp') }}" alt="">
                </div>
                <div class="slide-logo"><img src="{{ asset('frontend/assets/imgs/logos/m21.webp') }}" alt="">
                </div>

            </div>

        </section>
        <!-- BRANDS SLIDER SECTION END -->

        <!-- BANNERS SECTION START -->
        <section class="banner-section">
            <div class="row px-2">

                <div class="col-md-6 my-2 px-2">
                    <img src="assets/imgs/maxxis-banner.jpg" width="100%" alt="">
                </div>
                <div class="col-md-6 my-2 px-2">
                    <img src="assets/imgs/pirell-bannei.jpg" width="100%" alt="">
                </div>
                <div class="col-md-6 my-2 px-2">
                    <img src="assets/imgs/continental-offer.jpg" width="100%" alt="">
                </div>
                <div class="col-md-6 my-2 px-2">
                    <img src="assets/imgs/uniroyal-offer.jpg" width="100%" alt="">
                </div>


            </div>
        </section>
        <!-- BANNERS SECTION END -->

        <!-- GOOGLE REVIEWS SECTION  -->
        <section class="reviews">
            <div class="container">
                <h2 class="text-center">Our Recent Google Reviews</h2>


                <div class="owl-carousel owl-theme" id="reviews">

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


                </div>


            </div>
        </section>
        <!-- GOOGLE REVIEWS SECTION ENS -->


        <!-- FOOTER SECTION START -->
        <footer class="footer">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>About TYRE ZONE Tyres</h5>
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> About Us </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Contact Us </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Sitemap </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Cookies </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Privacy Policy </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Cookies Policy </a></li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <h5>Services</h5>
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Wheel Balancing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">

                        <div class="col-sm-6">
                            <h5>Tyre Manufacturers</h5>
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Maxxis Tyres</a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Dunlop Tyres</a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Bridgestone Tyres</a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Continental Tyres</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <h5>Contact Us</h5>
                            <ul>
                                <li><a href="#">Buckley Transport, The Old Gas Works, Higginshaw Lane, Oldham, OL2
                                        6HQ</a></li>
                                <li><a href="tel:07563896325">Ph: 07563 896325</a></li>
                                <li><a href="#">
                                        <p class="m-0">24/7 Open </p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-md-2">
                    <h5>Social Media</h5>
                    <ul class="social-icon list-unstyled d-flex flex-wrap">
                        <li>
                            <a href="https://www.facebook.com/TyreZoneOldhamLTD"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>

                </div>


            </div>


            <div class="footer-bottom d-flex align-items-center justify-content-center flex-column">
                <p class="mb-0">© TYRE ZONE TYRES LTD 2024. All Rights Reserved.</p>
            </div>

        </footer>
        <!-- FOOTER SECTION END -->


    </div>
@endsection


@section('customjs')
    <script>
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
    </script>
@endsection
