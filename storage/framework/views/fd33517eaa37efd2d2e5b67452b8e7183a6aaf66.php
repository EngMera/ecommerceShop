
<?php $__env->startSection('title','Wishlist '); ?>
    
<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.wishlist-show', [])->html();
} elseif ($_instance->childHasBeenRendered('AJx0XTr')) {
    $componentId = $_instance->getRenderedChildComponentId('AJx0XTr');
    $componentTag = $_instance->getRenderedChildComponentTagName('AJx0XTr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AJx0XTr');
} else {
    $response = \Livewire\Livewire::mount('frontend.wishlist-show', []);
    $html = $response->html();
    $_instance->logRenderedChild('AJx0XTr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/frontend/wishlist/index.blade.php ENDPATH**/ ?>