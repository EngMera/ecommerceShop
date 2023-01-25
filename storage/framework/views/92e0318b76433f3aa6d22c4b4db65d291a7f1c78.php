<div>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="footer-heading"><?php echo e($appSetting->name ?? 'Website Name'); ?></h4>
                    <div class="footer-underline"></div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Quick Links</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="<?php echo e(url('/')); ?>" class="text-white">Home</a></div>
                    <div class="mb-2"><a href="<?php echo e(url('/about-us')); ?>" class="text-white">About Us</a></div>
                    <div class="mb-2"><a href="<?php echo e(url('/contact-us')); ?>" class="text-white">Contact Us</a></div>
                    <div class="mb-2"><a href="<?php echo e(url('/blogs')); ?>" class="text-white">Blogs</a></div>
                    <div class="mb-2"><a href="#" class="text-white">Sitemaps</a></div>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Shop Now</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="<?php echo e(url('/collections')); ?>" class="text-white">Collections</a></div>
                    <div class="mb-2"><a href="<?php echo e(url('/home')); ?>" class="text-white">Trending Products</a></div>
                    <div class="mb-2"><a href="<?php echo e(url('/new-arrivals')); ?>" class="text-white">New Arrivals Products</a></div>
                    <div class="mb-2"><a href="<?php echo e(url('/featured')); ?>" class="text-white">Featured Products</a></div>
                    <div class="mb-2"><a href="<?php echo e(url('/cart')); ?>" class="text-white">Cart</a></div>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Reach Us</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2">
                        <p>
                            <i class="fa fa-map-marker"></i> <?php echo e($appSetting->address ?? 'Website adress'); ?>

                        </p>
                    </div>
                    <div class="mb-2">
                        <a href="" class="text-white">
                            <i class="fa fa-phone"></i> <?php echo e($appSetting->phone1 ?? 'phone 1'); ?>

                        </a>
                    </div>
                    <div class="mb-2">
                        <a href="" class="text-white">
                            <i class="fa fa-envelope"></i> <?php echo e($appSetting->email1 ?? 'email 1'); ?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class=""> &copy; 2022 - BesTech - Ecommerce. All rights reserved.</p>
                </div>
                <div class="col-md-4">
                    <div class="social-media">
                        Get Connected:
                        <?php echo e($appSetting->name ?? 'Website Name'); ?>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\quality\resources\views/layouts/inc/frontend/footer.blade.php ENDPATH**/ ?>