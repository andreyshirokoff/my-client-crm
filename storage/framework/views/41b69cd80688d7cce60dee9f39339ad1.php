
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
} elseif ($_instance->childHasBeenRendered('tQ4phWp')) {
    $componentId = $_instance->getRenderedChildComponentId('tQ4phWp');
    $componentTag = $_instance->getRenderedChildComponentTagName('tQ4phWp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tQ4phWp');
} else {
    $response = \Livewire\Livewire::mount('workers.create-worker', []);
    $html = $response->html();
    $_instance->logRenderedChild('tQ4phWp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
        <?php elseif($block3_3_content_class == 'block3_2_klienta_notatka'): ?>
            <div class="boxinbox" style="background: <?php echo e($background); ?>">
            <?php echo $__env->make('blocks_content.block3_2_klienta_notatka', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php elseif($block3_3_content_class == 'block3_2_galeria_efektow_przed'): ?>
            <div class="boxinbox" style="background: <?php echo e($background); ?>">
                <?php echo $__env->make('blocks_content.block3_2_galeria_efektow_przed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php elseif($block3_3_content_class == 'block3_2_zabiegi_klienta'): ?>
            <div class="boxinbox" style="background: <?php echo e($background); ?>">
                <?php echo $__env->make('blocks_content.block3_2_zabiegi_klienta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php elseif($block3_3_content_class == 'block3_2_profil_klienta'): ?>
            <div class="boxinbox" style="background: <?php echo e($background); ?>">
                <?php echo $__env->make('blocks_content.block3_2_profil_klienta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php endif; ?>
    </div>

<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/blocks/block3_2.blade.php ENDPATH**/ ?>