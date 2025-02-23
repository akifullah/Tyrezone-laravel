<?php

namespace App\Http\Controllers;

use App\Models\Patteren;
use App\Models\Product;
use Illuminate\Http\Request;

class PatterenController extends Controller
{
    function index($m_id, $id)
    {
        $patterensNavs = Patteren::where("manufacturer_id", $m_id)->with("products")->get();
        // return $patterensNavs;
        if (count($patterensNavs) == 0) {
            return abort(404);
        }

        $products = Product::where(["patteren_id" => $id, "manufacturer_id" => $m_id])->with("patteren", "manufacturer" , "images")->get();
        if (count($products) == 0) {
            return abort(404);
        }

        $names = Patteren::where("id", $id)->with("manufacturer")->first();
        return view("frontend.tyre-patteren", [
            "patterensNavs" => $patterensNavs,
            "products" => $products,
            "names" => $names
        ]);
    }
}
