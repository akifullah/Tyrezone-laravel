

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('maincontent'); ?>
    <div class="content-area mt-2">
        <?php echo $__env->make('admin.common.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="m-0">Tyre Pattern</h5>

            

        </div>

        <div class="form form-wrap sign-up-wrap ">
            <form action="<?php echo e(route('admin.saveTyrePatteren')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row">

                    <div class="col-lg col-sm-12 ">
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "
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
                            <label for="">Manufacturers:</label>

                            <select name="manufacturer_id"
                                class="form-select <?php $__errorArgs = ['manufacturer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="">

                                <option selected disabled>Select Manufacture</option>

                                <?php if($manufacturers->isNotEmpty()): ?>
                                    <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($manufacturer->id); ?>"><?php echo e($manufacturer->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                            <?php $__errorArgs = ['manufacturer_id'];
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
                        <button class="main-btn sm">Add Patteren</button>
                    </div>

                </div>
            </form>
        </div>



        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Patteren Name</th>
                        <th>manufacture</th>
                        <th>Created At</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>


                    <?php if($patterens->isNotEmpty()): ?>
                        <?php $__currentLoopData = $patterens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patteren): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($patteren->id); ?></td>

                                <td><?php echo e($patteren->name); ?></td>
                                <td><?php echo e(@$patteren->manufacturer->name); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($patteren->created_at)->format('d M, Y')); ?></td>


                                <td>
                                    <div class="last-btns">
                                        <a href="<?php echo e(route('admin.editTyrePatteren', ['id' => $patteren->id])); ?>"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <button onclick="deletePatteren(<?php echo e($patteren->id); ?>)" class="btn btn-danger">
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
                    url: "<?php echo e(route('admin.deleteTyrePatteren')); ?>",
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

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/tyre-patteren.blade.php ENDPATH**/ ?>