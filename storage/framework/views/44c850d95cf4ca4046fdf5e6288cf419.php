<?php $__env->startSection('additional_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/application.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slider.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="box">
        <?php echo $__env->make('blocks.block2_2', [
            'block2_2_icon' => 'fas fa-cog',
            'block2_2_title' => 'Ustawienia',
            'block3_3_content_class' => 'block3_2_dodaj_zabieg',
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/ustawienia/treatment_create.blade.php ENDPATH**/ ?>