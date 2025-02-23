<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

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

        $status = Password::sendResetLink(
            $request->only('email')
        );


        if ($status === Password::RESET_LINK_SENT) {
            session()->flash("success", "Please check your email to reset your password!");
        }

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
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
