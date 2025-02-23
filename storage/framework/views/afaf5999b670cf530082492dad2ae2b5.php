

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/user-dashboard.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <div class="wrapper">






        <!-- USER DASHBOARD -->
        <div class="user-dashboard">

            <div class="">



                <div class="row">
                    <div class="col-lg-3">
                        <?php echo $__env->make('frontend.includes.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                    </div>

                    <div class="col-lg-9 pe-4 my-lg-4">



                        <div class="content-area mt-5">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-3">Orders</h5>


                            </div>


                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Name</th>
                                            <th>mobile</th>
                                            <th>Address</th>
                                            <th class="text-center">Products</th>
                                            <th>Payment Status</th>
                                            <th>Order Status</th>

                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php if($orders != null): ?>
                                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>#<?php echo e($order->order_id); ?></td>
                                                    <td><?php echo e($order->orderDetail->fname); ?></td>
                                                    <td><?php echo e($order->orderDetail->phone); ?></td>
                                                    <td><?php echo e($order->orderDetail->address); ?></td>
                                                    <td class="text-center">
                                                        <button class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#productModal-<?php echo e($order->order_id); ?>">View
                                                            Products</button>
                                                        <div class="modal fade" id="productModal-<?php echo e($order->order_id); ?>">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="mb-0"
                                                                            style="margin-bottom: 0 !important;">Products
                                                                        </h5>
                                                                        <button class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <h6 class="text-start">Order #:
                                                                            <?php echo e($order->order_id); ?></h6>
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table table-condensed table-bordered">
                                                                                <tr class="bg-none">
                                                                                    
                                                                                    <th class="bg-transparent">
                                                                                        Product Name
                                                                                    </th>
                                                                                    <th class="bg-transparent">Product Image
                                                                                    </th>
                                                                                    <th class="bg-transparent">Size</th>
                                                                                    <th class="bg-transparent">Qty</th>
                                                                                </tr>

                                                                                <?php $__currentLoopData = $order->orderItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <tr>
                                                                                        
                                                                                        <td>
                                                                                            <a class="text-black text-decoration-underline"
                                                                                                href="<?php echo e(route('shop-detail', ['id' => $product->product->id])); ?>">
                                                                                                <?php echo e($product->product->name); ?>

                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <img src="<?php echo e(asset('uploads/products/' . $product->product->images[0]->name)); ?>"
                                                                                                width="40px"
                                                                                                style="width: 50px;"
                                                                                                alt="">
                                                                                        </td>
                                                                                        <td><?php echo e($product->product->tyre_size); ?>

                                                                                        </td>
                                                                                        <td><?php echo e($product->qty); ?></td>
                                                                                    </tr>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td><?php echo e($order->payment_status); ?></td>
                                                    <td><?php echo e($order->order_status); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- USER DASHBOARD END -->







    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/orders.blade.php ENDPATH**/ ?>