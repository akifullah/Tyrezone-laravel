@extends('frontend.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/user-dashboard.css') }}">
@endsection

@section('main')
    <div class="wrapper">






        <!-- USER DASHBOARD -->
        <div class="user-dashboard">

            <div class="">



                <div class="row">
                    <div class="col-lg-3">
                        @include('frontend.includes.sidebar')

                    </div>

                    <div class="col-lg-9 pe-4 my-lg-4">



                        <div class="content-area mt-5">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-3">Orders</h5>


                            </div>


                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Name</th>
                                            <th>mobile</th>
                                            <th>Address</th>
                                            <th class="text-center">Products</th>
                                            <th>Payment Status</th>
                                            <th>Total Price</th>
                                            <th>Order Status</th>

                                        </tr>
                                    </thead>

                                    <tbody>

                                        @if ($orders != null)
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td>#{{ $order->order_id }}</td>
                                                    <td>{{ $order->orderDetail->fname }}</td>
                                                    <td>{{ $order->orderDetail->phone }}</td>
                                                    <td>{{ $order->orderDetail->address }}</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#productModal-{{ $order->order_id }}">View
                                                            Products</button>
                                                        <div class="modal fade" id="productModal-{{ $order->order_id }}">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="mb-0"
                                                                            style="margin-bottom: 0 !important;">Products
                                                                        </h5>
                                                                        <button class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between">
                                                                            <h6 class="text-start">Order #:
                                                                                {{ $order->order_id }}</h6>

                                                                            <h6 class="text-end">Total:
                                                                                £{{ $order->total_price }}</h6>

                                                                        </div>
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table table-condensed table-bordered">
                                                                                <tr class="bg-none">

                                                                                    <th class="bg-transparent">
                                                                                        Product Name
                                                                                    </th>
                                                                                    <th class="bg-transparent">Product Image
                                                                                    </th>
                                                                                    <th class="bg-transparent">Size</th>
                                                                                    <th class="bg-transparent">Qty</th>
                                                                                    <th class="bg-transparent">Vat Price</th>
                                                                                    <th class="bg-transparent">Price</th>
                                                                                </tr>

                                                                                @foreach ($order->orderItem as $product)
                                                                                    <tr>

                                                                                        <td>
                                                                                            <a class="text-black text-decoration-underline"
                                                                                                href="{{ route('shop-detail', ['id' => $product->product->id]) }}">
                                                                                                {{ $product->product->name }}
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <img src="{{ asset('uploads/products/' . $product->product->images[0]->name) }}"
                                                                                                width="40px"
                                                                                                style="width: 50px;"
                                                                                                alt="">
                                                                                        </td>
                                                                                        <td>{{ $product->product->tyre_size }}
                                                                                        </td>
                                                                                        <td>{{ $product->qty }}</td>
                                                                                        <td>£{{ $product->vat_price }}</td>
                                                                                        <td>£{{ $product->price }}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>{{ $order->payment_status }}</td>
                                                    <td>£{{ $order->total_price }}</td>
                                                    <td>{{ $order->order_status }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- USER DASHBOARD END -->







    </div>
@endsection
