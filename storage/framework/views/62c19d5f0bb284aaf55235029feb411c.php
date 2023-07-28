<div style="display: flex; flex-direction: row; justify-content: flex-start; align-items: center; flex-wrap: wrap;">
    <div class="listing-titlebar w-100" style="margin-top:10px;flex-direction:column;">
        <h3 style="width:100%;margin-bottom:30px;">Pracownicy:</h3>
        <div style="display:flex;flex-direction:row;width:100%;" class="pac-body">
            <div style="width:15%">
                <h6>Nazwa</h6>
            </div>
            <div style="width:15%">
                <h6>Hasło</h6>
            </div>
            <div style="width:15%">
                <h6>E-mail</h6>
            </div>
            <div style="width:55%">
                <h6>Telefon</h6>
            </div>
        </div>
    </div>
    <?php $__currentLoopData = \App\Models\User::where('group_id', auth()->user()->group_id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="listing-element w-100" style="margin-top:10px;flex-direction:column;">
            <div style="display:flex;flex-direction:row;width:100%;" class="pac-body">
                <div style="width:15%">
                    <h6><?php echo e($item->fullname); ?></h6>
                </div>
                <div style="width:15%">
                    <h6>*******</h6>
                </div>
                <div style="width:15%">
                    <h6><?php echo e($item->email); ?></h6>
                </div>
                <div style="width:55%">
                    <h6><?php echo e($item->phone); ?></h6>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="listing-actionbar mt-3">
    <a href="<?php echo e(route('workers')); ?>"><button type="button" class="btn1" style="width:100%;"><i class="fas fa-plus-circle" aria-hidden="true"></i> Dodaj pracownika</button></a>
</div>


<?php /**PATH D:\Projects\my-client-crm\resources\views/blocks_content/block3_pracownicy.blade.php ENDPATH**/ ?>