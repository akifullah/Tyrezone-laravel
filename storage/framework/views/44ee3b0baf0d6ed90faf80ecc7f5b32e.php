

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>






<?php $__env->startSection('maincontent'); ?>
    <div class="content-area mt-5">

        <?php echo $__env->make('admin.common.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">All Users</h5>

            <a class="main-btn sm" href="<?php echo e(route('admin.addUser')); ?>">Add User</a>

        </div>

        <p class="text-danger"></p>
        <p class="text-success"></p>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created At</th>

                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>
                    <?php if($users->isNotEmpty()): ?>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->fname); ?></td>
                                <td><?php echo e($user->lname); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td>
                                    <?php echo e(getUserRoleName($user->role)); ?>

                                </td>
                                <td><?php echo e(\Carbon\Carbon::parse($user->created_at)->format('d M, Y')); ?></td>


                                <td>
                                    <a href="<?php echo e(route('admin.editUser', ['id' => $user->id])); ?>"
                                        class="btn btn-sm btn-success"><i class="fa-solid fa-pen"></i></a>

                                    <a href="javascript:void(0)" onclick="deleteUser(<?php echo e($user->id); ?>)"
                                        class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></a>

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
        function deleteUser(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "<?php echo e(route('admin.deleteUser')); ?>",
                    type: "post",
                    data: {
                        id
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

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/users.blade.php ENDPATH**/ ?>