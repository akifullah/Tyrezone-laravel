@extends('admin.layout.main')

@section('maincontent')
    <div class="content-area mt-5">


        <div class="row dashboard">

            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="{{ route('admin.products') }}">
                    <div class="dash-card">
                        <h4>Products</h4>
                        <h5>{{ $products->count() }}</h5>
                        <i class="fa-solid fa-box-archive"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="{{ route('admin.tyrePatteren') }}">
                    <div class="dash-card">
                        <h4>Patteren</h4>
                        <h5>{{ $patterens->count() }}</h5>
                        <i class="fa-solid fa-sliders"></i>
                    </div>
                </a>

            </div>

            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="{{ route('admin.manufacturers') }}">
                    <div class="dash-card">
                        <h4>Manufacturers</h4>
                        <h5>{{ $manufacturers->count() }}</h5>
                        <i class="fa-solid fa-list"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="{{ route('admin.users') }}">
                    <div class="dash-card">
                        <h4>Users</h4>
                        <h5>{{ $users->count() }}</h5>
                        <i class="fa-solid fa-users"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="{{ route('admin.orders') }}">
                    <div class="dash-card">
                        <h4>Orders</h4>
                        <h5>{{ $orders->count() }}</h5>
                        <i class="fa-solid fa-cart-flatbed"></i>
                    </div>
                </a>
            </div>
        </div>


        <div class="row mb-5 mt-5">
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Manufacturers</h5>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>Manufacturer Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Created At</th>

                            </tr>
                        </thead>

                        <tbody>
                            @if ($manufacturers->isNotEmpty())
                                @foreach ($manufacturers as $manufacturer)
                                    <tr>
                                        <td>{{ $manufacturer->name }}</td>
                                        <td>

                                            <img src="{{ asset('uploads/brands/' . $manufacturer->image) }}"
                                                alt="">
                                        </td>
                                        <td>
                                            {{ $manufacturer->description }}
                                        </td>

                                        <!-- Truncate to 50 characters -->
                                        <td>{{ \Carbon\Carbon::parse($manufacturer->created_at)->format('d M, Y') }}</td>

                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Tyre Pattern</h5>


                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Patteren Name</th>
                                <th>manufacture</th>
                                <th>Created At</th>

                            </tr>
                        </thead>

                        <tbody>
                            @if ($patterens->isNotEmpty())
                                @foreach ($patterens as $patteren)
                                    <tr>
                                        <td>{{ $patteren->name }}</td>
                                        <td>{{ $patteren->manufacturer->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($patteren->created_at)->format('d M, Y') }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Products</h5>


        </div>


        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tyre Name</th>
                        <th>Image</th>
                        <th>Manufac. Name</th>
                        <th>Tyre Patteren</th>

                        <th>Size</th>
                        <th>Price</th>

                    </tr>
                </thead>

                <tbody>
                    @if ($products->isNotEmpty())
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @if ($product->images->isNotEmpty())
                                        <img src="{{ asset('uploads/products/' . $product->images[0]->name) }}"
                                            alt="">
                                    @endif
                                </td>
                                <td>{{ $product->manufacturer->name }}</td>
                                <td>{{ $product->patteren->name }}</td>
                                <td>{{ $product->tyre_size }}</td>

                                <td>{{ $product->price }}</td>

                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>

    </div>
@endsection
