
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
} elseif ($_instance->childHasBeenRendered('LBEkvTa')) {
    $componentId = $_instance->getRenderedChildComponentId('LBEkvTa');
    $componentTag = $_instance->getRenderedChildComponentTagName('LBEkvTa');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LBEkvTa');
} else {
    $response = \Livewire\Livewire::mount('user-data-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('LBEkvTa', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
        <?php elseif($block3_3_content_class == 'block3_2_profil_klienta'): ?>
            <?php echo $__env->make('blocks_content.block3_3_profil_klienta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/blocks/block3_3.blade.php ENDPATH**/ ?>