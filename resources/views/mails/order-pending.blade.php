<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Pending Notification</title>
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
        <div class="header">Your Order #{{ $data['orderId'] }} is Pending</div>
        <p>Dear {{ $data['c_name'] }},</p>
        <p>Thank you for placing an order with us! We wanted to let you know that your order #{{ $data['orderId'] }} is currently pending. This status means that your order is awaiting further processing due to [reason for pending status, e.g., "payment verification," "inventory check," "additional information needed"].</p>

        <div class="order-details">
            <strong>Order Summary:</strong>
            <ul>
                 <li><strong>Order Number:</strong> {{ $data['orderId'] }}</li>
                <li><strong>Order Date:</strong> {{ $data['order_date'] }}</li>
                <li><strong>Items Ordered:</strong></li>
                <ul>
                      @foreach ($data["items"] as $item)
                        <li><strong>{{ $item->product->name }} </strong>{{ $item->product->tyre_size . " " . strip_tags($item->product->description)  }}<br></li>
                    @endforeach
                </ul>
            </ul>
        </div>

        <p>We are working to resolve this issue as quickly as possible. If there is any action required on your part, our customer service team will reach out to you. In the meantime, if you have any questions or need assistance, please feel free to contact us at [Customer Service Contact].</p>

        <p>We appreciate your patience and will notify you as soon as the status of your order changes.</p>

        <div class="footer">
            <p>Best Regards,</p>
            <p>[Your Website Name]</p>
            <p><a href="[Website URL]" target="_blank">[Website URL]</a></p>
            <p>[Customer Service Contact]</p>
        </div>
    </div>
</body>
</html>
