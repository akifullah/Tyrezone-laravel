

<?php $__env->startSection('main'); ?>
    <div class="d-flex align-items-center justify-content-center w-100" style="min-height: 100vh;">

        <!-- REGISTRATION FORM START-->
        <section class="registration form-wrap w-100">
            <div class="container ">
                

                <form action="<?php echo e(route("admin.auth")); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="col-lg-5 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">
                        <?php echo $__env->make("admin.common.alert", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <h5 class="text-center mb-4">Admin Login</h5>
                        <div class="row">

                            <div class="col-12  mb-4 mb-lg-0">

                                <div class="form-group mb-3">
                                    <label for="">Email Address <span>*</span></label>
                                    <input type="email" placeholder="Email Address" name="email" class="form-control">
                                </div>

                                <div class="form-group mb-1">
                                    <label for="">Password <span>*</span> </label>
                                    <input type="password" placeholder="Password" name="password" class="form-control">
                                </div>

                                <div class="d-flex flex-wrap flex-row-reverse align-items-center justify-content-between">

                                    <div class="text-end">
                                        <p class="m-0"><a href="forget-password.html">Forgot Password?</a></p>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="remember_me" value="1" class="form-check-input"
                                            id="remeber">
                                        <label for="remeber">Remember me</label>
                                    </div>
                                </div>


                            </div>



                        </div>
                        <div class="mt-2 px-0">
                            <button class="main-btn w-100">Signin</button>
                        </div>




                    </div>
                </form>
            </div>
        </section>
        <!-- REGISTRATION FORM END -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/index.blade.php ENDPATH**/ ?>