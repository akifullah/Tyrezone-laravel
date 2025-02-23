<?php

namespace App\Http\Controllers;

use App\Models\SmtpSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SmtpSettingsController extends Controller
{
    //
    public function update(Request $request)
    {
        $request->validate([
            'mail_mailer' => 'required',
            'mail_host' => 'required',
            'mail_port' => 'required',
            'mail_username' => 'required',
            'mail_password' => 'required',
            'mail_encryption' => 'required',
            'mail_from_address' => 'required|email',
            'mail_from_name' => 'required',
        ]);
        
        $smtpSetting = SmtpSetting::first();
        if (!$smtpSetting) {
            $smtpSetting = new SmtpSetting();
        }
        
        $smtpSetting->mail_mailer = $request->mail_mailer;
        $smtpSetting->mail_host = $request->mail_host;
        $smtpSetting->mail_port = $request->mail_port;
        $smtpSetting->mail_username = $request->mail_username;
        $smtpSetting->mail_password = $request->mail_password;
        $smtpSetting->mail_encryption = $request->mail_encryption;
        $smtpSetting->mail_from_address = $request->mail_from_address;
        $smtpSetting->mail_from_name = $request->mail_from_name;
        $smtpSetting->save();

        return back()->with('success', 'SMTP settings updated successfully.');
    }
}
