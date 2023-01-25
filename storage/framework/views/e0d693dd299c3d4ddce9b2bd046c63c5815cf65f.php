

<?php $__env->startSection('title','Users'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12 ">

            <div class="card">
                <div class="card-header  bg-primary d-flex justify-content-between ">
                    <h3 class="text-white mb-0">Add User</h3>
                    <a href="<?php echo e(url('admin/users')); ?>" class="btn btn-light btn-sm ">
                        Back
                    </a>
                </div>
                <div class="card-body">
                    <?php if($errors->any()): ?>
                        <ul class="alert alert-warning">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        
                    <?php endif; ?>
                    <form action="<?php echo e(url('admin/users')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label >Name</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label >Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label >Password</label>
                                <input type="text" name="password" class="form-control"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label >Select Role</label>
                                <select name="role_as" class="form-control">
                                    <option value="">Select Role</option>
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                </select>
                            </div>
                            <div class="col-md-12 text-end">
                                <button type="submit" class="btn btn-primary text-white">Save</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/admin/users/create.blade.php ENDPATH**/ ?>