

<?php $__env->startSection('content'); ?>
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.category.index', [])->html();
} elseif ($_instance->childHasBeenRendered('8e6iWMG')) {
    $componentId = $_instance->getRenderedChildComponentId('8e6iWMG');
    $componentTag = $_instance->getRenderedChildComponentTagName('8e6iWMG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8e6iWMG');
} else {
    $response = \Livewire\Livewire::mount('admin.category.index', []);
    $html = $response->html();
    $_instance->logRenderedChild('8e6iWMG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quality\resources\views/admin/category/index.blade.php ENDPATH**/ ?>