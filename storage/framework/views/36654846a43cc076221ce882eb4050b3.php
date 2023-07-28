
    <?php $background = '#f0f1f1' ?>

<div id="<?php echo e($block3_heading); ?>">
    <div class="boxinbox-titlebar collapsed" data-toggle="collapse" data-target="#<?php echo e($block3_content_class); ?>" aria-expanded="false" aria-controls="<?php echo e($block3_content_class); ?>">
        <div class="icon">
            <i class="<?php echo e($block3_icon); ?>" aria-hidden="true"></i>
        </div>
        <div style="margin-left:20px;"><h3><?php echo e($block3_title); ?></h3></div>
    </div>
    <div id="<?php echo e($block3_content_class); ?>" class="boxinbox hiden <?php echo e($block3_content_class); ?> collapse" aria-labelledby="<?php echo e($block3_heading); ?>" data-parent="#accordion" style="background-color: <?php echo e($background); ?>">
        <?php if(view()->exists($block3_content)): ?>
            <?php echo $__env->make($block3_content, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH D:\Projects\my-client-crm\resources\views/blocks/block3.blade.php ENDPATH**/ ?>