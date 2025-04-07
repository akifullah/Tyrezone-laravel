@extends('admin.layout.main')

@section('style')
@endsection






@section('maincontent')
    <div class="content-area mt-1">
        <div class="col-md-12 mx-auto">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="m-0">Vehicle Brands</h5>


            </div>

            <div class="form form-wrap sign-up-wrap ">
                <form action="{{ route('admin.addBrands') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label for="">Image:</label>
                                <input type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror " placeholder="Name">
                                @error('image')
                                    <p class="d-block invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label for="">Brand Name:</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror " placeholder="Brand Name">
                                @error('name')
                                    <p class="d-block invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>



                        <div class="col-md-4 mb-3 align-self-end text-center">
                            <button class="main-btn sm">Add Vehicle Brand</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Brand Name</th>
                        <th>Created At</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>


                    @if ($vehicleBrands->isNotEmpty())
                        @foreach ($vehicleBrands as $vehicleBrand)
                            <tr>
                                <td>{{ $vehicleBrand->id }}</td>

                                <td>
                                    <img src="{{ asset('uploads/v_brands/' . $vehicleBrand->v_brand_image) }}"
                                        alt="">
                                </td>
                                <td>{{ @$vehicleBrand->v_brand_name }}</td>
                                <td>{{ \Carbon\Carbon::parse($vehicleBrand->created_at)->format('d M, Y') }}</td>


                                <td>
                                    <div class="last-btns">
                                        {{-- <a href="{{ route('admin.editTyrePatteren', ['id' => $vehicleBrand->id]) }}"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-pen"></i>
                                        </a> --}}

                                        <button onclick="deletePatteren({{ $vehicleBrand->id }})" class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif





                </tbody>
            </table>
        </div>




    </div>
@endsection










@section('customjs')
    <script>
        function deletePatteren(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "{{ route('admin.deleteBrands') }}",
                    type: "post",
                    data: {
                        "id": id
                    },
                    dataType: "json",
                    success: function(res) {
                        if (res.status) {
                            window.location.reload();
                        }
                    }
                })
            }
        }
    </script>
@endsection
