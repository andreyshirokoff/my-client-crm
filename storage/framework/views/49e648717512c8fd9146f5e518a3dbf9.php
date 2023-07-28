<?php if(!isset($background)): ?>
    <?php $background = '#fff' ?>
<?php endif; ?>

<div class="boxinbox__body" id="accordion">
    <div class="boxinbox-titlebar" style="margin-top:10px;">
        <div class="icon">
            <i class="<?php echo e($block2_icon); ?>" aria-hidden="true"></i>
        </div>
        <div style="margin-left:20px;">
            <h3><?php echo e($block2_title); ?></h3>
        </div>
    </div>
    <div class="box-content" style="background: <?php echo e($background); ?>">
        <?php if(view()->exists('blocks.block3')): ?>
            <?php echo $__env->make('blocks.block3', [
                'block3_icon' => 'fas fa-user',
                'block3_title' => 'Twoje Konto',
                'block3_content_class' => 'block3_twoje_konto',
                'block3_content' => 'blocks_content.block3_twoje_konto',
                'block3_heading' => 'heading_block3_twoje_konto'
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <div class="mar"></div>
        <?php if(view()->exists('blocks.block3')): ?>
            <?php echo $__env->make('blocks.block3', [
                'block3_icon' => 'fas fa-envelope-open',
                'block3_title' => 'Pakiet SMS i historia',
                'block3_content_class' => 'block3_pakiet_sms_i_historia',
                'block3_content' => 'blocks_content.block3_pakiet_sms_i_historia',
                'block3_heading' => 'heading_block3_pakiet_sms_i_historia'
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <div class="mar"></div>
        <?php if(view()->exists('blocks.block3')): ?>
            <?php echo $__env->make('blocks.block3', [
                'block3_icon' => 'fas fa-palette',
                'block3_title' => 'Ustawienia salonu i RODO',
                'block3_content_class' => 'block3_ustawienia_salonu_i_rodo',
                'block3_content' => 'blocks_content.block3_ustawienia_salonu_i_rodo',
                'block3_heading' => 'heading_block3_ustawienia_salonu_i_rodo'
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <div class="mar"></div>
            <?php if(view()->exists('blocks.block3')): ?>
                <?php echo $__env->make('blocks.block3', [
                    'block3_icon' => 'fas fa-user-friends',
                    'block3_title' => 'Pracownicy',
                    'block3_content_class' => 'block3_pracownicy',
                    'block3_content' => 'blocks_content.block3_pracownicy',
                    'block3_heading' => 'heading_block3_pracownicy'
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        <div class="mar"></div>
        <?php if(view()->exists('blocks.block3')): ?>
            <?php echo $__env->make('blocks.block3', [
                'block3_icon' => 'fas fa-id-card-alt',
                'block3_title' => 'Ogólna karta klienta',
                'block3_content_class' => 'block3_ogolna_karta_klienta',
                'block3_content' => 'blocks_content.block3_ogolna_karta_klienta',
                'block3_heading' => 'heading_block3_ogolna_karta_klienta'
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <div class="mar"></div>
        <?php if(view()->exists('blocks.block3')): ?>
            <?php echo $__env->make('blocks.block3', [
                'block3_icon' => 'fas fa-hand-holding-heart',
                'block3_title' => 'Karty zabiegowe i zabiegi',
                'block3_content_class' => 'block3_karty_zabiegowe_i_zabiegi',
                'block3_content' => 'blocks_content.block3_karty_zabiegowe_i_zabiegi',
                'block3_heading' => 'heading_block3_karty_zabiegowe_i_zabiegi'
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <div class="mar"></div>
        <?php if(view()->exists('blocks.block3')): ?>
            <?php echo $__env->make('blocks.block3', [
                'block3_icon' => 'fa fa-shopping-cart',
                'block3_title' => 'Produkty',
                'block3_content_class' => 'block3_produkty',
                'block3_content' => 'blocks_content.block3_produkty',
                'block3_heading' => 'heading_block3_produkty'
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <div class="mar"></div>
        <?php if(view()->exists('blocks.block3')): ?>
            <?php echo $__env->make('blocks.block3', [
                'block3_icon' => 'fas fa-cloud-download-alt',
                'block3_title' => 'Export dokumentów do PDF',
                'block3_content_class' => 'block3_export_dokumentov_do_pdf',
                'block3_content' => 'blocks_content.block3_export_dokumentov_do_pdf',
                'block3_heading' => 'heading_block3_export_dokumentov_do_pdf'
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH D:\Projects\my-client-crm\resources\views/blocks/block2.blade.php ENDPATH**/ ?>