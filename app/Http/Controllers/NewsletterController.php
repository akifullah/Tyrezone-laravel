<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use App\Mail\NewsletterSignupMail;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        $subscriber = NewsletterSubscriber::create([
            'email' => $request->email,
        ]);

        // Send confirmation email
        Mail::to($request->email)->send(new NewsletterSignupMail($request->email));

        return response()->json(['message' => 'Thank you for subscribing!']);
    }
}
