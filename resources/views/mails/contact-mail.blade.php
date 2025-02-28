<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission - Tyrezone</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Contact Form Submission - Tyrezone</h3>
        <p>Hello,</p>
        <p>Someone has submitted a contact request on Tyrezone.</p>

        <h4>Contact Details:</h4>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Message:</strong> {{ $data['message'] }}</p>

        <p class="footer">
            Thank you!<br>
            Tyrezone Team<br>
            <a href="{{ config('app.url') }}" target="_blank">{{ config('app.url') }}</a>
        </p>
    </div>
</body>

</html>
