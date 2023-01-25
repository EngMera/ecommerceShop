

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
      <?php if(session('message')): ?>
              <h2 class="alert alert-primary"> <?php echo e(session('message')); ?> </h2>
       <?php endif; ?>


      <div class="me-md-3 me-xl-5">
        <h2>Dashboard,</h2>
        <p class="mb-md-0">Your analytics dashboard template. </p>
        <hr>
      </div>

      <div class="row">

          <div class="col-md-3">
            <div class="card card-body bg-primary text-white mb-3 rounded">
                <label>Total Orders</label>
                <h4><?php echo e($totalOrders); ?></h4>
                <a href="<?php echo e(url('admin/orders')); ?>" class="text-white">view</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-success text-white mb-3 rounded">
                <label>Today Orders</label>
                <h4><?php echo e($todayOrders); ?></h4>
                <a href="<?php echo e(url('admin/orders')); ?>" class="text-white">view</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-warning text-white mb-3 rounded">
                <label>This Month Orders</label>
                <h4><?php echo e($thisMonthOrders); ?></h4>
                <a href="<?php echo e(url('admin/orders')); ?>" class="text-white">view</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-danger text-white mb-3 rounded">
                <label>This Year Orders</label>
                <h4><?php echo e($thisMonthOrders); ?></h4>
                <a href="<?php echo e(url('admin/orders')); ?>" class="text-white">view</a>
            </div>
          </div>
          <hr>

          

          <div class="col-md-3">
            <div class="card card-body bg-primary text-white mb-3 rounded">
                <label>Total All Users</label>
                <h4><?php echo e($totalAllUsers); ?></h4>
                <a href="<?php echo e(url('admin/users')); ?>" class="text-white">view</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-success text-white mb-3 rounded">
                <label>Total Admins</label>
                <h4><?php echo e($totalAdmins); ?></h4>
                <a href="<?php echo e(url('admin/users')); ?>" class="text-white">view</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-warning text-white mb-3 rounded">
                <label>Total Users</label>
                <h4><?php echo e($totalUsers); ?></h4>
                <a href="<?php echo e(url('admin/users')); ?>" class="text-white">view</a>
            </div>
          </div>
          <hr>

          <div class="col-md-3">
            <div class="card card-body bg-primary text-white mb-3 rounded">
                <label>Total Products</label>
                <h4><?php echo e($totalProducts); ?></h4>
                <a href="<?php echo e(url('admin/products')); ?>" class="text-white">view</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-body bg-success text-white mb-3 rounded">
                <label>Total Categories</label>
                <h4><?php echo e($totalCategories); ?></h4>
                <a href="<?php echo e(url('admin/category')); ?>" class="text-white">view</a>
            </div>
          </div>

          

      </div>

    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>