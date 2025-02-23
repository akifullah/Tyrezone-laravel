


    <?php $__env->startSection('main'); ?>
        <div class="wrapper">






            <!-- REGISTRATION FORM START-->
            <section class="registration form-wrap">
                <div class="container ">
                    <div class="col-lg-5 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">
                        <?php echo $__env->make('frontend.common.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <form action="<?php echo e(route("loginAuth")); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <h5 class="text-center mb-4">PLEASE LOGIN</h5>
                            <div class="row">

                                <div class="col-12  mb-4 mb-lg-0">
                                    <div class="form-group mb-3">
                                        <label for="">Email Address <span>*</span></label>
                                        <input type="email" name="email" value="<?php echo e(old("email")); ?>" placeholder="Email Address" class="form-control  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <?php $__errorArgs = ['email'];
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

                                    <div class="form-group mb-1">
                                        <label for="">Password <span>*</span> </label>
                                        <input type="password" value="<?php echo e(old("password")); ?>" name="password" placeholder="Password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <?php $__errorArgs = ['password'];
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

                                    <div
                                        class="d-flex flex-wrap flex-row-reverse align-items-center justify-content-between">

                                        <div class="text-end">
                                            <p class="m-0"><a href="<?php echo e(route("password.request")); ?>">Forgot Password?</a></p>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="remeber">
                                            <label for="remeber">Remember me</label>
                                        </div>
                                    </div>


                                </div>



                            </div>
                            <div class="mt-2 px-0">
                                <button class="main-btn w-100">Signin</button>
                            </div>
                        </form>
                        <p class="px-0 my-2">Don't have an account? <a href="<?php echo e(route("signup")); ?>">Register</a> </p>





                    </div>
                </div>
            </section>
            <!-- REGISTRATION FORM END -->








        </div>
    <?php $__env->stopSection(); ?>




<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/login.blade.php ENDPATH**/ ?>