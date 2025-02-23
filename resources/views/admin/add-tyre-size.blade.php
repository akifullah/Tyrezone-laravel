@extends('admin.layout.main')

@section('style')
@endsection


@section('maincontent')
    <div class="content-area mt-5">
        <div class="col-md-12 mx-auto">


            @include('admin.common.alert')
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="m-0">Add Tyre Size</h5>
                <a class="main-btn sm" href="{{ route('admin.tyreSize') }}">All Sizes</a>
            </div>



            {{-- <div class="row">

                <div class="col-md-6 mb-3">
                    <div class="form form-wrap sign-up-wrap h-100 mt-3">
                        <form action="{{ route('admin.size.width.store') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="width">Width:</label>
                                <input type="text" name="width"
                                    class="form-control @error('width') is-invalid @enderror" placeholder="Width">
                                @error('width')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 text-center">
                                <button class="main-btn sm mb-0">Add Size</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form form-wrap sign-up-wrap h-100 mt-3">
                        <form method="post" action="{{ route('admin.size.profile.store') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="width">Profile/Height:</label>
                                <input type="text" name="profile"
                                    class="form-control @error('profile') is-invalid @enderror" placeholder="Profile">
                                @error('profile')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Select Width</label>
                                <select name="width_id" class="form-select @error('width_id') is-invalid @enderror"
                                    id="">
                                    <option disabled selected>Select Width</option>
                                    @if ($width->isNotEmpty())
                                        @foreach ($width as $item)
                                            <option value="{{ $item->id }}">{{ $item->width }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('width_id')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 text-center">
                                <button class="main-btn sm mb-0">Add Size</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="form form-wrap sign-up-wrap h-100 mt-3">
                        <form method="POST" action="{{ route('admin.size.rim-size.store') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Rim Size:</label>
                                <input type="text" name="rim_size"
                                    class="form-control @error('rim_size') is-invalid @enderror" placeholder="Rim Size">
                                @error('rim_size')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Select Profile</label>
                                <select name="profile_id" class="form-select" id="">
                                    <option disabled selected>Select Profile</option>
                                    @if ($width->isNotEmpty())
                                        @foreach ($profiles as $profile)
                                            <option value="{{ $profile->id }}">{{ $profile->profile }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="col-12 text-center">
                                <button class="main-btn sm">Add Size</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form form-wrap sign-up-wrap h-100 mt-3">
                        <form action="{{ route('admin.size.speed.store') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="width">Speed:</label>
                                <input type="text" name="speed"
                                    class="form-control @error('speed') is-invalid @enderror" placeholder="Speed">
                                @error('speed')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Select Rim Size</label>
                                <select name="rim_id" class="form-select @error('rim_id') is-invalid @enderror" id="">
                                    <option disabled selected>Select Rim Size</option>

                                    @if ($width->isNotEmpty())
                                        @foreach ($rimSizes as $rimSize)
                                            <option value="{{ $rimSize->id }}">{{ $rimSize->rim_size }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                 @error('rim_id')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 text-center">
                                <button class="main-btn sm">Add Size</button>
                            </div>
                        </form>
                    </div>
                </div>



            </div> --}}


            <div class="form form-wrap sign-up-wrap h-100 mt-3">
               

                <form action="{{ route('admin.saveTyreSize') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="width">Width:</label>
                                <input type="text" name="width"
                                    class="form-control @error('width') is-invalid @enderror" placeholder="Width">
                                @error('width')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="profile">Profile:</label>
                                <input type="text" name="profile"
                                    class="form-control @error('profile') is-invalid @enderror" placeholder="Profile">
                                @error('profile')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="rim_size">Rim Size:</label>
                                <input type="text" name="rim_size"
                                    class="form-control @error('profile') is-invalid @enderror" placeholder="Rim Size">
                                @error('rim_size')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="speed">Speed:</label>
                                <input type="text" name="speed"
                                    class="form-control @error('speed') is-invalid @enderror" placeholder="Speed">
                                @error('speed')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button class="main-btn sm">Add Size</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection




@section('customjs')
@endsection
