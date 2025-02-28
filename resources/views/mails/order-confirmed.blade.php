<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
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
        <div class="header">Your Order #{{ $data['orderId'] }} Has Been Confirmed</div>
        <p>Dear {{ $data['c_name'] }},</p>
        <p>We are pleased to inform you that your order #{{ $data['orderId'] }} has been confirmed! Our team is now
            processing your order, and it will be shipped soon. Here are the details of your confirmed order:</p>

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
                    <li><strong>{{ $item->product->name }}</strong> - Quantity: {{ $item->qty }}, Price:
                    </li>
                    {{ $item->product->price + $item->product->vat_price }}</li>
                @endforeach
                {{-- <li>2. <strong>[Product Name 2]</strong> - Quantity: [Qty], Price: [Price]</li> --}}
            </ul>
        </div>

        <div class="order-details">
            <strong>Shipping Details:</strong>
            <ul>
                <li><strong>Shipping Address:</strong> {{ $data['shipping_address'] }}</li>
                <li><strong>Estimated Delivery Date:</strong> within & days.</li>
            </ul>
        </div>

        <p>You can track your order's progress through your account on our website. We will also send you updates as
            your order moves through the shipping process.</p>
        <p>If you have any questions or need further assistance, please feel free to reply to this email or contact our
            customer service team at Tyrezone@gmail.com .</p>

        <p>Thank you for shopping with us!</p>

        <div class="footer">
            <p>Best Regards,</p>
            <p>{{ config('app.name') }}</p>
            <p><a href="{{ config('app.url') }}" target="_blank">{{ config('app.url') }}</a></p>
            <p>[Customer Service Contact]</p>
        </div>
    </div>
</body>

</html>
