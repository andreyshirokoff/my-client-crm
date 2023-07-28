<?php if(!isset($background)): ?>
    <?php $background = '#f0f1f1' ?>
<?php endif; ?>

<div class="boxinbox__body">
    <div class="boxinbox-titlebar" style="margin-top:10px;">
        <div class="icon">
            <i class="<?php echo e($block1_icon); ?>" aria-hidden="true"></i>
        </div>
        <div style="margin-left:20px;">
            <h3><?php echo e($block1_title); ?></h3>
        </div>
    </div>
    <div class="boxinbox <?php echo e($block1_content_class); ?>">
        <?php if(view()->exists($block1_content)): ?>
            <?php echo $__env->make($block1_content, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/blocks/block1.blade.php ENDPATH**/ ?>