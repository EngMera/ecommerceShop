
<?php $__env->startSection('title','My Orders '); ?>
    
<?php $__env->startSection('content'); ?>

   <div class="py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                    <h4 class="mb-4">
                        My Orders
                    </h4>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Tracking No</th>
                                <th>Username</th>
                                <th>Payment Mode</th>
                                <th>Ordered Date</th>
                                <th>Status Message</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                 <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->tracking_no); ?></td>
                                    <td><?php echo e($item->fullname); ?></td>
                                    <td><?php echo e($item->payment_mode); ?></td>
                                    <td><?php echo e($item->created_at->format('d-m-y')); ?></td>
                                    <td><?php echo e($item->status_code); ?></td>
                                    <td><a href="<?php echo e(url('orders/'.$item->id)); ?>" class="btn btn-primary btn-sm text-white">View</a></td>
                                 </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="7">No Orders Available</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <div>
                            <?php echo e($orders->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/frontend/orders/index.blade.php ENDPATH**/ ?>