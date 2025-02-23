

<?php $__env->startSection('maincontent'); ?>
    <div class="content-area mt-5">


        <div class="row dashboard">

            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="<?php echo e(route('admin.products')); ?>">
                    <div class="dash-card">
                        <h4>Products</h4>
                        <h5><?php echo e($products->count()); ?></h5>
                        <i class="fa-solid fa-box-archive"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="<?php echo e(route('admin.tyrePatteren')); ?>">
                    <div class="dash-card">
                        <h4>Patteren</h4>
                        <h5><?php echo e($patterens->count()); ?></h5>
                        <i class="fa-solid fa-sliders"></i>
                    </div>
                </a>

            </div>

            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="<?php echo e(route('admin.manufacturers')); ?>">
                    <div class="dash-card">
                        <h4>Manufacturers</h4>
                        <h5><?php echo e($manufacturers->count()); ?></h5>
                        <i class="fa-solid fa-list"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="<?php echo e(route('admin.users')); ?>">
                    <div class="dash-card">
                        <h4>Users</h4>
                        <h5><?php echo e($users->count()); ?></h5>
                        <i class="fa-solid fa-users"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="<?php echo e(route('admin.orders')); ?>">
                    <div class="dash-card">
                        <h4>Orders</h4>
                        <h5><?php echo e($orders->count()); ?></h5>
                        <i class="fa-solid fa-cart-flatbed"></i>
                    </div>
                </a>
            </div>
        </div>


        <div class="row mb-5 mt-5">
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Manufacturers</h5>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>Manufacturer Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Created At</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php if($manufacturers->isNotEmpty()): ?>
                                <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($manufacturer->name); ?></td>
                                        <td>

                                            <img src="<?php echo e(asset('uploads/brands/' . $manufacturer->image)); ?>"
                                                alt="">
                                        </td>
                                        <td>
                                            <?php echo e($manufacturer->description); ?>

                                        </td>

                                        <!-- Truncate to 50 characters -->
                                        <td><?php echo e(\Carbon\Carbon::parse($manufacturer->created_at)->format('d M, Y')); ?></td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Tyre Pattern</h5>


                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Patteren Name</th>
                                <th>manufacture</th>
                                <th>Created At</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php if($patterens->isNotEmpty()): ?>
                                <?php $__currentLoopData = $patterens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patteren): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($patteren->name); ?></td>
                                        <td><?php echo e($patteren->manufacturer->name); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($patteren->created_at)->format('d M, Y')); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Products</h5>


        </div>


        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tyre Name</th>
                        <th>Image</th>
                        <th>Manufac. Name</th>
                        <th>Tyre Patteren</th>

                        <th>Size</th>
                        <th>Price</th>

                    </tr>
                </thead>

                <tbody>
                    <?php if($products->isNotEmpty()): ?>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product->name); ?></td>
                                <td>
                                    <?php if($product->images->isNotEmpty()): ?>
                                        <img src="<?php echo e(asset('uploads/products/' . $product->images[0]->name)); ?>"
                                            alt="">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($product->manufacturer->name); ?></td>
                                <td><?php echo e($product->patteren->name); ?></td>
                                <td><?php echo e($product->tyre_size); ?></td>

                                <td><?php echo e($product->price); ?></td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>