

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
                    <h3> Color List</h3>
                    <a href="<?php echo e(url('admin/colors/create')); ?>" class="btn btn-primary btn-sm text-white ">
                        Add Color
                    </a>
                </div>
                <div class="card-body">
                    <table class=" table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Color Name</th>
                                <th>Color Code</th>
                                <th>Color Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($color->id); ?></td>
                                    <td><?php echo e($color->name); ?></td>
                                    <td><?php echo e($color->code); ?></td>
                                    <td><?php echo e($color->status ? 'Hidden' : 'Visible'); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('admin/colors/'.$color->id.'/edit')); ?>" class="btn btn-primary btn-sm text-white">Edit</a>
                                        <a href="<?php echo e(url('admin/colors/'.$color->id.'/delete')); ?>" onclick="return confirm('Are you sure you want to delete this data ?')" class="btn btn-danger btn-sm text-white">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/admin/colors/index.blade.php ENDPATH**/ ?>