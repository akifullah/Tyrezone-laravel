<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TempImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TempImageController extends Controller
{
    //
    function store(Request $req)
    {
        $image = $req->image;

        $ext = $image->getClientOriginalExtension();

        $tempImage = new TempImage();
        $tempImage->name = "null";
        $tempImage->save();


        $imgName = $tempImage->id . "-" . time() . "." . $ext;

        $tempImage->name = $imgName;

        $tempImage->save();

        $image->move(public_path("temp/"), $imgName);

        return response([
            "status"=> true, 
            "image_id"=> $tempImage->id,
            "image_path"=> asset("temp/" . $imgName)
        ]);
        
        
    }

    function destroy(Request $req){
        $tempImage = TempImage::find($req->id);

        File::delete(public_path("temp/".$tempImage->name));

        $tempImage->delete();

        return [
            "status"=> true,
        ];
    }
    
    
}
