@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">


        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner overlay"
            style="background-image: url({{ asset('frontend/assets/imgs/dunlop-banner.jpg') }});">
            <div class="container">
                <div class="banner-text">
                    <h1>Shop</h1>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->


        {{-- SHOP PAGE START --}}
        <section class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-9 mb-5 pe-lg-5 order-1 order-lg-0">
                        <div class="shop-content">
                            <h2>Tyres</h2>

                            <div class="row">
                                @if ($products->isNotEmpty())
                                    @foreach ($products as $product)
                                        <div class="col-xl-4 col-lg-6 col-md-4  col-sm-6 px-2">

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
                                    <h3 class=" mt-5 fw-normal text-center">Item Not Found</h3>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="shop-sidebar mb-5 ">
                            <div class="product-search">
                                <h2>Search Tyre</h2>
                                <form action="{{ route('shopSearch') }}" class="border rounded p-3">

                                    <div class="form-group mb-3">
                                        <label for="">Brand</label>
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
                                    <div class="form-group mb-3">
                                        <label for="">Patteren</label>
                                        <select name="patteren" class=" form-select shadow-none">
                                            <option selected="selected" value="">Select Patteren</option>
                                            @if ($patterens->isNotEmpty())
                                                @foreach ($patterens as $patteren)
                                                    <option
                                                        {{ Request::get('patteren') == $patteren->id ? 'selected' : '' }}
                                                        value="{{ $patteren->id }}">{{ $patteren->name }}
                                                    </option>
                                                @endforeach
                                            @endif

                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Vehicle Category</label>
                                        <select name="v_cat" class=" form-select shadow-none">
                                            <option selected="selected" value="">Select Vehicle Category</option>
                                            @if ($vehicleCategory->isNotEmpty())
                                                @foreach ($vehicleCategory as $v_cat)
                                                    <option
                                                        {{ Request::get('v_cat') == $v_cat->v_cat_name ? 'selected' : '' }}
                                                        value="{{ $v_cat->v_cat_name }}">{{ $v_cat->v_cat_name }}
                                                    </option>
                                                @endforeach
                                                {{-- <option
                                                        {{ Request::get('patteren') == $patteren->id ? 'selected' : '' }}
                                                        value="{{ $patteren->id }}">{{ $patteren->name }}
                                                    </option>
                                                @endforeach --}}
                                            @endif

                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Tyre Size</label>
                                        <select name="size" class="form-select shadow-none">
                                            <option selected="selected" value="">Select Size</option>
                                            @if ($sizes->isNotEmpty())
                                                @foreach ($sizes as $size)
                                                    <option
                                                        {{ Request::get('size') == $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed ? 'selected' : '' }}
                                                        value="{{ $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed }}">
                                                        {{ $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input"
                                                @if (Request::get('run_flat') == '1') checked @endif type="checkbox"
                                                name="run_flat" id="run_flat" value="1">
                                            <label
                                                class="form-check-label
                                            @if (Request::get('run_flat') == '1') checked @endif"
                                                for="run_flat">Run Flat</label>

                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-3">

                                        <a href="{{ route('shop') }}">Clear Filter</a>
                                        <div class="text-end">
                                            <button class="main-btn sm"> Show Result</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- SHOP PAGE END --}}








    </div>
@endsection
