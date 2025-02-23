@extends('admin.layout.main')

@section('style')
@endsection


@section('maincontent')
    <div class="content-area mt-5">
        <div class="col-md-6 mx-auto">

            <div class="d-flex justify-content-between align-items-center">
                <h5 class="m-0">Edit Tyre Size</h5>

                <a class="main-btn sm" href="{{ route('admin.tyreSize') }}">All Sizes</a>

            </div>

            <p class="mb-0 mt-4 text-danger"></p>
            <p class="m-0  text-success"> </p>

            <div class="form form-wrap sign-up-wrap ">
                <form action="{{ route("admin.updateTyreSize", ["id"=>$size->id]) }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Width:</label>
                                <input type="text" name="width" value="{{ $size->width }}" class="form-control @error('width') is-invalid @enderror"
                                    placeholder="Width">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Profile:</label>
                                <input type="text" name="profile" value="{{ $size->profile }}" class="form-control @error('profile') is-invalid @enderror"
                                    placeholder="Profile">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Rim Size:</label>
                                <input type="text" name="rim_size" value="{{ $size->rim_size }}" class="form-control @error('rim_size') is-invalid @enderror"
                                    placeholder="Rim Size">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Speed:</label>
                                <input type="text" name="speed" value="{{ $size->speed }}" class="form-control @error('speed') is-invalid @enderror"
                                    placeholder="Speed">
                            </div>
                        </div>


                        <div class="col-12 text-center">
                            <button class="main-btn sm">Update Size</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection




@section('customjs')
@endsection
