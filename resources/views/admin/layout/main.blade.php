<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Dashboard</title>

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">



    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">

    @yield('style')

</head>

<body>


    <div class="wrapper">
        <div class="main">
            <aside class="side-bar" id="sideBar">

                <button class="side-close d-lg-none" id="sideCloseBtn"><i
                        class="fa-regular fa-circle-xmark"></i></button>

                <div class="logo">
                    <!-- <img src="" alt=""> -->
                    <h4 class="text-center text-white">Admin</h4>
                </div>
                <div class="navs">
                    <ul>
                        <li>
                            <a class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"
                                href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-table-cells"></i>
                                Dashboard</a>
                        </li>
                        <li>
                            <a class="{{ Route::is('admin.products') ? 'active' : '' }}"
                                href="{{ route('admin.products') }}"><i class="fa-solid fa-box-archive"></i>
                                Products</a>
                        </li>
                        <li>
                            <a class="{{ Route::is('admin.manufacturers') ? 'active' : '' }}"
                                href="{{ route('admin.manufacturers') }}"><i class="fa-solid fa-list"></i>
                                Manufacturers</a>
                        </li>
                        <li>
                            <a class="{{ Route::is('admin.tyrePatteren') ? 'active' : '' }}"
                                href="{{ route('admin.tyrePatteren') }}"><i class="fa-solid fa-sliders"></i> Tyre
                                Patteren</a>
                        </li>
                        <li>
                            <a class="{{ Route::is('admin.tyreSize') ? 'active' : '' }}"
                            href="{{ route('admin.tyreSize') }}"><i class="fa-solid fa-expand"></i> Tyre Sizes</a>
                        </li>
                        <li>
                            <a class="{{ Route::is('admin.vehicleCategory') ? 'active' : '' }}"
                            href="{{ route('admin.vehicleCategory') }}"><i class="fa-solid fa-layer-group"></i> Vehicle Category</a>
                        </li>
                        <li>
                            <a class="{{ Route::is('admin.vehicle-brands') ? 'active' : '' }}"
                            href="{{ route('admin.vehicle-brands') }}"><i class="fa-solid fa-shuffle"></i> Vehicle Brands</a>
                        </li>
                        <li>
                            <a class="{{ Route::is('admin.users') ? 'active' : '' }}"
                                href="{{ route('admin.users') }}"><i class="fa-solid fa-users"></i> All users</a>
                        </li>
                        <li>
                            <a class="{{ Route::is('admin.orders') ? 'active' : '' }}"
                                href="{{ route('admin.orders') }}"><i class="fa-solid fa-cart-flatbed"></i> Orders</a>
                        </li>
                    </ul>
                </div>



            </aside>


            <div class="main-wrap" id="mainArea">

                <div class="top-bar d-flex w-100">
                    <button class="sidebar-toggler" id="sideToggler">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <h4 class="m-0">Dashboard</h4>

                    <div class="right-top dropwdown ms-auto">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa-solid fa-user-tie"></i></a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <a href="{{ route('admin.profile') }}" class="dropdown-item">Profile</a>
                            <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                        </ul>
                    </div>

                </div>


                @yield('maincontent')


            </div>

        </div>
    </div>

    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        // $(document).ready(function() {
        //     setTimeout(() => {
        //         $('.select2').select2();
        //     }, 500);
        // });
        $(document).ready(function() {
            $(document).ready(function() {
                $('.summernote').summernote();

            });
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let sideBar = document.getElementById("sideBar");
        let sideToggler = document.getElementById("sideToggler");
        let mainArea = document.getElementById("mainArea");
        let closeBtn = document.getElementById("sideCloseBtn");

        sideToggler.addEventListener("click", function(e) {
            sideBar.classList.toggle("none")
            mainArea.classList.toggle("side-none")
        })

        closeBtn.addEventListener("click", function(e) {
            sideBar.classList.remove("none")
            mainArea.classList.remove("side-none")
        })


        let alerts = document.querySelectorAll(".alert");

        setTimeout(() => {
            alerts.forEach(alert => {
                alert.classList.remove("show");
            });
        }, 5000);
        setTimeout(() => {
            alerts.forEach(alert => {
                alert.remove();
            });
        }, 5500);
    </script>

    @yield('customjs')

</body>

</html>
