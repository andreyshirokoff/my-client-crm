<div>

    <div class="listing-titlebar">
        <div style="width:60%">
            <h6>Nazwa zabiegu</h6>
        </div>
        <div style="width:20%">
            <h6>Karta klienta</h6>
        </div>
        <div style="width:20%">
            <h6>Opis zabiegu</h6>
        </div>
    </div>
    <?php if($services): ?>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="listing-element service-block" data-id="<?php echo e($service->id); ?>">
                <div style="width:60%">
                    <h6><?php echo e($service->name); ?></h6>
                </div>
                <div style="width:20%">

                    <a href="<?php echo e(route('treatment.question')); ?>?type=karta&idservice=<?php echo e($service->id); ?>"><?php if(\App\Models\ServicesForm::where('service_id', $service->id)->first()): ?><i class="fa-solid fa-pen-to-square"></i> <?php else: ?> Dodaj <?php endif; ?></a>
                </div>
                <div style="width:20%">
                    <form class="d-flex gap-3" style="font-size:20px;position:relative;top:-5px">

                            <input type="hidden" value="<?php echo e($service->id); ?>" wire:model="idService">

                            <a href="<?php echo e(url('/functions/treatment_create')); ?>?type=edit&id=<?php echo e($service->id); ?>"><i class="fa-solid fa-pen-to-square i-black"></i></a>

                            <a style="cursor: pointer" wire:click.prevent="copy('<?php echo e($service->id); ?>', '<?php echo e($service->name); ?>')"><i class="fa-solid fa-copy i-black"></i></a>
                            <a href="" wire:click.prevent="delete('<?php echo e($service->id); ?>')" id="delete-service"><i class="fa-solid fa-trash i-black"></i></a>
                            <input type="hidden" wire:model="fieldName">

                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>


    <div class="listing-ending"></div>



    <div class="listing-actionbar btns" style="gap: 15px;">
        <button type="button" style="" onclick="location.href='<?php echo e(url('functions/treatment_template')); ?>'" class="btn1"><i class="fas fa-plus-circle" aria-hidden="true"></i> Wybierz z gotowych</button>
        <button type="button" onclick="location.href='<?php echo e(url('functions/treatment_create')); ?>'" class="btn1"><i class="fas fa-plus-circle" aria-hidden="true"></i> Dodaj zabieg</button>
    </div>


</div>















<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/livewire/settings/treatment-list-index.blade.php ENDPATH**/ ?>