


<?php $__env->startSection('main'); ?>
    <div class="wrapper">
        <!-- TOP BAR SECTION END -->


        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner overlay"
            style="background-image: url(<?php echo e(asset('frontend/assets/imgs/dunlop-banner.jpg')); ?>);">
            <div class="container">
                <div class="banner-text">
                    <h1><?php echo e($menufacturerName->name); ?> Tyres</h1>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->

        <!-- SEARCH SECTION START -->
        
        <!-- SEARCH SECTION END -->


        <!-- TYRES DETAIL SECTION START -->
        <section class="tyres-detail">
            <div class="container">
                

                


                <!-- TYRES START-->
                <section class="tyres">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-5 side">
                            <h5>All Manufacturers</h5>
                            <div class="tyres-manu">
                                <ul>
                                    <?php $__currentLoopData = $menufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(count($manufacturer->products) != 0): ?>
                                            <li>
                                                <a class="<?php echo e(Request::is('manufacturers/' . $manufacturer->id) ? 'active' : ''); ?>"
                                                    href="<?php echo e(route('manufacturers', ['id' => $manufacturer->id])); ?>"><strong><?php echo e($manufacturer->name); ?></strong>
                                                    Tyres <i class="fa-solid fa-angle-right"></i> </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 shop">

                            <div class="row shop-content">

                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- tyre card -->

                                    <div class="col-lg-4 col-sm-6 px-2">

                                        <div class="product-card  overflow-hidden">

                                            <div class="img-row">
                                                <?php if($product->manufacturer->image != ''): ?>
                                                    <div class="brand-img">
                                                        <img
                                                            src="<?php echo e(asset('uploads/brands/' . $product->manufacturer->image)); ?>">
                                                    </div>
                                                <?php endif; ?>
                                                <div class="p-card-img position-relative w-100">
                                                    <?php if($product->images->isNotEmpty()): ?>
                                                        <img src="<?php echo e(asset('uploads/products/' . $product->images[0]->name)); ?>"
                                                            alt="" width="100%">
                                                    <?php endif; ?>
                                                </div>


                                            </div>

                                            <div class="product-cart-text pt-2">

                                                <div class="title-wrap">

                                                    <div class="d-flex justify-space-between">
                                                        <div class="">
                                                            <h6 class="title">
                                                                <?php echo e($product->name); ?>

                                                            </h6>
                                                            <p class="tyre-size"><?php echo e($product->tyre_size); ?></p>
                                                        </div>
                                                        <div class="ms-auto ">
                                                            <h4 class="price ">£<?php echo e($product->price); ?>

                                                                <small>each</small>
                                                            </h4>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex flex-wrap align-items-center gap-2 labels-wrap w-100 mb-2">
                                                        <span><i class="fa-solid fa-car"></i>
                                                            <?php echo e($product->tyre_type); ?></span>

                                                        <?php if($product->season_type == '0'): ?>
                                                            <span><i title="All Season"
                                                                    class="fa-brands fa-galactic-republic"></i>
                                                                All Season</span>
                                                        <?php elseif($product->season_type == '1'): ?>
                                                            <span><i class="fa-regular fa-sun"></i>
                                                                Summer</span>
                                                        <?php elseif($product->season_type == '2'): ?>
                                                            <span><i class="fa-regular fa-snowflake"></i>
                                                                Winter</span>
                                                        <?php endif; ?>

                                                        <p  class="text-nowrap mb-0  ms-auto">In Stock : <?php echo e($product->in_stock); ?></p>
                                                    </div>
                                                </div>

                                                <?php if($product->patteren != null): ?>
                                                    <a href="<?php echo e(route('tyre-patteren', ['m_id' => $product->manufacturer_id, 'id' => $product->patteren_id])); ?>"
                                                        class="main-btn sm w-100 d-block text-center">Select</a>
                                                <?php else: ?>
                                                    <a href="<?php echo e(route('shop-detail', ['id' => $product->id])); ?>"
                                                        class="main-btn sm w-100 d-block text-center">Select</a>
                                                <?php endif; ?>

                                            </div>

                                        </div>

                                    </div>

                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>

                        </div>
                    </div>
                </section>
                <!-- TYRES END -->

            </div>
        </section>
        <!-- TYRES DETAIL SECTION END -->





    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/manufacturers.blade.php ENDPATH**/ ?>