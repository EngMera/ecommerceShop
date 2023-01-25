
<?php $__env->startSection('title','Checkout '); ?>
    
<?php $__env->startSection('content'); ?>
   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.checkout.checkout-show', [])->html();
} elseif ($_instance->childHasBeenRendered('ih5tBAO')) {
    $componentId = $_instance->getRenderedChildComponentId('ih5tBAO');
    $componentTag = $_instance->getRenderedChildComponentTagName('ih5tBAO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ih5tBAO');
} else {
    $response = \Livewire\Livewire::mount('frontend.checkout.checkout-show', []);
    $html = $response->html();
    $_instance->logRenderedChild('ih5tBAO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/frontend/checkout/index.blade.php ENDPATH**/ ?>