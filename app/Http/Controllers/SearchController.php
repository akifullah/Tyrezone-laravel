<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    function search(Request $req)
    {

        $sizes = Size::get();
        $qry = $req->width . "/" . $req->profile . " R" . $req->rim_size . " " . $req->speed;
        $products = Product::where("tyre_size", "like", "%$qry%")->with('images')->get();
        // return $products;
        return view("frontend.search", ["sizes" => $sizes, "products" => $products]);
    }
}
