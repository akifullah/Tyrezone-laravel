@extends('admin.layout.main')

@section('style')
@endsection






@section('maincontent')
    <div class="content-area mt-5">

        @include('admin.common.alert')


        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">All Users</h5>

            <a class="main-btn sm" href="{{ route('admin.addUser') }}">Add User</a>

        </div>

        <p class="text-danger"></p>
        <p class="text-success"></p>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created At</th>

                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>
                    @if ($users->isNotEmpty())
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->fname }}</td>
                                <td>{{ $user->lname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->role == '1')
                                        Admin
                                    @else
                                        User
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d M, Y') }}</td>


                                <td>
                                    <a href="{{ route('admin.editUser', ['id' => $user->id]) }}"
                                        class="btn btn-sm btn-success"><i class="fa-solid fa-pen"></i></a>

                                    <a href="javascript:void(0)" onclick="deleteUser({{ $user->id }})"
                                        class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></a>

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
        function deleteUser(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "{{ route('admin.deleteUser') }}",
                    type: "post",
                    data: {
                        id
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
