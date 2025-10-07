

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('maincontent'); ?>
    <div class="content-area mt-2">
        <?php echo $__env->make('admin.common.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="m-0">Vehicle Category</h5>

            <a class="main-btn sm" href="<?php echo e(route('admin.addVehicleCategory')); ?>">Add Vehicle Category</a>

        </div>


        <div class="form form-wrap sign-up-wrap ">
            <form action="<?php echo e(route('admin.saveVehicleCategory')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row">

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Vehicle Category Name:</label>
                            <input type="text" name="v_cat_name" value="<?php echo e(old('v_cat_name')); ?>"
                                class="form-control <?php $__errorArgs = ['v_cat_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " placeholder="4x4">
                            <?php $__errorArgs = ['v_cat_name'];
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

                    <div class="col-md-4 align-self-end text-center pt-2">
                        <button class="main-btn sm px-3">Save Category</button>
                    </div>

                </div>
            </form>
        </div>


        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Vehicle Category</th>
                        <th>Created At</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>


                    <?php if($vehicleCategories->isNotEmpty()): ?>
                        <?php $__currentLoopData = $vehicleCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($v_cat->id); ?></td>

                                <td><?php echo e($v_cat->v_cat_name); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($v_cat->created_at)->format('d M, Y')); ?></td>


                                <td>
                                    <div class="last-btns">
                                        <a href="<?php echo e(route('admin.editVehicleCategory', ['id' => $v_cat->id])); ?>"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <button onclick="deleteCate(<?php echo e($v_cat->id); ?>)" class="btn btn-danger">
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
        function deleteCate(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "<?php echo e(route('admin.deleteVehicleCategory')); ?>",
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

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/vehicle_category/list.blade.php ENDPATH**/ ?>