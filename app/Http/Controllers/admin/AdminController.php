<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\logo;
use App\Models\Manufacturer;
use App\Models\Order;
use App\Models\Patteren;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Size;
use App\Models\TempImage;
use App\Models\User;
use App\Models\VehicleCategory;
use Doctrine\Inflector\Rules\Pattern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    //
    function adminAuth(Request $req)
    {
        $user = Auth::attempt(["email" => $req->email, "password" => $req->password]);

        if ($user) {
            $role =  Auth::user()->role;

            if ($role == 1) {
                return redirect()->route("admin.dashboard");
            } else {
                Auth::logout();
                return redirect()->route("admin.login")->with("error", "Unauthorized access!");
            }
        } else {
            return redirect()->route("admin.login")->with("error", "Email or Password is Incorrect!");
        }
    }

    // CHANGE LOGO
    function changeLogo(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "logo" => "required|image"
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $preLogo = logo::first();

        if ($preLogo) {

            File::delete(public_path('uploads/logos/' . $preLogo->name));
            $preLogo->delete();
        }



        $image = $req->logo;
        $ext =  $image->getClientOriginalExtension();
        $imageName = time() . "." . $ext;

        $logo = new logo();
        $logo->name = $imageName;
        $logo->save();
        $image->move(public_path("/uploads/logos/"), $imageName);


        // $logo->move(public_path("/uploads/logos/"), $fileName);

        // $logo->move(public_path('uploads/logos/'), $fileName);

        return redirect()->back()->with("success", "Logo updated successfully!");
    }


    // SHOW ADMIN DASHBOARD
    function index()
    {

        $products = Product::with("patteren", "manufacturer")->get();
        $manufacturers = Manufacturer::get();
        $patterens = Patteren::with("manufacturer")->get();
        $users = User::select("id")->get();
        $orders = Order::select("id")->get();

        // return $patterens;

        return view("admin.dashboard", [
            "products" => $products,
            "manufacturers" => $manufacturers,
            "patterens" => $patterens,
            "users" => $users,
            "orders" => $orders,
        ]);
    }

    function profile()
    {
        return view("admin.profile");
    }


    // SHOW ADMIN PRODUCT PAGE
    function products()
    {
        $products = Product::with("manufacturer", "patteren", "images")->get();


        return view("admin.products", ["products" => $products]);
    }

    // SHOW ADMIN ADD PRODUCT FORM PAGE
    function addProduct()
    {
        $patterens = Patteren::orderBy("manufacturer_id")->with("manufacturer")->get();
        $manufacturers = Manufacturer::all();
        $vehicleCategories = VehicleCategory::all();

        $sizes = Size::all();

        return view("admin.add-product", [
            "manufacturers" => $manufacturers,
            "patterens" => $patterens,
            "sizes" => $sizes,
            "vehicleCategories" => $vehicleCategories
        ]);
    }

    // SAVE PRODUCT TO DATABSE
    function saveProduct(Request $req)
    {
        // return $req->all();


        $validator = Validator::make($req->all(), [
            "name" => "required",
            // "image" => "required|image",
            "manufacturer_id" => "required",
            // "patteren_id" => "required",
            "fuel_efficiency" => "required",
            "wet_grip" => "required",
            "road_noise" => "required",
            "tyre_size" => "required",
            // "width" => "required",
            // "profile" => "required",
            // "rim_size" => "required",
            // "speed" => "required",
            "load_index" => "required",
            "season_type" => "required",
            "price" => "required|numeric",
            "vat_price" => "numeric",
            "in_stock" => "required|numeric",

        ]);

        if ($validator->passes()) {
            // $image = $req->image;
            // $ext =  $image->getClientOriginalExtension();
            // $imageName = "1_" . time() . "." . $ext;

            // $imageName2 = "";
            // if ($req->image2 != null) {
            //     $image2 = $req->image2;
            //     $ext =  $image2->getClientOriginalExtension();
            //     $imageName2 = "2_" . time() . "." . $ext;
            // }
            // $imageName3 = "";
            // if ($req->image3 != null) {
            //     $image3 = $req->image3;
            //     $ext =  $image3->getClientOriginalExtension();
            //     $imageName3 = "3_" . time() . "." . $ext;
            // }

            $tyreSize = $req->tyre_size;

            // Explode by spaces to separate "145/45", "R15", and "H"
            $parts = explode(' ', $tyreSize);

            // Extract width and profile (split by "/")
            list($width, $profile) = explode('/', $parts[0]);

            // Extract rim size (remove "R")
            $rim = str_replace(
                'R',
                '',
                $parts[1]
            );
            // Extract speed rating (if exists)
            $speed = $parts[2] ?? null;




            $product = new Product();
            $product->name = $req->name;
            // $product->image = $imageName;
            // $product->image2 = $imageName2;
            // $product->image3 = $imageName3;
            $product->manufacturer_id = $req->manufacturer_id;
            $product->patteren_id = $req->patteren_id ? $req->patteren_id : null;
            $product->fuel_efficiency = $req->fuel_efficiency;
            $product->wet_grip = $req->wet_grip;
            $product->road_noise = $req->road_noise;
            $product->tyre_size = $req->tyre_size;
            $product->width = $width;
            $product->profile = $profile;
            $product->rim_size = $rim;
            $product->speed = $speed;
            $product->load_index = $req->load_index;
            $product->season_type = $req->season_type;
            $product->budget_tyre = $req->budget_tyre;
            $product->v_category = $req->v_category;
            $product->run_flat = $req->run_flat;
            $product->price = $req->price;
            $product->in_stock = $req->in_stock;
            $product->vat_price = $req->vat_price;
            $product->description = $req->description;

            $save = $product->save();

            if (!empty($req->img_id)) {
                foreach ($req->img_id as $img) {

                    $tempImage = TempImage::find($img);

                    $extArray = explode(".", $tempImage->name);
                    $ext = last($extArray);


                    $productImage = new ProductImage();
                    $productImage->name = "null";
                    $productImage->product_id = $product->id;
                    $productImage->save();

                    $imgName = $productImage->id . time() . "." . $ext;
                    $productImage->name = $imgName;
                    $productImage->save();

                    $sourcePath = public_path("temp/" . $tempImage->name);
                    $destPath = public_path("uploads/products/" . $imgName);

                    $isCopied = File::copy($sourcePath, $destPath);

                    if ($isCopied) {
                        File::delete($sourcePath);
                        $tempImage->delete();
                    }
                }
            }
            return redirect()->route("admin.products")->with("success", "New Product Added Successfully!");

            // if ($save) {
            //     $image->move(public_path("uploads/products/"), $imageName);
            //     if ($req->image2 != null) {
            //         $image2->move(public_path("uploads/products/"), $imageName2);
            //     }
            //     if ($req->image3 != null) {
            //         $image3->move(public_path("uploads/products/"), $imageName3);
            //     }
            // }
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }

    // FUNCTION GET PATTEREN BY MANUFACTURER
    function getPatteren(Request $req)
    {
        $patteren = Patteren::where("manufacturer_id", $req->id)->get();
        if ($patteren != "") {
            return response()->json([
                "status" => true,
                "manu_id" => $req->id,
                "patteren" => $patteren
            ]);
        }
    }



    // SHOW ADMIN EDIT PRODUCT PAGE
    function editProduct($id)
    {
        $product = Product::where("id", $id)->with("manufacturer", "patteren")->first();
        $productImage = ProductImage::where("product_id", $id)->get();
        // return $productImage;
        $manufacturers = Manufacturer::all();
        $patterens = Patteren::all();
        $sizes = Size::all();
        $vehicleCategories = VehicleCategory::all();

        return view("admin.edit-product", [
            "product" => $product,
            "images" => $productImage,
            "manufacturers" => $manufacturers,
            "patterens" => $patterens,
            "sizes" => $sizes,
            "vehicleCategories" => $vehicleCategories
        ]);
    }

    // UPDATE PRODUCT
    function updateProduct($id, Request $req)
    {
        $validator = Validator::make($req->all(), [
            "name" => "required",
            "image" => "image",
            "manufacturer_id" => "required",
            // "patteren_id" => "required",
            "fuel_efficiency" => "required",
            "wet_grip" => "required",
            "road_noise" => "required",
            "tyre_size" => "required",
            // "width" => "required",
            // "profile" => "required",
            // "rim_size" => "required",
            // "speed" => "required",
            "load_index" => "required",
            "season_type" => "required",
            "budget_tyre" => "required",
            "in_stock" => "required",
            "price" => "required",

        ]);

        if ($validator->passes()) {


            $tyreSize = $req->tyre_size;

            // Explode by spaces to separate "145/45", "R15", and "H"
            $parts = explode(' ', $tyreSize);

            // Extract width and profile (split by "/")
            list($width, $profile) = explode('/', $parts[0]);

            // Extract rim size (remove "R")
            $rim = str_replace(
                'R',
                '',
                $parts[1]
            );
            // Extract speed rating (if exists)
            $speed = $parts[2] ?? null;





            $product = Product::findOrFail($id);
            $product->name = $req->name;


            $product->manufacturer_id = $req->manufacturer_id;
            $product->patteren_id = $req->patteren_id ? $req->patteren_id : null;
            $product->fuel_efficiency = $req->fuel_efficiency;
            $product->wet_grip = $req->wet_grip;
            $product->road_noise = $req->road_noise;
            $product->tyre_size = $req->tyre_size;
            $product->width = $width;
            $product->profile = $profile;
            $product->rim_size = $rim;
            $product->speed = $speed;
            $product->load_index = $req->load_index;
            $product->season_type = $req->season_type;
            $product->budget_tyre = $req->budget_tyre;
            $product->v_category = $req->v_category;
            $product->run_flat = $req->run_flat;
            $product->in_stock = $req->in_stock;
            $product->vat_price = $req->vat_price;
            $product->price = $req->price;
            $product->description = $req->description;

            $save = $product->save();

            if ($save) {
                return redirect()->route("admin.products")->with("success", " Product Updated Successfully!");
            }
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }


    // DELETE PRODUCT IMAGE
    function deleteProductImage(Request $req)
    {
        $productImage = ProductImage::find($req->id);

        File::delete(public_path("uploads/products/" . $productImage->name));

        $productImage->delete();

        return [
            "status" => true,
        ];
    }


    // DELETE PRODUCT
    function deleteProduct(Request $req)
    {
        $product = Product::findOrFail($req->id);

        $deleteProuduct = Product::where("id", $req->id)->delete();

        if ($deleteProuduct) {
            File::delete(public_path("uploads/products/") . $product->image);
            File::delete(public_path("uploads/products/") . $product->image2);
            File::delete(public_path("uploads/products/") . $product->image3);
            session()->flash("success", "Product deleted!");
            return response()->json([
                "status" => true
            ]);
        }
    }


    // SHOW ADMIN MANUFACTURERS PAGE
    function manufacturers()
    {
        $manufacturers = Manufacturer::all();
        return view("admin.manufacturers", ["manufacturers" => $manufacturers]);
    }

    // SHOW ADD MANUFACTURERS FORM
    function addManufacturers()
    {
        return view("admin.add-manufacture");
    }
    // SAVE MANUFACTURERS FORM DATA
    function saveManufacturers(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "name" => "required",
            // "image"=> "image",
        ]);

        if ($validator->passes()) {

            $imageName = "";
            if ($req->image != null) {
                $image = $req->image;
                $ext =  $image->getClientOriginalExtension();
                $imageName = time() . "." . $ext;
                $image->move(public_path("/uploads/brands/"), $imageName);
            }


            $manufacturer = new Manufacturer();
            $manufacturer->name = $req->name;
            $manufacturer->excerpt = $req->excerpt;
            $manufacturer->description = $req->description;
            $manufacturer->image = $imageName;
            $manufacturer->save();
            return redirect()->route("admin.manufacturers")->with("success", "Manufacturer Added Successfully!");
        } else {
            return redirect()->route("admin.addManufacturers")->withErrors($validator);
        }
    }

    // SHOW EDIT MANUFACTURERS FORM
    function editManufacturers($id)
    {
        $manufacturer = Manufacturer::where("id", $id)->get()->first();

        if ($manufacturer) {
            return view("admin.edit-manufacture", ["manufacturer" => $manufacturer]);
        } else {
            return redirect()->route("admin.manufacturers")->with("error", "Manufacturer not found!");
        }
    }
    // SHOW EDIT MANUFACTURERS FORM
    function updateManufacturers(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "name" => "required"
        ]);

        if ($validator->passes()) {

            $manufacturer = Manufacturer::where("id", $req->id)->get()->first();
            if (!$manufacturer) {
                return redirect()->back()->with("Something Goes Wrong, please try again.");
            }

            if ($req->image == "") {
                $manufacturer->name = $req->name;
                $manufacturer->excerpt = $req->excerpt;
                $manufacturer->description = $req->description;
                $manufacturer->save();
                return redirect()->route("admin.manufacturers")->with("succes", "Manufacturer Updated!");
            } else {
                $manufacturer = Manufacturer::where("id", $req->id)->get()->first();


                File::delete(public_path("uploads/brands/") . $manufacturer->image);

                $image = $req->image;
                $ext =  $image->getClientOriginalExtension();
                $imageName = time() . "." . $ext;
                $manufacturer->name = $req->name;
                $manufacturer->excerpt = $req->excerpt;
                $manufacturer->description = $req->description;
                $manufacturer->image = $imageName;
                $manufacturer->save();

                $image->move(public_path("uploads/brands/"), $imageName);
                return redirect()->route("admin.manufacturers")->with("succes", "Manufacturer Updated!");
            }
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    function deleteManufacturers(Request $req)
    {
        $manufacturer = Manufacturer::where("id", $req->id)->get()->first();

        if (!$manufacturer) {
            session()->flash("error", "Manufacturer not found!");
            return response()->json([
                "status" => false
            ]);
        }

        File::delete(public_path("uploads/brands/") . $manufacturer->image);

        $deleteManu = Manufacturer::where("id", $req->id)->delete();

        if ($deleteManu) {
            session()->flash("success", "Manufacturer Deleted!");
            return response()->json([
                "status" => true
            ]);
        }
    }


    // SHOW ADMIN TYRE PATTEREN PAGE
    function tyrePatteren()
    {
        $patterens = Patteren::with("manufacturer")->get();
        return view("admin.tyre-patteren", ["patterens" => $patterens]);
    }


    // SHOW ADMIN ADD PATTEREN PAGE
    function addTyrePatteren()
    {
        $manufacturers = Manufacturer::all();
        return view("admin.add-patteren", ["manufacturers" => $manufacturers]);
    }

    // SHOW ADMIN Save PATTEREN PAGE
    function saveTyrePatteren(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "name" => "required",
            "manufacturer_id" => "required"
        ]);

        if ($validator->passes()) {

            $patteren = new Patteren();
            $patteren->name = $req->name;
            $patteren->manufacturer_id = $req->manufacturer_id;
            $patteren->save();
            return redirect()->route("admin.tyrePatteren");
        } else {
            return redirect()->back()->withErrors($validator);
        }

        // return view("admin.tyre-patteren");
    }

    // SHOW ADMIN EDIT PATTEREN PAGE
    function editTyrePatteren($id)
    {

        $manufacturers = Manufacturer::all();
        $patteren = Patteren::find($id);


        return view("admin.edit-patteren", ['manufacturers' => $manufacturers, 'patteren' => $patteren]);
    }

    // UDPATE
    function updateTyrePatteren(Request $req)
    {
        $patteren = Patteren::find($req->id);

        $patteren->name = $req->name;
        $patteren->manufacturer_id = $req->manu_id;
        $save = $patteren->save();

        if ($save) {
            session()->flash("success", "Patteren updated successfully!");
            return redirect()->route("admin.tyrePatteren");
        }
    }


    // DELETE PATTEREN
    function deleteTyrePatteren(Request $req)
    {
        $patteren = Patteren::findOrFail($req->id);

        if ($patteren) {
            $patteren = Patteren::where("id", $req->id)->delete();
            session()->flash("success", "Patteren Deleted!");
            return response()->json([
                "status" => true
            ]);
        }
    }




    // SHOW ADMIN ALL USERS PAGE
    function users()
    {
        $users = User::get();

        return view("admin.users", ["users" => $users]);
    }

    // SHOW ADMIN ADD USERS PAGE
    function addUser()
    {
        return view("admin.add-user");
    }

    function saveUser(Request $req)
    {
        $validator = Validator::make(
            $req->all(),
            [
                "fname" => "required|min:3",
                "lname" => "required",
                "email" => "required|email|unique:users",
                "phone" => "required|min:10|max:11",
                "role" => "required",
                "password" => "required|min:3|confirmed",
                "password_confirmation" => "required|min:3",
            ],
            [
                "fname.required" => "First Name is required.",
                "fname.min" => "First Name minimum should be 3 characters.",
                "lname.required" => "Last Name is required.",
                "email.required" => "Email is required.",
                "email.email" => "Email is required.",
                "email.unique" => "Email already exists.",
                "role.required" => "Please select a role.",
                "password.required" => "Password is required.",
                "password.min" => "Password minimum 3 characters long.",
                "password.confirmed" => "Password & confirm password are not matching.",
                "password_confirmation.required" => "Confirm Password is required.",
                "password_confirmation.min" => "Confirm Password minimum 3 characters long.",
            ]
        );


        if ($validator->passes()) {
            $user = new User();
            $user->fname = $req->fname;
            $user->lname = $req->lname;
            $user->email = $req->email;
            $user->phone = $req->phone;
            $user->role = $req->role;
            $user->password = Hash::make($req->password);
            $user->save();
            return redirect()->route("admin.users")->with("success", "New user added success fully!");
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }


    // SHOW ADMIN edit USERS PAGE
    function editUser($id)
    {
        $user = User::findOrFail($id);

        return view("admin.edit-user", ["user" => $user]);
    }

    function updateUser(Request $req)
    {

        $validator = Validator::make(
            $req->all(),
            [
                "fname" => "required|min:3",
                "lname" => "required",
                "email" => "required|email",
                "phone" => "required|min:10|max:11",
                "role" => "required",

            ],
            [
                "fname.required" => "First Name is required.",
                "fname.min" => "First Name minimum should be 3 characters.",
                "lname.required" => "Last Name is required.",
                "email.required" => "Email is required.",
                "email.email" => "Email is required.",
                "email.unique" => "Email already exists.",
                "role.required" => "Please select a role.",

            ]
        );


        if ($validator->passes()) {
            $user = User::where("id", $req->id)->first();
            $user->fname = $req->fname;
            $user->lname = $req->lname;
            $user->email = $req->email;
            $user->phone = $req->phone;
            $user->role = $req->role;
            if ($req->password != null) {
                $user->password = Hash::make($req->password);
            }
            if ($user->save()) {
                return redirect()->route("admin.users")->with("success", " User updated success fully!");
            }
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }

    function deleteUser(Request $req)
    {
        $user = User::findOrFail($req->id)->delete();

        if ($user) {
            session()->flash("success", "User Deleted!");
            return [
                "status" => true
            ];
        };

        session()->flash("error", "Somthing goes wrong!");
        return [
            "status" => false,
            "error" => "something goes wrong"
        ];
    }
}
