@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">

        





        <div class="container cart-page">



            <div class="row">
                <div id="content" class="col-md-12 col-sm-12">
                    <div class="contenttitle">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <h4>Shopping Cart</h4>
                            </div>
                        </div>


                        <div id="mainCart">

                            <div class="order-detail-content">
                                <div class="table-responsive">
                                    <table id="cart" class="table table-bordered cart_summary">
                                        <thead>
                                            <tr>
                                                <td class="text-center"><b>Image</b></td>
                                                <td class="text-left"><b>Product Name</b></td>

                                                <td class="text-left"><b>Quantity</b></td>
                                                <td class="text-right"><b>Unit Price</b></td>
                                                <td class="text-right"><b>Total</b></td>
                                                <td class="text-left"><b>Remove</b></td>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">


                                        </tbody>
                                        <tfoot>

                                            <tr class="hidden-xs">
                                                <td colspan="5" class="text-end"><strong>Sub-Total:</strong></td>
                                                <td colspan="5" class="text-end" id="subTotal">0.00</td>
                                            </tr>
                                            <tr class="hidden-xs">
                                                <td colspan="5" class="text-end"><strong>Total:</strong></td>
                                                <td colspan="5" class="text-end" id="total">0.00</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <div class="buttons d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <a class="main-btn" href="{{ route('shop') }}">Continue Shopping</a>
                                <a class="main-btn" href="{{ route('checkout') }}">Checkout</a>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>







    </div>
@endsection
