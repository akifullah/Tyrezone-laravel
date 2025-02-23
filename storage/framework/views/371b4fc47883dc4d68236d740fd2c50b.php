

<?php $__env->startSection('main'); ?>
    <div class="wrapper">


        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner overlay"
            style="background-image: url(<?php echo e(asset('frontend/assets/imgs/dunlop-banner.jpg')); ?>);">
            <div class="container">
                <div class="banner-text">
                    <h1>Shop</h1>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->


        
        <section class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mb-5 pe-lg-5 ">
                        <div class="shop-content">
                            <h2>Tyres</h2>

                            <div class="row">
                                <?php if($products->isNotEmpty()): ?>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-4 col-sm-6 px-2">

                                            <div class="product-card position-relative overflow-hidden">
                                                <?php if($product->in_stock < 1): ?>
                                                    <div class="tags">Out of Stock</div>
                                                <?php endif; ?>
                                                <div class="img-row">
                                                    <?php if($product->manufacturer->image != ''): ?>
                                                        <div class="brand-img">
                                                            <img
                                                                src="<?php echo e(asset('uploads/brands/' . $product->manufacturer->image)); ?>">
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="p-card-img position-relative w-100">
                                                        <?php if($product->images->isNotEmpty()): ?>
                                                            <img
                                                                src="<?php echo e(asset('uploads/products/' . $product->images[0]->name)); ?>">
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
                                                    <div class="d-flex flex-wrap gap-2 labels-wrap w-100 mb-2">
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
                                                    </div>

                                                    <a href="<?php echo e(route('shop-detail', ['id' => $product->id])); ?>"
                                                        class="main-btn sm w-100 d-block text-center">Select</a>

                                                </div>

                                            </div>

                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="shop-sidebar mb-5 ">
                            <div class="product-search">
                                <h2>Search Tyre</h2>
                                <form action="<?php echo e(route('shopSearch')); ?>" class="border rounded p-3">

                                    <div class="form-group mb-3">
                                        <label for="">Brand</label>
                                        <select name="manufacturer" class=" form-select shadow-none">
                                            <option disabled selected="selected">Select Brand</option>
                                            <?php if($manufacturers->isNotEmpty()): ?>
                                                <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        <?php echo e(Request::get('manufacturer') == $manufacturer->id ? 'selected' : ''); ?>

                                                        value="<?php echo e($manufacturer->id); ?>"><?php echo e($manufacturer->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>


                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Patteren</label>
                                        <select name="patteren" class=" form-select shadow-none">
                                            <option selected="selected" disabled>Select Patteren</option>
                                            <?php if($patterens->isNotEmpty()): ?>
                                                <?php $__currentLoopData = $patterens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patteren): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        <?php echo e(Request::get('patteren') == $patteren->id ? 'selected' : ''); ?>

                                                        value="<?php echo e($patteren->id); ?>"><?php echo e($patteren->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Tyre Size</label>
                                        <select name="size" class="form-select shadow-none">
                                            <option selected="selected" disabled>Select Size</option>
                                            <?php if($sizes->isNotEmpty()): ?>
                                                <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        <?php echo e(Request::get('size') == $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed ? 'selected' : ''); ?>

                                                        value="<?php echo e($size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed); ?>">
                                                        <?php echo e($size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>

                                    <div class="text-end">
                                        <button class="main-btn sm"> Show Result</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        








    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/shop.blade.php ENDPATH**/ ?>