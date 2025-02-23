<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\StripeSetting;
use App\Models\TyreProfile;
use App\Models\TyreRimsize;
use App\Models\TyreWidth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function index(){
        

        $widths = size::get();
        // return $widths;
        $sizes = Size::get();

        $settings = StripeSetting::first();
        if ($settings) {
            \Stripe\Stripe::setApiKey($settings->stripe_secret_key);
        }

        return view("frontend.index", get_defined_vars());
    }

   
    function getProfiles(Request $req){
        $profiles = TyreProfile::where("width_id", $req->id)->get();
        return response()->json([
            "profiles"=> $profiles,
        ]); 
    }
    
    
    function getRimSize(Request $req){
        $rimsizes = TyreRimsize::where("profile_id", $req->id)->get();
        return response()->json([
            "rim_sizes"=> $rimsizes,
        ]); 
    }
    

}
