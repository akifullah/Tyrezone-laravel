<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Patteren;
use App\Models\Product;
use App\Models\Size;
use App\Models\VehicleCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //

    function index()
    {



        $sizes = Size::get();
        $patterens = Patteren::get();
        $manufacturers = Manufacturer::with("products")->has("products")->get();
        $products = Product::with("manufacturer", "patteren", "images")->get();
        $vehicleCategory = VehicleCategory::with("products")->has("products")->get();
        // return $vehicleCategory;
        return view("frontend.shop", ["products" => $products, "patterens" => $patterens, "manufacturers" => $manufacturers, "sizes" => $sizes, "vehicleCategory" => $vehicleCategory]);
    }

    function shopDetail($id){

        $product = Product::where("id", $id)->with("manufacturer", "patteren", "images")->first();
        if(!$product){
            return abort(404);
        }
        $relatedProduct = Product::where("id", "!=", $product?->id)
        // ->where("tyre_size", "like", "%$product->width" . " " . " $product->profile%")
        ->where(["manufacturer_id" => $product->manufacturer_id ])->with("images")->get();
        return view("frontend.shop-detail", ["product"=> $product, "relatedProducts"=> $relatedProduct]);
    }

    function search(Request $req)
    {
        $sizes = Size::get();
        $patterens = Patteren::get();
        $manufacturers = Manufacturer::get();
        $vehicleCategory = VehicleCategory::with("products")->has("products")->get();

        // $products = Product::where("manufacturer_id", $req->manufacturer)->with("manufacturer", "patteren")->with("manufacturer", "patteren")->get();

        $products = Product::query();
        if ($req->manufacturer != null) {
            $products->where("manufacturer_id", "$req->manufacturer");
        }
        
        if ($req->patteren != null) {
            $products->where("patteren_id", "$req->patteren");
        }
        if ($req->v_cat != null) {
            $products->where("v_category", "$req->v_cat");
        }
        if ($req->size != null) {
            $products->where("tyre_size", "$req->size");
        }
        $products = $products->with("manufacturer", "patteren")->get();

        return view("frontend.shop", ["products" => $products, "patterens" => $patterens, "manufacturers" => $manufacturers, "sizes" => $sizes, "vehicleCategory" => $vehicleCategory]);
    }
}
