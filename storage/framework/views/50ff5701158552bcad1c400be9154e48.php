

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('maincontent'); ?>
    <div class="content-area mt-5">
        <div class="col-md-6 mx-auto">

            <div class="d-flex justify-content-between align-items-center">
                <h5 class="m-0">Edit Tyre Size</h5>

                <a class="main-btn sm" href="<?php echo e(route('admin.tyreSize')); ?>">All Sizes</a>

            </div>

            <p class="mb-0 mt-4 text-danger"></p>
            <p class="m-0  text-success"> </p>

            <div class="form form-wrap sign-up-wrap ">
                <form action="<?php echo e(route("admin.updateTyreSize", ["id"=>$size->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Width:</label>
                                <input type="text" name="width" value="<?php echo e($size->width); ?>" class="form-control <?php $__errorArgs = ['width'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="Width">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Profile:</label>
                                <input type="text" name="profile" value="<?php echo e($size->profile); ?>" class="form-control <?php $__errorArgs = ['profile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="Profile">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Rim Size:</label>
                                <input type="text" name="rim_size" value="<?php echo e($size->rim_size); ?>" class="form-control <?php $__errorArgs = ['rim_size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="Rim Size">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Speed:</label>
                                <input type="text" name="speed" value="<?php echo e($size->speed); ?>" class="form-control <?php $__errorArgs = ['speed'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="Speed">
                            </div>
                        </div>


                        <div class="col-12 text-center">
                            <button class="main-btn sm">Update Size</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('customjs'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/edit-tyre-size.blade.php ENDPATH**/ ?>