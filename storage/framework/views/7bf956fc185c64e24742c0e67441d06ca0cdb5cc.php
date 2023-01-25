

<?php $__env->startSection('content'); ?>
<div>
    <div class="row">
        <div class="col-md-12">
            <?php if(session('message')): ?>
                <div class="alert alert-primary">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h3> Create Color </h3>
                    <a href="<?php echo e(url('admin/colors')); ?>" class="btn btn-primary btn-sm text-white ">
                        Back
                    </a>
                </div>
                <div class="card-body">
                    <?php if($errors->any()): ?>
                    <div class="alert alert-warning">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div><?php echo e($error); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    
                <?php endif; ?>
                    <form action="<?php echo e(url('admin/colors/create')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label >Color Name</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label >Color Code</label>
                            <input type="text" name="code" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label >Status</label>
                            <input type="checkbox" name="status" style="width: 20px; height:20px;" />
                            <small style="font-size: 12px; color:#777;">Check=Hidden,Uncheck=Visible</small>
                        </div>
                        <div class="mb-3">
                            <button  type="Submit" class="btn btn-primary float-end text-white">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/admin/colors/create.blade.php ENDPATH**/ ?>