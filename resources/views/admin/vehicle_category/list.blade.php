@extends('admin.layout.main')

@section('style')
@endsection


@section('maincontent')
    <div class="content-area mt-2">
        @include('admin.common.alert')

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="m-0">Vehicle Category</h5>

            <a class="main-btn sm" href="{{ route('admin.addVehicleCategory') }}">Add Vehicle Category</a>

        </div>


        <div class="form form-wrap sign-up-wrap ">
            <form action="{{ route('admin.saveVehicleCategory') }}" method="post">
                @csrf
                <div class="row">

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Vehicle Category Name:</label>
                            <input type="text" name="v_cat_name" value="{{ old('v_cat_name') }}"
                                class="form-control @error('v_cat_name') is-invalid @enderror " placeholder="4x4">
                            @error('v_cat_name')
                                <p class="d-block invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 align-self-end text-center pt-2">
                        <button class="main-btn sm px-3">Save Category</button>
                    </div>

                </div>
            </form>
        </div>


        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Vehicle Category</th>
                        <th>Created At</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>


                    @if ($vehicleCategories->isNotEmpty())
                        @foreach ($vehicleCategories as $v_cat)
                            <tr>
                                <td>{{ $v_cat->id }}</td>

                                <td>{{ $v_cat->v_cat_name }}</td>
                                <td>{{ \Carbon\Carbon::parse($v_cat->created_at)->format('d M, Y') }}</td>


                                <td>
                                    <div class="last-btns">
                                        <a href="{{ route('admin.editVehicleCategory', ['id' => $v_cat->id]) }}"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <button onclick="deleteCate({{ $v_cat->id }})" class="btn btn-danger">
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
        function deleteCate(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "{{ route('admin.deleteVehicleCategory') }}",
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
