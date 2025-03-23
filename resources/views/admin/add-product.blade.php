@extends('admin.layout.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/dropzone/dropzone.min.css') }}" />
@endsection






@section('maincontent')
    <div class="content-area mt-5">
        <div class="col-md-12 mx-auto">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="m-0">Add Product</h5>
                <a class="main-btn sm" href="{{ route('admin.products') }}">All Products</a>
            </div>

            <div class="form form-wrap sign-up-wrap mt-3 ">
                <form action="{{ route('admin.saveProduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                            </div>
                        </div>



                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Manufacture Name:</label>
                                <select id="manufacturer_id" name="manufacturer_id" onchange="getPatteren()"
                                    class="form-select select2 @error('manufacturer_id') is-invalid @enderror">
                                    <option selected disabled>Select Manufacture</option>
                                    @if ($manufacturers->isNotEmpty())
                                        @foreach ($manufacturers as $manufacturer)
                                            <option value={{ $manufacturer->id }}
                                                {{ old('manufacturer_id') == $manufacturer->id ? 'selected' : '' }}>
                                                {{ $manufacturer->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Pattern Type:</label>
                                <select id="patteren_id" disabled
                                    class="form-select @error('patteren_id') is-invalid @enderror" id="patteren"
                                    name="patteren_id">
                                    <option disabled selected>Select Patteren</option>

                                    {{-- @if ($patterens->isNotEmpty())
                                        @foreach ($manufacturers as $manufacturer)
                                            @foreach ($patterens as $patteren)
                                                <option value="{{ $patteren->id }}"
                                                    {{ old('patteren_id') == $patteren->id ? 'selected' : '' }}>
                                                    {{ $patteren->name }}</option>
                                            @endforeach
                                        @endforeach
                                    @endif --}}

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Fuel Efficiency:</label>
                                <input type="text" value="{{ old('fuel_efficiency') }}" name="fuel_efficiency"
                                    class="form-control @error('fuel_efficiency') is-invalid @enderror"
                                    placeholder="Fuel Efficiency">
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Wet Grip:</label>
                                <input type="text" value="{{ old('wet_grip') }}" name="wet_grip"
                                    class="form-control @error('wet_grip') is-invalid @enderror" placeholder="Wet Grip">
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Road Noise:</label>
                                <input type="text" value="{{ old('road_noise') }}" name="road_noise"
                                    class="form-control @error('road_noise') is-invalid @enderror" placeholder="Road Noise">
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="">Tyre Size</label>
                                <select name="tyre_size" class="form-select @error('tyre_size') is-invalid @enderror"
                                    required="">
                                    <option disabled selected>Select Size</option>
                                    @foreach ($sizes as $size)
                                        <option
                                            value="{{ $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed }}"
                                            {{ old('tyre_size') == $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed ? 'selected' : '' }}>
                                            {{ $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        {{-- <div class="col-md-4 mb-2">
                            <div class="row g-2">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="">Width</label>
                                        <input class="form-control @error('width') is-invalid @enderror" type="text"
                                            value="{{ old('width') }}" placeholder="Width (145)" name="width"
                                            id="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="">Profile</label>
                                        <input class="form-control @error('profile') is-invalid @enderror" type="text"
                                            value="{{ old('profile') }}" placeholder="Profile (45)" name="profile"
                                            id="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="row g-2">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="">Rim Size</label>
                                        <input class="form-control @error('rim_size') is-invalid @enderror" type="text"
                                            value="{{ old('rim_size') }}" placeholder="Rim Size (15)" name="rim_size"
                                            id="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="">Speed</label>
                                        <input class="form-control @error('speed') is-invalid @enderror" type="text"
                                            value="{{ old('speed') }}" placeholder="Speed (H)" name="speed"
                                            id="">
                                    </div>
                                </div>
                            </div>
                        </div> --}}



                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="">Load Index:</label>
                                        <input type="text" value="{{ old('load_index') }}" name="load_index"
                                            class="form-control @error('load_index') is-invalid @enderror"
                                            placeholder="Load Index" value="Car">
                                    </div>
                                </div>


                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="">In Stock:</label>
                                        <input type="number" name="in_stock" value="{{ old('in_stock') }}"
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
                                        <input type="text" name="price" value="{{ old('price') }}"
                                            class="form-control  @error('price') is-invalid @enderror" placeholder="Price">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">VAT Price:</label>
                                        <input type="text" name="vat_price" value="{{ old('vat_price') }}"
                                            class="form-control @error('vat_price') is-invalid @enderror"
                                            placeholder="VAT Price">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Vehicle Category</label>
                                <select name="v_category" class="form-select @error('v_category') is-invalid @enderror">
                                    <option disabled selected>Select Category</option>
                                    @if($vehicleCategories->isNotEmpty())
                                        @foreach ($vehicleCategories as $v_cat)
                                            <option value="{{ $v_cat->v_cat_name }}"
                                                {{ old('v_category') == $v_cat->v_cat_name ? 'selected' : '' }}>
                                                {{ ucwords($v_cat->v_cat_name) }}</option>
                                        @endforeach
                                    @endif
                                    {{-- <option value="passenger car" {{ old('v_category') == 'passenger car' ? 'selected' : '' }}>Passenger Car</option> --}}
                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4  mb-2">
                            <label for="">Season Type:</label>
                            <div class="">
                                <div class="form-check form-check form-check-inline mt-0">
                                    <label for="winter" class="form-check-label">Winter</label>
                                    <input type="radio"
                                        class="form-check-input @error('season_type') is-invalid @enderror"
                                        name="season_type" {{ old('season_type') == '2' ? 'checked' : '' }}
                                        value="2" id="winter">
                                </div>

                                <div class="form-check form-check form-check-inline mt-0">
                                    <label for="summer" class="form-check-label">Summer</label>
                                    <input type="radio"
                                        class="form-check-input @error('season_type') is-invalid @enderror"
                                        name="season_type" {{ old('season_type') == '1' ? 'checked' : '' }}
                                        value="1" id="summer">
                                </div>

                                <div class="form-check form-check form-check-inline mt-0">
                                    <label for="all" class="form-check-label ">All Season</label>
                                    <input type="radio"
                                        class="form-check-input @error('season_type') is-invalid @enderror"
                                        name="season_type" {{ old('season_type') == '0' ? 'checked' : '' }}
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
                                    {{ old('budget_tyre') == 'budget' ? 'checked' : '' }} value="budget"
                                    class="form-check-input @error('budget_tyre') is-invalid @enderror">
                                <label for="budget">Budget</label>
                            </div>
                            <div class="form-check form-check-inline mt-0">
                                <input id="mid-range" type="radio" name="budget_tyre"
                                    {{ old('budget_tyre') == 'mid range' ? 'checked' : '' }} value="mid range"
                                    class="form-check-input @error('budget_tyre') is-invalid @enderror">
                                <label for="mid-range">Mid Range</label>
                            </div>
                            <div class="form-check form-check-inline mt-0 pe-5">
                                <input id="premium" type="radio" name="budget_tyre"
                                    {{ old('budget_tyre') == 'premium' ? 'checked' : '' }} value="premium"
                                    class="form-check-input @error('budget_tyre') is-invalid @enderror">
                                <label for="premium">Premium</label>
                            </div>
                            <div class="form-check form-check-inline mt-0">
                                <input type="checkbox" class="form-check-input" name="run_flat" id="run_flat" value="1" {{ old('run_flat') == '1' ? 'checked' : '' }}>
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
                                <textarea class="summernote" name="description" cols="5" placeholder="Benefits">{{ old('description') }}</textarea>
                            </div>


                            <div class="col-12 text-center">
                                <button class="main-btn sm">Add Product</button>
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
            url: "{{ route('temp.image.upload') }}",
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
                    url: "{{ route('temp.image.delete') }}",
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
