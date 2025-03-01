<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter Subscription - Tyrezone</title>
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
            text-align: center;
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

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 15px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Thank You for Subscribing!</h3>
        <p>Hello, <strong>{{ $email }}</strong>!</p>
        <p>You have successfully subscribed to the Tyrezone newsletter.</p>
        <p>Stay tuned for the latest updates, exclusive offers, and news from Tyrezone.</p>

        <a href="{{ config('app.url') }}" class="btn">Visit Our Website</a>

        <p class="footer">
            Best Regards,<br>
            Tyrezone Team<br>
            <a href="{{ config('app.url') }}" target="_blank">{{ config('app.url') }}</a>
        </p>
    </div>
</body>

</html>
