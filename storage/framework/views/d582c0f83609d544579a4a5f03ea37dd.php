

<?php $__env->startSection('main'); ?>
    <div class="wrapper">







        <!-- TYRES PATTERN SECTION START -->
        <section class="tyres-detail tyre-pattern">
            <div class="container pattern-container">
                <h2><?php echo e($names->manufacturer->name . ' ' . $names->name); ?></h2>

                <!-- TYRES START-->
                <section class="tyres">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-5 side">
                            <h5>ALL TYRES PATTERNS</h5>
                            <div class="tyres-manu pattern">
                                <ul>
                                    <?php if($patterensNavs->isNotEmpty()): ?>
                                        <?php $__currentLoopData = $patterensNavs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patterensNav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(count($patterensNav->products) != 0): ?>
                                                <li><a class="<?php echo e(Request::is('tyre-patteren/' . $patterensNav->manufacturer_id . '/' . $patterensNav->id) ? 'active' : ''); ?>"
                                                        href="<?php echo e(route('tyre-patteren', ['m_id' => $patterensNav->manufacturer_id, 'id' => $patterensNav->id])); ?>"><?php echo e($patterensNav->name . ' ' . count($patterensNav->products)); ?>

                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">

                            <div class="row">
                                <?php if($products->isNotEmpty()): ?>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- CARD -->
                                        <div class="col-lg-4 col-sm-6 mb-5 px-2">
                                            <div class="pattern-card border rounded p-2">
                                                <div class="patt-card-head">

                                                    <div class="pt-img">
                                                        <?php if($product->images->isNotEmpty()): ?>
                                                            <img src="<?php echo e(asset('uploads/products/' . $product->images[0]->name)); ?>"
                                                                alt="">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="feature">

                                                    <ul class="list-unstyled">
                                                        <li
                                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                                            <div class="">
                                                                <img src="<?php echo e(asset('frontend/assets/imgs/fuel-tyre.jpg')); ?>"
                                                                    alt="">
                                                            </div>
                                                            <span class="green"><?php echo e($product->fuel_efficiency); ?></span>
                                                        </li>

                                                        <li
                                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                                            <div class="">
                                                                <img src="<?php echo e(asset('frontend/assets/imgs/wet_grip.jpg')); ?>"
                                                                    alt="">
                                                            </div>
                                                            <span class="orange"><?php echo e($product->wet_grip); ?></span>
                                                        </li>

                                                        <li
                                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                                            <div class="">
                                                                <img src="<?php echo e(asset('frontend/assets/imgs/road-noise-icon.jpg')); ?>"
                                                                    alt="">
                                                            </div>
                                                            <span class="black"><?php echo e($product->road_noise); ?></span>
                                                        </li>
                                                    </ul>

                                                </div>

                                                <div class="tyre-detail ">
                                                    <h5><?php echo e($product->name); ?>

                                                        <span class="ms-2"><?php echo e($product->tyre_size); ?></span>
                                                    </h5>
                                                </div>

                                                <div class="labels">
                                                    <a
                                                        href="<?php echo e(route('manufacturers', ['id' => $product->manufacturer->id])); ?>">
                                                        <?php echo e($product->manufacturer->name); ?>

                                                    </a>
                                                    <a href="#">
                                                        <?php if($product->season_type == '1'): ?>
                                                            Summer
                                                        <?php elseif($product->season_type == '2'): ?>
                                                            Winter
                                                        <?php else: ?>
                                                            All Season
                                                        <?php endif; ?>
                                                    </a>
                                                </div>

                                                

                                                <a href="<?php echo e(route('shop-detail', ['id' => $product->id])); ?>"
                                                    class="main-btn sm w-100 mt-2 d-block text-center">Select</a>
                                            </div>
                                        </div>
                                        <!-- CARD -->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                            </div>

                        </div>
                    </div>
                </section>
                <!-- TYRES END -->

            </div>
        </section>
        <!-- TYRES PATTERN SECTION END -->





    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
    <script>
        function addToCart(event, pname) {
            event.preventDefault();
            let product = pname;
            let qty = parseInt(event.target.quantity.value) || 1;


            console.log(product)

            let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
            let isInCart = cart.findIndex((value) => value.id == product.id);

            if (isInCart < 0) {
                cart.push({
                    ...product,
                    qty
                });
            } else {
                if ((cart[isInCart].qty + qty) > cart[isInCart].in_stock) {
                    alert(`Only ${cart[isInCart].in_stock} item availble in stock.`)
                    return
                }
                cart[isInCart].qty = cart[isInCart].qty + qty;
            }

            localStorage.setItem("tyreZoneCart", JSON.stringify(cart));
            cartLength();
            callData();

            // window.location.href = '<?php echo e(route('cart')); ?>';
            // localStorage.setItem("tyreZoneCart", [...cart, product])

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/tyre-patteren.blade.php ENDPATH**/ ?>