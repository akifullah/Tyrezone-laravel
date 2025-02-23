<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <div class="puco-note puco-note--blue">
        <p
            class="puco-text puco-text--display-block puco-text--size-m puco-text--weight-normal puco-text--no-spacing puco-note__title">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#0070D6"
                class="puco-icon puco-icon-xs puco-note__title__icon">
                <path
                    d="m5.867 6.75 5.28 4.928a1.25 1.25 0 0 0 1.706 0l5.28-4.928zM19.25 7.76l-5.374 5.015a2.75 2.75 0 0 1-3.752 0L4.75 7.759V17c0 .138.112.25.25.25h14a.25.25 0 0 0 .25-.25zM3.25 7c0-.966.784-1.75 1.75-1.75h14c.966 0 1.75.784 1.75 1.75v10A1.75 1.75 0 0 1 19 18.75H5A1.75 1.75 0 0 1 3.25 17z">
                </path>
            </svg>Order confirmation from Tyrezone
        </p>
        <div class="puco-note__content">
            <div class="puco-text text_textBlock__eIg5q">
                <p class="puco-text">Dear {{ $orderDetail['c_name'] }},<br><br>Thank you for placing an order with [your
                    company
                    name]. We are pleased to confirm the receipt of your order #{{ $orderDetail['orderId'] }}, dated
                    {{ $orderDetail["order_date"]  }}.<br><br>

                    <p>Your order is pending, Once is confirm you will receive a confirmation mail. </p>
                    
                    Order details:<br><br>
                <ul>

                    @foreach ($orderDetail["items"] as $item)
                        <li><strong>{{ $item->product->name }} </strong>{{ $item->product->tyre_size . " " . strip_tags($item->product->description)  }}<br></li>
                    @endforeach
                </ul>


                <br><strong>Total Amount: </strong>{{ $orderDetail['total_price'] }}<br><br><strong>Delivery
                    Address:</strong> {{ $orderDetail['shipping_address'] }}<br><br><strong>Estimated Delivery:</strong>
                in 7 days.<br><br>Your order is now being processed and we will ensure its prompt dispatch. You will
                receive a notification once your order has been shipped.<br><br>We appreciate the trust you have
                placed in us and aim to provide you with the highest quality of service. If you have any questions
                or need further assistance, please do not hesitate to contact our customer service team at
                Tyrezone@gmail.com or 879123479.
                </p>
                <p class="puco-text">Thank you for choosing Tyrezone. We value your business and look forward
                    to serving you again.<br><br>Warm regards,<br><br>[Your company’s name and signature]<br>[Company
                    contact details]</p>
            </div>
        </div>
    </div>

</body>

</html>
