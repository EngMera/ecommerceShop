
<?php $__env->startSection('title','Thank You for Shopping '); ?>
    
<?php $__env->startSection('content'); ?>
  <div class="py-5 pyt-md-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php if(session('message')): ?>
                <h5 class="alert alert-primary">
                    <?php echo e(session('message')); ?>

                </h5>
                <?php endif; ?>
                <div class="p-4 shadow- bg-white rounded">
                    <h2>Your Logo</h2>
                <h4>Thank You for shopping with us</h4>
                <a href="<?php echo e(url('collections')); ?>" class="btn btn-primary my-3">Shop now</a>
                </div>
            </div>
        </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/frontend/thankyou.blade.php ENDPATH**/ ?>