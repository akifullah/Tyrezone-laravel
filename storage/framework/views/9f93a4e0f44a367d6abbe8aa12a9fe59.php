<?php if(Session::has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <p class="m-0"><?php echo e(Session::get('success')); ?></p>
    </div>
<?php endif; ?>


<?php if(Session::has('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <p class="m-0"><?php echo e(Session::get('error')); ?></p>
    </div>
<?php endif; ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/common/alert.blade.php ENDPATH**/ ?>