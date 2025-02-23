@extends('admin.layout.main')


@section('maincontent')
    <div class="content-area mt-5">

        @include('admin.common.alert')

        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Products</h5>
            <a class="main-btn sm " href="{{ route('admin.addProduct') }}">Add Product</a>
            <!-- Updated route -->
        </div>

        <p class="text-danger"></p>
        <p class="text-success"></p>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tyre Name</th>
                        <th>Image</th>
                        <th>Manufac. Name</th>
                        <th>Tyre Pattern</th>
                        <th>Fuel Efficiency</th>
                        <th>Wet Grip</th>
                        <th>Road Noise</th>
                        <th>Size</th>

                        <th>Season</th>
                        {{-- <th>Budget Tyre</th> --}}
                        <th>In Stock</th>
                        <th>Vat</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($products->isNotEmpty())
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @if ($product->images->isNotEmpty())
                                        <img src="{{ asset('uploads/products/' . $product->images[0]->name) }}"
                                            alt="">
                                    @endif
                                </td>
                                <td>{{ $product->manufacturer->name }}</td>
                                <td>{{ $product->patteren != null ? $product->patteren->name : '' }}</td>
                                <td>{{ $product->fuel_efficiency }}</td>
                                <td>{{ $product->wet_grip }}</td>
                                <td>{{ $product->road_noise }}</td>
                                <td class="text-nowrap">
                                    {{ $product->tyre_size }}
                                </td>

                                <td>
                                    @if ($product->season_type == 1)
                                        <i title="Summer" class=" h3 fa-solid fa-sun"></i>
                                    @elseif($product->season_type == 2)
                                        <i title="Winter" class=" h3 fa-regular fa-snowflake"></i>
                                    @else
                                        <i title="All Season" class=" h3 fa-brands fa-galactic-republic"></i>
                                    @endif
                                </td>
                                {{-- <td>
                                    @if ($product->budget_tyre == 1)
                                        Yes
                                    @else
                                        No
                                    @endif

                                </td> --}}
                                <td class="text-nowrap">{{ $product->in_stock }}</td>
                                <td class="text-nowrap">${{ $product->vat_price }}</td>
                                <td class="text-nowrap">${{ $product->price }}</td>
                                <td>
                                    <div class="last-btns">

                                        <a href="{{ route('admin.editProduct', ['id' => $product->id]) }}"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>



                                        <button onclick="deleteProduct({{ $product->id }})" class="btn btn-danger">
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
        function deleteProduct(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "{{ route('admin.deleteProduct') }}",
                    type: "post",
                    data: {
                        id
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
