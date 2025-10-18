<?php $__env->startSection('main'); ?>
    <div class="wrapper">

        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner overlay"
            style="background-image: url(<?php echo e(asset('frontend/assets/imgs/dunlop-banner.jpg')); ?>);">
            <div class="container">
                <div class="banner-text">
                    <h1>Gallery</h1>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->

        <!-- GALLERY SECION START -->
        <section class="gallery my-3 py-5">
            
            <div class="container">
                <div class="row " id="gallery">

                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="<?php echo e(asset('frontend/assets/imgs/gallery/1.jpeg')); ?>" data-lightbox="image-1" data-title="">
                            <img src="<?php echo e(asset('frontend/assets/imgs/gallery/1.jpeg')); ?>" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="<?php echo e(asset('frontend/assets/imgs/gallery/2.jpeg')); ?>" data-lightbox="image-1" data-title="">
                            <img src="<?php echo e(asset('frontend/assets/imgs/gallery/2.jpeg')); ?>" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="<?php echo e(asset('frontend/assets/imgs/gallery/4.jpeg')); ?>" data-lightbox="image-1" data-title="">
                            <img src="<?php echo e(asset('frontend/assets/imgs/gallery/4.jpeg')); ?>" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="<?php echo e(asset('frontend/assets/imgs/gallery/33.jpeg')); ?>" data-lightbox="image-1"
                            data-title="">
                            <img src="<?php echo e(asset('frontend/assets/imgs/gallery/33.jpeg')); ?>" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="<?php echo e(asset('frontend/assets/imgs/gallery/5.jpeg')); ?>" data-lightbox="image-1" data-title="">
                            <img src="<?php echo e(asset('frontend/assets/imgs/gallery/5.jpeg')); ?>" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="<?php echo e(asset('frontend/assets/imgs/gallery/6.jpeg')); ?>" data-lightbox="image-1"
                            data-title="">
                            <img src="<?php echo e(asset('frontend/assets/imgs/gallery/6.jpeg')); ?>" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="<?php echo e(asset('frontend/assets/imgs/gallery/7.jpeg')); ?>" data-lightbox="image-1"
                            data-title="">
                            <img src="<?php echo e(asset('frontend/assets/imgs/gallery/7.jpeg')); ?>" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="<?php echo e(asset('frontend/assets/imgs/gallery/9.jpeg')); ?>" data-lightbox="image-1"
                            data-title="">
                            <img src="<?php echo e(asset('frontend/assets/imgs/gallery/9.jpeg')); ?>" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="<?php echo e(asset('frontend/assets/imgs/gallery/10.jpeg')); ?>" data-lightbox="image-1"
                            data-title="">
                            <img src="<?php echo e(asset('frontend/assets/imgs/gallery/10.jpeg')); ?>" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="<?php echo e(asset('frontend/assets/imgs/gallery/11.jpeg')); ?>" data-lightbox="image-1"
                            data-title="">
                            <img src="<?php echo e(asset('frontend/assets/imgs/gallery/11.jpeg')); ?>" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>


                </div>
            </div>
        </section>

        <!-- GALLERY SECION END -->




    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('customjs'); ?>
    <script src="<?php echo e(asset('frontend/assets/js/lightbox.min.js')); ?>"></script>
    <script>
        // GALLERY PAGE LIGHT BOX
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/atifjan/Documents/GitHub/Tyrezone-laravel/resources/views/frontend/gallery.blade.php ENDPATH**/ ?>