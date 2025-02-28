<?php

namespace App\Http\Controllers;

use App\Mail\NewOrderMail;
use App\Mail\OrderConfirmationMail;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\StripeSetting;
use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Session;

use Stripe;

class PaymentController extends Controller
{
    //

    function saveCart(Request $request)
    {
        // return response()->json([


        //     $request->input()
        // ]);
    }


    public function checkout()
    {
        $settings = StripeSetting::first();
        $stipeKey = "";
        if ($settings != "") {
            $stipeKey = $settings->stripe_publishable_key;
        }
        return view('frontend.checkout', ['stripe_publishable_key' => $stipeKey]);
    }

    public function stripePost(Request $request)

    {

        // return $request->all();


        $validator = Validator::make($request->all(), [
            "fname" => "required",
            "lname" => "required",
            "email" => "required",
            "phone" => "required",
            "reg_no" => "required",
            "post_code" => "required",
            "company" => "required",
            "address" => "required",
            "city" => "required",
            "state" => "required",
            "country" => "required",
        ]);

        if ($validator->passes()) {


            $order_id = Auth::user()->id . time();

            $orderDetail = new OrderDetail();
            $orderDetail->fname = $request->fname;
            $orderDetail->lname = $request->lname;
            $orderDetail->email = $request->email;
            $orderDetail->user_id = Auth::user()->id;
            $orderDetail->order_id = $order_id;
            $orderDetail->o_id = "null";
            $orderDetail->phone = $request->phone;
            $orderDetail->reg_no = $request->reg_no;
            $orderDetail->post_code = $request->post_code;
            $orderDetail->company = $request->company;
            $orderDetail->address = $request->address;
            $orderDetail->city = $request->city;
            $orderDetail->state = $request->state;
            $orderDetail->country = $request->country;
            $orderDetail->comments = $request->comments;
            $orderDetail->save();


            $order = new Order();
            $order->order_id = $order_id;
            $order->order_detail_id = $orderDetail->id;
            $order->user_id = Auth::user()->id;
            $order->order_status = "Pending";
            $order->total_price = $request->pay_amount;
            $order->payment_status = "";
            $order->save();

            $product_ids = $request->product_id;
            $qtys = $request->qty;

            foreach ($product_ids as $index => $product_id) {

                $orderItem = new OrderItem();
                $product = Product::find($product_id);
                $product->in_stock = $product->in_stock - $qtys[$index];
                $product->save();

                $orderItem->o_id = $order->id;
                $orderItem->order_id = $order_id;
                $orderItem->product_id = $product_id;
                $orderItem->qty = $qtys[$index];
                $orderItem->price = $product->price;
                $orderItem->vat_price = $product->vat_price;
                $orderItem->save();
            }

            if ($request->payment == "stripe") {
                $settings = StripeSetting::first();
                if ($settings) {
                    \Stripe\Stripe::setApiKey($settings->stripe_secret_key);
                }
                // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));



                Stripe\Charge::create([

                    "amount" => $request->pay_amount * 100,

                    "currency" => "eur",

                    "source" => $request->stripeToken,

                    "description" => "HEllo"

                ]);
                $order->payment_status = "Paid Online";
            } else {
                $order->payment_status = "Cash on Delivery";
            }

            $order->save();
            // if ($request->payment == "stripe") {


            //     $settings = StripeSetting::first();
            //     if ($settings) {
            //         \Stripe\Stripe::setApiKey($settings->stripe_secret_key);
            //     }
            //     // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));



            //     Stripe\Charge::create([

            //         "amount" => $request->pay_amount * 100,

            //         "currency" => "eur",

            //         "source" => $request->stripeToken,

            //         "description" => "HEllo"

            //     ]);


            //     // $order = new Order();
            //     // $order->order_id = $order_id;
            //     // $order->order_detail_id = $orderDetail->id;
            //     // $order->user_id = Auth::user()->id;
            //     // $order->order_status = "Pending";
            //     $order->payment_status = "Paid Online";
            //     // $order->total_price = $request->pay_amount;

            //     $order->save();


            //     // $product_ids = $request->product_id;
            //     // $qtys = $request->qty;
            //     // foreach ($product_ids as $index => $product_id) {

            //     //     $orderItem = new OrderItem();
            //     //     $product = OrderItem::find($product_id);
            //     //     $product->in_stock = $product->in_stock - $qtys[$index];
            //     //     $product->save();

            //     //     $orderItem->o_id = $order->id;
            //     //     $orderItem->order_id = $order_id;
            //     //     $orderItem->product_id = $product_id;
            //     //     $orderItem->qty = $qtys[$index];



            //     //     $orderItem->save();
            //     // }
            //     // session(["order_id" => $order_id]);

            //     // DB::table('orders')->insert($products);

            //     session()->flash('success', 'Payment Online successful!');
            //     // session()->flash('success', "Pay Online");
            //     return redirect()->route("thanks");
            // } else {



            //     // $orderDetailId = OrderDetail::where("user_id", Auth::user()->id)->first();

            //     // $order = new Order();
            //     // $order->order_id = $order_id;
            //     // $order->order_detail_id = $orderDetail->id;
            //     // $order->user_id = Auth::user()->id;
            //     // $order->order_status = "Pending";
            //     $order->payment_status = "Cash on Delivery";
            //     // $order->total_price = $request->pay_amount;

            //     $order->save();


            //     // $product_ids = $request->product_id;
            //     // $qtys = $request->qty;

            //     // // $products = [];
            //     // foreach ($product_ids as $index => $product_id) {

            //     //     $orderItem = new OrderItem();
            //     //     $product = Product::find($product_id);
            //     //     $product->in_stock = $product->in_stock - $qtys[$index];
            //     //     $product->save();

            //     //     $orderItem->o_id = $order->id;
            //     //     $orderItem->order_id = $order_id;
            //     //     $orderItem->product_id = $product_id;
            //     //     $orderItem->qty = $qtys[$index];
            //     //     $orderItem->save();

            //         // $products[] = [
            //         //     "order_id" => $order_id,
            //         //     "user_id" => Auth::user()->id,
            //         //     "order_detail_id" => $orderDetail->id,

            //         //     "total_price" => $request->pay_amount,
            //         // ];
            //     }
            // }

            // $order->save();


            $orderDetail->o_id = $order->id;
            $orderDetail->save();


            $orderItem = Order::where("order_id", $order_id)->with("orderDetail", "orderItem", "orderItem.product", "orderItem.product.images", "user")->first();
            // return $orderItem;

            $orderDetail = [
                "c_name" => $orderItem->user->fname . " " . $orderItem->user->lname,
                "c_phone" => $orderItem->user->phone,
                "email" => $orderItem->user->email,
                "items" => $orderItem->orderItem,
                "orderId" => $orderItem->order_id,
                "total_price" => $orderItem->total_price,
                "order_date" => $orderItem->created_at,
                "payment_method" => $orderItem->payment_status,
                "shipping_address" => $orderItem->orderDetail->address
            ];

            // return $orderItem;

            // $mailData = [

            // ];
            // Mail::to(Auth::user()->email)->send(new OrderConfirmationMail($orderDetail));
            // Mail::to("akifullah0317@gmail.com")->send(new NewOrderMail($orderDetail));

            session(["order_id" => $order_id]);
            // DB::table('orders')->insert($products);

            session()->flash('success', "Pay Delivery");
            return redirect()->route("thanks");
        } else {
            return redirect()->route("checkout")->withInput()->withErrors($validator);
        }
    }


    function orderDetail()
    {
        $orders = Order::where("user_id", Auth::user()->id)->with("orderDetail", "orderItem", "orderItem.product")->get();
        // $products = Order::where("user_id", Auth::user()->id)->with("product", "product.manufacturer", "product.patteren")->get();
        // $orders["products"] = $products;
        // return $orders;
        return view("frontend.orders", ["orders" => $orders]);
    }


    function thanks()
    {
        $orderId =  session("order_id");
        $orderDetail = Order::where("order_id", $orderId)->with("user", "orderItem", "orderDetail", "orderItem.product", "orderItem.product.images")->first();

        // return $orderDetail;

        return view("frontend.thanks-page", ["orders" => $orderDetail]);

        // $order = OrderItem::where("order_id", $orderId)->with("order")->get();
        // return $order;
        // session()->forget("order_id");
    }
}
