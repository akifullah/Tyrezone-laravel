

<?php $__env->startSection('main'); ?>
    <div class="wrapper">


        <!-- HERO BANNER SECTION START -->
        
        <!-- HERO BANNER SECTION END -->
        <div class="container px-0 pb-0 shop-filter man-search">
            <div class="product-search search-wrap overflow-hidden p-0 border-0 rounded">
                <form action="<?php echo e(route('wholesale.filter')); ?>" class="border rounded p-3 overflow-hidden">
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
                                        <?php if($sizes->isNotEmpty()): ?>
                                            <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                        <?php if($sizes->isNotEmpty()): ?>
                                            <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                        <?php if($sizes->isNotEmpty()): ?>
                                            <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                        <?php if($sizes->isNotEmpty()): ?>
                                            <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                                    <a href="<?php echo e(route('wholesale')); ?>" class="clear-btn">Clear Filter</a>
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


        
        <section class="shop mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 order-1 order-lg-0">
                        <div class="shop-content">
                            <h3>Tyres</h3>

                            <?php if($products->isNotEmpty()): ?>
                                <div class="table-responsive filter-table">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                
                                                <th>Description</th>
                                                <th>Season</th>
                                                <th>Price</th>
                                                <th>In Stock</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($product->id); ?></td>
                                                    
                                                    <td>(<?php echo e($product->tyre_size); ?>) <?php echo e($product->name); ?>

                                                        <?php echo e($product?->manufacturer?->name); ?></td>
                                                    <td class="text-center">
                                                        <?php if($product?->season_type == 1): ?>
                                                            <i title="Summer" class=" h3 mb-0 fa-solid fa-sun"></i>
                                                        <?php elseif($product?->season_type == 2): ?>
                                                            <i title="Winter"
                                                                class=" h3 mb-0 fa-regular fa-snowflake"></i>
                                                        <?php else: ?>
                                                            <i title="All Season"
                                                                class=" h3 mb-0 fa-brands fa-galactic-republic"></i>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($product->price); ?></td>
                                                    <td><?php echo e($product->in_stock); ?></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <input
                                                                class="form-control   item-qty-inp me-2 form-control-sm shadow-none"
                                                                type="number" placeholder="Quantity"
                                                                id="qty_<?php echo e($product->id); ?>">
                                                            <button class="main-btn sm text-nowrap"
                                                                onclick="addToCart(<?php echo e($product); ?>)">Add</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php else: ?>
                                <h3 class=" my-4 fw-normal text-center">Items Not Found</h3>
                            <?php endif; ?>

                            
                        </div>
                    </div>

                </div>
            </div>
        </section>
        










    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('customjs'); ?>
    <script>
        function addToCart(pname, qty, buyNow = false) {
            let productQty = document.getElementById(`qty_${pname.id}`)?.value;
            if (!productQty) {
                alert("Please Enter item Quantity.");
                return
            }
            if (productQty <= 0) {
                alert("Whoops! Quantity must be 1 or more.");
                return
            }
            let product = pname;


            if (product?.in_stock <= 0) {
                alert("Product is out of stock!")
                return
            }
            if (Number(productQty) > Number(product.in_stock)) {
                alert("Product is not available in this quantity!")
                return
            }

            product.qty = productQty;



            let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
            let isInCart = cart.findIndex((value) => value.id == product.id);

            if (isInCart < 0) {
                cart.push({
                    ...product
                });
            } else {
                // if (buyNow) {

                //     window.location.href = '<?php echo e(route('checkout')); ?>';
                // } else {
                //     alert("Item already added in your  cart!")
                //     return
                // }
                cart[isInCart].qty = Number(cart[isInCart].qty) + Number(productQty);
            }

            localStorage.setItem("tyreZoneCart", JSON.stringify(cart));
            cartLength();
            callData();

            

            // if (buyNow) {

            //     window.location.href = '<?php echo e(route('checkout')); ?>';
            // } else {
            //     window.location.href = '<?php echo e(route('cart')); ?>';

            // }
            // localStorage.setItem("tyreZoneCart", [...cart, product])

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/wholesale.blade.php ENDPATH**/ ?>