

<?php $__env->startSection('main'); ?>
    <div class="wrapper contact-wrapper">


        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner overlay"
            style="background-image: url(<?php echo e(asset('frontend/assets/imgs/dunlop-banner.jpg')); ?>);">
            <div class="container">
                
                <div class="section-heading text-start">
                    <h1 class="mb-0">Contact Us</h1>
                    <p class=" mb-5">Any question or remarks? Just write us a message!
                    </p>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->

        <!-- HERO BANNER SECTION START -->
        
        <!-- HERO BANNER SECTION END -->

        <div class="container mt-4">
            <?php echo $__env->make('frontend.common.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

        <!-- CONTACT SECTION START -->
        <section class="contacts container-fluid">
            

            <div class="container contact-box">
                <div class="row">
                    <div class="col-md-5 mb-4 mb-md-0 ">
                        <div class="contact-text h-100 ">


                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-5">Contact Information</h5>

                                </div>
                                <div class="col-12">
                                    <p>
                                        <i class="fa-solid fa-phone"></i>
                                        <a href="tel:07563896325">07563 896325</a><br />
                                    </p>
                                    <p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>Higginshaw Lane, Oldham, OL2 6HQ</span>
                                    </p>
                                    <p>
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <a href="https://www.facebook.com/TyreZoneOldhamLTD" target="_blank">
                                            facebook.com/TyreZoneOldhamLTD
                                        </a>
                                    </p>

                                </div>
                            </div>

                            <div class=" py-3">
                                

                            </div>


                        </div>



                    </div>

                    <div class="col-md-7 ">
                        
                        <form action="<?php echo e(route('contact.send')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="contact-form ">
                                <div class="row">

                                    <div class="col-6 mb-3 px-2">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Your Name"
                                                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <small class="invalid-feedback d-block"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-6 mb-3 px-2">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="E-Mail Address"
                                                class="form-control <?php $__errorArgs = ['email'];
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
                                                <small class="invalid-feedback d-block"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3 px-2">
                                        <div class="form-group">
                                            <input type="number" name="phone" placeholder="Phone Number"
                                                class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <small class="invalid-feedback d-block"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>



                                    <div class="col-12 mb-3 px-2">
                                        <div class="form-group">
                                            <textarea name="message" rows="5" placeholder="Message" class="form-control" id=""></textarea>
                                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <small class="invalid-feedback d-block"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button class="main-btn">Submit</button>
                                    </div>


                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- CONTACT SECTION END -->


        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2369.978091290581!2d-2.106833324188195!3d53.558158558855126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb8319b03acc5%3A0x56b3fd2233812fcd!2sHigginshaw%20Ln%2C%20Oldham%2C%20UK!5e0!3m2!1sen!2s!4v1730281607474!5m2!1sen!2s"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>






    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/contact.blade.php ENDPATH**/ ?>