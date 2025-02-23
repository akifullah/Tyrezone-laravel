@extends('admin.layout.main')

@section('style')
@endsection






@section('maincontent')
    <div class="content-area mt-5">
        <div class="col-md-5 mx-auto">

            <div class="d-flex justify-content-between align-items-center">
                <h5 class="m-0">Edit Patteren</h5>

                <a class="main-btn sm" href="{{ route('admin.tyrePatteren') }}">All Patteren</a>

            </div>



            <div class="form form-wrap sign-up-wrap mt-3">



                <form action="{{ route("admin.updateTyrePatteren") }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="hidden" name="id" value="{{  $patteren->id }}">
                                <input type="text" name="name" value="{{ $patteren->name }}" class="form-control"
                                    placeholder="Name">
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label for="">Manufacturers:</label>
                                <select name="manu_id" class="form-select">
                                    <option value="Accelera" disabled="" selected="">Select Pattern</option>
                                    @foreach ($manufacturers as $manufacturer)
                                        <option {{ ($manufacturer->id == $patteren->manufacturer_id) ? "selected" : "" }} value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="main-btn sm">Update Pattern</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>



    </div>
@endsection










@section('customjs')
@endsection
