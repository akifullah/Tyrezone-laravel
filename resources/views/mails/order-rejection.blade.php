<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Rejection Notification</title>
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
        <div class="header">Your Order #{{ $data['orderId'] }} Could Not Be Processed</div>
        <p>Dear {{ $data['c_name'] }},</p>
        <p>We regret to inform you that your order #{{ $data['orderId'] }} could not be processed. Unfortunately, due to
            [reason for
            rejection, e.g., "out-of-stock items," "payment issues," "shipping restrictions"], we are unable to complete
            your order at this time.</p>

       <div class="order-details">
            <strong>Order Summary:</strong>
            <ul>
                <li><strong>Order Number:</strong> {{ $data['orderId'] }}</li>
                <li><strong>Order Date:</strong> {{ $data['order_date'] }}</li>
                <li><strong>Total Amount:</strong> {{ $data['total_price'] }}</li>
            </ul>
        </div>

        <div class="order-details">
            <strong>Items Ordered:</strong>
            <ul>
                @foreach ($data['items'] as $item)
                    <li><strong>{{ $item->product->name }}</strong> - Quantity: {{ $item->qty }}, Price: {{ $item->product->price }}</li>
                @endforeach
                {{-- <li>2. <strong>[Product Name 2]</strong> - Quantity: [Qty], Price: [Price]</li> --}}
            </ul>
        </div>

        <p>If payment was made, a refund will be issued to your original payment method within [number of days] business
            days. You will receive a separate email confirmation once the refund is processed.</p>

        <p>We apologize for the inconvenience and appreciate your understanding. If you have any questions or need
            assistance, please feel free to contact our customer service team at [Customer Service Contact].</p>

        <p>Thank you for considering us, and we hope to serve you again in the future.</p>

        <div class="footer">
            <p>Best Regards,</p>
            <p>Tyrezone.com</p>
            <p><a href="[Website URL]" target="_blank">[Website URL]</a></p>
            <p>[Customer Service Contact]</p>
        </div>
    </div>
</body>

</html>
