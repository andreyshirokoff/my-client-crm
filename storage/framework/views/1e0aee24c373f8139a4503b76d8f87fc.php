<?php if(!isset($background)): ?>
    <?php $background = '#fff' ?>
<?php endif; ?>

<div class="boxinbox__body" id="accordion">

    <div class="boxinbox-titlebar" style="margin-top:10px;">
        <div class="icon">
            <i class="<?php echo e($block2_2_icon); ?>" aria-hidden="true"></i>
        </div>
        <div style="margin-left:20px;">
            <h3><?php echo e($block2_2_title); ?></h3>
        </div>
    </div>

    <div class="box-content" style="background: <?php echo e($background); ?>">
        <?php if($block3_3_content_class == 'block3_3_usrimage'): ?>
            <?php if(view()->exists('blocks.block3_3')): ?>
                <?php echo $__env->make('blocks.block3_3', [
                    'block3_3_icon' => 'fas fa-camera',
                    'block3_3_title' => 'Zmień zdjęcie',
                    'block3_3_content_class' => 'block3_3_usrimage',
                    'block3_3_content' => $block3_3_content_class,
                    'block3_3_heading' => 'heading_block3_3_usrimage'
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        <?php elseif($block3_3_content_class == 'block3_3_editaccount'): ?>
            <?php echo $__env->make('blocks.block3_3', [
                    'block3_3_icon' => 'fas fa-edit',
                    'block3_3_title' => 'Edytuj konto',
                    'block3_3_content_class' => 'block3_3_editaccount',
                    'block3_3_content' => $block3_3_content_class,
                    'block3_3_heading' => 'heading_block3_3_editaccount'
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($block3_3_content_class == 'block3_3_usrsignature'): ?>
            <?php echo $__env->make('blocks.block3_3', [
                    'block3_3_icon' => 'fas fa-camera',
                    'block3_3_title' => 'Dodaj/edytuj podpis',
                    'block3_3_content_class' => 'block3_3_usrsignature',
                    'block3_3_content' => $block3_3_content_class,
                    'block3_3_heading' => 'heading_block3_3_usrsignature'
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($block3_3_content_class == 'block3_3_usrpin'): ?>
            <?php echo $__env->make('blocks.block3_3', [
                    'block3_3_icon' => 'fas fa-edit',
                    'block3_3_title' => 'Ustaw pin',
                    'block3_3_content_class' => 'block3_3_usrpin',
                    'block3_3_content' => $block3_3_content_class,
                    'block3_3_heading' => 'heading_block3_3_usrpin'
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($block3_3_content_class == 'block3_2_rodoreset'): ?>
            <?php echo $__env->make('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-trash',
                    'block3_2_title' => 'Potwierdź operację',
                    'block3_2_content_class' => 'block3_2_rodoreset',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_rodoreset'
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($block3_3_content_class == 'aktualna_karta_klienta'): ?>
            <?php echo $__env->make('blocks.block3_dock', [
                    'block3_2_icon' => 'fas fa-id-card-alt',
                    'block3_2_title' => 'Aktualna karta klienta',
                    'block3_2_content_class' => 'block3_2_aktualna_karta_klienta',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_aktualna_karta_klienta',
                    'block3_doc_map_array' => $block3_doc_map_array
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="mar"></div>
            <?php echo $__env->make('blocks.block3_dock', [
                    'block3_2_icon' => 'fas fa-id-card-alt',
                    'block3_2_title' => 'Dodaj pytania',
                    'block3_2_content_class' => 'block3_2_pytania',
                    'block3_2_content' => $block3_3_content_class_1,
                    'block3_2_heading' => 'heading_block3_2_pytania',
                    'block3_doc_pytania_array' => $block3_doc_pytania_array
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($block3_3_content_class == 'block3_2_dodaj_pracownika'): ?>
            <?php echo $__env->make('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-user-friends',
                    'block3_2_title' => 'Dodaj pracownika',
                    'block3_3_content_class' => 'block3_2_dodaj_pracownika',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_dodaj_pracownika',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($block3_3_content_class == 'block3_2_dodaj_gotowe_zabiegi'): ?>
            <?php echo $__env->make('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-hand-holding-heart',
                    'block3_2_title' => 'Dodaj gotowe zabiegi',
                    'block3_3_content_class' => 'block3_2_dodaj_gotowe_zabiegi',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_dodaj_gotowe_zabiegi',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($block3_3_content_class == 'block3_2_dodaj_zabieg'): ?>
            <?php echo $__env->make('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-user-friends',
                    'block3_2_title' => 'Dodaj zabieg',
                    'block3_3_content_class' => 'block3_2_dodaj_zabieg',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_dodaj_zabieg',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($block3_3_content_class == 'block3_2_dodaj_pytania'): ?>



            <div>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('treatment-question-index', [])->html();
} elseif ($_instance->childHasBeenRendered('dngvcz7')) {
    $componentId = $_instance->getRenderedChildComponentId('dngvcz7');
    $componentTag = $_instance->getRenderedChildComponentTagName('dngvcz7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('dngvcz7');
} else {
    $response = \Livewire\Livewire::mount('treatment-question-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('dngvcz7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        <?php elseif($block3_3_content_class == 'block3_2_product_create'): ?>
            <?php echo $__env->make('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-user-friends',
                    'block3_2_title' => 'Dodaj zabieg',
                    'block3_3_content_class' => 'block3_2_product_create',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_product_create',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($block3_3_content_class == 'block3_2_profil_klienta'): ?>
            <?php echo $__env->make('blocks.block3_2', [
                    'block3_2_icon' => 'fa-solid fa-passport',
                    'block3_2_title' => 'Inicjały',
                    'block3_3_content_class' => 'block3_2_profil_klienta',
                    'block3_3_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_block3_2_profil_klienta',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="mar"></div>
            <?php echo $__env->make('blocks.block3_2', [
                    'block3_2_icon' => 'fa-solid fa-list',
                    'block3_2_title' => 'Notatka',
                    'block3_3_content_class' => 'block3_2_klienta_notatka',
                    'block3_3_content' => 'block3_2_klienta_notatka',
                    'block3_2_heading' => 'heading_block3_2_block3_2_klienta_notatka',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="mar"></div>








            <?php echo $__env->make('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-hand-holding-heart',
                    'block3_2_title' => 'Zabiegi klienta',
                    'block3_3_content_class' => 'block3_2_zabiegi_klienta',
                    'block3_3_content' => 'block3_2_zabiegi_klienta',
                    'block3_2_heading' => 'heading_block3_2_zabiegi_klienta',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/blocks/block2_2.blade.php ENDPATH**/ ?>