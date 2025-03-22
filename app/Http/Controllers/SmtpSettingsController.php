<?php

namespace App\Http\Controllers;

use App\Models\SmtpSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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

        $this->updateEnvFile($request->all());
        return back()->with('success', 'SMTP settings updated successfully.');
    }



    private function updateEnvFile($data)
    {
        

        $envPath = base_path('.env');
        
        if (file_exists($envPath)) {
            file_put_contents($envPath, str_replace(
                [
                    'MAIL_MAILER=' .env('MAIL_MAILER'),
                    'MAIL_HOST=' .env('MAIL_HOST'),
                    'MAIL_PORT=' .env('MAIL_PORT'),
                    'MAIL_USERNAME=' .env('MAIL_USERNAME'),
                    'MAIL_PASSWORD=' .env('MAIL_PASSWORD'),
                    'MAIL_ENCRYPTION=' .env('MAIL_ENCRYPTION'),
                    'MAIL_FROM_ADDRESS=' .env('MAIL_FROM_ADDRESS'),
                    'MAIL_FROM_NAME="' .env('MAIL_FROM_NAME') . '"',
                ],
                [
                    'MAIL_MAILER=' . $data['mail_mailer'],
                    'MAIL_HOST=' . $data['mail_host'],
                    'MAIL_PORT=' . $data['mail_port'],
                    'MAIL_USERNAME=' . $data['mail_username'],
                    'MAIL_PASSWORD=' . $data['mail_password'],
                    'MAIL_ENCRYPTION=' . $data['mail_encryption'],
                    'MAIL_FROM_ADDRESS=' . $data['mail_from_address'],
                    'MAIL_FROM_NAME="' . $data['mail_from_name'],
                ],
                file_get_contents($envPath)
            ));

            Artisan::call('config:clear');
        }
    }
}
