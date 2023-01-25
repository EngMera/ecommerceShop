<div class="main-navbar shadow-sm sticky-top">
    <div class="top-navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                    <h5 class="brand-name"><?php echo e($appSetting->name ?? 'Website Name'); ?></h5>
                </div>
                <div class="col-md-5 my-auto">
                    <form role="search" action="<?php echo e(url('search')); ?>" method="GET">
                        <div class="input-group">
                            <input type="search" name="search" value="<?php echo e(Request::get('search')); ?>" placeholder="Search your product" class="form-control" />
                            <button class="btn bg-white" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 my-auto">
                    <ul class="nav justify-content-end">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('cart')); ?>">
                                <i class="fa fa-shopping-cart"></i> Cart (<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.cart.cart-count', [])->html();
} elseif ($_instance->childHasBeenRendered('OqROj1f')) {
    $componentId = $_instance->getRenderedChildComponentId('OqROj1f');
    $componentTag = $_instance->getRenderedChildComponentTagName('OqROj1f');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OqROj1f');
} else {
    $response = \Livewire\Livewire::mount('frontend.cart.cart-count', []);
    $html = $response->html();
    $_instance->logRenderedChild('OqROj1f', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('wishlist')); ?>">
                                <i class="fa fa-heart"></i> Wishlist (<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.wishlist-count', [])->html();
} elseif ($_instance->childHasBeenRendered('o48psOT')) {
    $componentId = $_instance->getRenderedChildComponentId('o48psOT');
    $componentTag = $_instance->getRenderedChildComponentTagName('o48psOT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('o48psOT');
} else {
    $response = \Livewire\Livewire::mount('frontend.wishlist-count', []);
    $html = $response->html();
    $_instance->logRenderedChild('o48psOT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>)
                            </a>
                        </li>
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i> <?php echo e(Auth::user()->name); ?> 
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo e(url('profile')); ?>"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('orders')); ?>"><i class="fa fa-list"></i> My Orders</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('wishlist')); ?>"><i class="fa fa-heart"></i> My Wishlist</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('cart')); ?>"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                            </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                MeraTech
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/collections">All Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/new-arrivals">New Arrivals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/featured">Featured Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Electronics</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div><?php /**PATH C:\xampp\htdocs\quality\resources\views/layouts/inc/frontend/navbar.blade.php ENDPATH**/ ?>