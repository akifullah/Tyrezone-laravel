<aside class="side-bar">

    <ul>
        <li><a href="<?php echo e(route("profile")); ?>" class="<?php echo e(Route::is("profile")? "active": ""); ?>"><i class="fa-solid fa-user"></i>
                Profile</a></li>
        <li><a href="<?php echo e(route("changePassword")); ?>" class="<?php echo e(Route::is("changePassword")? "active": ""); ?>"><i class="fa-solid fa-lock"></i>
                Change Password</a></li>

        <li><a href="<?php echo e(route("orders")); ?>" class="<?php echo e(Route::is("orders")? "active": ""); ?>"><i class="fa-solid fa-cart-flatbed"></i>
                My Orders</a>
        </li>

        <li><a href="<?php echo e(route('logout')); ?>"><i class="fa-solid fa-right-from-bracket"></i>
                Logout</a>
        </li>
    </ul>
</aside>
<?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/includes/sidebar.blade.php ENDPATH**/ ?>