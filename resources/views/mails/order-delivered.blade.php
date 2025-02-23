<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Delivered Notification</title>
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
        <div class="header">Your Order #{{ $data['orderId'] }} Has Been Delivered</div>
        <p>Dear {{ $data['c_name'] }},</p>
        <p>We are pleased to inform you that your order #{{ $data['orderId'] }} has been successfully delivered. We hope you enjoy your purchase and that it meets your expectations.</p>

        <div class="order-details">
            <strong>Order Summary:</strong>
            <ul>
                <li><strong>Order Number:</strong> {{ $data['orderId'] }}</li>
                <li><strong>Order Date:</strong> {{ $data['order_date'] }}</li>
                {{-- <li><strong>Total Amount:</strong> {{ $data['total_price'] }}</li> --}}
                <li><strong>Delivery Date:</strong> [Delivery Date]</li>
                <li><strong>Items Delivered:</strong></li>
                <ul>
                    @foreach ($data['items'] as $item)
                        <li><strong>{{ $item->product->name }}</strong> - Quantity: {{ $item->qty }}, Price:
                            {{ $item->product->price }}</li>
                    @endforeach
                </ul>
            </ul>
        </div>

        <div class="order-details">
            <strong>Delivery Address:</strong>  
            <p>{{ $data['shipping_address'] }}</p>
        </div>

        <p>If you have any questions, concerns, or feedback about your order, please don’t hesitate to reach out to our customer service team at [Customer Service Contact]. We’re here to help!</p>
        
        <p>Thank you for choosing [Your Website Name]. We look forward to serving you again in the future.</p>

        <div class="footer">
            <p>Best Regards,</p>
            <p>[Your Website Name]</p>
            <p><a href="[Website URL]" target="_blank">[Website URL]</a></p>
            <p>[Customer Service Contact]</p>
        </div>
    </div>
</body>
</html>
