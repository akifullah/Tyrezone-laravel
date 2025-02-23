@extends('admin.layout.main')

@section('style')
    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            /* Transparent background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        /* Loader animation */
        .loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
        }

        /* Keyframes for spinning animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Loader text */
        .loader-text {
            margin-top: 10px;
            font-size: 18px;
            color: #fefefe;
            text-align: center;
            display: block
        }
    </style>
@endsection






@section('maincontent')
    <div id="preloader" class="d-none">
        <div class="d-flex justify-center align-items-center flex-column ">
            <div class="loader"></div>
            <div class="loader-text">Sending Email...</div>
        </div>
    </div>

    <div class="content-area mt-5">

        <div class="row">

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Total Orders
                        </h4>
                        <h5>{{ $orders->count() }}</h5>
                        <i class="fa-solid fa-shop"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Pending</h4>
                        <h5>{{ $pendingOrder->count() }}</h5>
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Confirmed</h4>
                        <h5>{{ $confirmOrder->count() }}</h5>
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Invalid</h4>
                        <h5>{{ $invalidOrder->count() }}</h5>
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Rejected</h4>
                        <h5>{{ $rejectedOrder->count() }}</h5>
                        <i class="fa-solid fa-ban"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Not Available
                        </h4>
                        <h5>{{ $notAvailableOrder->count() }}</h5>
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Delivered
                        </h4>
                        <h5>{{ $deliveredOrder->count() }}</h5>
                        <i class="fa-solid fa-box"></i>
                    </div>
                </a>
            </div>


        </div>


        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Orders</h5>


        </div>


        <div class="table-responsive bg-danger" style="overflow: hidden; border-radius: 10px;">
            <table class="table table-bordered mb-0 ">
                <thead>
                    <tr>
                        <th>Cus. Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Product Detail</th>
                        {{-- <th>Image</th> --}}
                        {{-- <th>Manufac. Name</th>
                        <th>Tyre Patteren</th>
                         --}}
                        {{-- <th>Size</th> --}}
                        <th>Shipping Address</th>
                        {{-- <th>Products </th> --}}
                        {{-- <th>Qty</th> --}}
                        {{-- <th>Price</th> --}}
                        <th>Pay Status</th>
                        <th>Order Status</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>

                    @if ($orders->isNotEmpty())
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->orderDetail->fname }}</td>
                                <td>{{ $order->orderDetail->email }}</td>
                                <td>{{ $order->orderDetail->phone }}</td>
                                <td>
                                    <button class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#productModal-{{ $order->order_id }}">View Products</button>
                                    <div class="modal fade" id="productModal-{{ $order->order_id }}">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="mb-0" style="margin-bottom: 0 !important;">Products</h5>
                                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">

                                                        <h6 class="text-start">Order #: {{ $order->order_id }}</h6>
                                                        
                                                        <h6>Total Price: £{{ $order->total_price }}</h6>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-condensed table-bordered">
                                                            <tr class="bg-none">
                                                                <th class="bg-transparent">Product Id</th>
                                                                <th class="bg-transparent">
                                                                    Product Name
                                                                </th>
                                                                <th class="bg-transparent">Product Image</th>
                                                                <th class="bg-transparent">Size</th>
                                                                <th class="bg-transparent">Qty</th>
                                                            </tr>

                                                            @foreach ($order->orderItem as $product)
                                                                <tr>
                                                                    <td>{{ $product->product->id }}</td>
                                                                    <td>
                                                                        <a class="text-black text-decoration-underline"
                                                                            href="{{ route('shop-detail', ['id' => $product->product->id]) }}">
                                                                            {{ $product->product->name }}
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <img src="{{ asset('uploads/products/' . $product->product->images[0]->name) }}"
                                                                            width="40px" style="width: 50px;"
                                                                            alt="">
                                                                    </td>
                                                                    <td>{{ $product->product->tyre_size }}</td>
                                                                    <td>{{ $product->qty }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </td>

                                <td>{{ $order->orderDetail->address }}</td>

                                <td>{{ $order->payment_status }}</td>
                                <td>
                                    <select onchange="handleSelectChange(event, '{{ $order->id }}')"
                                        class="border-0 outline-0">
                                        <option value="Pending" {{ $order->order_status == 'Pending' ? 'selected' : '' }}>
                                            Pending</option>
                                        <option value="Confirmed"
                                            {{ $order->order_status == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                                        <option value="Invalid" {{ $order->order_status == 'Invalid' ? 'selected' : '' }}>
                                            Invalid</option>
                                        <option value="Not Available"
                                            {{ $order->order_status == 'Not Available' ? 'selected' : '' }}>Not Available
                                        </option>
                                        <option value="Delivered"
                                            {{ $order->order_status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                        <option value="Rejected"
                                            {{ $order->order_status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                                    </select>
                                </td>

                                <td>
                                    <a href="javascript:void(0)" onclick="deleteOrder({{ $order->id }})"
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
        function deleteOrder(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "{{ route('admin.delete') }}",
                    type: "post",
                    data: {
                        id
                    },
                    success: function(res) {
                        if(res.status){
                            window.location.reload();
                        }
                    }
                })
            }
        }


        function handleSelectChange(event, id) {
            $("#preloader").removeClass("d-none");
            var value = event.target.value;
            let order_id = id;

            $.ajax({
                url: "{{ route('admin.status') }}",
                type: "post",
                data: {
                    "status": value,
                    "id": order_id
                },
                dataType: "json",
                success: function(res) {
                    console.log(res);
                    $("#preloader").addClass("d-none");

                    window.location.reload();
                }
            })


        }
    </script>
@endsection
