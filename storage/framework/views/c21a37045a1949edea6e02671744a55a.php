

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/dropzone/dropzone.min.css')); ?>" />
<?php $__env->stopSection(); ?>






<?php $__env->startSection('maincontent'); ?>
    <div class="content-area mt-5">
        <div class="col-md-12 mx-auto">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="m-0">Add Product</h5>
                <a class="main-btn sm" href="<?php echo e(route('admin.products')); ?>">All Products</a>
            </div>

            <div class="form form-wrap sign-up-wrap mt-3 ">
                <form action="<?php echo e(route('admin.saveProduct')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" name="name" value="<?php echo e(old('name')); ?>"
                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Name">
                            </div>
                        </div>



                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Manufacture Name:</label>
                                <select id="manufacturer_id" name="manufacturer_id" onchange="getPatteren()"
                                    class="form-select select2 <?php $__errorArgs = ['manufacturer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option selected disabled>Select Manufacture</option>
                                    <?php if($manufacturers->isNotEmpty()): ?>
                                        <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value=<?php echo e($manufacturer->id); ?>

                                                <?php echo e(old('manufacturer_id') == $manufacturer->id ? 'selected' : ''); ?>>
                                                <?php echo e($manufacturer->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Pattern Type:</label>
                                <select id="patteren_id" disabled
                                    class="form-select <?php $__errorArgs = ['patteren_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="patteren"
                                    name="patteren_id">
                                    <option disabled selected>Select Patteren</option>

                                    

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Fuel Efficiency:</label>
                                <input type="text" value="<?php echo e(old('fuel_efficiency')); ?>" name="fuel_efficiency"
                                    class="form-control <?php $__errorArgs = ['fuel_efficiency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="Fuel Efficiency">
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Wet Grip:</label>
                                <input type="text" value="<?php echo e(old('wet_grip')); ?>" name="wet_grip"
                                    class="form-control <?php $__errorArgs = ['wet_grip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Wet Grip">
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Road Noise:</label>
                                <input type="text" value="<?php echo e(old('road_noise')); ?>" name="road_noise"
                                    class="form-control <?php $__errorArgs = ['road_noise'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Road Noise">
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="form-group">
                                <label for="">Width</label>
                                <select name="width" class="form-select <?php $__errorArgs = ['width'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                    <option disabled selected>Select Width</option>
                                    <?php $__currentLoopData = $widths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $width): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($width->width); ?>" <?php echo e(old('width') == $width->width ? 'selected' : ''); ?>>
                                            <?php echo e($width->width); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <div class="form-group">
                                <label for="">Profile</label>
                                <select name="profile" class="form-select <?php $__errorArgs = ['profile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                    <option disabled selected>Select Profile</option>
                                    <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($profile->profile); ?>" <?php echo e(old('profile') == $profile->profile ? 'selected' : ''); ?>>
                                            <?php echo e($profile->profile); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <div class="form-group">
                                <label for="">Rim Size</label>
                                <select name="rim_size" class="form-select <?php $__errorArgs = ['rim_size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                    <option disabled selected>Select Rim Size</option>
                                    <?php $__currentLoopData = $rimsizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rimsize): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($rimsize->rim_size); ?>" <?php echo e(old('rim_size') == $rimsize->rim_size ? 'selected' : ''); ?>>
                                            <?php echo e($rimsize->rim_size); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <div class="form-group">
                                <label for="">Speed</label>
                                <select name="speed" class="form-select <?php $__errorArgs = ['speed'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                    <option disabled selected>Select Speed</option>
                                    <?php $__currentLoopData = $speeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $speed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($speed->speed); ?>" <?php echo e(old('speed') == $speed->speed ? 'selected' : ''); ?>>
                                            <?php echo e($speed->speed); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        



                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="">Load Index:</label>
                                        <input type="text" value="<?php echo e(old('load_index')); ?>" name="load_index"
                                            class="form-control <?php $__errorArgs = ['load_index'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            placeholder="Load Index" value="Car">
                                    </div>
                                </div>


                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="">In Stock:</label>
                                        <input type="number" name="in_stock" value="<?php echo e(old('in_stock')); ?>"
                                            class="form-control <?php $__errorArgs = ['in_stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="10 ">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 mb-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Price:</label>
                                        <input type="text" name="price" value="<?php echo e(old('price')); ?>"
                                            class="form-control  <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Price">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">VAT Price:</label>
                                        <input type="text" name="vat_price" value="<?php echo e(old('vat_price')); ?>"
                                            class="form-control <?php $__errorArgs = ['vat_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            placeholder="VAT Price">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Vehicle Category</label>
                                <select name="v_category" class="form-select <?php $__errorArgs = ['v_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option disabled selected>Select Category</option>
                                    <?php if($vehicleCategories->isNotEmpty()): ?>
                                        <?php $__currentLoopData = $vehicleCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($v_cat->v_cat_name); ?>"
                                                <?php echo e(old('v_category') == $v_cat->v_cat_name ? 'selected' : ''); ?>>
                                                <?php echo e(ucwords($v_cat->v_cat_name)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    
                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4  mb-2">
                            <label for="">Season Type:</label>
                            <div class="">
                                <div class="form-check form-check form-check-inline mt-0">
                                    <label for="winter" class="form-check-label">Winter</label>
                                    <input type="radio"
                                        class="form-check-input <?php $__errorArgs = ['season_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="season_type" <?php echo e(old('season_type') == '2' ? 'checked' : ''); ?>

                                        value="2" id="winter">
                                </div>

                                <div class="form-check form-check form-check-inline mt-0">
                                    <label for="summer" class="form-check-label">Summer</label>
                                    <input type="radio"
                                        class="form-check-input <?php $__errorArgs = ['season_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="season_type" <?php echo e(old('season_type') == '1' ? 'checked' : ''); ?>

                                        value="1" id="summer">
                                </div>

                                <div class="form-check form-check form-check-inline mt-0">
                                    <label for="all" class="form-check-label ">All Season</label>
                                    <input type="radio"
                                        class="form-check-input <?php $__errorArgs = ['season_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="season_type" <?php echo e(old('season_type') == '0' ? 'checked' : ''); ?>

                                        value="0" id="all">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5  mb-2">
                            <div class="">
                                <label for="budget">Brand Category</label>
                            </div>
                            
                            <div class="form-check form-check-inline mt-0">
                                <input id="budget" type="radio" name="budget_tyre"
                                    <?php echo e(old('budget_tyre') == 'budget' ? 'checked' : ''); ?> value="budget"
                                    class="form-check-input <?php $__errorArgs = ['budget_tyre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <label for="budget">Budget</label>
                            </div>
                            <div class="form-check form-check-inline mt-0">
                                <input id="mid-range" type="radio" name="budget_tyre"
                                    <?php echo e(old('budget_tyre') == 'mid range' ? 'checked' : ''); ?> value="mid_range"
                                    class="form-check-input <?php $__errorArgs = ['budget_tyre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <label for="mid-range">Mid Range</label>
                            </div>
                            <div class="form-check form-check-inline mt-0 pe-5">
                                <input id="premium" type="radio" name="budget_tyre"
                                    <?php echo e(old('budget_tyre') == 'premium' ? 'checked' : ''); ?> value="premium"
                                    class="form-check-input <?php $__errorArgs = ['budget_tyre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <label for="premium">Premium</label>
                            </div>
                            <div class="form-check form-check-inline mt-0">
                                <input type="checkbox" class="form-check-input" name="run_flat" id="run_flat" value="1" <?php echo e(old('run_flat') == '1' ? 'checked' : ''); ?>>
                                <label for="run_flat">Run Flat</label>
                            </div>
                        </div>

                    

                        <div class="col-12">
                            <div id="image" class="dropzone dz-clickable">
                                <div class="dz-message needsclick">
                                    <br>Drop files here or click to upload.<br><br>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="img_wrapper">

                        </div>



                        <div class="col-md-12 mb-3 mt-3">
                            <div class="col-12 mb-2">
                                <textarea class="summernote" name="description" cols="5" placeholder="Benefits"><?php echo e(old('description')); ?></textarea>
                            </div>


                            <div class="col-12 text-center">
                                <button class="main-btn sm">Add Product</button>
                            </div>
                        </div>
                </form>

            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>









<?php $__env->startSection('customjs'); ?>
    <script src="<?php echo e(asset('admin/assets/dropzone/dropzone.min.js')); ?>"></script>

    <script>
        // GET PATTEREN BY SELECTING MANUFACTURER
        function getPatteren() {
            let manufacturerId = document.querySelector("#manufacturer_id").value;
            if (manufacturerId != null) {
                $.ajax({
                    url: "<?php echo e(route('admin.get.patteren')); ?>",
                    type: "post",
                    data: {
                        "id": manufacturerId
                    },
                    dataType: "json",
                    success: function(res) {
                        console.log(res);
                        let patterens = res.patteren;
                        $("#patteren_id").find("option").not(":first").remove();

                        if (patterens.length > 0) {
                            $("#patteren_id").removeAttr("disabled");
                            $.each(patterens, function(key, patteren) {
                                $("#patteren_id").append(
                                    `<option value="${patteren.id}">${patteren.name}</option>`
                                )
                            });
                        } else {
                            $("#patteren_id").attr("disabled", "true");
                        }

                    }
                })
            }
        }



        // UPLOAD PRODUCT IMAGES
        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
            // uploadprogress: function(file, progress, bytesSent) {
            //     $("button[type=submit]").prop('disabled', true);
            // },
            url: "<?php echo e(route('temp.image.upload')); ?>",
            maxFiles: 10,
            paramName: 'image',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif,image/webp",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, res) {
                console.log(res)


                let html = `<div class="col-md-3 my-3 " id="img-container-${res.image_id}">
                                <div class="card">
                                    <button type="button" class="btn btn-sm btn-danger" onclick="handleDeleteTempImg(${res.image_id})">Delete</button>
                                    
                                    <img src="${res.image_path}" width="100%" style="width: 100%; height: 150px; object-fit: cover;" alt="">
                                    <div class="card-body">
                                        <input type="hidden"  name="img_id[]" id="img_id" value="${res.image_id}" class="form-control">
                                    </div>
                                </div>
                            </div>`;


                $("#img_wrapper").append(html);

                // $("#image_id").val(response.image_id);
                this.removeFile(file);
            }
        });

        // DELETE TEMP IMAGE
        function handleDeleteTempImg(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "<?php echo e(route('temp.image.delete')); ?>",
                    type: "post",
                    data: {
                        id
                    },
                    success: function(res) {
                        console.log(res);
                        if (res.status) {
                            $("#img-container-" + id).remove();
                        }
                    }
                })
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/add-product.blade.php ENDPATH**/ ?>