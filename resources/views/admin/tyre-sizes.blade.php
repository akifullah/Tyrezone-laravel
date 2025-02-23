@extends('admin.layout.main')

@section('style')
@endsection


@section('maincontent')

    <div class="content-area mt-5">
        @include('admin.common.alert')

        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Tyre Sizes</h5>

            <a href="{{ route('admin.addTyreSize') }}" class="main-btn sm">Add Size</a>

        </div>

        {{-- <div class="row mt-4">
            <div class="col-md-6">
                <h5>Width</h5>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID #</th>
                                <th>Width</th>
                                <th>Actions</th>

                            </tr>
                        </thead>

                        <tbody>
                            @if ($widths->isNotEmpty())
                                @foreach ($widths as $width)
                                    <tr>
                                        <td>{{ $width->id }}</td>
                                        <td>{{ $width->width }}</td>
                                        <td>
                                            <div class="last-btns d-flex justify-content-center">
                                                <a href="" class="btn btn-success">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>

                                                <button onclick="deleteWidth({{ $width->id }})" class="btn btn-danger">
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

            <div class="col-md-6">
                <h5>Profile/Height</h5>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID #</th>
                                <th>Profile</th>
                                <th>Width</th>
                                <th>Actions</th>

                            </tr>
                        </thead>

                        <tbody>
                            @if ($profiles->isNotEmpty())
                                @foreach ($profiles as $profile)
                                    <tr>
                                        <td>{{ $profile->id }}</td>
                                        <td>{{ $profile->profile }}</td>
                                        <td>{{ $profile->width->width }}</td>
                                        <td>
                                            <div class="last-btns d-flex justify-content-center">
                                                <a href="" class="btn btn-success">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>

                                                <button onclick="deleteProfile({{ $profile->id }})" class="btn btn-danger">
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

            <div class="col-md-6">
                <h5>Rim Size</h5>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID #</th>
                                <th>Rim Size</th>
                                <th>Profile</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if ($rimSizes->isNotEmpty())
                                @foreach ($rimSizes as $rimSize)
                                    <tr>
                                        <td>{{ $rimSize->id }}</td>
                                        <td>{{ $rimSize->rim_size }}</td>
                                        <td>{{ $rimSize->profile->profile }}</td>
                                        <td>
                                            <div class="last-btns d-flex justify-content-center">
                                                <a href="" class="btn btn-success">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>

                                                <button onclick="deleteRimSize({{ $rimSize->id }})" class="btn btn-danger">
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

            <div class="col-md-6">
                <h5>Speed</h5>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID #</th>
                                <th>Rim Size</th>
                                <th>Profile</th>
                                <th>Actions</th>

                            </tr>
                        </thead>

                        <tbody>
                            @if ($speeds->isNotEmpty())
                                @foreach ($speeds as $speed)
                                    <tr>
                                        <td>{{ $speed->id }}</td>
                                        <td>{{ $speed->speed }}</td>
                                        <td>{{ $speed->rimSize->rim_size }}</td>
                                        <td>
                                            <div class="last-btns d-flex justify-content-center">
                                                <a href="" class="btn btn-success">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>

                                                <button onclick="deleteSpeed({{ $speed->id }})" class="btn btn-danger">
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

        </div> --}}



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
