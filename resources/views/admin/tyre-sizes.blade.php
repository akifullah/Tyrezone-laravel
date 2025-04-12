@extends('admin.layout.main')

@section('style')
@endsection


@section('maincontent')

 
    <div class="content-area mt-2">
        @include('admin.common.alert')

        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Tyre Sizes</h5>

            {{-- <a href="{{ route('admin.addTyreSize') }}" class="main-btn sm">Add Size</a> --}}

        </div>

        <div class="form form-wrap sign-up-wrap h-100 mt-3">
               

                <form action="{{ route('admin.saveTyreSize') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg col-md-6 ">
                            <div class="form-group">
                                <label for="width">Width:</label>
                                <input type="text" name="width"
                                    class="form-control @error('width') is-invalid @enderror" placeholder="Width">
                                @error('width')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg col-md-6 ">
                            <div class="form-group">
                                <label for="profile">Profile:</label>
                                <input type="text" name="profile"
                                    class="form-control @error('profile') is-invalid @enderror" placeholder="Profile">
                                @error('profile')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg col-md-6 ">
                            <div class="form-group">
                                <label for="rim_size">Rim Size:</label>
                                <input type="text" name="rim_size"
                                    class="form-control @error('profile') is-invalid @enderror" placeholder="Rim Size">
                                @error('rim_size')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg col-md-6 ">
                            <div class="form-group">
                                <label for="speed">Speed:</label>
                                <input type="text" name="speed"
                                    class="form-control @error('speed') is-invalid @enderror" placeholder="Speed">
                                @error('speed')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg col-12 align-self-end text-center">
                            <button class="main-btn sm">Add Size</button>
                        </div>
                    </div>
                </form>
            </div>
      



        <div class="table-responsive mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID #</th>
                        <th>Width</th>
                        <th>Profile</th>
                        <th>Rim Size</th>
                        <th>Speed</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>
                    @if ($sizes->isNotEmpty())
                        @foreach ($sizes as $size)
                            <tr>
                                <td>{{ $size->id }}</td>
                                <td>{{ $size->width }}</td>
                                <td>{{ $size->profile }}</td>
                                <td>{{ $size->rim_size }}</td>
                                <td>{{ $size->speed }}</td>
                                <td>
                                    <div class="last-btns d-flex justify-content-center">
                                        <a href="{{ route('admin.editTyreSize', ['id' => $size->id]) }}"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <button onclick="deleteSize({{ $size->id }})" class="btn btn-danger">
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
        // deleteWidth
        // admin.size.speed.delete
        //  function deleteWidth(id) {
        //     if (confirm("Are you sure you want to delete?")) {
        //         $.ajax({
        //             url: "{{ route('admin.size.width.delete') }}",
        //             type: "post",
        //             data: {
        //                 "id": id
        //             },
        //             success: function(res) {
        //                 if (res.status) {
        //                     window.location.reload();
        //                 }
        //             }
        //         });
        //     }
        // }


        // function deleteProfile(id) {
        //     if (confirm("Are you sure you want to delete?")) {
        //         $.ajax({
        //             url: "{{ route('admin.size.profile.delete') }}",
        //             type: "post",
        //             data: {
        //                 "id": id
        //             },
        //             success: function(res) {
        //                 if (res.status) {
        //                     window.location.reload();
        //                 }
        //             }
        //         });
        //     }
        // }
        
        // function deleteRimSize(id) {
        //     if (confirm("Are you sure you want to delete?")) {
        //         $.ajax({
        //             url: "{{ route('admin.size.rimSize.delete') }}",
        //             type: "post",
        //             data: {
        //                 "id": id
        //             },
        //             success: function(res) {
        //                 if (res.status) {
        //                     window.location.reload();
        //                 }
        //             }
        //         });
        //     }
        // }

        // function deleteSpeed(id) {
        //     if (confirm("Are you sure you want to delete?")) {
        //         $.ajax({
        //             url: "{{ route('admin.size.speed.delete') }}",
        //             type: "post",
        //             data: {
        //                 "id": id
        //             },
        //             success: function(res) {
        //                 if (res.status) {
        //                     window.location.reload();
        //                 }
        //             }
        //         });
        //     }
        // }
        
        
        
        function deleteSize(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "{{ route('admin.deleteTyreSize') }}",
                    type: "post",
                    data: {
                        "id": id
                    },
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
