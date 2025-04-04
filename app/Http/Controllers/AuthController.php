<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //

    function signup()
    {
        return view("frontend.signup");
    }

    function register(Request $req)
    {
        $validator = Validator::make(
            $req->all(),
            [
                "fname" => "required|min:3",
                "lname" => "required",
                "email" => "required|email|unique:users",
                "phone" => "required|min:10|max:11",
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
            $user->role = base64_decode($req->role);
            $user->password = Hash::make($req->password);
            $user->save();
            return redirect()->route("login")->with("success", "Registration Successful!");
        } else {
            return redirect()->route("signup")->withInput()->withErrors($validator);
        }
    }


    function login()
    {
        return view("frontend.login");
    }
    function loginAuth(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "email" => "required|email",
            "password" => "required"
        ]);

        if ($validator->passes()) {

            $user = Auth::attempt(["email" => $req->email, "password" => $req->password]);


            if ($user) {
                return redirect()->route("profile");
            } else {
                return redirect()->route("login")->with("error", "Email or Password is incorrect!");
            }
        } else {
            return redirect()->route("login")->withInput()->withErrors($validator);
        }
    }

    function profile()
    {
        return view("frontend.user-dashboard");
    }

    function editProfile(){
        $user = User::find(Auth::user()->id);
        return view("frontend.edit-profile", get_defined_vars());
    }
    
    function updateProfile(Request $req){
        $user = User::find(Auth::user()->id);
        $user->fname = $req->fname;
        $user->lname = $req->lname;
        $user->phone = $req->phone;
        $user->city = $req->city ?? "";
        $user->post_code = $req->post_code ?? "";
        $user->address = $req->address ?? "";
        $user->company = $req->company ?? "";
        $user->state = $req->state ?? "";
        $user->country = $req->country ?? "";
        $save = $user->save();

        if($save){
            return redirect()->back()->with("success", "Profile updated!");
        }
    }
    


    function changePassword()
    {
        return view("frontend.user-change-password");
    }

    function udpatePassword(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "old_password" => "required",
            "password" => "required|min:3|confirmed",
            "password_confirmation" => "required|min:3"
        ]);



        if($validator->passes()){
            $user = User::where("id", Auth::user()->id)->get()->first();
            $oldPassMatched = Hash::check($req->old_password, $user->password);
            if($oldPassMatched){
                $user->password = Hash::make($req->password);
                $user->save();
                return redirect()->back()->with("success", "Password Changed Successfully!");
            }else{
                return redirect()->back()->with("error", "Old Password is not Matching!");
            }
        }else{
            return redirect()->back()->withInput()->withErrors($validator);
        }

       
    }


    function logout()
    {
        Auth::logout();
        return redirect()->route("home");
    }
}
