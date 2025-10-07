

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('maincontent'); ?>
    <div class="content-area mt-2">
        <?php echo $__env->make('admin.common.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <h5>Tyre Widths</h5>
                <form action="<?php echo e(route('admin.size.width.store')); ?>" method="POST" class="mb-2">
                    <?php echo csrf_field(); ?>
                    <div class="form-group d-flex gap-2">
                        <input type="text" class="form-control form-control-sm" name="width" placeholder="Width" required>
                        <button type="submit" class="main-btn sm flex-grow-0 text-nowrap">Add Width</button>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Width</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $widths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $width): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="width: 40px"><?php echo e($width->id); ?></td>
                                <td><?php echo e($width->width); ?></td>
                                <td style="width: 40px">
                                    <button type="button" onclick="deleteWidth(<?php echo e($width->id); ?>)"
                                        class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>


            <div class="col-md-6 col-xl-3">
                <h5>Tyre Profiles</h5>
                <form action="<?php echo e(route('admin.size.profile.store')); ?>" method="POST" class="mb-2">
                    <?php echo csrf_field(); ?>
                    <div class="form-group d-flex gap-2">
                        <input type="text" class="form-control form-control-sm" name="profile" placeholder="Profile"
                            required>
                        <button type="submit" class="main-btn sm flex-grow-0 text-nowrap">Add Profile</button>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Profile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="width: 40px"><?php echo e($profile->id); ?></td>
                                <td><?php echo e($profile->profile); ?></td>
                                <td style="width: 40px">
                                    <button type="button" onclick="deleteProfile(<?php echo e($profile->id); ?>)"
                                        class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6 col-xl-3">
                <h5>Tyre Rim Sizes</h5>
                <form action="<?php echo e(route('admin.size.rimsize.store')); ?>" method="POST" class="mb-2">
                    <?php echo csrf_field(); ?>
                    <div class="form-group d-flex gap-2">
                        <input type="text" class="form-control form-control-sm" name="rim_size" placeholder="Rim Size"
                            required>
                        <button type="submit" class="main-btn sm flex-grow-0 text-nowrap">Add Rim Size</button>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Rim Size</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $rimsizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rimsize): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="width: 40px"><?php echo e($rimsize->id); ?></td>
                                <td><?php echo e($rimsize->rim_size); ?></td>
                                <td style="width: 40px">
                                    <button type="button" onclick="deleteRimSize(<?php echo e($rimsize->id); ?>)"
                                        class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>


            <div class="col-md-6 col-xl-3">
                <h5>Tyre Speeds</h5>
                <form action="<?php echo e(route('admin.size.speed.store')); ?>" method="POST" class="mb-2">
                    <?php echo csrf_field(); ?>
                    <div class="form-group d-flex gap-2">
                        <input type="text" class="form-control form-control-sm" name="speed" placeholder="Speed"
                            required>
                        <button type="submit" class="main-btn sm flex-grow-0 text-nowrap">Add Speed</button>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Speed</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $speeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $speed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="width: 40px"><?php echo e($speed->id); ?></td>
                                <td><?php echo e($speed->speed); ?></td>
                                <td style="width: 40px">
                                    <button type="button" onclick="deleteSpeed(<?php echo e($speed->id); ?>)"
                                        class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

        </div>






    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
    <script>
        function deleteWidth(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.post("<?php echo e(route('admin.size.width.delete')); ?>", {
                    id: id,
                    _token: '<?php echo e(csrf_token()); ?>'
                }, function(res) {
                    if (res.status) location.reload();
                });
            }
        }

        function deleteProfile(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.post("<?php echo e(route('admin.size.profile.delete')); ?>", {
                    id: id,
                    _token: '<?php echo e(csrf_token()); ?>'
                }, function(res) {
                    if (res.status) location.reload();
                });
            }
        }

        function deleteRimSize(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.post("<?php echo e(route('admin.size.rimsize.delete')); ?>", {
                    id: id,
                    _token: '<?php echo e(csrf_token()); ?>'
                }, function(res) {
                    if (res.status) location.reload();
                });
            }
        }

        function deleteSpeed(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.post("<?php echo e(route('admin.size.speed.delete')); ?>", {
                    id: id,
                    _token: '<?php echo e(csrf_token()); ?>'
                }, function(res) {
                    if (res.status) location.reload();
                });
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/tyre-sizes.blade.php ENDPATH**/ ?>