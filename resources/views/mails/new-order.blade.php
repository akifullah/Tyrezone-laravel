<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order Notification</title>
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

        .order-details,
        .customer-details {
            margin-bottom: 20px;
        }

        .order-details ul,
        .customer-details ul {
            list-style: none;
            padding: 0;
        }

        .order-details li,
        .customer-details li {
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
        <div class="header">New Order Received: Order #{{ $data['orderId'] }}</div>
        <p>Dear Admin's,</p>
        <p>We are pleased to inform you that a new order has been placed on the website. Please find the details below:
        </p>

        <div class="order-details">
            <strong>Order Details:</strong>
            <ul>
                <li><strong>Order Number:</strong> {{ $data['orderId'] }}</li>
                <li><strong>Customer Name:</strong> {{ $data['c_name'] }}</li>
                <li><strong>Email:</strong> {{ $data['email'] }}</li>
                <li><strong>Phone Number:</strong> {{ $data['c_phone'] }}</li>
                <li><strong>Order Date:</strong> {{ $data['order_date'] }}</li>
                <li><strong>Shipping Address:</strong> {{ $data['shipping_address'] }}</li>
                <li><strong>Payment Method:</strong> {{ $data['payment_method'] }}</li>
                {{-- <li><strong>Payment Method:</strong> [Billing Address]</li> --}}
            </ul>
        </div>

        <div class="order-details">
            <strong>Items Ordered:</strong>
            <ol>
                @foreach ($data['items'] as $item)
                    <li><strong>{{ $item->product->name }}</strong> - Quantity: {{ $item->qty }}, Price: {{ $item->product->price }}</li>
                @endforeach
                {{-- <li><strong>[Product Name 2]</strong> - Quantity: [Qty], Price: [Price]</li> --}}
            </ol>
        </div>

        <div class="order-details">
            <strong>Total Amount:</strong> ${{ $data['total_price'] }}
        </div>

        <p>You can view and manage this order in the admin dashboard. Please process the order promptly and ensure the
            customer is notified about the status.</p>
        <p>If you have any questions, feel free to contact the customer directly using the details provided.</p>

        <p>Thank you for your attention.</p>

        <div class="footer">
            <p>Best Regards,</p>
            <p>Tyrezone</p>
            <p><a href="[Website URL]" target="_blank">[Website URL]</a></p>
        </div>
    </div>
</body>

</html>
