

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/user-dashboard.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>
    <div class="wrapper">






        <!-- USER DASHBOARD -->
        <div class="user-dashboard">

            <div class="">
                <!-- HERO BANNER SECTION START -->
                <section class="hero-banner user-profile-banner overlay"
                    style="background-image: url(<?php echo e(asset('frontend/assets/imgs/profile-bg.jpg')); ?>);">
                    <div class="container">
                        <div class="banner-text text-center">
                            <h1>Welcome Back <?php echo e(Auth::user()->fname . ' ' . Auth::user()->lname); ?>

                            </h1>
                        </div>
                    </div>
                </section>
                <!-- HERO BANNER SECTION END -->


                <div class="row">
                    <div class="col-lg-3">
                        <?php echo $__env->make('frontend.includes.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>

                    <div class="col-lg-9 pe-4 my-lg-4">
                        <?php echo $__env->make('frontend.common.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>



                        <div class="user-main border rounded my-5">
                            <h5>User Information</h5>
                            <div class="user-profile">
                                <h4><?php echo e(Auth::user()->fname . ' ' . Auth::user()->lname); ?></h4>


                                <div class="row">

                                    <div class="col-md-12">
                                        <p><strong>Email:</strong> <?php echo e(Auth::user()->email); ?></p>
                                    </div>
                                    <div class="col-md-12">
                                        <p><strong>Phone:</strong> <?php echo e(Auth::user()->phone); ?></p>
                                    </div>


                                </div>




                                <div class="row">

                                    <div class="col-12  mt-3">
                                        <a href="<?php echo e(route('profile.edit')); ?>" class="main-btn d-inline-block">Update
                                            Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- USER DASHBOARD END -->







    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/user-dashboard.blade.php ENDPATH**/ ?>