<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

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

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/style.css')); ?>">

    <?php echo $__env->yieldContent('style'); ?>

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
                            <a class="<?php echo e(Route::is('admin.dashboard') ? 'active' : ''); ?>"
                                href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-table-cells"></i>
                                Dashboard</a>
                        </li>
                        <li>
                            <a class="<?php echo e(Route::is('admin.products') ? 'active' : ''); ?>"
                                href="<?php echo e(route('admin.products')); ?>"><i class="fa-solid fa-box-archive"></i>
                                Products</a>
                        </li>
                        <li>
                            <a class="<?php echo e(Route::is('admin.manufacturers') ? 'active' : ''); ?>"
                                href="<?php echo e(route('admin.manufacturers')); ?>"><i class="fa-solid fa-list"></i>
                                Manufacturers</a>
                        </li>
                        <li>
                            <a class="<?php echo e(Route::is('admin.tyrePatteren') ? 'active' : ''); ?>"
                                href="<?php echo e(route('admin.tyrePatteren')); ?>"><i class="fa-solid fa-sliders"></i> Tyre
                                Patteren</a>
                        </li>
                        <li>
                            <a class="<?php echo e(Route::is('admin.users') ? 'active' : ''); ?>"
                                href="<?php echo e(route('admin.users')); ?>"><i class="fa-solid fa-users"></i> All users</a>
                        </li>
                        <li>
                            <a class="<?php echo e(Route::is('admin.tyreSize') ? 'active' : ''); ?>"
                                href="<?php echo e(route('admin.tyreSize')); ?>"><i class="fa-solid fa-users"></i> Tyre Sizes</a>
                        </li>
                        <li>
                            <a class="<?php echo e(Route::is('admin.orders') ? 'active' : ''); ?>"
                                href="<?php echo e(route('admin.orders')); ?>"><i class="fa-solid fa-cart-flatbed"></i> Orders</a>
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
                            <a href="<?php echo e(route("admin.profile")); ?>" class="dropdown-item">Profile</a>
                            <a href="<?php echo e(route('logout')); ?>" class="dropdown-item">Logout</a>
                        </ul>
                    </div>

                </div>


                <?php echo $__env->yieldContent('maincontent'); ?>


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



    <script>
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

    <?php echo $__env->yieldContent('customjs'); ?>

</body>

</html>
<?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/layout/main.blade.php ENDPATH**/ ?>