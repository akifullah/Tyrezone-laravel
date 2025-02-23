@extends('admin.layout.main')

@section('style')
    <style>
        .cke_notification_warning {
            display: none !important;
        }
    </style>
@endsection







@section('maincontent')
    <div class="content-area mt-5">
        <div class="col-md-11 mx-auto">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="m-0">Edit Manufacture</h5>

                <a class="main-btn sm" href="{{ route('admin.manufacturers') }}">All Manufacturers</a>

            </div>

            <div class="form form-wrap sign-up-wrap ">



                <form action="{{ route("admin.updateManufacturers") }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="hidden" name="id" value="{{ $manufacturer->id }}">
                                <input type="text" name="name" value="{{ $manufacturer->name }}"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                                @error('name')
                                    <p class="d-block invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label for="">Image:</label>
                                <input type="file" value="" name="image" class="form-control"
                                    placeholder="Image Url">
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label for="">Excerp:</label>
                                <input type="text" name="excerpt" value="{{ $manufacturer->excerpt }}" maxlength="100"
                                    class="form-control" placeholder="Excerpt">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="editor" placeholder="Descriptions" style="visibility: hidden; display: none;">{{ $manufacturer->description }}</textarea>

                            </div>
                        </div>




                        <div class="col-12 text-center">
                            <button class="main-btn sm">Update Manufacturer</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>



    </div>
@endsection











@section('customjs')
    <script src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>

    <script>
        CKEDITOR.replace("description");
    </script>
@endsection
