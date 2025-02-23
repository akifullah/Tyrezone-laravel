<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //
    function submit(Request $req){
        $validator = Validator::make($req->all(), [
            "name"=> "required|min:3",
            "email"=> "required|email",
            "phone"=> "required|numeric",
            "message"=> "required"
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $mailData = [
            "name"=> $req->name,
            "email"=> $req->email,
            "phone"=> $req->phone,
            "message"=> $req->message,
        ];

        $mail = Mail::to("akifullah0317@gmail.com")->send(new ContactMail($mailData));
        if($mail){
            return redirect()->back()->with("success", "Hello $req->name, thank you for reaching out to Tyrezone. A member of our team will contact you shortly with more information.");
        }
        
    }
}
