<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invalid Order Notification</title>
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
        <div class="header">Your Order #{{ $data['orderId'] }} – Invalid Order Notification</div>
        <p>Dear {{ $data['c_name'] }},</p>
        <p>We regret to inform you that your order #{{ $data['orderId'] }} could not be processed because it has been marked as invalid. Unfortunately, due to [reason for invalidation, e.g., "incorrect payment information," "invalid shipping address," "order verification failure"], we are unable to complete your order at this time.</p>

        <div class="order-details">
            <strong>Order Summary:</strong>
            <ul>
               <li><strong>Order Number:</strong> {{ $data['orderId'] }}</li>
                <li><strong>Order Date:</strong> {{ $data['order_date'] }}</li>
                <li><strong>Items Attempted to Order:</strong></li>
                <ul>
                   @foreach ($data['items'] as $item)
                        <li><strong>{{ $item->product->name }}</strong> - Quantity: {{ $item->qty }}, Price:
                            {{ $item->product->price }}</li>
                    @endforeach
                </ul>
            </ul>
        </div>

        <p>If you believe this was a mistake or need assistance in correcting the issue, please contact our customer service team at [Customer Service Contact] as soon as possible. We’re here to help you resolve the situation and assist you with placing a new order if needed.</p>

        <p>We apologize for the inconvenience and appreciate your understanding.</p>

        <div class="footer">
            <p>Best Regards,</p>
            <p>[Your Website Name]</p>
            <p><a href="[Website URL]" target="_blank">[Website URL]</a></p>
            <p>[Customer Service Contact]</p>
        </div>
    </div>
</body>
</html>
