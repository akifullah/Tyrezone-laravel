@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">



        <!-- SEARCH SECTION START -->
        <section class="man-search pb-0">
            <div class="search-wrap rounded">
                <div class="row">



                    <div class="col-12 ">
                        <div class="search-by-tyres">

                            <form action="{{ route('search') }}">
                                <div class="row justify-content-center align-items-end">
                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <h3>Search by Tyre size</h3>
                                        <div class="form-group">
                                            <select name="width" id="" class="form-select">
                                                <option disabled selected>Width</option>
                                                @if ($sizes->isNotEmpty())
                                                    @foreach ($sizes as $size)
                                                        <option
                                                            {{ Request::get('width') == $size->width ? 'selected' : '' }}
                                                            value="{{ $size->width }}">
                                                            {{ $size->width }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="profile" class="form-select">
                                                <option disabled selected>Profile</option>
                                                @if ($sizes->isNotEmpty())
                                                    @foreach ($sizes as $size)
                                                        <option
                                                            {{ Request::get('profile') == $size->profile ? 'selected' : '' }}
                                                            value="{{ $size->profile }}">
                                                            {{ $size->profile }}</option>
                                                    @endforeach
                                                @endif
                                            </select>

                                        </div>

                                    </div>


                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="rim_size" class="form-control">
                                                <option disabled selected>Rim Size</option>
                                                @if ($sizes->isNotEmpty())
                                                    @foreach ($sizes as $size)
                                                        <option
                                                            {{ Request::get('rim_size') == $size->rim_size ? 'selected' : '' }}
                                                            value="{{ $size->rim_size }}">
                                                            {{ $size->rim_size }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="speed" class="form-select">
                                                <option disabled selected>Speed</option>
                                                @if ($sizes->isNotEmpty())
                                                    @foreach ($sizes as $size)
                                                        <option
                                                            {{ Request::get('speed') == $size->speed ? 'selected' : '' }}
                                                            value="{{ $size->speed }}">
                                                            {{ $size->speed }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <button class="search-btn w-100">
                                            Search
                                        </button>
                                    </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SEARCH SECTION END -->


        <section class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5 ">
                        <div class="shop-content">
                            <h2>Search Result</h2>

                            <div class="row">
                                @if ($products->isNotEmpty())
                                    @foreach ($products as $product)
                                        <div class="col-lg-3 col-sm-6 px-2">

                                            <div class="product-card  overflow-hidden">
                                                @if ($product->in_stock < 1)
                                                    <div class="tags">Out of Stock</div>
                                                @endif
                                                <div class="img-row">
                                                    @if ($product->manufacturer->image)
                                                        <div class="brand-img">
                                                            <img alt=""
                                                                src="{{ asset('uploads/brands/' . $product->manufacturer->image) }}">
                                                        </div>
                                                    @endif
                                                    <div class="p-card-img position-relative w-100">
                                                        <img src="{{ asset('uploads/products/' . $product->images[0]->name) }}"
                                                            alt="" width="100%">
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

                                        {{-- <div class="col-md-4 col-sm-6 px-2">
                                            <a href="{{ route('shop-detail', ['id' => $product->id]) }}">
                                                <div class="product-card border ">
                                                    <div class="p-card-img position-relative w-100">
                                                        <img src="{{ asset('uploads/products/' . $product->images[0]->name) }}"
                                                            alt="" width="100%">

                                                        <div class="text-center">
                                                            <a href="{{ route('shop-detail', ['id' => $product->id]) }}"
                                                                class="main-btn sm d-inline-block">Shop Now</a>
                                                        </div>
                                                    </div>

                                                    <div class="product-cart-text">
                                                        <h3>{{ $product->name . ' ' . $product->tyre_size }}
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
                                @endif

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </div>
@endsection

@section('customjs')
    <script>
        function addToCart(event, pname) {
            event.preventDefault();
            let product = pname;
            product.qty = Number(event.target.quantity.value);


            let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
            let isInCart = cart.findIndex((value) => value.id == product.id);

            if (isInCart < 0) {
                cart.push({
                    ...product
                });
            } else {
                cart[isInCart].qty = cart[isInCart].qty + 1;
            }

            localStorage.setItem("tyreZoneCart", JSON.stringify(cart));
            cartLength();
            callData();

            window.location.href = '{{ route('cart') }}';
            // localStorage.setItem("tyreZoneCart", [...cart, product])

        }
    </script>
@endsection
