

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('maincontent'); ?>

    <div class="content-area mt-5">
        <?php echo $__env->make('admin.common.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Tyre Sizes</h5>

            <a href="<?php echo e(route('admin.addTyreSize')); ?>" class="main-btn sm">Add Size</a>

        </div>

        



        <div class="table-responsive mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID #</th>
                        <th>Width</th>
                        <th>Profile</th>
                        <th>Rim Size</th>
                        <th>Speed</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>
                    <?php if($sizes->isNotEmpty()): ?>
                        <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($size->id); ?></td>
                                <td><?php echo e($size->width); ?></td>
                                <td><?php echo e($size->profile); ?></td>
                                <td><?php echo e($size->rim_size); ?></td>
                                <td><?php echo e($size->speed); ?></td>
                                <td>
                                    <div class="last-btns d-flex justify-content-center">
                                        <a href="<?php echo e(route('admin.editTyreSize', ['id' => $size->id])); ?>"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <button onclick="deleteSize(<?php echo e($size->id); ?>)" class="btn btn-danger">
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
        // deleteWidth
        // admin.size.speed.delete
        //  function deleteWidth(id) {
        //     if (confirm("Are you sure you want to delete?")) {
        //         $.ajax({
        //             url: "<?php echo e(route('admin.size.width.delete')); ?>",
        //             type: "post",
        //             data: {
        //                 "id": id
        //             },
        //             success: function(res) {
        //                 if (res.status) {
        //                     window.location.reload();
        //                 }
        //             }
        //         });
        //     }
        // }


        // function deleteProfile(id) {
        //     if (confirm("Are you sure you want to delete?")) {
        //         $.ajax({
        //             url: "<?php echo e(route('admin.size.profile.delete')); ?>",
        //             type: "post",
        //             data: {
        //                 "id": id
        //             },
        //             success: function(res) {
        //                 if (res.status) {
        //                     window.location.reload();
        //                 }
        //             }
        //         });
        //     }
        // }
        
        // function deleteRimSize(id) {
        //     if (confirm("Are you sure you want to delete?")) {
        //         $.ajax({
        //             url: "<?php echo e(route('admin.size.rimSize.delete')); ?>",
        //             type: "post",
        //             data: {
        //                 "id": id
        //             },
        //             success: function(res) {
        //                 if (res.status) {
        //                     window.location.reload();
        //                 }
        //             }
        //         });
        //     }
        // }

        // function deleteSpeed(id) {
        //     if (confirm("Are you sure you want to delete?")) {
        //         $.ajax({
        //             url: "<?php echo e(route('admin.size.speed.delete')); ?>",
        //             type: "post",
        //             data: {
        //                 "id": id
        //             },
        //             success: function(res) {
        //                 if (res.status) {
        //                     window.location.reload();
        //                 }
        //             }
        //         });
        //     }
        // }
        
        
        
        function deleteSize(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "<?php echo e(route('admin.deleteTyreSize')); ?>",
                    type: "post",
                    data: {
                        "id": id
                    },
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

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/tyre-sizes.blade.php ENDPATH**/ ?>