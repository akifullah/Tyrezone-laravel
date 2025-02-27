<!DOCTYPE html>
<html>

<head>
    <title>Password Reset Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .button {
            display: inline-block;
            padding: 10px 15px;
            background: #007bff;
            color: white !important;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Password Reset Request</h2>
        <p>Hello,</p>
        <p>You recently requested to reset your password. Click the button below to proceed:</p>
        <p style="text-align: center;">
            <a href="{{ route('password.reset', $data['token']) }}" class="button ">Reset Password</a>
        </p>
        <p>If you didn't request this, you can safely ignore this email.</p>
        <p>For security reasons, this link will expire in 60 minutes.</p>
        <p>Thank you,<br> <strong>{{ config('app.name') }}</strong></p>

        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
