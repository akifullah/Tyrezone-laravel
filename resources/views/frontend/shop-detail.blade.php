@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">






        {{-- SHOP PAGE START --}}
        <section class="shop-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-12 mx-auto mb-5">
                        <div class="product-view ">
                            <div class="main-img d-flex ">
                                @if ($product->images->isNotEmpty())
                                    @foreach ($product->images as $key => $image)
                                        <div class="p-img">
                                            <img src="{{ asset('uploads/products/' . $image->name) }}" width="100%"
                                                alt="">
                                        </div>
                                    @endforeach
                                @endif
                                {{-- @if ($product->image2 != null)
                                    <div class="p-img">
                                        <img src="{{ asset('uploads/products/' . $product->image2) }}" width="100%"
                                            alt="">
                                    </div>
                                @endif


                                @if ($product->image3 != null)
                                    <div class="p-img">
                                        <img src="{{ asset('uploads/products/' . $product->image3) }}" width="100%"
                                            alt="">
                                    </div>
                                @endif --}}
                            </div>
                            <div class="img-filter d-flex align-items-center justify-content-around">
                                @if ($product->images->isNotEmpty())
                                    @foreach ($product->images as $key => $image)
                                        <div class="filter active" data-filter="{{ $key + 1 }}">
                                            <img src="{{ asset('uploads/products/' . $image->name) }}" width="100px"
                                                alt="">
                                        </div>
                                    @endforeach
                                @endif

                                {{-- @if ($product->image2 != null)
                                    <div class="filter" data-filter="2">
                                        <img src="{{ asset('uploads/products/' . $product->image2) }}" width="100px"
                                            alt="">
                                    </div>
                                @endif

                                @if ($product->image3 != null)
                                    <div class="filter" data-filter="3">
                                        <img src="{{ asset('uploads/products/' . $product->image3) }}" width="100px"
                                            alt="">
                                    </div>
                                @endif --}}

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-detail">
                            <h2>{{ $product->name . ' ' . $product->tyre_size }}</h2>
                            <p>
                                @if ($product->description != '')
                                    {{ Str::words(strip_tags($product->description), 45) }}
                                    @if (strlen($product->description) > 45)
                                        <a href="#description">More Detail</a>
                                    @endif
                                @endif
                            </p>

                            <h5 class="price">£{{ $product->price }}</h5>

                            <div class="btns d-flex gap-3 my-4">
                                <button onclick="addToCart({{ $product }})"
                                    class="main-btn rounded-0 py-2 btn-outline">Add To Cart </button>
                                <button onclick="addToCart({{ $product }}, true)" class="main-btn rounded-0 py-2">Buy
                                    Now </button>
                            </div>

                            <div class="tyre-detail pt-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4>{{ $product->manufacturer->name . ' ' . $product->tyre_size }}</h4>

                                    <p class="mb-0">
                                        @if ($product->in_stock > 0)
                                            <span class="text-success">
                                                {{ $product->in_stock }} item in Stock
                                            </span>
                                        @else
                                            <span class="text-danger">
                                                Out of Stock
                                            </span>
                                        @endif
                                    </p>
                                </div>
                                <div class="mt-2 table-responsive">
                                    <table class="table table-striped border">
                                        <tbody>
                                            <tr>
                                                <td>Tyre Size</td>
                                                <td class="text-end">
                                                    <span>{{ $product->tyre_size }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rim Size</td>
                                                <td class="text-end">
                                                    <span>{{ $product->rim_size }} Inches</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tyre Width</td>
                                                <td class="text-end">
                                                    <span>{{ $product->width }} mm</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tyre Aspect Ratio (Height)</td>
                                                <td class="text-end">
                                                    <span>{{ $product->profile }} %</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pattern Name</td>
                                                <td class="text-end">
                                                    <span>{{ $product->patteren != null ? $product->patteren->name : 'Not Specified' }}</span>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>



                        </div>
                    </div>
                </div>

                {{-- DESCRIPTION --}}
                @if ($product->description != '')
                    <div class="description col-md-12" id="description">
                        <div class="details">
                            {!! $product->description !!}
                        </div>
                    </div>
                @endif
                {{-- DESCRIPTION --}}


            </div>
        </section>
        {{-- SHOP PAGE END --}}

        {{-- RELATED PRODUCT --}}

        @if ($relatedProducts->isNotEmpty())
            <section class="shop mt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb-5 pe-lg-5 ">
                            <div class="shop-content">
                                <h2>Related Products</h2>

                                <div class="row">
                                    @foreach ($relatedProducts as $relatedProduct)
                                        <div class="col-lg-3 col-sm-6 px-2">

                                            <div class="product-card  overflow-hidden">

                                                <div class="img-row">

                                                    @if ($product->manufacturer->image != '')
                                                        <div class="brand-img">
                                                            <img
                                                                src="{{ asset('uploads/brands/' . $product->manufacturer->image) }}">
                                                        </div>
                                                    @endif

                                                    <div class="p-card-img position-relative w-100">
                                                        @if ($product->images->isNotEmpty())
                                                            <img src="{{ asset('uploads/products/' . $product->images[0]->name) }}"
                                                                alt="" width="100%">
                                                        @endif
                                                    </div>


                                                </div>

                                                <div class="product-cart-text pt-2">

                                                    <div class="title-wrap">

                                                        <div class="d-flex justify-space-between">
                                                            <div class="">
                                                                <h6 class="title">
                                                                    {{ $product->name }}
                                                                </h6>
                                                                <p class="tyre-size">{{ $product->tyre_size }}</p>
                                                            </div>
                                                            <div class="ms-auto ">
                                                                <h4 class="price ">£{{ $product->price }}
                                                                    <small>each</small>
                                                                </h4>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="d-flex flex-wrap gap-2 labels-wrap w-100 mb-2">
                                                        <span><i class="fa-solid fa-car"></i>
                                                            {{ $product->tyre_type }}</span>

                                                        @if ($product->season_type == '0')
                                                            <span><i title="All Season"
                                                                    class="fa-brands fa-galactic-republic"></i>
                                                                All Season</span>
                                                        @elseif($product->season_type == '1')
                                                            <span><i class="fa-regular fa-sun"></i>
                                                                Summer</span>
                                                        @elseif($product->season_type == '2')
                                                            <span><i class="fa-regular fa-snowflake"></i>
                                                                Winter</span>
                                                        @endif
                                                    </div>

                                                    <a href="{{ route('shop-detail', ['id' => $product->id]) }}"
                                                        class="main-btn sm w-100 d-block text-center">Select</a>

                                                </div>

                                            </div>

                                        </div>


                                        {{-- <div class="col-lg-3 col-sm-6 px-2">
                                            <a href="{{ route('shop-detail', ['id' => $relatedProduct->id]) }}">
                                                <div class="product-card border ">
                                                    <div class="p-card-img position-relative w-100">
                                                        <img src="{{ asset('uploads/products/' . $relatedProduct->images[0]->name) }}"
                                                            alt="" width="100%">

                                                        <div class="text-center">
                                                            <a href="{{ route('shop-detail', ['id' => $relatedProduct->id]) }}"
                                                                class="main-btn sm d-inline-block">Shop Now</a>
                                                        </div>
                                                    </div>

                                                    <div class="product-cart-text">
                                                        <h3>{{ $relatedProduct->name . ' ' . $relatedProduct->tyre_size }}
                                                        </h3>
                                                        <p>The Bridgestone Alenza 001 215/60 R17 has been carefully
                                                            engineered
                                                            to meet the high-performance demands of luxury SUVs, offering
                                                            drivers a dynamic yet luxurious driving experience. Alenza 001
                                                            tyre
                                                            is designed to thrive on both wet and dry roads alike. The tyre
                                                            offers superior performance with outstanding comfort and
                                                            longevity
                                                            for optimal driving.
                                                        </p>

                                                    </div>

                                                </div>
                                            </a>

                                        </div> --}}
                                    @endforeach


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endif




        <script>
            let filters = document.querySelectorAll(".filter");
            let filterImgs = document.querySelectorAll(".main-img .p-img");

            filters.forEach(fitler => {
                fitler.addEventListener("click", function(e) {
                    filters.forEach(filter => {
                        filter.classList.remove("active");
                    })
                    let filterVal = fitler.getAttribute("data-filter") - 1;
                    filterImgs.forEach(img => {
                        img.style.transform = `translateX(-${100 * filterVal}%)`
                    });


                    fitler.classList.add("active");

                })
            });
        </script>










    </div>
@endsection

@section('customjs')
    <script>
        function addToCart(pname, buyNow = false) {
            let product = pname;

            if (product.in_stock <= 0) {
                alert("Product is out of stock!")
                return
            }

            product.qty = 1;



            let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
            let isInCart = cart.findIndex((value) => value.id == product.id);

            if (isInCart < 0) {
                cart.push({
                    ...product
                });
            } else {
                if (buyNow) {

                    window.location.href = '{{ route('checkout') }}';
                } else {
                    alert("Item already added in your  cart!")
                    return
                }
                // cart[isInCart].qty = cart[isInCart].qty + 1;
            }

            localStorage.setItem("tyreZoneCart", JSON.stringify(cart));
            cartLength();
            callData();

            if (buyNow) {

                window.location.href = '{{ route('checkout') }}';
            } else {
                window.location.href = '{{ route('cart') }}';

            }
            // localStorage.setItem("tyreZoneCart", [...cart, product])

        }
    </script>
@endsection
