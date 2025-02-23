<?php

namespace App\Http\Controllers;

use App\Models\StripeSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StripeSettingController extends Controller
{
    //
    // Update the settings
    public function update(Request $request)
    {
        $request->validate([
            'stripe_publishable_key' => 'required|string',
            'stripe_secret_key' => 'required|string',
        ]);

        $settings = StripeSetting::first();
        if (!$settings) {
            $settings = new StripeSetting();
        }

        $settings->stripe_publishable_key = $request->input('stripe_publishable_key');
        $settings->stripe_secret_key = $request->input('stripe_secret_key');
        $settings->save();

        return redirect()->back()->with('success', 'Stripe API keys updated successfully.');
    }
}
