<div>
    <!-- Delete Modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Category Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyCategory">
                    <div class="modal-body">
                        <h6>Are you sure you want to delete this data?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary text-white"> Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php if(session('message')): ?>
                <div class="alert alert-primary"><?php echo e(session('message')); ?></div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h3>Category</h3>
                    <a href="<?php echo e(url('admin/category/create')); ?>" class="btn btn-primary btn-sm text-white ">Add Category</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($category->id); ?></td>
                                <td><?php echo e($category->name); ?></td>
                                <td><?php echo e($category->status == '1' ? 'hidden' : 'visible'); ?></td>
                                <td>
                                    <a href="<?php echo e(url('admin/category/'.$category->id.'/edit')); ?>" class="btn btn-primary text-white">Edit</a>
                                    <a href="#" wire:click="deleteCategory(<?php echo e($category->id); ?>)" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div>
                        <?php echo e($categories->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startPush('script'); ?>
    <script>
        window.addEventListener('close-modal', event =>{
            $('#deleteModal').modal('hide');
        });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/livewire/admin/category/index.blade.php ENDPATH**/ ?>