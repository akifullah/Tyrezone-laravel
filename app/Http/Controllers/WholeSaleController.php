<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use App\Models\Patteren;
use App\Models\Product;
use App\Models\Size;
use App\Models\VehicleCategory;
use Illuminate\Http\Request;

class WholeSaleController extends Controller
{
    public function index(){
        $sizes = Size::get();
        $patterens = Patteren::get();
        $manufacturers = Manufacturer::with("products")->has("products")->get();
        $products = Product::with("manufacturer", "patteren", "images")->get();
        $vehicleCategory = VehicleCategory::with("products")->has("products")->get();
        // return $products;
        return view("frontend.wholesale", ["products" => $products, "patterens" => $patterens, "manufacturers" => $manufacturers, "sizes" => $sizes, "vehicleCategory" => $vehicleCategory]);
    }


    function filter(Request $req)
    {
        $sizes = Size::get();
        $patterens = Patteren::get();
        $manufacturers = Manufacturer::get();
        $vehicleCategory = VehicleCategory::with("products")->has("products")->get();

        $products = Product::query();
        if ($req->manufacturer != null) {
            $products->where("manufacturer_id", "$req->manufacturer");
        }

        if ($req->patteren != null) {
            $products->where("patteren_id", "$req->patteren");
        }
        if ($req->season_type != null) {
            $products->whereIn("season_type", $req->season_type);
        }
        if ($req->v_cat != null) {
            $products->whereIn("v_category", $req->v_cat);
        }
        if ($req->brand_category != null) {
            $products->whereIn("budget_tyre", $req->brand_category);
        }

        if ($req->size != null) {
            $products->where("tyre_size", "$req->size");
        }
        if ($req->run_flat != null) {
            $products->where("run_flat", "$req->run_flat");
        }
        $size = "";
        if ($req->width) {
            $size .= $req->width;
        }
        if ($req->profile) {
            $size .=  "/" . $req->profile;
        }
        if ($req->rim_size) {
            $size .=  " R" . $req->rim_size;
        }
        if ($req->speed) {
            $size .= " " . $req->speed;
        }
        if ($size) {
            $products->where("tyre_size", "like", "%$size%");
        }

        $products = $products->with("manufacturer", "patteren")->get();
        return view("frontend.wholesale", ["products" => $products, "patterens" => $patterens, "manufacturers" => $manufacturers, "sizes" => $sizes, "vehicleCategory" => $vehicleCategory]);
    }
    
}
