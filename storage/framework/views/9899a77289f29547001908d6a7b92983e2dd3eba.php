<div>
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <?php if(session()->has('message')): ?>
                <div class="alert alert-primary">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>
            <div class="row">
                
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        <?php if($product->productImage): ?>
                        <div class="exzoom" id="exzoom">

                            <div class="exzoom_img_box">
                                <ul class='exzoom_img_ul'>
                                    <?php $__currentLoopData = $product->productImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemImg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><img src="<?php echo e(asset($itemImg->image)); ?>"style="max-width: 100%" ></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            
                            <div class="exzoom_nav"></div>
                            <p class="exzoom_btn">
                                <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                                <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                            </p>
                        </div>
                        <?php else: ?>
                            No image Added
                        <?php endif; ?>                      
                    </div>
                </div>

                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            <?php echo e($product->name); ?>

                            <?php if($product->quantity): ?>
                            <label class="label-stock bg-primary p-2">In Stock</label>
                            <?php else: ?>
                            <label class="label-stock bg-danger p-2">Out of Stock</label>
                            <?php endif; ?>
                        </h4>
                        
                        <hr>
                        <p class="product-path">
                            Home / <?php echo e($product->category->name); ?> / <?php echo e($product->name); ?> 
                        </p>
                        <div>
                            <span class="selling-price">$<?php echo e($product->selling_price); ?> </span>
                            <span class="original-price">$<?php echo e($product->original_price); ?> </span>
                        </div>
                        <div>
                            <?php if($product->productColors->count() > 0): ?>
                                <?php if($product->productColors): ?>
                                    <?php $__currentLoopData = $product->productColors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $colorItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label class="colorSelectionLabel" style="background-color: #<?php echo e($colorItem->color->code); ?>"
                                        wire:click="colorSelected(<?php echo e($colorItem->id); ?>)"
                                        >
                                        <?php echo e($colorItem->color->name); ?>

                                    </label>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <div>
                                    <?php if($this->productColorSelectedQuantity == 'outOfStock'): ?>
                                    <label class="btn-sm mt-2 p-1 text-white rounded-1 bg-danger ">Out of Stock</label>
                                    <?php elseif($this->productColorSelectedQuantity > 0): ?>
                                    <label class="btn-sm mt-2 p-1 text-white rounded-1 bg-primary">In Stock</label>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="<?php echo e($this->quantityCount); ?>"  readonly class="input-quantity" />
                                <span class="btn btn1" wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" wire:click="addToCart(<?php echo e($product->id); ?>)" class="btn btn1"> 
                                <span wire:loading.remove wire:target="addToCart">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </span>
                                <span wire:loading wire:target="addToCart">
                                    <i class="fa fa-shopping-cart"></i>  Adding...
                                </span>
                            </button>
                            <button type="button" wire:click="addToWishlist(<?php echo e($product->id); ?>)" class="btn btn1"> 
                                <span wire:loading.remove wire:target="addToWishlist">
                                    <i class="fa fa-heart" ></i> 
                                    Add To Wishlist 
                                </span>
                                <span wire:loading wire:target="addToWishlist">
                                    <i class="fa fa-heart" ></i> Adding...
                                </span>
                            </button>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
                                <?php echo $product->small_description; ?> 
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                <?php echo $product->description; ?> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="py-3 py-md-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3>Related 
                        <?php if($category): ?>
                            <?php echo e($category->name); ?>

                        <?php endif; ?>
                        Products</h3>
                    <div class="underline"></div>
                    
                </div>
                <div class="col-md-12">
                    <?php if($category): ?>
                        <div class="owl-carousel owl-theme for-carousal">
                            <?php $__currentLoopData = $category->relatedProducts->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item mb-3">
                                    <div class="product-card">
                                        <div class="product-card-img">
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                        <div class="col-md-12 p-2">
                            <h4>No Products Available</h4>
                        </div>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
        <script>
            $(function(){

                $("#exzoom").exzoom({

                    "navWidth": 60,
                    "navHeight": 60,
                    "navItemNum": 5,
                    "navItemMargin": 7,
                    "navBorder": 1,
                    "autoPlay": false,
                    "autoPlayTimeout": 2000

                });

            });

            // owl scripts 
            $('.for-carousal').owlCarousel({
                loop:true,
                margin:10,
                dots:true,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
        </script>
<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/livewire/frontend/product/view.blade.php ENDPATH**/ ?>