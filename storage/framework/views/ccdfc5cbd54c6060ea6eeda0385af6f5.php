<?php $__env->startSection('content'); ?>
    <div class="box">
        <div class="boxinbox__body">
            <div class="boxinbox-titlebar" style="margin-top:10px;">
                <div class="icon">
                    <i class="far fa-newspaper" aria-hidden="true"></i>
                </div>
                <div style="margin-left:20px;">
                    <h3>Newsy</h3>
                </div>
            </div>
            <div class="boxinbox block1_newsy">
                <div class="boxinbox-inside">
                    <?php if($news->avatars): ?>
                        <img style="border-radius:20px;padding-bottom:20px;" src="/storage/<?php echo e($news->avatars); ?>">
                    <?php endif; ?>
                    <h3><?php echo e($news?->name); ?></h3><br>

                    <div class="w-100 mt-2">
                        <?php echo $news->body; ?>

                    </div>
                </div>
                <div class="listing-actionbar">
                    <a href="<?php echo e(route('dashboard')); ?>" class="btn1 ms-2" style="text-decoration:none;"><i class="fas fa-chevron-left" aria-hidden="true"></i> Wróć</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/news_view.blade.php ENDPATH**/ ?>