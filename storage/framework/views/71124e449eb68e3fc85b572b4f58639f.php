<?php $__env->startSection('content'); ?>
    <div class="whitebox-listing head-links">
        <div onclick="location.href='<?php echo e(route('createClient')); ?>';" class="colorbox33">
            <div class="whiteboxiconbox">
                <i class="fas fa-user-plus" aria-hidden="true"></i>
            </div>
            <h3>Dodaj klienta</h3>
            <span>Zarejestruj nowego klienta w Twoim miejscu Beauty.</span>
        </div>

        <div class="boxseparator1procent"></div>

        <div onclick="location.href='<?php echo e(route('searchClient')); ?>';" class="colorbox33">
            <div class="whiteboxiconbox">
                <i class="fas fa-search" aria-hidden="true"></i>
            </div>
            <h3>Znajdź klienta</h3>
            <span>Znajdź klienta w bazie aby wykonać nowy zabieg.</span>
        </div>

        <div class="boxseparator1procent"></div>

        <div onclick="location.href='/functions/document_search';" class="colorbox33">
            <div class="whiteboxiconbox">
                <i class="far fa-file" aria-hidden="true"></i>
            </div>
            <h3>Baza dokumentów</h3>
            <span>Przeglądaj dokumenty podpisane przez klientów.</span>
        </div>

    </div>
    <?php echo $__env->make('blocks.block1', [
        'block1_icon' => 'fas fa-hand-holding-heart',
        'block1_title' => 'Twoje ostatnie 5 zabiegów:',
        'block1_content_class' => 'block1_twoje_ostatnie_5_zabiegow',
        'block1_content' => 'blocks_content.block1_twoje_ostatnie_5_zabiegow',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="boxinbox__body">
        <div class="boxinbox-titlebar" style="margin-top:10px;">
            <div class="icon">
                <i class="far fa-newspaper" aria-hidden="true"></i>
            </div>
            <div style="margin-left:20px;">
                <h3>Nowości w MyClient:</h3>
            </div>
        </div>
        <div class="boxinbox block1_nowosci_w_beautycheck">
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="listing-element">
                    <div style="width:75%" class="listing-element__width75">
                        <h6><?php echo e($newsItem?->name); ?></h6>
                    </div>
                    <div style="width:15%;" class="listing-element__width15">
                        <h6><?php echo e(\Carbon\Carbon::parse($newsItem->created_at)->format('d.m.Y')); ?></h6>
                    </div>
                    <div style="width:10%;display:flex;flex-direction:row;" class="listing-element__width10">
                        <a href="<?php echo e(route('news', ['slug' => $newsItem->slug])); ?>" class="iconbutton" style="text-decoration:none;">
                            <i class="far fa-eye" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('addit_js'); ?>
    <script>
        $(document).ready(() => {
            layout.colorbox33()
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/index.blade.php ENDPATH**/ ?>