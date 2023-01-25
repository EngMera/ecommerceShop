
<?php $__env->startSection('title','Home Page'); ?>
    
<?php $__env->startSection('content'); ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    
    <div class="carousel-inner">
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sliderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="carousel-item <?php echo e($key == 0 ? 'active': ''); ?> ">
            <?php if($sliderItem->image): ?>
            <img src="<?php echo e(asset("$sliderItem->image")); ?>" class="d-block w-100 "alt="slider" style="max-width:100%;">
                
            <?php endif; ?>
            <div class="carousel-caption d-none d-md-block">
            <h5><?php echo e($sliderItem->title); ?></h5>
            <p><?php echo e($sliderItem->description); ?></p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>


  <div class="py-5 bg-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h4>Welcome To MeraTech</h4>
          <div class="underline mx-auto"></div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Reiciendis eligendi quae ab esse tenetur quibusdam aspernatur
            perspiciatis commodi distinctio repellat, quos fuga voluptatum
            deleniti dolor dolorum rerum enim iusto voluptates!
          </p>
        </div>
      </div>
    </div>
  </div>

  
  <div class="bg-light">
    <div class="py-5	">
      <div class="container">
        <div class="row ">
          <div class="col-md-12 mb-5">
            <h4>Trending Products</h4>
            <div class="underline"></div>
          </div>
          <?php if($trendingProducts): ?>
              <div class="col-md-12">
                <div class="owl-carousel owl-theme for-carousal">

                    <?php $__currentLoopData = $trendingProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                              <div class="product-card">
                                  <div class="product-card-img">
                                      <label class="stock bg-primary">Trend</label>
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
              </div>
          <?php else: ?>
              <div class="col-md-12">
                  <div class="p-2">
                      <h4>No Products Available</h4>
                  </div>
              </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  
  <div class="py-5 ">
    <div class="container">
      <div class="row ">
        <div class="col-md-12 mb-5">
          <h4>New Arrivals
            <a href="<?php echo e(url('new-arrivals')); ?>" class="btn btn-primary btn-sm text-white float-end">more</a>
          </h4>
          <div class="underline"></div>
        </div>
        <?php if($newArrivalsProducts): ?>
            <div class="col-md-12">
              <div class="owl-carousel owl-theme for-carousal">

                  <?php $__currentLoopData = $newArrivalsProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="item">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <label class="stock bg-primary">New</label>
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
            </div>
        <?php else: ?>
            <div class="col-md-12">
                <div class="p-2">
                    <h4>No Products Available</h4>
                </div>
            </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  
  <div class="bg-light">
    <div class="py-5	">
    <div class="container">
      <div class="row ">
        <div class="col-md-12 mb-5">
          <h4>Trending Products
            <a href="<?php echo e(url('featured')); ?>" class="btn btn-primary btn-sm text-white float-end">more</a>
          </h4>
          <div class="underline"></div>
        </div>
        <?php if($featuredProducts): ?>
            <div class="col-md-12">
              <div class="owl-carousel owl-theme for-carousal">

                  <?php $__currentLoopData = $featuredProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="item">
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
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
        <?php else: ?>
            <div class="col-md-12">
                <div class="p-2">
                    <h4>No Products Available</h4>
                </div>
            </div>
        <?php endif; ?>
      </div>
    </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/frontend/index.blade.php ENDPATH**/ ?>