<?php

namespace App\Http\Controllers;

use App\Mail\ForgetPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    //
    function showLinkRequestForm()
    {
        return view("frontend.forget-password");
    }


    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where("email", $request->email)->first();
        if (!$user) {
            session()->flash("error", "User not found!");
        }

        $token = Str::random(64);

        // Store the token in the database
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            ['token' => Hash::make($token), 'created_at' => now()]
        );

        $mailData = [
            "token" => $token,
            "email" => $request->email
        ];
        Mail::to($request->email)->send(new ForgetPasswordMail($mailData));

        return redirect()->back()->with("success", 'We have emailed your password reset link!');

        // $status = Password::sendResetLink(
        //     $request->only('email')
        // );


        // if ($status === Password::RESET_LINK_SENT) {
        //     session()->flash("success", "Please check your email to reset your password!");
        // }

        // return $status === Password::RESET_LINK_SENT
        //     ? back()->with(['status' => __($status)])
        //     : back()->withErrors(['email' => __($status)]);
    }

    // Show the form to reset the password
    public function showResetForm($token)
    {
        return view('frontend.reset-password', ['token' => $token]);
    }

    // Handle resetting the password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->password = bcrypt($password);
                $user->save();
            }
        );
        if ($status === Password::PASSWORD_RESET) {
            session()->flash("success", "Password reseted Successfully!");
        } else {
            session()->flash("error", "Somethig went wrong! Please try again later.");
        }

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
