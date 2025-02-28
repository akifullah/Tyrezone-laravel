<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Not Available Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .order-details {
            margin-bottom: 20px;
        }

        .order-details ul {
            list-style: none;
            padding: 0;
        }

        .order-details li {
            margin-bottom: 5px;
        }

        .footer {
            font-size: 12px;
            color: #888;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">Your Order #{{ $data['orderId'] }} – Items Not Available</div>
        <p>Dear {{ $data['c_name'] }},</p>
        <p>We regret to inform you that, unfortunately, some items in your order #{{ $data['orderId'] }} are currently
            not available.
            As a result, we are unable to fulfill your order at this time. We sincerely apologize for any inconvenience
            this may cause.</p>



        <div class="order-details">
            <strong>Order Summary:</strong>
            <ul>
                <li><strong>Order Number:</strong> {{ $data['orderId'] }}</li>
                <li><strong>Order Date:</strong> {{ $data['order_date'] }}</li>
                <li><strong>Unavailable Items:</strong></li>
                <ul>
                    @foreach ($data['items'] as $item)
                        <li><strong>{{ $item->product->name }}</strong> - Quantity: {{ $item->qty }}, Price:
                            {{ $item->product->price + $item->product->vat_price }}</li>

                        </li>
                    @endforeach
                </ul>
            </ul>
        </div>

        <p>If payment has already been made, a full refund will be issued to your original payment method within [number
            of days] business days. You will receive a separate confirmation email once the refund is processed.</p>

        <p>We understand this may be disappointing, and we apologize for not being able to meet your expectations on
            this occasion. If you have any questions or need assistance, please contact our customer service team at
            [Customer Service Contact].</p>

        <p>Thank you for your understanding, and we hope to serve you again in the future.</p>

        <div class="footer">
            <p>Best Regards,</p>
            <p>{{ config('app.name') }}</p>
            <p><a href="{{ config('app.url') }}" target="_blank">{{ config('app.url') }}</a></p>
            <p>[Customer Service Contact]</p>
        </div>
    </div>
</body>

</html>
