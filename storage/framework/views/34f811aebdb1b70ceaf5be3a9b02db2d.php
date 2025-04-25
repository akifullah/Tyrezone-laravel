

<?php $__env->startSection('main'); ?>
    <div class="wrapper">






        
        <section class="shop-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-12 mx-auto mb-5">
                        <div class="product-view ">
                            <div class="main-img d-flex ">
                                <?php if($product->images->isNotEmpty()): ?>
                                    <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="p-img">
                                            <img src="<?php echo e(asset('uploads/products/' . $image->name)); ?>" width="100%"
                                                alt="">
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                
                            </div>
                            <div class="img-filter d-flex align-items-center justify-content-around">
                                <?php if($product->images->isNotEmpty()): ?>
                                    <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="filter active" data-filter="<?php echo e($key + 1); ?>">
                                            <img src="<?php echo e(asset('uploads/products/' . $image->name)); ?>" width="100px"
                                                alt="">
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-detail">
                            <h2><?php echo e($product->name . ' ' . $product->tyre_size); ?></h2>
                            <p>
                                <?php if($product->description != ''): ?>
                                    <?php echo e(Str::words(strip_tags($product->description), 45)); ?>

                                    <?php if(strlen($product->description) > 45): ?>
                                        <a href="#description">More Detail</a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </p>

                            <h5 class="price">£<?php echo e($product->price); ?></h5>

                            <div class="btns d-flex gap-3 my-4">
                                <button onclick="addToCart(<?php echo e($product); ?>)"
                                    class="main-btn rounded-0 py-2 btn-outline">Add To Cart </button>
                                <button onclick="addToCart(<?php echo e($product); ?>, true)" class="main-btn rounded-0 py-2">Buy
                                    Now </button>
                            </div>

                            <div class="tyre-detail pt-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4><?php echo e($product->manufacturer->name . ' ' . $product->tyre_size); ?></h4>

                                    <p class="mb-0">
                                        <?php if($product->in_stock > 0): ?>
                                            <span class="text-success">
                                                <?php echo e($product->in_stock); ?> item in Stock
                                            </span>
                                        <?php else: ?>
                                            <span class="text-danger">
                                                Out of Stock
                                            </span>
                                        <?php endif; ?>
                                    </p>
                                </div>
                                <div class="mt-2 table-responsive">
                                    <table class="table table-striped border">
                                        <tbody>
                                            <tr>
                                                <td>Pattern Name</td>
                                                <td class="text-end">
                                                    <span><?php echo e($product->patteren != null ? $product->patteren->name : 'Not Specified'); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tyre Size</td>
                                                <td class="text-end">
                                                    <span><?php echo e($product->tyre_size); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tyre Width</td>
                                                <td class="text-end">
                                                    <span><?php echo e($product->width); ?> mm</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rim Size</td>
                                                <td class="text-end">
                                                    <span><?php echo e($product->rim_size); ?> Inches</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tyre Aspect Ratio (Height)</td>
                                                <td class="text-end">
                                                    <span><?php echo e($product->profile); ?> %</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Speed Rating</td>
                                                <td class="text-end">
                                                    <span><?php echo e($product->speed); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Load Index</td>
                                                <td class="text-end">
                                                    <span><?php echo e($product->load_index); ?></span>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>

                            </div>



                        </div>
                    </div>
                </div>

                
                <?php if($product->description != ''): ?>
                    <div class="description col-md-12" id="description">
                        <div class="details">
                            <?php echo $product->description; ?>

                        </div>
                    </div>
                <?php endif; ?>
                


            </div>
        </section>
        

        

        <?php if($relatedProducts->isNotEmpty()): ?>
            <section class="shop mt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb-5 pe-lg-5 ">
                            <div class="shop-content">
                                <h2>Related Products</h2>

                                <div class="row">
                                    <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-3 col-sm-6 px-2">

                                            <div class="product-card  overflow-hidden">

                                                <div class="img-row">

                                                    <?php if($relatedProduct->manufacturer->image != ''): ?>
                                                        <div class="brand-img">
                                                            <img
                                                                src="<?php echo e(asset('uploads/brands/' . $relatedProduct->manufacturer->image)); ?>">
                                                        </div>
                                                    <?php endif; ?>

                                                    <div class="p-card-img position-relative w-100">
                                                        <?php if($relatedProduct->images->isNotEmpty()): ?>
                                                            <img src="<?php echo e(asset('uploads/products/' . $relatedProduct->images[0]->name)); ?>"
                                                                alt="" width="100%">
                                                        <?php endif; ?>
                                                    </div>


                                                </div>

                                                <div class="product-cart-text pt-2">

                                                    <div class="title-wrap">

                                                        <div class="d-flex justify-space-between">
                                                            <div class="">
                                                                <h6 class="title">
                                                                    <?php echo e($relatedProduct->name); ?>

                                                                </h6>
                                                                <p class="tyre-size"><?php echo e($relatedProduct->tyre_size); ?></p>
                                                            </div>
                                                            <div class="ms-auto ">
                                                                <h4 class="price ">£<?php echo e($relatedProduct->price); ?>

                                                                    <small>each</small>
                                                                </h4>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="d-flex flex-wrap gap-2 labels-wrap w-100 mb-2">
                                                        
                                                        <?php if($relatedProduct->season_type == '0'): ?>
                                                            <span><i title="All Season"
                                                                    class="fa-brands fa-galactic-republic"></i>
                                                                All Season</span>
                                                        <?php elseif($relatedProduct->season_type == '1'): ?>
                                                            <span><i class="fa-regular fa-sun"></i>
                                                                Summer</span>
                                                        <?php elseif($relatedProduct->season_type == '2'): ?>
                                                            <span><i class="fa-regular fa-snowflake"></i>
                                                                Winter</span>
                                                        <?php endif; ?>
                                                    </div>

                                                    <a href="<?php echo e(route('shop-detail', ['id' => $relatedProduct->id])); ?>"
                                                        class="main-btn sm w-100 d-block text-center">Select</a>

                                                </div>

                                            </div>

                                        </div>


                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        <?php endif; ?>




        <script>
            let filters = document.querySelectorAll(".filter");
            let filterImgs = document.querySelectorAll(".main-img .p-img");

            filters.forEach(fitler => {
                fitler.addEventListener("click", function(e) {
                    filters.forEach(filter => {
                        filter.classList.remove("active");
                    })
                    let filterVal = fitler.getAttribute("data-filter") - 1;
                    filterImgs.forEach(img => {
                        img.style.transform = `translateX(-${100 * filterVal}%)`
                    });


                    fitler.classList.add("active");

                })
            });
        </script>










    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
    <script>
        function addToCart(pname, buyNow = false) {
            let product = pname;

            if (product.in_stock <= 0) {
                alert("Product is out of stock!")
                return
            }

            product.qty = 1;



            let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
            let isInCart = cart.findIndex((value) => value.id == product.id);

            if (isInCart < 0) {
                cart.push({
                    ...product
                });
            } else {
                if (buyNow) {

                    window.location.href = '<?php echo e(route('checkout')); ?>';
                } else {
                    alert("Item already added in your  cart!")
                    return
                }
                // cart[isInCart].qty = cart[isInCart].qty + 1;
            }

            localStorage.setItem("tyreZoneCart", JSON.stringify(cart));
            cartLength();
            callData();

            if (buyNow) {

                window.location.href = '<?php echo e(route('checkout')); ?>';
            } else {
                window.location.href = '<?php echo e(route('cart')); ?>';

            }
            // localStorage.setItem("tyreZoneCart", [...cart, product])

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/shop-detail.blade.php ENDPATH**/ ?>