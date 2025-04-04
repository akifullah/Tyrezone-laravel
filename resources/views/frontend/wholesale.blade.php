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
        <div class="container px-0 pb-0 shop-filter man-search">
            <div class="product-search search-wrap overflow-hidden p-0 border-0 rounded">
                <form action="{{ route('wholesale.filter') }}" class="border rounded p-3 overflow-hidden">
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

                                    <a href="{{ route('wholesale') }}" class="clear-btn">Clear Filter</a>
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
        <section class="shop mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 order-1 order-lg-0">
                        <div class="shop-content">
                            <h3>Tyres</h3>

                            @if ($products->isNotEmpty())
                                <div class="table-responsive filter-table">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                {{-- <th>Image</th> --}}
                                                <th>Description</th>
                                                <th>Season</th>
                                                <th>Price</th>
                                                <th>In Stock</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $product->id }}</td>
                                                    {{-- <td>
                                                        @if ($product?->images->isNotEmpty())
                                                            <img src="{{ asset('uploads/products/' . $product?->images[0]?->name) }}"
                                                                alt="">
                                                        @endif
                                                    </td> --}}
                                                    <td>({{ $product->tyre_size }}) {{ $product->name }}
                                                        {{ $product?->manufacturer?->name }}</td>
                                                    <td class="text-center">
                                                        @if ($product?->season_type == 1)
                                                            <i title="Summer" class=" h3 mb-0 fa-solid fa-sun"></i>
                                                        @elseif($product?->season_type == 2)
                                                            <i title="Winter"
                                                                class=" h3 mb-0 fa-regular fa-snowflake"></i>
                                                        @else
                                                            <i title="All Season"
                                                                class=" h3 mb-0 fa-brands fa-galactic-republic"></i>
                                                        @endif
                                                    </td>
                                                    <td>{{ $product->price }}</td>
                                                    <td>{{ $product->in_stock }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <input
                                                                class="form-control   item-qty-inp me-2 form-control-sm shadow-none"
                                                                type="number" placeholder="Quantity"
                                                                id="qty_{{ $product->id }}">
                                                            <button class="main-btn sm text-nowrap"
                                                                onclick="addToCart({{ $product }})">Add</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <h3 class=" my-4 fw-normal text-center">Items Not Found</h3>
                            @endif

                            {{-- <div class="row">
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

                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- SHOP PAGE END --}}










    </div>
@endsection



@section('customjs')
    <script>
        function addToCart(pname, qty, buyNow = false) {
            let productQty = document.getElementById(`qty_${pname.id}`)?.value;
            if (!productQty) {
                alert("Please Enter item Quantity.");
                return
            }
            if (productQty <= 0) {
                alert("Whoops! Quantity must be 1 or more.");
                return
            }
            let product = pname;


            if (product?.in_stock <= 0) {
                alert("Product is out of stock!")
                return
            }
            if (Number(productQty) > Number(product.in_stock)) {
                alert("Product is not available in this quantity!")
                return
            }

            product.qty = productQty;



            let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
            let isInCart = cart.findIndex((value) => value.id == product.id);

            if (isInCart < 0) {
                cart.push({
                    ...product
                });
            } else {
                // if (buyNow) {

                //     window.location.href = '{{ route('checkout') }}';
                // } else {
                //     alert("Item already added in your  cart!")
                //     return
                // }
                cart[isInCart].qty = Number(cart[isInCart].qty) + Number(productQty);
            }

            localStorage.setItem("tyreZoneCart", JSON.stringify(cart));
            cartLength();
            callData();

            

            // if (buyNow) {

            //     window.location.href = '{{ route('checkout') }}';
            // } else {
            //     window.location.href = '{{ route('cart') }}';

            // }
            // localStorage.setItem("tyreZoneCart", [...cart, product])

        }
    </script>
@endsection
