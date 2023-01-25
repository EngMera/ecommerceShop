
<?php $__env->startSection('title'); ?>
<?php echo e($category->meta_title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_keyword'); ?>
<?php echo e($category->meta_keyword); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_description'); ?>
<?php echo e($category->meta_description); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Our Products</h4>
            </div>

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.product.index', ['product' => $product,'category' => $category])->html();
} elseif ($_instance->childHasBeenRendered('9QI5mEw')) {
    $componentId = $_instance->getRenderedChildComponentId('9QI5mEw');
    $componentTag = $_instance->getRenderedChildComponentTagName('9QI5mEw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9QI5mEw');
} else {
    $response = \Livewire\Livewire::mount('frontend.product.index', ['product' => $product,'category' => $category]);
    $html = $response->html();
    $_instance->logRenderedChild('9QI5mEw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/frontend/collections/products/index.blade.php ENDPATH**/ ?>