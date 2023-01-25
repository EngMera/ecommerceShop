

<?php $__env->startSection('title','Users'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12 grid-margin">
            <?php if(session('message')): ?>
                <div class="alert alert-primary"><?php echo e(session('message')); ?></div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header  bg-primary d-flex justify-content-between ">
                    <h3 class="text-white mb-0">Users</h3>
                    <a href="<?php echo e(url('admin/users/create')); ?>" class="btn btn-light btn-sm ">
                        Add User
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td>
                                        <?php if($user->role_as == '0'): ?>
                                            <label class="badge btn-primary ">User</label>
                                        <?php elseif($user->role_as == '1'): ?>
                                            <label class="badge btn-warning text-black ">Admin</label>
                                        <?php else: ?>
                                            <label class="badge btn-danger ">None</label>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(url('admin/users/'.$user->id.'/edit')); ?>" 
                                            class="btn btn-primary btn-sm  text-white">
                                            Edit
                                        </a>
                                        <a href="<?php echo e(url('admin/users/'.$user->id.'/delete')); ?>" 
                                           onclick="return confirm('Are you sure you want to delete this data?') "
                                           class="btn btn-danger  btn-sm text-white">
                                           Delete
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5">No users Avaliable</td>
                                    </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <div>
                        <?php echo e($users->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/admin/users/index.blade.php ENDPATH**/ ?>