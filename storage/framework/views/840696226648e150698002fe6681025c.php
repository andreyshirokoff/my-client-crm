<?php $__env->startSection('additional_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/application.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slider.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="box">
        <?php echo $__env->make('blocks.block2', [
            'block2_icon' => 'fas fa-cog',
            'block2_title' => 'Ustawienia',
            //'block1_content_class' => 'block1_znajdz_dokument',
            //'block1_content' => 'blocks_content.block1_znajdz_dokument',
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('addit_js'); ?>
    <script>
        $(document).ready(() => {
            layout.bottomButtons()
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/ustawienia.blade.php ENDPATH**/ ?>