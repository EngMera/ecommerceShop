
<?php $__env->startSection('title','Featured'); ?>
    
<?php $__env->startSection('content'); ?>

            <div class="py-5 ">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12 mb-5">
                        <h4>Featured</h4>
                        <div class="underline"></div>
                        </div>
                        <?php $__empty_1 = true; $__currentLoopData = $featuredProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-md-3">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <label class="stock bg-primary">Featured</label>
                                        <?php if($productItem->productImage->count() > 0): ?>
                                            <a href="<?php echo e(url('/collections/'.$productItem->category->slug.'/'.$productItem->slug )); ?>">
                                            <img src="<?php echo e(asset($productItem->productImage[0]->image)); ?>" alt="<?php echo e($productItem->name); ?>" style="width:300px; height:300px; max-width:100%;">
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="product-card-body">
                                        <h5 class="product-name">
                                            <a href="<?php echo e(url('/collections/'.$productItem->category->slug.'/'.$productItem->slug )); ?>">
                                                    <?php echo e($productItem->name); ?>

                                            </a>
                                        </h5>
                                        <div>
                                            <span class="selling-price">$<?php echo e($productItem->selling_price); ?></span>
                                            <span class="original-price">$<?php echo e($productItem->original_price); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="col-md-12 p-2">
                                <h4>No Products Available</h4>
                            </div>
                        <?php endif; ?>
                        <div class="text-center">
                            <a href="<?php echo e(url('collections')); ?>" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/frontend/pages/featured.blade.php ENDPATH**/ ?>