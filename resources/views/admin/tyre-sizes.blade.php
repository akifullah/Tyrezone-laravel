@extends('admin.layout.main')

@section('style')
@endsection

@section('maincontent')
    <div class="content-area mt-2">
        @include('admin.common.alert')

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <h5>Tyre Widths</h5>
                <form action="{{ route('admin.size.width.store') }}" method="POST" class="mb-2">
                    @csrf
                    <div class="form-group d-flex gap-2">
                        <input type="text" class="form-control form-control-sm" name="width" placeholder="Width" required>
                        <button type="submit" class="main-btn sm flex-grow-0 text-nowrap">Add Width</button>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Width</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($widths as $width)
                            <tr>
                                <td style="width: 40px">{{ $width->id }}</td>
                                <td>{{ $width->width }}</td>
                                <td style="width: 40px">
                                    <button type="button" onclick="deleteWidth({{ $width->id }})"
                                        class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="col-md-6 col-xl-3">
                <h5>Tyre Profiles</h5>
                <form action="{{ route('admin.size.profile.store') }}" method="POST" class="mb-2">
                    @csrf
                    <div class="form-group d-flex gap-2">
                        <input type="text" class="form-control form-control-sm" name="profile" placeholder="Profile"
                            required>
                        <button type="submit" class="main-btn sm flex-grow-0 text-nowrap">Add Profile</button>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Profile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profiles as $profile)
                            <tr>
                                <td style="width: 40px">{{ $profile->id }}</td>
                                <td>{{ $profile->profile }}</td>
                                <td style="width: 40px">
                                    <button type="button" onclick="deleteProfile({{ $profile->id }})"
                                        class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-6 col-xl-3">
                <h5>Tyre Rim Sizes</h5>
                <form action="{{ route('admin.size.rimsize.store') }}" method="POST" class="mb-2">
                    @csrf
                    <div class="form-group d-flex gap-2">
                        <input type="text" class="form-control form-control-sm" name="rim_size" placeholder="Rim Size"
                            required>
                        <button type="submit" class="main-btn sm flex-grow-0 text-nowrap">Add Rim Size</button>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Rim Size</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rimsizes as $rimsize)
                            <tr>
                                <td style="width: 40px">{{ $rimsize->id }}</td>
                                <td>{{ $rimsize->rim_size }}</td>
                                <td style="width: 40px">
                                    <button type="button" onclick="deleteRimSize({{ $rimsize->id }})"
                                        class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>


            <div class="col-md-6 col-xl-3">
                <h5>Tyre Speeds</h5>
                <form action="{{ route('admin.size.speed.store') }}" method="POST" class="mb-2">
                    @csrf
                    <div class="form-group d-flex gap-2">
                        <input type="text" class="form-control form-control-sm" name="speed" placeholder="Speed"
                            required>
                        <button type="submit" class="main-btn sm flex-grow-0 text-nowrap">Add Speed</button>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Speed</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($speeds as $speed)
                            <tr>
                                <td style="width: 40px">{{ $speed->id }}</td>
                                <td>{{ $speed->speed }}</td>
                                <td style="width: 40px">
                                    <button type="button" onclick="deleteSpeed({{ $speed->id }})"
                                        class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>






    </div>
@endsection

@section('customjs')
    <script>
        function deleteWidth(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.post("{{ route('admin.size.width.delete') }}", {
                    id: id,
                    _token: '{{ csrf_token() }}'
                }, function(res) {
                    if (res.status) location.reload();
                });
            }
        }

        function deleteProfile(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.post("{{ route('admin.size.profile.delete') }}", {
                    id: id,
                    _token: '{{ csrf_token() }}'
                }, function(res) {
                    if (res.status) location.reload();
                });
            }
        }

        function deleteRimSize(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.post("{{ route('admin.size.rimsize.delete') }}", {
                    id: id,
                    _token: '{{ csrf_token() }}'
                }, function(res) {
                    if (res.status) location.reload();
                });
            }
        }

        function deleteSpeed(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.post("{{ route('admin.size.speed.delete') }}", {
                    id: id,
                    _token: '{{ csrf_token() }}'
                }, function(res) {
                    if (res.status) location.reload();
                });
            }
        }
    </script>
@endsection
