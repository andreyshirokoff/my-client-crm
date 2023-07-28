
    <?php $background = '#f0f1f1' ?>

<div id="<?php echo e($block3_3_heading); ?>">
    <div class="boxinbox-titlebar">
        <div class="icon">
            <i class="<?php echo e($block3_3_icon); ?>" aria-hidden="true"></i>
        </div>
        <div style="margin-left:20px;"><h3><?php echo e($block3_3_title); ?></h3></div>
    </div>
    <div id="<?php echo e($block3_3_content_class); ?>" class="boxinbox hiden <?php echo e($block3_3_content_class); ?>" style="background-color: <?php echo e($background); ?>">
        <div class="boxinbox-inside">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-data-index', [])->html();
} elseif ($_instance->childHasBeenRendered('Lnk66H0')) {
    $componentId = $_instance->getRenderedChildComponentId('Lnk66H0');
    $componentTag = $_instance->getRenderedChildComponentTagName('Lnk66H0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Lnk66H0');
} else {
    $response = \Livewire\Livewire::mount('user-data-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('Lnk66H0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

















        </div>
        <?php if($block3_3_content_class == 'block3_3_usrimage'): ?>
            <?php echo $__env->make('blocks_content.block3_3_usrimage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($block3_3_content_class == 'block3_3_editaccount'): ?>
            <?php echo $__env->make('blocks_content.block3_3_editaccount', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($block3_3_content_class == 'block3_3_usrsignature'): ?>
            <?php echo $__env->make('blocks_content.block3_3_usrsignature', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($block3_3_content_class == 'block3_3_usrpin'): ?>
            <?php echo $__env->make('blocks_content.block3_3_usrpin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH D:\Projects\my-client-crm\resources\views/blocks/block3_3.blade.php ENDPATH**/ ?>