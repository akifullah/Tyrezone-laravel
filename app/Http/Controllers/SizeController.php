<?php

namespace App\Http\Controllers;

use App\Models\TyreProfile;
use App\Models\TyreRimsize;
use App\Models\TyreSpeed;
use App\Models\TyreWidth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class SizeController extends Controller
{
    //

    function storeWidth(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "width" => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $width = TyreWidth::where("width", $req->width)->first();

        if ($width) {
            return redirect()->back()->with("error", "Size already exists.");
        }
        $width = new TyreWidth();
        $width->width = $req->width;
        $width->save();
        return redirect()->back()->with("success", "Width Added!");
    }


    function storeProfile(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "profile" => "required|unique:tyre_profiles",
            "width_id" => "required"
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $profile = new TyreProfile();
        $profile->profile = $req->profile;
        $profile->width_id = $req->width_id;
        $profile->save();

        return redirect()->back()->with("success", "New Profile Added");
    }


    function storeRimSize(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "rim_size" => "required|unique:tyre_rimsizes",
            "profile_id" => "required"
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $rimSize = new TyreRimsize();
        $rimSize->rim_size = $req->rim_size;
        $rimSize->profile_id = $req->profile_id;
        $rimSize->save();
        return redirect()->back()->with("success", "New Rim Size Added");
    }


    function storeSpeed(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "speed" => "required|unique:tyre_speeds",
            "rim_id" => "required"
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $speed = new TyreSpeed();
        $speed->speed = $req->speed;
        $speed->rim_id = $req->rim_id;
        $speed->save();
        return redirect()->back()->with("success", "New Speed Added");
    }



    // DELETE WIDTH
    function deleteWidth(Request $req)
    {
        $width = TyreWidth::find($req->id);
        $delete =  $width->delete();

        if ($delete) {
            return response([
                "status" => true,
                "message" => "Deleted Successfully!"
            ]);
        } else {
            return response([
                "status" => false,
                "message" => "Something goes wrong!"
            ]);
        }
    }

    // DELETE PROFILE
    function deleteProfile(Request $req)
    {
        $profile = TyreProfile::find($req->id);
        $delete =  $profile->delete();

        if ($delete) {
            return response([
                "status" => true,
                "message" => "Deleted Successfully!"
            ]);
        } else {
            return response([
                "status" => false,
                "message" => "Something goes wrong!"
            ]);
        }
    }

    // DELETE PROFILE
    function deleteRimSize(Request $req)
    {
        $profile = TyreRimsize::find($req->id);
        $delete =  $profile->delete();

        if ($delete) {
            return response([
                "status" => true,
                "message" => "Deleted Successfully!"
            ]);
        } else {
            return response([
                "status" => false,
                "message" => "Something goes wrong!"
            ]);
        }
    }
   
    function deleteSpeed(Request $req)
    {
        $speed = TyreSpeed::find($req->id);
        $delete =  $speed->delete();

        if ($delete) {
            return response([
                "status" => true,
                "message" => "Deleted Successfully!"
            ]);
        } else {
            return response([
                "status" => false,
                "message" => "Something goes wrong!"
            ]);
        }
    }
}
