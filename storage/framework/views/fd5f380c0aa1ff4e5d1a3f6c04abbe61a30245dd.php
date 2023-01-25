

<?php $__env->startSection('title','Admin Settings'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12 grid-margin">
            <?php if(session('message')): ?>
                <div class="alert alert-primary"><?php echo e(session('message')); ?></div>
            <?php endif; ?>
            <form action="<?php echo e(url('/admin/settings')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="card mb-3">
                    <div class="card-header bg-primary">
                        <h3 class="text-white mb-0">Website</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Website Name</label>
                                <input type="text" name="website_name" class="form-control" value="<?php echo e($setting->name ?? ''); ?>"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Website Url</label>
                                <input type="text" name="website_url" class="form-control" value="<?php echo e($setting->website_url ?? ''); ?>"/>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Page Title </label>
                                <input type="text" name="title" class="form-control"value="<?php echo e($setting->title ?? ''); ?>"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Meta Keyword</label>
                                <textarea name="meta_keyword" class="form-control" rows="3"><?php echo e($setting->meta_keyword ?? ''); ?></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Meta Description</label>
                                <textarea  name="meta_description" class="form-control" rows="3"><?php echo e($setting->meta_description ?? ''); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary">
                        <h3 class="text-white mb-0">Website - Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>Address</label>
                                <textarea name="address" class="form-control" rows="3"><?php echo e($setting->address ?? ''); ?></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Phone 1 *</label>
                                <input type="text" name="phone1" class="form-control" value="<?php echo e($setting->phone1 ?? ''); ?>"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Phone No. 2</label>
                                <input type="text" name="phone2" class="form-control" value="<?php echo e($setting->phone2 ?? ''); ?>"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Email Id 1 *</label>
                                <input type="text" name="email1" class="form-control" value="<?php echo e($setting->email1 ?? ''); ?>"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Email Id No. 2</label>
                                <input type="text" name="email2" class="form-control" value="<?php echo e($setting->email2 ?? ''); ?>"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary">
                        <h3 class="text-white mb-0">Website - Social Media</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Facebook (Optional)</label>
                                <input type="text" name="facebook" class="form-control" value="<?php echo e($setting->facebook ?? ''); ?>"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Twitter (Optional)</label>
                                <input type="text" name="twitter" class="form-control" value="<?php echo e($setting->twitter ?? ''); ?>"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Instagram (Optional)</label>
                                <input type="text" name="instagram" class="form-control" value="<?php echo e($setting->instagram ?? ''); ?>"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>YouTube (Optional)</label>
                                <input type="text" name="youtube" class="form-control" value="<?php echo e($setting->youtube ?? ''); ?>"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary text-white">Save Settings</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/admin/settings/index.blade.php ENDPATH**/ ?>