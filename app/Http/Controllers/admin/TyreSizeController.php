<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use App\Models\TyreProfile;
use App\Models\TyreRimsize;
use App\Models\TyreSpeed;
use App\Models\TyreWidth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class TyreSizeController extends Controller
{
    //

    function index()
    {
        $widths = TyreWidth::get();
        $profiles = TyreProfile::with("width")->get();
        // return $profiles;
        $rimSizes =  TyreRimsize::with("profile")->get();
        // return $rimSizes;
        $speeds = TyreSpeed::with("rimSize")->get();
        // return $speeds;
        $sizes = Size::all();
        return view("admin.tyre-sizes", compact("sizes", "widths", "profiles", "rimSizes", "speeds"));
    }

    function add()
    {
        $width = TyreWidth::get();
        $profiles = TyreProfile::get();
        // return $profiles;
        $rimSizes =  TyreRimsize::get();
        // return $rimSize;
        return view("admin.add-tyre-size", compact("width", "profiles", "rimSizes"));
    }


    function save(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "width" => "required",
            "profile" => "required",
            "rim_size" => "required",
            "speed" => "required",
        ]);

        if ($validator->passes()) {
            $size = new Size();
            $size->width = $req->width;
            $size->profile = $req->profile;
            $size->rim_size = $req->rim_size;
            $size->speed = $req->speed;
            $size->save();
            return redirect()->route("admin.tyreSize")->with("success", "New Tyre Size Added!");
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }


    function edit($id)
    {
        $size = Size::findOrFail($id);

        return view("admin.edit-tyre-size", ["size" => $size]);
    }

    function update($id, Request $req)
    {
        $validator = Validator::make($req->all(), [
            "width" => "required",
            "profile" => "required",
            "rim_size" => "required",
            "speed" => "required",
        ]);

        if ($validator->passes()) {
            $size = Size::findOrFail($id);
            $size->width = $req->width;
            $size->profile = $req->profile;
            $size->rim_size = $req->rim_size;
            $size->speed = $req->speed;
            $size->save();
            return redirect()->route("admin.tyreSize")->with("success", "Tyre Size Updated!");
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }

    function delete(Request $req)
    {
        $size = Size::where("id", $req->id)->delete();

        if ($size) {
            session()->flash("success", "Size Deleted!");
            return response()->json([
                "status" => true
            ]);
        }
    }
}
