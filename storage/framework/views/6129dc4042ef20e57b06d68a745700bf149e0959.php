
<?php $__env->startSection('title','Cart page'); ?>
    
<?php $__env->startSection('content'); ?>
   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.cart.cart-show', [])->html();
} elseif ($_instance->childHasBeenRendered('rzVOufI')) {
    $componentId = $_instance->getRenderedChildComponentId('rzVOufI');
    $componentTag = $_instance->getRenderedChildComponentTagName('rzVOufI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rzVOufI');
} else {
    $response = \Livewire\Livewire::mount('frontend.cart.cart-show', []);
    $html = $response->html();
    $_instance->logRenderedChild('rzVOufI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/frontend/cart/index.blade.php ENDPATH**/ ?>