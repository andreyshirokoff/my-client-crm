
    <?php $background = '#f0f1f1' ?>

    <div id="<?php echo e($block3_2_heading); ?>">
        <div class="boxinbox-titlebar">
            <div class="icon">
                <i class="<?php echo e($block3_2_icon); ?>" aria-hidden="true"></i>
            </div>
            <div style="margin-left:20px;"><h3><?php echo e($block3_2_title); ?></h3></div>
        </div>


        <?php if($block3_3_content_class == 'block3_2_rodoreset'): ?>
            <?php echo $__env->make('blocks_content.block3_2_rodoreset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <?php elseif($block3_3_content_class == 'block3_2_dodaj_pracownika'): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('workers.create-worker', [])->html();
} elseif ($_instance->childHasBeenRendered('6KRQHBb')) {
    $componentId = $_instance->getRenderedChildComponentId('6KRQHBb');
    $componentTag = $_instance->getRenderedChildComponentTagName('6KRQHBb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6KRQHBb');
} else {
    $response = \Livewire\Livewire::mount('workers.create-worker', []);
    $html = $response->html();
    $_instance->logRenderedChild('6KRQHBb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php elseif($block3_3_content_class == 'block3_2_dodaj_gotowe_zabiegi'): ?>
            <div class="boxinbox" style="background: <?php echo e($background); ?>">
            <?php echo $__env->make('blocks_content.block3_2_dodaj_gotowe_zabiegi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php elseif($block3_3_content_class == 'block3_2_dodaj_gotowe_zabiegi'): ?>
            <div class="boxinbox" style="background: <?php echo e($background); ?>">
                <?php echo $__env->make('blocks_content.block3_2_dodaj_gotowe_zabiegi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php elseif($block3_3_content_class == 'block3_2_dodaj_zabieg'): ?>
            <div class="boxinbox" style="background: <?php echo e($background); ?>">
                <?php echo $__env->make('blocks_content.block3_2_dodaj_zabieg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php elseif($block3_3_content_class == 'block3_2_product_create'): ?>
            <div class="boxinbox" style="background: <?php echo e($background); ?>">
                <?php echo $__env->make('blocks_content.block3_2_product_create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php endif; ?>
    </div>

<?php /**PATH D:\Projects\my-client-crm\resources\views/blocks/block3_2.blade.php ENDPATH**/ ?>