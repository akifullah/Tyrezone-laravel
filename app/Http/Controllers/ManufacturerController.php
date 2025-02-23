<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Patteren;
use App\Models\Product;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    //
    function manufacturer($id)
    {
        $menufacturerName = Manufacturer::where("id", $id)->select("name")->first();
        $menufacturers = Manufacturer::with("products", "products.manufacturer",)->get();
        // return $menufacturers;
        $products = Product::where("manufacturer_id", $id)->with("patteren", "images", "manufacturer")->get();
        // return $products;
        if (count($products) == 0) {
            abort(404);
        }
        return view("frontend.manufacturers", [
            "products" => $products,
            "menufacturerName" => $menufacturerName,
            "menufacturers" => $menufacturers
        ]);
    }
}
