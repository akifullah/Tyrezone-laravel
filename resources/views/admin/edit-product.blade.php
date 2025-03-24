@extends('admin.layout.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/dropzone/dropzone.min.css') }}" />
@endsection






@section('maincontent')

    <div class="content-area mt-5">
        <div class="col-md-12 mx-auto">

            <div class="d-flex justify-content-between align-items-center">
                <h5 class="m-0">Edit Product</h5>
                <a class="main-btn sm" href="{{ route('admin.products') }}">All Products</a>
            </div>



            <div class="form form-wrap sign-up-wrap mt-3 ">
                <form action="{{ route('admin.updateProduct', ['id' => $product->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" name="name" value="{{ $product->name }}"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                            </div>
                        </div>


                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Manufacture Name:</label>
                                <select id="manufacturer_id" name="manufacturer_id" onchange="getPatteren()"
                                    class="form-select @error('manufacturer_id') is-invalid @enderror">
                                    <option selected disabled>Select Manufacture</option>
                                    @if ($manufacturers->isNotEmpty())
                                        @foreach ($manufacturers as $manufacturer)
                                            <option value={{ $manufacturer->id }}
                                                {{ $product->manufacturer->id == $manufacturer->id ? 'selected' : '' }}>
                                                {{ $manufacturer->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Pattern Type:</label>
                                <select id="patteren_id" disabled
                                    class="form-select @error('patteren_id') is-invalid @enderror" name="patteren_id">
                                    <option disabled selected>Select Patteren</option>

                                    {{-- @if ($patterens->isNotEmpty())
                                        @foreach ($manufacturers as $manufacturer)
                                            <optgroup label={{ $manufacturer->name }}>
                                                @foreach ($patterens as $patteren)
                                                    @if ($manufacturer->id == $patteren->manufacturer_id)
                                                        <option value="{{ $patteren->id }}"
                                                            {{ $product->patteren->id == $patteren->id ? 'selected' : '' }}>
                                                            {{ $patteren->name }}</option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    @endif --}}

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Fuel Efficiency:</label>
                                <input type="text" value="{{ $product->fuel_efficiency }}" name="fuel_efficiency"
                                    class="form-control @error('fuel_efficiency') is-invalid @enderror"
                                    placeholder="Fuel Efficiency">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Wet Grip:</label>
                                <input type="text" value="{{ $product->wet_grip }}" name="wet_grip"
                                    class="form-control @error('wet_grip') is-invalid @enderror" placeholder="Wet Grip">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Road Noise:</label>
                                <input type="text" value="{{ $product->road_noise }}" name="road_noise"
                                    class="form-control @error('road_noise') is-invalid @enderror" placeholder="Road Noise">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Tyre Size</label>
                                <select name="tyre_size" class="form-select @error('tyre_size') is-invalid @enderror"
                                    required="">
                                    <option disabled selected>Select Size</option>
                                    @foreach ($sizes as $size)
                                        <option
                                            value="{{ $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed }}"
                                            {{ $product->tyre_size == $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed ? 'selected' : '' }}>
                                            {{ $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        {{-- <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Width</label>
                                <select name="width" class="form-select @error('width') is-invalid @enderror"
                                    required="">
                                    <option disabled selected>Select Width</option>
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->width }}"
                                            {{$product->width == $size->width ? 'selected' : '' }}>{{ $size->width }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Profile</label>
                                <select name="profile" class="form-select @error('profile') is-invalid @enderror"
                                    required="">
                                    <option disabled selected>Select Profile</option>
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->profile }}"
                                            {{$product->profile == $size->profile ? 'selected' : '' }}>
                                            {{ $size->profile }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Rim Size</label>
                                <select name="rim_size" class="form-select @error('rim_size') is-invalid @enderror"
                                    required="">
                                    <option disabled selected>Select Rim Size</option>
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->rim_size }}"
                                            {{$product->rim_size == $size->rim_size ? 'selected' : '' }}>
                                            {{ $size->rim_size }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Speed</label>
                                <select name="speed" class="form-select @error('speed') is-invalid @enderror">
                                    <option disabled selected>Select Speed</option>
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->speed }}"
                                            {{$product->speed == $size->speed ? 'selected' : '' }}>{{ $size->speed }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="">Load Index:</label>
                                        <input type="text" value="{{ $product->load_index }}" name="load_index"
                                            class="form-control @error('load_index') is-invalid @enderror"
                                            placeholder="Load Index" value="{{ $product->load_index }}">
                                    </div>
                                </div>


                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="">In Stock:</label>
                                        <input type="number" name="in_stock" value="{{ $product->in_stock }}"
                                            class="form-control @error('in_stock') is-invalid @enderror" placeholder="10 ">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 mb-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Price:</label>
                                        <input type="text" name="price" value="{{ $product->price }}"
                                            class="form-control @error('price') is-invalid @enderror" placeholder="Price">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">VAT Price:</label>
                                        <input type="text" name="vat_price" value="{{ $product->vat_price }}"
                                            class="form-control @error('vat_price') is-invalid @enderror"
                                            placeholder="VAT Price">
                                    </div>
                                </div>

                            </div>

                        </div>

                        {{-- <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Load Index:</label>
                                <input type="text" value="{{ $product->load_index }}" name="load_index"
                                    class="form-control @error('load_index') is-invalid @enderror" placeholder="Load Index"
                                    value="{{ $product->load_index }}">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Price:</label>
                                <input type="text" name="price" value="{{ $product->price }}"
                                    class="form-control @error('price') is-invalid @enderror" placeholder="Price">
                            </div>
                        </div> --}}

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Vehicle Category</label>
                                <select name="v_category" class="form-select @error('v_category') is-invalid @enderror">
                                    <option disabled selected>Select Category</option>
                                    @if($vehicleCategories->isNotEmpty())
                                        @foreach ($vehicleCategories as $v_cat)
                                            <option value="{{ $v_cat->v_cat_name }}"
                                                {{ $product->v_category == $v_cat->v_cat_name ? 'selected' : '' }}>
                                                {{ ucwords($v_cat->v_cat_name) }}</option>
                                        @endforeach
                                    @endif
                                    {{-- <option value="passenger car" {{ old('v_category') == 'passenger car' ? 'selected' : '' }}>Passenger Car</option> --}}
                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <label for="">Season Type:</label>
                            <div class="">
                                <div class="form-check form-check-inline ">
                                    <label for="winter" class="form-check-label">Winter</label>
                                    <input type="radio"
                                        class="form-check-input @error('season_type') is-invalid @enderror"
                                        name="season_type" {{ $product->season_type == '2' ? 'checked' : '' }}
                                        value="2" id="winter">
                                </div>

                                <div class="form-check form-check-inline ">
                                    <label for="summer" class="form-check-label">Summer</label>
                                    <input type="radio"
                                        class="form-check-input @error('season_type') is-invalid @enderror"
                                        name="season_type" {{ $product->season_type == '1' ? 'checked' : '' }}
                                        value="1" id="summer">
                                </div>

                                <div class="form-check form-check-inline ">
                                    <label for="all" class="form-check-label ">All Season</label>
                                    <input type="radio"
                                        class="form-check-input @error('season_type') is-invalid @enderror"
                                        name="season_type" {{ $product->season_type == '0' ? 'checked' : '' }}
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
                                    {{ $product->budget_tyre == 'budget' ? 'checked' : '' }} value="budget"
                                    class="form-check-input @error('budget_tyre') is-invalid @enderror">
                                <label for="budget">Budget</label>
                            </div>
                            <div class="form-check form-check-inline mt-0">
                                <input id="mid-range" type="radio" name="budget_tyre"
                                    {{ $product->budget_tyre == 'mid range' ? 'checked' : '' }} value="mid range"
                                    class="form-check-input @error('budget_tyre') is-invalid @enderror">
                                <label for="mid-range">Mid Range</label>
                            </div>
                            <div class="form-check form-check-inline mt-0 pe-3">
                                <input id="premium" type="radio" name="budget_tyre"
                                    {{ $product->budget_tyre == 'premium' ? 'checked' : '' }} value="premium"
                                    class="form-check-input @error('budget_tyre') is-invalid @enderror">
                                <label for="premium">Premium</label>
                            </div>
                            <div class="form-check form-check-inline mt-0">
                                <input type="checkbox" class="form-check-input" name="run_flat" id="run_flat" value="1" {{ $product->run_flat == '1' ? 'checked' : '' }}>
                                <label for="run_flat">Run Flat</label>
                            </div>
                        </div>




                        <div class="col-12 mt-3">
                            <div id="image" class="dropzone dz-clickable">
                                <div class="dz-message needsclick">
                                    <br>Drop files here or click to upload.<br><br>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="img_wrapper">
                            @foreach ($images as $img)
                                <div class="col-md-3 my-3 " id="img-container-{{ $img->id }}">
                                    <div class="card">

                                        <button type="button" class="btn btn-sm btn-danger"
                                            onclick="handleDeleteProdcutImg({{ $img->id }})"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                        <img src="{{ asset('uploads/products/' . $img->name) }}" width="100%"
                                            style="width: 100%; height: 150px; object-fit: cover;" alt="">
                                        <div class="card-body">
                                            <input type="hidden" name="img_id[]" id="img_id"
                                                value="{{ $img->id }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>



                        <div class="col-12 mb-4">
                            <textarea class="summernote" name="description" cols="5" placeholder="Benefits">{{ $product->description }}</textarea>
                        </div>

                        <div class="col-12 text-center">
                            <button class="main-btn sm">Update Product</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>
@endsection










@section('customjs')
    <script src="{{ asset('admin/assets/dropzone/dropzone.min.js') }}"></script>

    <script>
        // GET PATTEREN BY SELECTING MANUFACTURER

        function getPatteren() {
            let manufacturerId = document.querySelector("#manufacturer_id").value;
            let product_pid = {{ $product->patteren_id != '' ? $product->patteren_id : 0 }};

            if (manufacturerId != null) {
                $.ajax({
                    url: "{{ route('admin.get.patteren') }}",
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
        //             url: "{{ route('admin.get.patteren') }}",
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







        let product_id = {{ $product->id }};
        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
            // uploadprogress: function(file, progress, bytesSent) {
            //     $("button[type=submit]").prop('disabled', true);
            // },
            url: "{{ route('product.image.upload') }}",
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
                    url: "{{ route('admin.deleteProductImage') }}",
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
@endsection
