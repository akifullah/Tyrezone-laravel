@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">

        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner overlay"
            style="background-image: url({{ asset('frontend/assets/imgs/dunlop-banner.jpg') }});">
            <div class="container">
                <div class="banner-text">
                    <h1>Gallery</h1>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->

        <!-- GALLERY SECION START -->
        <section class="gallery my-3 py-5">
            {{-- <h1 class="text-center mb-4">Gallery</h1> --}}
            <div class="container">
                <div class="row " id="gallery">

                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/1.jpeg') }}" data-lightbox="image-1" data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/1.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/2.jpeg') }}" data-lightbox="image-1" data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/2.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/4.jpeg') }}" data-lightbox="image-1" data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/4.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/33.jpeg') }}" data-lightbox="image-1"
                            data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/33.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/5.jpeg') }}" data-lightbox="image-1" data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/5.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/6.jpeg') }}" data-lightbox="image-1"
                            data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/6.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/7.jpeg') }}" data-lightbox="image-1"
                            data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/7.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/9.jpeg') }}" data-lightbox="image-1"
                            data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/9.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/10.jpeg') }}" data-lightbox="image-1"
                            data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/10.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/11.jpeg') }}" data-lightbox="image-1"
                            data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/11.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>


                </div>
            </div>
        </section>

        <!-- GALLERY SECION END -->




    </div>
@endsection


@section('customjs')
    <script src="{{ asset('frontend/assets/js/lightbox.min.js') }}"></script>
    <script>
        // GALLERY PAGE LIGHT BOX
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });
    </script>
@endsection
