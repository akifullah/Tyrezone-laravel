@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">


        <!-- HERO BANNER SECTION START -->
        {{-- <section class="hero-banner overlay"
            style="background-image: url({{ asset('frontend/assets/imgs/dunlop-banner.jpg') }});">
            <div class="container">
                <div class="banner-text">
                    <h1>Shop</h1>

                </div>
            </div>
        </section> --}}
        <!-- HERO BANNER SECTION END -->
        <div class="container px-0 shop-filter man-search">
            <div class="product-search search-wrap overflow-hidden p-0 border-0 rounded">
                <form action="{{ route('shopSearch') }}" class="border rounded p-3 overflow-hidden">
                    <div class="">
                        <div class="row align-items-end ">


                            <div class="col-md mb-2 px-1">
                                <div class="form-group ">
                                    <label for="" class="inp-label">Brand</label>
                                    <select name="manufacturer" class=" form-select shadow-none">
                                        <option selected="selected" value="">Select Brand</option>
                                        @if ($manufacturers->isNotEmpty())
                                            @foreach ($manufacturers as $manufacturer)
                                                <option
                                                    {{ Request::get('manufacturer') == $manufacturer->id ? 'selected' : '' }}
                                                    value="{{ $manufacturer->id }}">{{ $manufacturer->name }}
                                                </option>
                                            @endforeach
                                        @endif


                                    </select>
                                </div>
                            </div>

                            <div class="col-md col-6 mb-2 px-1">
                                <div class="form-group">
                                    <label for="" class="inp-label">Width</label>

                                    <select name="width" id="" class="form-select">
                                        <option disabled selected>Width</option>
                                        @if ($sizes->isNotEmpty())
                                            @foreach ($sizes as $size)
                                                <option {{ Request::get('width') == $size->width ? 'selected' : '' }}
                                                    value="{{ $size->width }}">
                                                    {{ $size->width }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-md col-6 mb-2 px-1">
                                <div class="form-group">
                                    <label for="" class="inp-label">Height</label>
                                    <select name="profile" class="form-select">
                                        <option disabled selected>Profile</option>
                                        @if ($sizes->isNotEmpty())
                                            @foreach ($sizes as $size)
                                                <option {{ Request::get('profile') == $size->profile ? 'selected' : '' }}
                                                    value="{{ $size->profile }}">
                                                    {{ $size->profile }}</option>
                                            @endforeach
                                        @endif
                                    </select>

                                </div>

                            </div>


                            <div class="col-md col-6 mb-2 px-1">
                                <div class="form-group">
                                    <label for="" class="inp-label">Rim Size</label>
                                    <select name="rim_size" class="form-select">
                                        <option disabled selected>Rim Size</option>
                                        @if ($sizes->isNotEmpty())
                                            @foreach ($sizes as $size)
                                                <option {{ Request::get('rim_size') == $size->rim_size ? 'selected' : '' }}
                                                    value="{{ $size->rim_size }}">
                                                    {{ $size->rim_size }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-md col-6 mb-2 px-1">
                                <div class="form-group">
                                    <label for="" class="inp-label">Speed</label>
                                    <select name="speed" class="form-select">
                                        <option value="">Speed</option>
                                        @if ($sizes->isNotEmpty())
                                            @foreach ($sizes as $size)
                                                <option {{ Request::get('speed') == $size->speed ? 'selected' : '' }}
                                                    value="{{ $size->speed }}">
                                                    {{ $size->speed }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>



                        </div>

                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-6 px-0 px-sm-2">
                                <div class="">
                                    <label for="" class="inp-label">Season</label>
                                    <div class="form-check">
                                        <input class="form-check-input" @checked(in_array('1', Request::get('season_type', []))) value="1"
                                            type="checkbox" name="season_type[]" id="season_type_1">
                                        <label for="season_type_1" class="form-check-label">Summer</label>

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" @checked(in_array('2', Request::get('season_type', []))) value="2"
                                            type="checkbox" name="season_type[]" id="season_type_2">
                                        <label for="season_type_2" class="form-check-label">Winter</label>

                                    </div>
                                </div>
                                <div class="col-md align-self-center mt-2 mt-sm-3">
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" @if (Request::get('run_flat') == '1') checked @endif
                                                type="checkbox" name="run_flat" id="run_flat" value="1">
                                            <label
                                                class="form-check-label
                                            @if (Request::get('run_flat') == '1') checked @endif"
                                                for="run_flat">Run Flat</label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 px-0 px-sm-2">
                                <div class="form-control bg-transparent border-0">
                                    <label for="" class="inp-label">Vehicle Category</label>
                                    @if ($vehicleCategory->isNotEmpty())
                                        @foreach ($vehicleCategory as $v_cat)
                                            <div class="form-check">
                                                <input type="checkbox" @checked(in_array($v_cat->v_cat_name, Request::get('v_cat', [])))
                                                    value="{{ $v_cat->v_cat_name }}" id="v_cat_{{ $v_cat->id }}"
                                                    class="form-check-input" name="v_cat[]">
                                                <label
                                                    for="v_cat_{{ $v_cat->id }}">{{ ucwords($v_cat->v_cat_name) }}</label>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 px-0 px-sm-2">
                                <div class="form-control bg-transparent border-0">
                                    <label for="" class="inp-label">Brand Category</label>
                                    <div class="form-check">
                                        <input type="checkbox" @checked(in_array('budget', Request::get('brand_category', []))) value="budget"
                                            class="form-check-input" name="brand_category[]" id="budget">
                                        <label for="budget" class="form-check-label">Budget</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" @checked(in_array('mid_range', Request::get('brand_category', []))) value="mid_range"
                                            class="form-check-input" name="brand_category[]" id="mid_range">
                                        <label for="mid_range" class="form-check-label">Mid Range</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" @checked(in_array('premium', Request::get('brand_category', []))) value="premium"
                                            class="form-check-input" name="brand_category[]" id="premium">
                                        <label for="premium" class="form-check-label">Premium</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm-6 col-12 align-self-end">
                                <div class="d-flex align-items-center justify-content-end mt-3">

                                    <a href="{{ route('shop') }}" class="clear-btn">Clear Filter</a>
                                    <div class="text-end ms-3">
                                        <button class="main-btn sm"> Show Result</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>








                </form>
            </div>
            {{-- <div class="man-search">
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
                                                <option {{ Request::get('width') == $size->width ? 'selected' : '' }}
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
                                                <option {{ Request::get('profile') == $size->profile ? 'selected' : '' }}
                                                    value="{{ $size->profile }}">
                                                    {{ $size->profile }}</option>
                                            @endforeach
                                        @endif
                                    </select>

                                </div>

                            </div>


                            <div class="col-lg-2 col-6 mb-2 px-1">
                                <div class="form-group">
                                    <select name="rim_size" class="form-select">
                                        <option disabled selected>Rim Size</option>
                                        @if ($sizes->isNotEmpty())
                                            @foreach ($sizes as $size)
                                                <option {{ Request::get('rim_size') == $size->rim_size ? 'selected' : '' }}
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
                                        <option value="">Speed</option>
                                        @if ($sizes->isNotEmpty())
                                            @foreach ($sizes as $size)
                                                <option {{ Request::get('speed') == $size->speed ? 'selected' : '' }}
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
            </div> --}}
        </div>


        {{-- SHOP PAGE START --}}
        <section class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-12 order-1 order-lg-0">
                        <div class="shop-content">
                            <h2>Tyres</h2>

                            <div class="row">
                                @if ($products->isNotEmpty())
                                    @foreach ($products as $product)
                                        <div class="col-xl-3 col-lg-4 col-md-4  col-sm-6 px-2">

                                            <div class="product-card position-relative overflow-hidden">
                                                @if ($product->in_stock < 1)
                                                    <div class="tags">Out of Stock</div>
                                                @endif
                                                <div class="img-row">
                                                    @if ($product->manufacturer?->image != '')
                                                        <div class="brand-img">
                                                            <img
                                                                src="{{ asset('uploads/brands/' . $product->manufacturer->image) }}">
                                                        </div>
                                                    @endif
                                                    <div class="p-card-img position-relative w-100">
                                                        @if ($product->images->isNotEmpty())
                                                            <img
                                                                src="{{ asset('uploads/products/' . $product->images[0]->name) }}">
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
                                    @endforeach
                                @else
                                    <h3 class=" my-4 fw-normal text-center">Item Not Found</h3>
                                @endif

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- SHOP PAGE END --}}








    </div>
@endsection
