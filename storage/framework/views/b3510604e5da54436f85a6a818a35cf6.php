

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>






<?php $__env->startSection('maincontent'); ?>
    <div class="content-area mt-5">

        <?php echo $__env->make('admin.common.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Manufacturers</h5>

            

        </div>

        <div class="form form-wrap sign-up-wrap ">
            <form action="<?php echo e(route('admin.saveManufacturers')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">

                    <div class="col-lg col-sm-12 ">
                        <div class="form-group">
                            <label for="">Name* :</label>
                            <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Name">
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

                    <div class="col-lg col-sm-12 ">
                        <div class="form-group">
                            <label for="">Image:</label>
                            <input type="file" name="image" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Imge Url">
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
                    

                    <div class="col-lg col-sm-12 align-self-end pt-2 text-center">
                        <button class="main-btn sm">Add Manufacture</button>
                    </div>

                </div>
            </form>
        </div>



        <div class="table-responsive mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Manufacturer</th>
                        <th>Image</th>
                        
                        <th>Created At</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>

                    <?php if($manufacturers->isNotEmpty()): ?>
                        <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($manufacturer->id); ?></td>

                                <td><?php echo e($manufacturer->name); ?></td>
                                <td>
                                    <img src="<?php echo e(asset('uploads/brands/' . $manufacturer->image)); ?>" alt="">
                                </td>
                                
                                <td><?php echo e(Carbon\Carbon::parse($manufacturer->created_at)->format('d M, Y')); ?></td>


                                <td>
                                    <div class="last-btns ">
                                        <a href="<?php echo e(route('admin.editManufacturers', ['id' => $manufacturer->id])); ?>"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>


                                        <a href="javaScript:void(0)" onclick="handleDelete(<?php echo e($manufacturer->id); ?>)"
                                            class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>

                                    </div>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">
                                <p class="mt-4">No Record Found</p>
                            </td>
                        </tr>
                    <?php endif; ?>




                </tbody>
            </table>
        </div>

    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('customjs'); ?>
    <script>
        function handleDelete(id) {
            if (confirm("Are you sure, you want to delete?")) {
                $.ajax({
                    url: '<?php echo e(route('admin.deleteManufacturers')); ?>',
                    type: "post",
                    data: {
                        "id": id,
                        "_token": "<?php echo e(csrf_token()); ?>"
                    },
                    dataType: "json",
                    success: function(res) {
                        console.log(res)
                        window.location.reload();
                    }
                })
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/manufacturers.blade.php ENDPATH**/ ?>