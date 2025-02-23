<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\NotAvailable;
use App\Mail\OrderConfirmed;
use App\Mail\OrderDelivered;
use App\Mail\OrderInvalid;
use App\Mail\OrderPending;
use App\Mail\OrderRejection;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    //
    // SHOW ADMIN TYRE ORDERS PAGE
    function orders()
    {

        $orderDetail = Order::with("user", "orderItem", "orderDetail", "orderItem.product", "orderItem.product.images")->get();
        // return $orderDetail;
        
        // return $orders;
        
        // $orders = OrderDetail::with("user")->get();
        // $products = Order::with("product", "product.manufacturer", "product.patteren")->get();
        // $orders["products"] = $products;
        $rejectedOrder = Order::where("order_status", "Rejected")->get();
        $notAvailableOrder = Order::where("order_status", "Not Available")->get();
        $invalidOrder = Order::where("order_status", "Invalid")->get();
        $confirmOrder = Order::where("order_status", "Confirmed")->get();
        // return $confirmOrder;
        $pendingOrder = Order::where("order_status", "Pending")->get();
        $deliveredOrder = Order::where("order_status", "Delivered")->get();
        // return $pendindOrder;
        // $orders = Order::with("product","orderDetail", "orderDetail.user")->get();
        // $orders = Order::with("orderDetail")->get();
        // $products = Product::get();

        // $orders = OrderDetail::with("order", "order.orderDetail")->get();
        // return $orders;
        // $orders = Order::with("orderDetail", "product", "user")->get();
        // return $orders;
        
        // return $orders;
        return view("admin.orders", [
            // "products"=> $products,
            "orders"=> $orderDetail,
            "pendingOrder" =>$pendingOrder, 
            "confirmOrder" => $confirmOrder, 
            "invalidOrder" => $invalidOrder, 
            "rejectedOrder" => $rejectedOrder, 
            "notAvailableOrder" => $notAvailableOrder, 
            "deliveredOrder" => $deliveredOrder, 
    ]);

    }


    function orderStatus(Request $req){

       

        $order = Order::where("id", $req->id)->first();
        $order->order_status = $req->status;
        $order->save();


        $orderStatus = Order::where("order_id", $order->order_id)->with("orderDetail", "orderItem", "orderItem.product", "user")->first();


        $mailData = [
            "order_status"=> $req->status,
            "orderId" => $orderStatus->order_id,
            "c_name" => $orderStatus->user->fname ." " . $orderStatus->user->lname,
            "total_price"=> $orderStatus->total_price,
            "shipping_address"=> $orderStatus->orderDetail->address,
            "order_date"=> $orderStatus->created_at,
            "items"=> $orderStatus->orderItem,
        ];

        if($req->status == "Confirmed"){
            Mail::to($orderStatus->user->email)->send(new OrderConfirmed($mailData));
        }

        if ($req->status == "Not Available") {
            Mail::to($orderStatus->user->email)->send(new NotAvailable($mailData));
        }
        
        if ($req->status == "Rejected") {
            Mail::to($orderStatus->user->email)->send(new OrderRejection($mailData));
        }
        
        if ($req->status == "Delivered") {
            Mail::to($orderStatus->user->email)->send(new OrderDelivered($mailData));
        }

        if ($req->status == "Invalid") {
            Mail::to($orderStatus->user->email)->send(new OrderInvalid($mailData));
        }
        
        if ($req->status == "Pending") {
            Mail::to($orderStatus->user->email)->send(new OrderPending($mailData));
        }
        



        // return $orderStatus;
        
        return response()->json([
            $req->input()
        ]);
    }


    function deleteOrder(Request $req){
        $order = Order::find($req->id);

        if($order){
            $order->delete();
            session()->flash("succcess", "Order Deleted");
            return response()->json([
                "status"=> true,
                "message"=> "Order Deleted!"
            ]);
        }
    }
    
    
    
}
