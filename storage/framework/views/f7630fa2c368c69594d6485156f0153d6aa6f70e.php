
<?php $__env->startSection('title','Search Products'); ?>
    
<?php $__env->startSection('content'); ?>

            <div class="py-5 ">
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-md-10 mb-5">
                        <h4>Search Results</h4>
                        <div class="underline"></div>
                        </div>
                        <?php $__empty_1 = true; $__currentLoopData = $searchProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-md-10">
                            <div class="product-card">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="product-card-img">
                                            <label class="stock bg-primary">New</label>
                                            <?php if($productItem->productImage->count() > 0): ?>
                                                <a href="<?php echo e(url('/collections/'.$productItem->category->slug.'/'.$productItem->slug )); ?>">
                                                <img src="<?php echo e(asset($productItem->productImage[0]->image)); ?>" alt="<?php echo e($productItem->name); ?>" style="width:300px; height:300px; max-width:100%;">
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="col-md-9">
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
                                            <p style="height: 45px; overflow:hidden">
                                                <b>Description: </b>
                                                <?php echo e($productItem->description); ?>

                                            </p>
                                            <a href="<?php echo e(url('/collections/'.$productItem->category->slug.'/'.$productItem->slug )); ?>" class="btn btn-outline-primary ">view</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="col-md-12 p-2">
                                <h4>No Such Products Found</h4>
                            </div>
                        <?php endif; ?>
                        <div class="col-md-10 ">
                            <?php echo e($searchProducts->appends(request()->input())->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/frontend/pages/search.blade.php ENDPATH**/ ?>