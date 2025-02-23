

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/dropzone/dropzone.min.css')); ?>" />
<?php $__env->stopSection(); ?>






<?php $__env->startSection('maincontent'); ?>

    <div class="content-area mt-5">
        <div class="col-md-9 mx-auto">

            <div class="d-flex justify-content-between align-items-center">
                <h5 class="m-0">Edit Product</h5>
                <a class="main-btn sm" href="<?php echo e(route('admin.products')); ?>">All Products</a>
            </div>



            <div class="form form-wrap sign-up-wrap mt-3 ">
                <form action="<?php echo e(route('admin.updateProduct', ['id' => $product->id])); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" name="name" value="<?php echo e($product->name); ?>"
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


                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Manufacture Name:</label>
                                <select id="manufacturer_id" name="manufacturer_id" onchange="getPatteren()"
                                    class="form-select <?php $__errorArgs = ['manufacturer_id'];
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

                                                <?php echo e($product->manufacturer->id == $manufacturer->id ? 'selected' : ''); ?>>
                                                <?php echo e($manufacturer->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
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
unset($__errorArgs, $__bag); ?>" name="patteren_id">
                                    <option disabled selected>Select Patteren</option>

                                    

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Fuel Efficiency:</label>
                                <input type="text" value="<?php echo e($product->fuel_efficiency); ?>" name="fuel_efficiency"
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

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Wet Grip:</label>
                                <input type="text" value="<?php echo e($product->wet_grip); ?>" name="wet_grip"
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

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Road Noise:</label>
                                <input type="text" value="<?php echo e($product->road_noise); ?>" name="road_noise"
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

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Tyre Size</label>
                                <select name="tyre_size" class="form-select <?php $__errorArgs = ['tyre_size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    required="">
                                    <option disabled selected>Select Size</option>
                                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed); ?>"
                                            <?php echo e($product->tyre_size == $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed ? 'selected' : ''); ?>>
                                            <?php echo e($size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>
                        </div>

                        

                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="">Tyre Type:</label>
                                        <input type="text" value="<?php echo e($product->tyre_type); ?>" name="tyre_type"
                                            class="form-control <?php $__errorArgs = ['tyre_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            placeholder="Tyre Type" value="<?php echo e($product->tyre_type); ?>">
                                    </div>
                                </div>


                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="">In Stock:</label>
                                        <input type="number" name="in_stock" value="<?php echo e($product->in_stock); ?>"
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
                                        <input type="text" name="price" value="<?php echo e($product->price); ?>"
                                            class="form-control <?php $__errorArgs = ['price'];
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
                                        <input type="text" name="vat_price" value="<?php echo e($product->vat_price); ?>"
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

                        

                        <div class="col-md-5 mb-4">
                            <label for="">Season Type:</label>
                            <div class="">
                                <div class="form-check form-check-inline mt-2">
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
                                        name="season_type" <?php echo e($product->season_type == '2' ? 'checked' : ''); ?>

                                        value="2" id="winter">
                                </div>

                                <div class="form-check form-check-inline mt-2">
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
                                        name="season_type" <?php echo e($product->season_type == '1' ? 'checked' : ''); ?>

                                        value="1" id="summer">
                                </div>

                                <div class="form-check form-check-inline mt-2">
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
                                        name="season_type" <?php echo e($product->season_type == '0' ? 'checked' : ''); ?>

                                        value="0" id="all">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="budget">Budget Tyre</label>
                            <div class="form-check mt-2">
                                <label for="budget">Yes Budget Tyre</label>
                                <input id="budget" type="checkbox" name="budget_tyre"
                                    <?php echo e($product->budget_tyre == '1' ? 'checked' : ''); ?> value="1"
                                    class="form-check-input <?php $__errorArgs = ['budget_tyre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
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
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-3 my-3 " id="img-container-<?php echo e($img->id); ?>">
                                    <div class="card">

                                        <button type="button" class="btn btn-sm btn-danger"
                                            onclick="handleDeleteProdcutImg(<?php echo e($img->id); ?>)"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                        <img src="<?php echo e(asset('uploads/products/' . $img->name)); ?>" width="100%"
                                            style="width: 100%; height: 150px; object-fit: cover;" alt="">
                                        <div class="card-body">
                                            <input type="hidden" name="img_id[]" id="img_id"
                                                value="<?php echo e($img->id); ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>



                        <div class="col-12 mb-4">
                            <textarea class="summernote" name="description" cols="5" placeholder="Benefits"><?php echo e($product->description); ?></textarea>
                        </div>

                        <div class="col-12 text-center">
                            <button class="main-btn sm">Update Product</button>
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
            let product_pid = <?php echo e($product->patteren_id != '' ? $product->patteren_id : 0); ?>;

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
                                    `<option ${(patteren.id == product_pid) ? "selected" : ""} value="${patteren.id}">${patteren.name}</option>`
                                )
                            });
                        } else {
                            $("#patteren_id").attr("disabled", "true");
                        }

                    }
                })
            }
        }


        getPatteren();



        // function getPatteren() {
        //     let manufacturerId = document.querySelector("#manufacturer_id").value;

        //     if (manufacturerId != null) {
        //         $.ajax({
        //             url: "<?php echo e(route('admin.get.patteren')); ?>",
        //             type: "post",
        //             data: {
        //                 "id": manufacturerId
        //             },
        //             dataType: "json",
        //             success: function(res) {
        //                 console.log(res);
        //                 let patterens = res.patteren;
        //                 $("#patteren_id").find("option").not(":first").remove();

        //                 if (patterens.length > 0) {
        //                     $("#patteren_id").removeAttr("disabled");
        //                     $.each(patterens, function(key, patteren) {
        //                         $("#patteren_id").append(
        //                             `<option value="${patteren.id}">${patteren.name}</option>`
        //                         )
        //                     });
        //                 } else {
        //                     $("#patteren_id").attr("disabled", "true");
        //                 }

        //             }
        //         })
        //     }
        // }







        let product_id = <?php echo e($product->id); ?>;
        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
            // uploadprogress: function(file, progress, bytesSent) {
            //     $("button[type=submit]").prop('disabled', true);
            // },
            url: "<?php echo e(route('product.image.upload')); ?>",
            params: {
                "product_id": product_id
            },
            maxFiles: 10,
            paramName: 'image',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, res) {
                console.log(res)


                let html = `<div class="col-md-3 my-3 " id="img-container-${res.image_id}">
                                <div class="card">
                                    <button type="button" class="btn btn-sm btn-danger" onclick="handleDeleteProdcutImg(${res.image_id})"><i class="fa-solid fa-trash-can"></i></button>
                                    
                                    <img src="${res.image_path}" width="100%" style="width: 100%; height: 130px; object-fit: cover;" alt="">
                                    <div class="card-body">
                                        <input type="hidden"  name="img_id[]" id="img_id" value="${res.image_id}" class="form-control">
                                    </div>
                                </div>
                            </div>`;

                console.log(html);

                $("#img_wrapper").append(html);

                // $("#image_id").val(response.image_id);
                this.removeFile(file);
            }
        });

        // DELETE TEMP IMAGE
        function handleDeleteProdcutImg(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "<?php echo e(route('admin.deleteProductImage')); ?>",
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

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/admin/edit-product.blade.php ENDPATH**/ ?>