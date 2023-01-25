
<?php $__env->startSection('title','My Order Details '); ?>
    
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <?php if(session('message')): ?>
            <div class="alert alert-primary mb-3">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>
        
        <div class="card">
            <div class="card-header bg-primary text-white ">
                <h3 >
                    <i class="ri-shopping-bag-3-fill"></i> My Order Details
                    <a href="<?php echo e(url('admin/orders')); ?>" class="btn btn-danger btn-sm float-end text-white">
                         <span class="ri-arrow-left-s-fill"></span>Back
                    </a>
                    <a href="<?php echo e(url('admin/invoice/'.$order->id.'/generate')); ?>" class="btn btn-light btn-sm float-end text-black mx-2">
                            <span  class="ri-download-2-line">  </span> Download Invoice
                    </a>
                    <a href="<?php echo e(url('admin/invoice/'.$order->id)); ?>" target="_blank" class="btn btn-warning btn-sm float-end  mx-2">
                            <span class="ri-eye-line"></span> View Invoice 
                    </a>
                    <a href="<?php echo e(url('admin/invoice/'.$order->id.'/mail')); ?>" class="btn btn-light btn-sm float-end text-black mx-2">
                            <span class="ri-mail-send-fill">  </span> Send Invoice Via Mail
                    </a>
                </h3>

            </div>
            <div class="card-body">
                        
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Order Details</h5>
                                <hr>
                                <h6>Order Id: <?php echo e($order->id); ?> </h6>
                                <h6>Tracking Id/No.: <?php echo e($order->tracking_no); ?> </h6>
                                <h6>Order Created Date: <?php echo e($order->created_at->format('d-m-y h:i A')); ?> </h6>
                                <h6>Payment Mode: <?php echo e($order->payment_mode); ?> </h6>
                                <h6 class="border p-2 text-primary">
                                    Order Status Message: <span class="text-uppercase"> <?php echo e($order->status_code); ?></span>
                                </h6>
                            </div>
                            <div class="col-md-6">
                                <h5>User Details</h5>
                                <hr>
                                <h6>Full Name: <?php echo e($order->fullname); ?> </h6>
                                <h6>Email Id: <?php echo e($order->email); ?> </h6>
                                <h6>Phone: <?php echo e($order->phone); ?> </h6>
                                <h6>Address: <?php echo e($order->address); ?> </h6>
                                <h6>Pin code: <?php echo e($order->pincode); ?> </h6>
                            </div>
                        </div>
                        <br/>
                        <h5>Order Items</h5>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="text-primary">
                                    <th>Item ID</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    <?php
                                        $totalAmount = 0;
                                    ?>
                                    <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td width="10%"><?php echo e($orderItem->id); ?></td>
                                            <td width="10%">
                                                <?php if($orderItem->product->productImage): ?>
                                                    <img src="<?php echo e(asset($orderItem->product->productImage[0]->image)); ?>" 
                                                        style="width: 50px; height: 50px"
                                                        alt="<?php echo e($orderItem->product->name); ?>">
                                                <?php else: ?>
                                                    <img src=""  style="width: 50px; height: 50px"alt="">
                                                <?php endif; ?>
                                            </td>
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
                                        <td colspan="5" class="fw-bold"> Total Amount: </td>
                                        <td colspan="1" class="fw-bold">$<?php echo e($totalAmount); ?></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4>Order Process (Order Status Updates)</h4>
                <hr>
                <div class="row">
                    <div class="col-md-5">
                        <form action="<?php echo e(url('admin/orders/'.$order->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <label>Update Your Order Status</label>
                            <div class="input-group">
                                <select name="order_status" class="form-select">
                                    <option value="">Select Order Status</option>
                                    <option value="in progress" <?php echo e(Request::get('status') == 'in progress' ? 'selected' : ''); ?>>In Progress </option>
                                    <option value="completed" <?php echo e(Request::get('status') == 'completed' ? 'selected' : ''); ?>>Completed</option>
                                    <option value="pending" <?php echo e(Request::get('status') == 'pending' ? 'selected' : ''); ?>>Pending</option>
                                    <option value="cancelled" <?php echo e(Request::get('status') == 'cancelled' ? 'selected' : ''); ?>>Cancelled</option>
                                    <option value="out-for-delivery" <?php echo e(Request::get('status') == 'out-for-delivery' ? 'selected' : ''); ?>>Out for Delivery</option>
                                </select>
                                <button type="submit" class="btn btn-primary text-white">Update</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-7">
                        <br>
                        <h4 class="mt-3">Current Order Status : <span class="text-uppercase"><?php echo e($order->status_code); ?></span></h4>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/admin/orders/view.blade.php ENDPATH**/ ?>