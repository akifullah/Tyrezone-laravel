<?php $__env->startSection('main'); ?>
    <div class="wrapper">


        <!-- HERO BANNER SECTION START -->
        
        <!-- HERO BANNER SECTION END -->
        <div class="container px-0 shop-filter man-search">
            <div class="product-search search-wrap overflow-hidden p-0 border-0 rounded">
                <form action="<?php echo e(route('shopSearch')); ?>" class="border rounded p-3 overflow-hidden">
                    <div class="">
                        <div class="row align-items-end ">


                            <div class="col-md mb-2 px-1">
                                <div class="form-group ">
                                    <label for="" class="inp-label">Brand</label>
                                    <select name="manufacturer" class=" form-select shadow-none">
                                        <option selected="selected" value="">Select Brand</option>
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
                            </div>

                            <div class="col-md col-6 mb-2 px-1">
                                <div class="form-group">
                                    <label for="" class="inp-label">Width</label>

                                    <select name="width" id="" class="form-select">
                                        <option disabled selected>Width</option>
                                        <?php if($allWidths->isNotEmpty()): ?>
                                            <?php $__currentLoopData = $allWidths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(Request::get('width') == $size->width ? 'selected' : ''); ?>

                                                    value="<?php echo e($size->width); ?>">
                                                    <?php echo e($size->width); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md col-6 mb-2 px-1">
                                <div class="form-group">
                                    <label for="" class="inp-label">Height</label>
                                    <select name="profile" class="form-select">
                                        <option disabled selected>Profile</option>
                                        <?php if($allProfiles->isNotEmpty()): ?>
                                            <?php $__currentLoopData = $allProfiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(Request::get('profile') == $size->profile ? 'selected' : ''); ?>

                                                    value="<?php echo e($size->profile); ?>">
                                                    <?php echo e($size->profile); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>

                                </div>

                            </div>


                            <div class="col-md col-6 mb-2 px-1">
                                <div class="form-group">
                                    <label for="" class="inp-label">Rim Size</label>
                                    <select name="rim_size" class="form-select">
                                        <option disabled selected>Rim Size</option>
                                        <?php if($allRimSizes->isNotEmpty()): ?>
                                            <?php $__currentLoopData = $allRimSizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(Request::get('rim_size') == $size->rim_size ? 'selected' : ''); ?>

                                                    value="<?php echo e($size->rim_size); ?>">
                                                    <?php echo e($size->rim_size); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md col-6 mb-2 px-1">
                                <div class="form-group">
                                    <label for="" class="inp-label">Speed</label>
                                    <select name="speed" class="form-select">
                                        <option value="">Speed</option>
                                        <?php if($allSpeeds->isNotEmpty()): ?>
                                            <?php $__currentLoopData = $allSpeeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(Request::get('speed') == $size->speed ? 'selected' : ''); ?>

                                                    value="<?php echo e($size->speed); ?>">
                                                    <?php echo e($size->speed); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>



                        </div>

                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-6 px-0 px-sm-2">
                                <div class="">
                                    <label for="" class="inp-label">Season</label>
                                    <div class="form-check">
                                        <input class="form-check-input" <?php if(in_array('1', Request::get('season_type', []))): echo 'checked'; endif; ?> value="1"
                                            type="checkbox" name="season_type[]" id="season_type_1">
                                        <label for="season_type_1" class="form-check-label">Summer</label>

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" <?php if(in_array('2', Request::get('season_type', []))): echo 'checked'; endif; ?> value="2"
                                            type="checkbox" name="season_type[]" id="season_type_2">
                                        <label for="season_type_2" class="form-check-label">Winter</label>

                                    </div>
                                </div>
                                <div class="col-md align-self-center mt-2 mt-sm-3">
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" <?php if(Request::get('run_flat') == '1'): ?> checked <?php endif; ?>
                                                type="checkbox" name="run_flat" id="run_flat" value="1">
                                            <label
                                                class="form-check-label
                                            <?php if(Request::get('run_flat') == '1'): ?> checked <?php endif; ?>"
                                                for="run_flat">Run Flat</label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 px-0 px-sm-2">
                                <div class="form-control bg-transparent border-0">
                                    <label for="" class="inp-label">Vehicle Category</label>
                                    <?php if($vehicleCategory->isNotEmpty()): ?>
                                        <?php $__currentLoopData = $vehicleCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="form-check">
                                                <input type="checkbox" <?php if(in_array($v_cat->v_cat_name, Request::get('v_cat', []))): echo 'checked'; endif; ?>
                                                    value="<?php echo e($v_cat->v_cat_name); ?>" id="v_cat_<?php echo e($v_cat->id); ?>"
                                                    class="form-check-input" name="v_cat[]">
                                                <label
                                                    for="v_cat_<?php echo e($v_cat->id); ?>"><?php echo e(ucwords($v_cat->v_cat_name)); ?></label>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 px-0 px-sm-2">
                                <div class="form-control bg-transparent border-0">
                                    <label for="" class="inp-label">Brand Category</label>
                                    <div class="form-check">
                                        <input type="checkbox" <?php if(in_array('budget', Request::get('brand_category', []))): echo 'checked'; endif; ?> value="budget"
                                            class="form-check-input" name="brand_category[]" id="budget">
                                        <label for="budget" class="form-check-label">Budget</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" <?php if(in_array('mid_range', Request::get('brand_category', []))): echo 'checked'; endif; ?> value="mid_range"
                                            class="form-check-input" name="brand_category[]" id="mid_range">
                                        <label for="mid_range" class="form-check-label">Mid Range</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" <?php if(in_array('premium', Request::get('brand_category', []))): echo 'checked'; endif; ?> value="premium"
                                            class="form-check-input" name="brand_category[]" id="premium">
                                        <label for="premium" class="form-check-label">Premium</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm-6 col-12 align-self-end">
                                <div class="d-flex align-items-center justify-content-end mt-3">

                                    <a href="<?php echo e(route('shop')); ?>" class="clear-btn">Clear Filter</a>
                                    <div class="text-end ms-3">
                                        <button class="main-btn sm"> Show Result</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>








                </form>
            </div>
            
        </div>


        
        <section class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-12 order-1 order-lg-0">
                        <div class="shop-content">
                            <h2>Tyres</h2>

                            <div class="row">
                                <?php if($products->isNotEmpty()): ?>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-xl-3 col-lg-4 col-md-4  col-sm-6 px-2">

                                            <div class="product-card position-relative overflow-hidden">
                                                <?php if($product->in_stock < 1): ?>
                                                    <div class="tags">Out of Stock</div>
                                                <?php endif; ?>
                                                <div class="img-row">
                                                    <?php if($product->manufacturer?->image != ''): ?>
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
                                <?php else: ?>
                                    <h3 class=" my-4 fw-normal text-center">Item Not Found</h3>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        








    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/atifjan/Documents/GitHub/Tyrezone-laravel/resources/views/frontend/shop.blade.php ENDPATH**/ ?>