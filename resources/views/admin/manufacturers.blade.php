@extends('admin.layout.main')

@section('style')
@endsection






@section('maincontent')
    <div class="content-area mt-5">

        @include('admin.common.alert')

        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Manufacturers</h5>

            {{-- <a class="main-btn sm" href="{{ route('admin.addManufacturers') }}">Add Manufacturers</a> --}}

        </div>

        <div class="form form-wrap sign-up-wrap ">
            <form action="{{ route('admin.saveManufacturers') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-lg col-sm-12 ">
                        <div class="form-group">
                            <label for="">Name* :</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Name">
                            @error('name')
                                <p class="d-block invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg col-sm-12 ">
                        <div class="form-group">
                            <label for="">Image:</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                placeholder="Imge Url">
                            @error('image')
                                <p class="d-block invalid-feedback">{{ $message }}</p>
                            @enderror

                        </div>
                    </div>
                    {{-- <div class="col-md-12 mb-4">
                        <div class="form-group">
                            <label for="">Excerpt:</label>
                            <input type="text" name="excerpt" maxlength="100" class="form-control" placeholder="Excerpt">
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea id="editor" name="description" placeholder="Descriptions" style="visibility: hidden; display: none;"></textarea>

                        </div>
                    </div> --}}

                    <div class="col-lg col-sm-12 align-self-end pt-2 text-center">
                        <button class="main-btn sm">Add Manufacture</button>
                    </div>

                </div>
            </form>
        </div>



        <div class="table-responsive mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Manufacturer</th>
                        <th>Image</th>
                        {{-- <th>Description</th> --}}
                        <th>Created At</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>

                    @if ($manufacturers->isNotEmpty())
                        @foreach ($manufacturers as $manufacturer)
                            <tr>
                                <td>{{ $manufacturer->id }}</td>

                                <td>{{ $manufacturer->name }}</td>
                                <td>
                                    <img src="{{ asset('uploads/brands/' . $manufacturer->image) }}" alt="">
                                </td>
                                {{-- <td>
                                    {{ Str::words($manufacturer->excerpt, 15) }}
                                </td> --}}
                                <td>{{ Carbon\Carbon::parse($manufacturer->created_at)->format('d M, Y') }}</td>


                                <td>
                                    <div class="last-btns ">
                                        <a href="{{ route('admin.editManufacturers', ['id' => $manufacturer->id]) }}"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>


                                        <a href="javaScript:void(0)" onclick="handleDelete({{ $manufacturer->id }})"
                                            class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>

                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">
                                <p class="mt-4">No Record Found</p>
                            </td>
                        </tr>
                    @endif




                </tbody>
            </table>
        </div>

    </div>
@endsection


@section('customjs')
    <script>
        function handleDelete(id) {
            if (confirm("Are you sure, you want to delete?")) {
                $.ajax({
                    url: '{{ route('admin.deleteManufacturers') }}',
                    type: "post",
                    data: {
                        "id": id,
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(res) {
                        console.log(res)
                        window.location.reload();
                    }
                })
            }
        }
    </script>
@endsection
