<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('client-index', [])->html();
} elseif ($_instance->childHasBeenRendered('Q47XGXR')) {
    $componentId = $_instance->getRenderedChildComponentId('Q47XGXR');
    $componentTag = $_instance->getRenderedChildComponentTagName('Q47XGXR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Q47XGXR');
} else {
    $response = \Livewire\Livewire::mount('client-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('Q47XGXR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\my-client-crm\resources\views/client_search.blade.php ENDPATH**/ ?>