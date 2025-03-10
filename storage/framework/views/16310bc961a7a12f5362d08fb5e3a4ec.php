<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('thanks.css')); ?>">


</head>

<body>
    <div class="wrapper">
        <section class="thanks-wrapper">
            <div class="container">


                <div class="thanks text-center">
                    <img src="<?php echo e(asset('frontend/assets/imgs/checkmark.svg')); ?>" width="100px" alt="">
                    <h5>Thank You!</h5>
                    <p>Your order has been received successfully.</p>
                </div>


                <div class="order-banner">
                    <div class="row">
                        <div class="col-lg-7 col-md-10 mx-auto">
                            <h5 class="pb-1">Your Order is <span class="badge bg-warning  text-dark"
                                    style="background: #fdac04 !important; font-weight: 500; color:black">Received</span>
                            </h5>

                               
                            <div class="table-responsive">
                                <table class="table table-bordered order-table">
                                    <thead>
                                        <tr>
                                            <th>Order #</th>
                                            <th>Product Name</th>
                                            <th>Product Image</th>
                                            <th>Product Price</th>
                                            <th>Payment Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $orders->orderItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>#<?php echo e($order->order_id); ?></td>
                                                 <td><?php echo e($order->product->name); ?></td>
                                                <td>
                                                    <img src="<?php echo e(asset('uploads/products/' . $order->product->images[0]->name)); ?>"
                                                        width="40px" style="width: 50px;" alt="">
                                                </td>
                                                <td>$ <?php echo e($order->product->price); ?></td>
                                                <td><?php echo e($orders->payment_status); ?></td> 
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>

                            <h4>What happens next?</h4>
                            <p>One of our expert will call you in the next 20 minutes to confirm the order. Please make
                                sure you answer the call for swift solution.</p>

                            <div class="d-flex align-items-center justify-content-center  gap-2 flex-wrap mt-3">
                                <a href="<?php echo e(route('home')); ?>" class="main-btn sm">Go to Home</a>
                                <a href="<?php echo e(route('profile')); ?>" class="main-btn sm">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </section>
    </div>

    <script type="text/javascript">
        function preventbackbutton() {
            window.history.forward();
        }
        setTimeout("preventbackbutton()", 0);
        window.onunload = function() {
            null
        };
    </script>
    <script>
        let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
        if (cart != null) {
            localStorage.setItem("tyreZoneCart", JSON.stringify([]));
        }
    </script>

</body>

</html>
<?php /**PATH C:\Users\hy\Desktop\Tyrezone-laravel\resources\views/frontend/thanks-page.blade.php ENDPATH**/ ?>