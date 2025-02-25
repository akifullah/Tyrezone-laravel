@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">







        <!-- TYRES PATTERN SECTION START -->
        <section class="tyres-detail tyre-pattern">
            <div class="container pattern-container">
                <h2>{{ $names->manufacturer->name . ' ' . $names->name }}</h2>

                <!-- TYRES START-->
                <section class="tyres">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-5 side">
                            <h5>ALL TYRES PATTERNS</h5>
                            <div class="tyres-manu pattern">
                                <ul>
                                    @if ($patterensNavs->isNotEmpty())
                                        @foreach ($patterensNavs as $patterensNav)
                                            @if (count($patterensNav->products) != 0)
                                                <li><a class="{{ Request::is('tyre-patteren/' . $patterensNav->manufacturer_id . '/' . $patterensNav->id) ? 'active' : '' }}"
                                                        href="{{ route('tyre-patteren', ['m_id' => $patterensNav->manufacturer_id, 'id' => $patterensNav->id]) }}">{{ $patterensNav->name . ' ' . count($patterensNav->products) }}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">

                            <div class="row">
                                @if ($products->isNotEmpty())
                                    @foreach ($products as $product)
                                        <!-- CARD -->
                                        <div class="col-lg-4 col-sm-6 mb-5 px-2">
                                            <div class="pattern-card border rounded p-2">
                                                <div class="patt-card-head">

                                                    <div class="pt-img">
                                                        @if ($product->images->isNotEmpty())
                                                            <img src="{{ asset('uploads/products/' . $product->images[0]->name) }}"
                                                                alt="">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="feature">

                                                    <ul class="list-unstyled">
                                                        <li
                                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                                            <div class="">
                                                                <img src="{{ asset('frontend/assets/imgs/fuel-tyre.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span class="green">{{ $product->fuel_efficiency }}</span>
                                                        </li>

                                                        <li
                                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                                            <div class="">
                                                                <img src="{{ asset('frontend/assets/imgs/wet_grip.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span class="orange">{{ $product->wet_grip }}</span>
                                                        </li>

                                                        <li
                                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                                            <div class="">
                                                                <img src="{{ asset('frontend/assets/imgs/road-noise-icon.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span class="black">{{ $product->road_noise }}</span>
                                                        </li>
                                                    </ul>

                                                </div>

                                                <div class="tyre-detail ">
                                                    <h5>{{ $product->name }}
                                                        <span class="ms-2">{{ $product->tyre_size }}</span>
                                                    </h5>
                                                </div>

                                                <div class="labels">
                                                    <a
                                                        href="{{ route('manufacturers', ['id' => $product->manufacturer->id]) }}">
                                                        {{ $product->manufacturer->name }}
                                                    </a>
                                                    <a href="#">
                                                        @if ($product->season_type == '1')
                                                            Summer
                                                        @elseif($product->season_type == '2')
                                                            Winter
                                                        @else
                                                            All Season
                                                        @endif
                                                    </a>
                                                </div>

                                                <div class="price">
                                                    <form onsubmit="addToCart(event, {{ $product }})">

                                                        <div
                                                            class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                            <h4 class="m-0">£{{ $product->price }}</h4>
                                                            <p>Garage Fitted</p>
                                                        </div>

                                                        <div class="form-group mb-2">
                                                            <select name="quantity" class="form-select">
                                                                <option value="1">1 Tyre
                                                                    £<!--  -->{{ intval($product->price) * 1 }}</option>
                                                                <option value="2">2 Tyre
                                                                    £<!--  -->{{ intval($product->price) * 2 }}</option>
                                                                <option value="3">3 Tyre
                                                                    £<!--  -->{{ intval($product->price) * 3 }}</option>
                                                                <option value="4">4 Tyre
                                                                    £<!--  -->{{ intval($product->price) * 4 }}</option>
                                                            </select>
                                                        </div>



                                                        <button type="submit" class="main-btn w-100">
                                                            BUY <i class="fa-solid fa-angle-right"></i>
                                                        </button>
                                                    </form>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- CARD -->
                                    @endforeach
                                @endif

                            </div>

                        </div>
                    </div>
                </section>
                <!-- TYRES END -->

            </div>
        </section>
        <!-- TYRES PATTERN SECTION END -->





    </div>
@endsection

@section('customjs')
    <script>
        function addToCart(event, pname) {
            event.preventDefault();
            let product = pname;
            let qty = parseInt(event.target.quantity.value) || 1;
            
            
            console.log(product)
            
            let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
            let isInCart = cart.findIndex((value) => value.id == product.id);

            if (isInCart < 0) {
                cart.push({
                    ...product,
                    qty 
                });
            } else {
                if( (cart[isInCart].qty + qty) > cart[isInCart].in_stock){
                    alert(`Only ${cart[isInCart].in_stock} item availble in stock.`)
                    return
                }
                cart[isInCart].qty = cart[isInCart].qty + qty;
            }

            localStorage.setItem("tyreZoneCart", JSON.stringify(cart));
            cartLength();
            callData();

            // window.location.href = '{{ route('cart') }}';
            // localStorage.setItem("tyreZoneCart", [...cart, product])

        }
    </script>
@endsection
