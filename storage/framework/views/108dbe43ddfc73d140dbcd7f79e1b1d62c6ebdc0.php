
<?php $__env->startSection('title'); ?>
<?php echo e($product->meta_title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_keyword'); ?>
<?php echo e($product->meta_keyword); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_description'); ?>
<?php echo e($product->meta_description); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  
   <div>
     <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.product.view', ['category' => $category,'product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('aHj3LH2')) {
    $componentId = $_instance->getRenderedChildComponentId('aHj3LH2');
    $componentTag = $_instance->getRenderedChildComponentTagName('aHj3LH2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aHj3LH2');
} else {
    $response = \Livewire\Livewire::mount('frontend.product.view', ['category' => $category,'product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('aHj3LH2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/frontend/collections/products/view.blade.php ENDPATH**/ ?>