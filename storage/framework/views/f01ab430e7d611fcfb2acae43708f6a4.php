

<?php $__env->startSection('main'); ?>
    <div class="wrapper">



        <!-- SEARCH SECTION START -->
        <section class="man-search pb-0">
            <div class="search-wrap rounded">
                <div class="row">



                    <div class="col-12 ">
                        <div class="search-by-tyres">

                            <form action="<?php echo e(route('search')); ?>">
                                <div class="row justify-content-center align-items-end">
                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <h3>Search by Tyre size</h3>
                                        <div class="form-group">
                                            <select name="width" id="" class="form-select">
                                                <option disabled selected>Width</option>
                                                <?php if($sizes->isNotEmpty()): ?>
                                                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            <?php echo e(Request::get('width') == $size->width ? 'selected' : ''); ?>

                                                            value="<?php echo e($size->width); ?>">
                                                            <?php echo e($size->width); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="profile" class="form-select">
                                                <option disabled selected>Profile</option>
                                                <?php if($sizes->isNotEmpty()): ?>
                                                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            <?php echo e(Request::get('profile') == $size->profile ? 'selected' : ''); ?>

                                                            value="<?php echo e($size->profile); ?>">
                                                            <?php echo e($size->profile); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </select>

                                        </div>

                                    </div>


                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="rim_size" class="form-select">
                                                <option disabled selected>Rim Size</option>
                                                <?php if($sizes->isNotEmpty()): ?>
                                                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            <?php echo e(Request::get('rim_size') == $size->rim_size ? 'selected' : ''); ?>

                                                            value="<?php echo e($size->rim_size); ?>">
                                                            <?php echo e($size->rim_size); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="speed" class="form-select">
                                                <option value="" >Speed</option>
                                                <?php if($sizes->isNotEmpty()): ?>
                                                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            <?php echo e(Request::get('speed') == $size->speed ? 'selected' : ''); ?>

                                                            value="<?php echo e($size->speed); ?>">
                                                            <?php echo e($size->speed); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
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
                    </div>
                </div>
            </div>
        </section>
        <!-- SEARCH SECTION END -->


        <section class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5 ">
                        <div class="shop-content">
                            <h2>Search Result</h2>

                            <div class="row">
                                <?php if($products->isNotEmpty()): ?>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-3 col-sm-6 px-2">

                                            <div class="product-card  overflow-hidden">
                                                <?php if($product->in_stock < 1): ?>
                                                    <div class="tags">Out of Stock</div>
                                                <?php endif; ?>
                                                <div class="img-row">
                                                    <?php if($product->manufacturer->image): ?>
                                                        <div class="brand-img">
                                                            <img alt=""
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
                                <h3 class="text-center my-4">Item Not Found</h3>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
    <script>
        function addToCart(event, pname) {
            event.preventDefault();
            let product = pname;
            product.qty = Number(event.target.quantity.value);


            let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
            let isInCart = cart.findIndex((value) => value.id == product.id);

            if (isInCart < 0) {
                cart.push({
                    ...product
                });
            } else {
                cart[isInCart].qty = cart[isInCart].qty + 1;
            }

            localStorage.setItem("tyreZoneCart", JSON.stringify(cart));
            cartLength();
            callData();

            window.location.href = '<?php echo e(route('cart')); ?>';
            // localStorage.setItem("tyreZoneCart", [...cart, product])

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/search.blade.php ENDPATH**/ ?>