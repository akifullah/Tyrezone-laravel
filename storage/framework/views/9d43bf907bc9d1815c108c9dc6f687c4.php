


<?php $__env->startSection('maincontent'); ?>
    <div class="content-area mt-5">

        <?php echo $__env->make('admin.common.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Products</h5>
            <a class="main-btn sm " href="<?php echo e(route('admin.addProduct')); ?>">Add Product</a>
            <!-- Updated route -->
        </div>

        <p class="text-danger"></p>
        <p class="text-success"></p>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tyre Name</th>
                        <th>Image</th>
                        <th>Manufac. Name</th>
                        <th>Tyre Pattern</th>
                        <th>Fuel Efficiency</th>
                        <th>Wet Grip</th>
                        <th>Road Noise</th>
                        <th>Size</th>

                        <th>Season</th>
                        
                        <th>In Stock</th>
                        <th>Vat</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if($products->isNotEmpty()): ?>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product->id); ?></td>
                                <td><?php echo e($product->name); ?></td>
                                <td>
                                    <?php if($product->images->isNotEmpty()): ?>
                                        <img src="<?php echo e(asset('uploads/products/' . $product->images[0]->name)); ?>"
                                            alt="">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($product->manufacturer->name); ?></td>
                                <td><?php echo e($product->patteren != null ? $product->patteren->name : ''); ?></td>
                                <td><?php echo e($product->fuel_efficiency); ?></td>
                                <td><?php echo e($product->wet_grip); ?></td>
                                <td><?php echo e($product->road_noise); ?></td>
                                <td class="text-nowrap">
                                    <?php echo e($product->tyre_size); ?>

                                </td>

                                <td>
                                    <?php if($product->season_type == 1): ?>
                                        <i title="Summer" class=" h3 fa-solid fa-sun"></i>
                                    <?php elseif($product->season_type == 2): ?>
                                        <i title="Winter" class=" h3 fa-regular fa-snowflake"></i>
                                    <?php else: ?>
                                        <i title="All Season" class=" h3 fa-brands fa-galactic-republic"></i>
                                    <?php endif; ?>
                                </td>
                                
                                <td class="text-nowrap"><?php echo e($product->in_stock); ?></td>
                                <td class="text-nowrap">$<?php echo e($product->vat_price); ?></td>
                                <td class="text-nowrap">$<?php echo e($product->price); ?></td>
                                <td>
                                    <div class="last-btns">

                                        <a href="<?php echo e(route('admin.editProduct', ['id' => $product->id])); ?>"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>



                                        <button onclick="deleteProduct(<?php echo e($product->id); ?>)" class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>


                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('customjs'); ?>
    <script>
        function deleteProduct(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "<?php echo e(route('admin.deleteProduct')); ?>",
                    type: "post",
                    data: {
                        id
                    },
                    dataType: "json",
                    success: function(res) {
                        if (res.status) {
                            window.location.reload();
                        }
                    }
                })
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/products.blade.php ENDPATH**/ ?>