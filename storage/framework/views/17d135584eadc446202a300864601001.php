

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>






<?php $__env->startSection('maincontent'); ?>
    <div class="content-area mt-1">
        <div class="col-md-12 mx-auto">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="m-0">Vehicle Brands</h5>


            </div>

            <div class="form form-wrap sign-up-wrap ">
                <form action="<?php echo e(route('admin.addBrands')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">

                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label for="">Image:</label>
                                <input type="file" name="image"
                                    class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " placeholder="Name">
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="d-block invalid-feedback"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label for="">Brand Name:</label>
                                <input type="text" name="name"
                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " placeholder="Brand Name">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="d-block invalid-feedback"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>



                        <div class="col-md-4 mb-3 align-self-end text-center">
                            <button class="main-btn sm">Add Vehicle Brand</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Brand Name</th>
                        <th>Created At</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>


                    <?php if($vehicleBrands->isNotEmpty()): ?>
                        <?php $__currentLoopData = $vehicleBrands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicleBrand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($vehicleBrand->id); ?></td>

                                <td>
                                    <img src="<?php echo e(asset('uploads/v_brands/' . $vehicleBrand->v_brand_image)); ?>"
                                        alt="">
                                </td>
                                <td><?php echo e(@$vehicleBrand->v_brand_name); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($vehicleBrand->created_at)->format('d M, Y')); ?></td>


                                <td>
                                    <div class="last-btns">
                                        

                                        <button onclick="deletePatteren(<?php echo e($vehicleBrand->id); ?>)" class="btn btn-danger">
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
        function deletePatteren(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "<?php echo e(route('admin.deleteBrands')); ?>",
                    type: "post",
                    data: {
                        "id": id
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

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/vehicle-brands.blade.php ENDPATH**/ ?>