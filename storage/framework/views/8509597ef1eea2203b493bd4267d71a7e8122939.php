<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Invoice #6</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">MeraTech Ecommerce</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Invoice Id: #<?php echo e($order->id); ?></span> <br>
                    <span>Date: <?php echo e($order->created_at->format(' Y-m-d h:i A')); ?></span> <br>
                    <span>Zip code : <?php echo e($order->pincode); ?></span> <br>
                    <span>Address: <?php echo e($order->address); ?></span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Order Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Order Id:</td>
                <td><?php echo e($order->id); ?></td>

                <td>Full Name:</td>
                <td><?php echo e($order->fullname); ?></td>
            </tr>
            <tr>
                <td>Tracking Id/No.:</td>
                <td><?php echo e($order->tracking_no); ?></td>

                <td>Email Id:</td>
                <td><?php echo e($order->email); ?></td>
            </tr>
            <tr>
                <td>Ordered Date:</td>
                <td><?php echo e($order->created_at->format(' Y-m-d h:i A')); ?></td>

                <td>Phone:</td>
                <td><?php echo e($order->phone); ?></td>
            </tr>
            <tr>
                <td>Payment Mode:</td>
                <td><?php echo e($order->payment_mode); ?></td>

                <td>Address:</td>
                <td><?php echo e($order->address); ?></td>
            </tr>
            <tr>
                <td>Order Status:</td>
                <td><?php echo e($order->status_code); ?></td>

                <td>Pin code:</td>
                <td><?php echo e($order->pincode); ?></td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Order Items
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $totalAmount = 0;
            ?>
            <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td width="10%"><?php echo e($orderItem->id); ?></td>

                    <td >
                        <?php echo e($orderItem->product->name); ?>


                        <?php if( $orderItem->productColor): ?>
                            <br/>
                            <?php if($orderItem->productColor->color): ?>
                                <span style="color: #777;font-size:14px;font-weight:lighter" > - Color :  <?php echo e($orderItem->productColor->color->name); ?></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </td>
                    <td width="10%"><?php echo e($orderItem->price); ?></td>
                    <td width="10%"><?php echo e($orderItem->quantity); ?></td>
                    <td width="10%" class="fw-bold">$<?php echo e($orderItem->quantity * $orderItem->price); ?></td>
                    <?php
                        $totalAmount = $orderItem->quantity * $orderItem->price;
                    ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td colspan="4" class="fw-bold"> Total Amount: </td>
                <td colspan="1" class="fw-bold">$<?php echo e($totalAmount); ?></td>
            </tr>
        </tbody>
    </table>

    <br>
    <p class="text-center">
        Thank your for shopping with MeraTech
    </p>

</body>
</html><?php /**PATH C:\xampp\htdocs\quality\resources\views/admin/invoice/generate-invoice.blade.php ENDPATH**/ ?>