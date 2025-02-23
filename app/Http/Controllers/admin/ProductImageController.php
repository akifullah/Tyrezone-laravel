<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    //

    function upload(Request $req)
    {

        $image = $req->image;

        $ext = $image->getClientOriginalExtension();
        $productImage = new ProductImage();
        $productImage->name = "null";
        $productImage->product_id = $req->product_id;
        $productImage->save();

        $imgName = $productImage->id . "-" . time() . "." . $ext;


        $productImage->name = $imgName;
        $productImage->save();

        $image->move(public_path("uploads/products/"), $imgName);

        return [
            "status" => true,
            "image_id" => $productImage->id,
            "image_path" => asset("uploads/products/" . $imgName)
        ];
    }
}
