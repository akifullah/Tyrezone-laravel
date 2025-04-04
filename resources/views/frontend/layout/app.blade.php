<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TYRE ZONE</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightbox.min.css') }}">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets_v2/css/style.css') }}">

    @yield('style')

</head>

<body>

    <div id="product-container" class="d-none" data-asset-base-url="{{ asset('uploads/products') }}"></div>
    <!-- SIDE CART -->
    <div class="side-cart" id="side-cart">


        <div class="side-card-header  d-flex align-items-center justify-content-between">
            <button class="cart-close" id="cart-close"><i class="fa-regular fa-circle-xmark"></i></button>
            <h5 class="m-0">Your Cart</h5>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>

        <div class="cart border-0" id="cartItems">





        </div>


        <div class="cart-btns" id="sideCartBtnWrap">
            <div class="text-end ">
                <h6 class="mb-3">Total <strong id="totalAmount">£127.05</strong></h6>
            </div>
            <div class=" d-flex justify-content-between">
                <a href="{{ route('cart') }}" class="main-btn">View Cart</a>
                <a href="{{ route('checkout') }}" class="main-btn">Checkout</a>
            </div>
        </div>

    </div>
    <!-- SIDE END -->



    <!-- TOP BAR SECTION START -->
    <section class="top-bar d-none d-md-block">
        <div class="container">
            <div class="d-flex align-item-center justify-content-between">
                <!-- CARD START -->
                <div class="top-card d-flex align-item-center">
                    <div class="top-card-icon">
                        <img src="{{ asset('frontend/assets_v2/imgs/clock.png') }}" alt="">
                    </div>
                    <div class="top-card-text">
                        <h4 class="top-text-title">OPENING HOURS</h4>
                        <span class="top-card-desc"> 7:30am - 5:30pm</span>
                    </div>
                </div>
                <!-- CARD START -->

                <!-- CARD START -->
                <div class="top-card d-flex align-item-center">
                    <div class="top-card-icon">
                        <img src="{{ asset('frontend/assets_v2/imgs/phone.png') }}" alt="">
                    </div>
                    <div class="top-card-text">
                        <h4 class="top-text-title">FEEL FREE TO CONTACT</h4>
                        <a href="tel:07563896325"><span class="top-card-desc">0756 389 6325</span></a>
                    </div>
                </div>
                <!-- CARD START -->

                <!-- CARD START -->
                <div class="top-card d-flex align-item-center">
                    <div class="top-card-icon">
                        <img src="{{ asset('frontend/assets_v2/imgs/location-mark.png') }}" alt="">
                    </div>
                    <div class="top-card-text">
                        <h4 class="top-text-title">OUR ADDRESS</h4>
                        <span class="top-card-desc">Higginshaw Lane, Oldham, OL2 6HQ</span>
                    </div>
                </div>
                <!-- CARD START -->

            </div>
        </div>
    </section>
    <!-- TOP BAR SECTION END -->

    <!-- HEADER SECTION START -->
    <header class="header">
        <nav class="navbar navbar-expand-lg  navbar-dark p-0">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand">

                    @if (!empty($logo))
                        <img src="{{ asset('uploads/logos/' . $logo->name) }}" class="logo" alt="">
                    @else
                        <img src="{{ asset('frontend/assets_v2/imgs/logo.png') }}" class="logo" alt="">
                    @endif
                </a>

                <div class="offcanvas offcanvas-end navbar-navs" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header text-end w-100">
                        <button type="button" class="nav-close text-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></button>
                    </div>
                    <div class="offcanvas-body ">
                        <ul class="navbar-nav flex-grow-1 pe-3">

                            <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Home</a>
                            </li>

                            {{-- <li class="dropdown">
                                <a class="{{ Route::is('manufacturers') ? 'active' : '' }}"
                                    href="{{ route('manufacturers', ['id' => 3]) }}">
                                    MANUFACTURERS</a>


                            </li> --}}

                            <li class="dropdown mega-dropdown">
                                <a class="{{ Route::is('manufacturers') ? 'active' : '' }}" href="#"
                                    data-bs-toggle="dropdown">
                                    TYRE Brands <i class="ms-1 fa-solid fa-angle-down"></i></a>

                                <div class="dropdown-menu mega-dropdown-menu">
                                    <div class="row">
                                        @if ($navManufactures->isNotEmpty())
                                            @foreach ($navManufactures as $manufucturer)
                                                @if (count($manufucturer->products) != 0)
                                                    <div class="col-12">
                                                        <a
                                                            href="{{ route('manufacturers', ['id' => $manufucturer->id]) }}">{{ $manufucturer->name }}</a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif

                                    </div>
                                </div>

                            </li>

                            {{-- <li class="dropdown mega-dropdown">
                                <a class="{{ Route::is('services') ? 'active' : '' }}"
                                    href="{{ route('services') }}">
                                    Services</a>
                            </li> --}}

                            <li><a class="{{ Route::is('gallery') ? 'active' : '' }}"
                                    href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a class="{{ Route::is('shop') ? 'active' : '' }}"
                                    href="{{ route('shop') }}">Shop</a>
                            </li>
                            {{-- <li><a href="blogs.html">Blog</a></li> --}}
                            {{-- <li><a class="{{ Route::is('about') ? 'active' : '' }}"
                                    href="{{ route('about') }}">About</a></li> --}}
                            <li><a class="{{ Route::is('contact') ? 'active' : '' }}"
                                    href="{{ route('contact') }}">Contact</a></li>


                            <!-- <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li> -->
                        </ul>

                    </div>
                </div>

                <div class="navbar-right ms-auto">


                    <ul class="navs d-flex list-unstyled gap-3 m-0">
                        {{-- <li><button class="nav-item"><i class="fa-solid fa-magnifying-glass"></i></button></li> --}}
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class=" nav-item">
                                <span>
                                    @if (Auth::check())
                                        Hi, {{ Auth::user()?->fname }}
                                    @endif
                                </span>
                                <i class="fa-solid fa-user"></i>

                            </a>
                            <ul class="dropdown-menu">
                                @if (Auth::check())
                                    <a href="{{ route('profile') }}" class="dropdown-item">Profile</a>
                                    <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                                @else
                                    <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                                    <a href="{{ route('signup') }}" class="dropdown-item">Register</a>
                                @endif
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-cart nav-item" id="side-cart-toggler">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span id="count">0</span>
                            </a>
                        </li>


                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- <nav class="navbar navbar-expand-lg navbar-dark">
                    <a href="#" class="navbar-brand">
                        <img src="{{ asset('frontend/assets_v2/imgs/logo.png') }}" class="logo" alt="">
                    </a>

                    <div class="navbar-navs">

                        <ul class="navbar-nav">
                            <li><a href="#" class="active">Home</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="navbar-right ms-auto">


                        <ul class="navs d-flex list-unstyled gap-3 m-0">
                            <li><button class="nav-item"><i class="fa-solid fa-magnifying-glass"></i></button></li>
                            <li class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle nav-item"><i
                                        class="fa-solid fa-user"></i></a>
                                <ul class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Login</a>
                                    <a href="#" class="dropdown-item">Register</a>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nav-cart nav-item">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span class="cart-count">0</span>
                                </a>
                            </li>

                            <li class="d-block d-lg-none">
                                <label for="nav-toggler" id="nav-toggler-icon-wrap" class="nav-item">
                                    <i class="fa-solid fa-bars"></i>
                                    <i class="fa-regular fa-circle-xmark"></i>
                                </label>
                                <input type="checkbox" class="" id="nav-toggler">
                            </li>

                        </ul>
                    </div>


                </nav> -->
    </header>
    <!-- HEADER SECTION END -->


    @yield('main')

    <!-- FOOTER SECTION START -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-5 pe-sm-4">
                    <div class="">
                        <h3>Newsletter Signup</h3>
                        <p>Sign up for exclusive offers, original stories, activism awareness, events and more.</p>

                        <form id="newsletter-form">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Enter your email"
                                    required class="form-control">
                            </div>

                            <div class="">
                                <button>Sign Me Up</button>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 pe-sm-4">
                    <h3>Get Help</h3>

                    <ul class="list-rounded">
                        <li>
                            <a href="{{ route('contact') }}">Customer Service</a>
                        </li>

                        {{-- <li>
                            <a href="#">Delivery</a>
                        </li> --}}

                        {{-- <li>
                            <a href="#">FAQs</a>
                        </li> --}}

                        {{-- <li>
                            <a href="#">Repairs</a>
                        </li> --}}
                        {{-- <li>
                            <a href="#">Returns</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('services') }}">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                        {{-- <li>
                            <a href="#">Size Guide</a>
                        </li> --}}

                    </ul>

                </div>


                <div class="col-md-4 col-sm-6 mb-4">
                    <h3>Information</h3>
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                @if ($navManufactures->isNotEmpty())
                                    @foreach ($navManufactures as $manufucturer)
                                        @if (count($manufucturer->products) != 0)
                                            <li>
                                                <a
                                                    href="{{ route('manufacturers', ['id' => $manufucturer->id]) }}">{{ $manufucturer->name }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                                {{-- <li><a href="#">Maxxis Tyres</a></li>
                                <li><a href="#">Dunlop Tyres</a></li>
                                <li><a href="#">Bridgestone Tyres</a></li>
                                <li><a href="#">Continental Tyres</a></li>
                                <li><a href="#">Wheel Balancing</a></li> --}}
                            </ul>
                        </div>

                        <div class="col-6">
                            <ul>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Cookies</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Cookies Policy</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="footer-bottom d-flex align-items-center justify-content-center flex-column">
            <p class="mb-0">© TYRE ZONE TYRES LTD 2024. All Rights Reserved.</p>
        </div>

    </footer>
    <!-- FOOTER SECTION END -->
    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/cart.js') }}"></script>


    @yield('customjs')

    <script>
        document.getElementById('newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            fetch('/subscribe', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                .then(response => response.json())
                .then(data => alert(data.message))
                .catch(error => console.error('Error:', error));
        });



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        let alerts = document.querySelectorAll(".alert");

        setTimeout(() => {
            alerts.forEach(alert => {
                if (!alert.classList.contains("payment-alert")) {
                    alert.classList.remove("show");
                }
            });
        }, 3000);
        setTimeout(() => {
            alerts.forEach(alert => {
                if (!alert.classList.contains("payment-alert")) {
                    alert.remove();
                }
            });
        }, 3500);
    </script>

</body>

</html>
