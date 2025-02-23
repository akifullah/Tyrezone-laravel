@extends('admin.layout.main')

@section('style')
@endsection






@section('maincontent')
    <div class="content-area mt-5">
        <div class="col-md-5 mx-auto">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="m-0">Add Patteren</h5>

                <a class="main-btn sm" href="{{ route('admin.tyrePatteren') }}">All Patteren</a>

            </div>

            <div class="form form-wrap sign-up-wrap ">
                <form action="{{ route('admin.saveTyrePatteren') }}" method="post">
                    @csrf
                    <div class="row">

                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror " placeholder="Name">
                                @error('name')
                                    <p class="d-block invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
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




                        <div class="col-12 text-center">
                            <button class="main-btn sm">Add Manufacture</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>



    </div>
@endsection










@section('customjs')
@endsection
