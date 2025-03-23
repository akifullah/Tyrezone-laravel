@extends('admin.layout.main')

@section('style')
@endsection






@section('maincontent')
    <div class="content-area mt-5">
        <div class="col-md-5 mx-auto">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="m-0">Add Vehicle Category</h5>

                <a class="main-btn sm" href="{{ route('admin.vehicleCategory') }}">All Vehicle Category</a>

            </div>

            <div class="form form-wrap sign-up-wrap ">
                <form action="{{ route('admin.saveVehicleCategory') }}" method="post">
                    @csrf
                    <div class="row">

                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label for="">Vehicle Category Name:</label>
                                <input type="text" name="v_cat_name" value="{{ old('v_cat_name') }}"
                                    class="form-control @error('v_cat_name') is-invalid @enderror " placeholder="4x4">
                                @error('v_cat_name')
                                    <p class="d-block invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button class="main-btn sm px-3">Save Category</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>



    </div>
@endsection










@section('customjs')
@endsection
