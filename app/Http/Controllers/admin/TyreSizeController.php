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


// app/Http/Controllers/Admin/TyreSizeController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TyreWidth;
use App\Models\TyreProfile;
use App\Models\TyreRimsize;
use App\Models\TyreSpeed;

class TyreSizeController extends Controller
{
    // Width
    public function widthIndex()
    {
        $widths = TyreWidth::all();
        return view('admin.tyre-sizes', compact('widths'));
    }
    public function widthStore(Request $request)
    {
        $request->validate(['width' => 'required|unique:tyre_widths,width']);
        TyreWidth::create(['width' => $request->width]);
        return back()->with('success', 'Width added!');
    }
    public function widthDelete(Request $request)
    {
        TyreWidth::findOrFail($request->id)->delete();
        return response()->json(['status' => true]);
    }

    // Profile
    public function profileIndex()
    {
        $profiles = TyreProfile::all();
        return view('admin.tyre-sizes', compact('profiles'));
    }
    public function profileStore(Request $request)
    {
        $request->validate(['profile' => 'required|unique:tyre_profiles,profile']);
        TyreProfile::create(['profile' => $request->profile]);
        return back()->with('success', 'Profile added!');
    }
    public function profileDelete(Request $request)
    {
        TyreProfile::findOrFail($request->id)->delete();
        return response()->json(['status' => true]);
    }

    // Rim Size
    public function rimsizeIndex()
    {
        $rimsizes = TyreRimsize::all();
        return view('admin.tyre-sizes', compact('rimsizes'));
    }
    public function rimsizeStore(Request $request)
    {
        $request->validate(['rim_size' => 'required|unique:tyre_rimsizes,rim_size']);
        TyreRimsize::create(['rim_size' => $request->rim_size]);
        return back()->with('success', 'Rim Size added!');
    }
    public function rimsizeDelete(Request $request)
    {
        TyreRimsize::findOrFail($request->id)->delete();
        return response()->json(['status' => true]);
    }

    // Speed
    public function speedIndex()
    {
        $speeds = TyreSpeed::all();
        return view('admin.tyre-sizes', compact('speeds'));
    }
    public function speedStore(Request $request)
    {
        $request->validate(['speed' => 'required|unique:tyre_speeds,speed']);
        TyreSpeed::create(['speed' => $request->speed]);
        return back()->with('success', 'Speed added!');
    }
    public function speedDelete(Request $request)
    {
        TyreSpeed::findOrFail($request->id)->delete();
        return response()->json(['status' => true]);
    }

    // Main index to render all
    public function index()
    {
        $widths = TyreWidth::all();
        $profiles = TyreProfile::all();
        $rimsizes = TyreRimsize::all();
        $speeds = TyreSpeed::all();
        return view('admin.tyre-sizes', compact('widths', 'profiles', 'rimsizes', 'speeds'));
    }
}



// class TyreSizeController extends Controller
// {
//     //

//     function index()
//     {
//         $widths = TyreWidth::get();
//         $profiles = TyreProfile::with("width")->get();
//         // return $profiles;
//         $rimSizes =  TyreRimsize::with("profile")->get();
//         // return $rimSizes;
//         $speeds = TyreSpeed::with("rimSize")->get();
//         // return $speeds;
//         $sizes = Size::all();
//         return view("admin.tyre-sizes", compact("sizes", "widths", "profiles", "rimSizes", "speeds"));
//     }

//     function add()
//     {
//         $width = TyreWidth::get();
//         $profiles = TyreProfile::get();
//         // return $profiles;
//         $rimSizes =  TyreRimsize::get();
//         // return $rimSize;
//         return view("admin.add-tyre-size", compact("width", "profiles", "rimSizes"));
//     }


//     function save(Request $req)
//     {
//         $validator = Validator::make($req->all(), [
//             "width" => "required",
//             "profile" => "required",
//             "rim_size" => "required",
//             "speed" => "required",
//         ]);

//         if ($validator->passes()) {
//             $size = new Size();
//             $size->width = $req->width;
//             $size->profile = $req->profile;
//             $size->rim_size = $req->rim_size;
//             $size->speed = $req->speed;
//             $size->save();
//             return redirect()->route("admin.tyreSize")->with("success", "New Tyre Size Added!");
//         } else {
//             return redirect()->back()->withInput()->withErrors($validator);
//         }
//     }


//     function edit($id)
//     {
//         $size = Size::findOrFail($id);

//         return view("admin.edit-tyre-size", ["size" => $size]);
//     }

//     function update($id, Request $req)
//     {
//         $validator = Validator::make($req->all(), [
//             "width" => "required",
//             "profile" => "required",
//             "rim_size" => "required",
//             "speed" => "required",
//         ]);

//         if ($validator->passes()) {
//             $size = Size::findOrFail($id);
//             $size->width = $req->width;
//             $size->profile = $req->profile;
//             $size->rim_size = $req->rim_size;
//             $size->speed = $req->speed;
//             $size->save();
//             return redirect()->route("admin.tyreSize")->with("success", "Tyre Size Updated!");
//         } else {
//             return redirect()->back()->withInput()->withErrors($validator);
//         }
//     }

//     function delete(Request $req)
//     {
//         $size = Size::where("id", $req->id)->delete();

//         if ($size) {
//             session()->flash("success", "Size Deleted!");
//             return response()->json([
//                 "status" => true
//             ]);
//         }
//     }
// }
