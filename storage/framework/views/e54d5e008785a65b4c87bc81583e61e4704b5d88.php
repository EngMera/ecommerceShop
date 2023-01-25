
<?php $__env->startSection('title','User Profile'); ?>
    
<?php $__env->startSection('content'); ?>

            <div class="py-5 ">
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-md-10 mb-5">
                            <h4>User Profile
                                <a href="<?php echo e(url('change-password')); ?>" class="btn btn-primary btn-sm float-end">Change Password</a>
                            </h4>
                            <div class="underline"></div>
                        </div>
                        <div class="col-md-10">
                            <?php if(session('message')): ?>
                                <div class="alert alert-primary"><?php echo e(session('message')); ?></div>
                            <?php endif; ?>
                            <div class="card shadow">
                                <div class="card-header bg-primary">
                                    <h4 class="mb-0 text-white">User Details</h4>
                                 </div>
                                 <div class="card-body">
                                    <form action="<?php echo e(url('profile')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label>User Name</label>
                                                    <input type="text" name="username" value="<?php echo e(Auth::user()->name); ?>"  class="form-control"/>
                                                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label>Email Address</label>
                                                    <input type="text"  readonly  value="<?php echo e(Auth::user()->email); ?>" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label>Phone Number</label>
                                                    <input type="text" name="phone" value="<?php echo e(Auth::user()->userDetail->phone ?? ''); ?>"  class="form-control"/>
                                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label>Zip/Pin Code</label>
                                                    <input type="text" name="pin_code" value="<?php echo e(Auth::user()->userDetail->pin_code ?? ''); ?>"  class="form-control"/>
                                                    <?php $__errorArgs = ['zip_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label>Address</label>
                                                    <textarea type="text" name="address"  class="form-control" rows="3"><?php echo e(Auth::user()->userDetail->address ?? ''); ?> </textarea>
                                                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Save Data</button>
                                            </div>
                                        </div>
                                    </form>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/frontend/user/profile.blade.php ENDPATH**/ ?>