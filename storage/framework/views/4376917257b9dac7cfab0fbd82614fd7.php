<?php $__env->startSection('content'); ?>
    <div class="box">
        <?php echo $__env->make('blocks.block2_2', [
            'block2_2_icon' => 'fas fa-cog',
            'block2_2_title' => 'Ustawienia',
            'block3_3_content_class' => 'block3_3_usrsignature',
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('addit_js'); ?>
    <script>
        layout.canvasElement()
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\my-client-crm\resources\views/ustawienia/usrsignature.blade.php ENDPATH**/ ?>