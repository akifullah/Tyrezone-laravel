@extends('admin.layout.main')

@section('style')
@endsection


@section('maincontent')
    <div class="content-area mt-2">
        @include('admin.common.alert')

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="m-0">Tyre Pattern</h5>

            {{-- <a class="main-btn sm" href="{{ route('admin.addTyrePatteren') }}">Add Patteren</a> --}}

        </div>

        <div class="form form-wrap sign-up-wrap ">
            <form action="{{ route('admin.saveTyrePatteren') }}" method="post">
                @csrf
                <div class="row">

                    <div class="col-lg col-sm-12 ">
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror "
                                placeholder="Name">
                            @error('name')
                                <p class="d-block invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg col-sm-12 ">
                        <div class="form-group">
                            <label for="">Manufacturers:</label>

                            <select name="manufacturer_id"
                                class="form-select @error('manufacturer_id') is-invalid @enderror" id="">

                                <option selected disabled>Select Manufacture</option>

                                @if ($manufacturers->isNotEmpty())
                                    @foreach ($manufacturers as $manufacturer)
                                        <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('manufacturer_id')
                                <p class="d-block invalid-feedback">{{ $message }}</p>
                            @enderror

                        </div>
                    </div>




                    <div class="col-lg col-sm-12 align-self-end pt-2 text-center">
                        <button class="main-btn sm">Add Patteren</button>
                    </div>

                </div>
            </form>
        </div>



        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Patteren Name</th>
                        <th>manufacture</th>
                        <th>Created At</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>


                    @if ($patterens->isNotEmpty())
                        @foreach ($patterens as $patteren)
                            <tr>
                                <td>{{ $patteren->id }}</td>

                                <td>{{ $patteren->name }}</td>
                                <td>{{ @$patteren->manufacturer->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($patteren->created_at)->format('d M, Y') }}</td>


                                <td>
                                    <div class="last-btns">
                                        <a href="{{ route('admin.editTyrePatteren', ['id' => $patteren->id]) }}"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <button onclick="deletePatteren({{ $patteren->id }})" class="btn btn-danger">
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
                    url: "{{ route('admin.deleteTyrePatteren') }}",
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
