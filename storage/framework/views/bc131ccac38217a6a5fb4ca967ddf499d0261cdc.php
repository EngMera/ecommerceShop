<div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h4>Price</h4>
                </div>
                <div class="card-body">
                    <label  class="d-block">
                        <input type="radio" name="priceSort" wire:model="priceInput" value="high-to-low"/> High to Low
                    </label>
                    <label  class="d-block">
                        <input type="radio" name="priceSort" wire:model="priceInput" value="low-to-high"/> Low to High
                    </label>
                </div>
            </div>
        </div>
    
        <div class="col-md-9">
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                
                    <div class="col-md-4">
                        <div class="product-card">
                            <div class="product-card-img">
                                <?php if($productItem->quantity > 0): ?>
                                <label class="stock bg-primary">In Stock</label>
                                <?php else: ?>
                                <label class="stock bg-danger">Out of Stock</label>
                                <?php endif; ?>
                                <?php if($productItem->productImage->count() > 0): ?>
                                <a href="<?php echo e(url('/collections/'.$productItem->category->slug.'/'.$productItem->slug )); ?>" >
                                    <div style="height:300px; width:300px">
                                      <img src="<?php echo e(asset($productItem->productImage[0]->image)); ?>" alt="<?php echo e($productItem->name); ?>" style=" max-width:100%;">
                                    </div>
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
                    <div class="col-md-12">
                        <div class="p-2">
                            <h4>No Products Available for <?php echo e($category->name); ?></h4>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
</div>
</div><?php /**PATH C:\xampp\htdocs\quality\resources\views/livewire/frontend/product/index.blade.php ENDPATH**/ ?>