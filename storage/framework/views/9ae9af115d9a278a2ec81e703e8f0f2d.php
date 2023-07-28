<div>
    <?php if(count($returnFields) > 0): ?>
    <div id="heading_block3_2_edycja_karty_zabiegowej">
        
        
        
        <div class="boxinbox-titlebar">
            <div class="icon">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>
            <div style="margin-left:20px;"><h3>Edycja karty zabiegowej</h3></div>
        </div>

        <div class="boxinbox" style="background-color: rgb(240, 241, 241);">
            <?php $__currentLoopData = $returnFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $returnField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="listing-titlebar d-flex flex-column" style="margin-top:10px;">

                    </div>
                    <?php $__currentLoopData = json_decode($returnField, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php switch($f['type']):
                            case ('input'): ?>

                                <div class="listing-element service-block">
                                    <h6><?php echo e($f['title']); ?></h6>
                                    <div class="d-flex gap-3 align-items-center w-100" style="">
                                        <input class="formularz" name="UF_<?php echo e($key); ?>" data-order="<?php echo e($f['order']); ?>" id="" type="" value="" maxlength="40">
                                        <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('<?php echo e($key); ?>')"></i>
                                    </div>
                                </div>
                                <?php break; ?>
                            <?php case ('textarea'): ?>
                                <div class="listing-element service-block">
                                    <h6><?php echo e($f['title']); ?></h6>
                                    <div class="d-flex gap-3 align-items-center w-100" style="">
                                        <textarea class="formularz" name="UF_<?php echo e($key); ?>" data-order="<?php echo e($f['order']); ?>" id="" cols="30" rows="10"></textarea>
                                        <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('<?php echo e($key); ?>')"></i>
                                    </div>
                                </div>
                                <?php break; ?>
                            <?php case ('checkbox'): ?>
                                <div class="listing-element service-block">
                                    <h6 class="mb-3"><?php echo e($f['title']); ?></h6>
                                    <?php $__currentLoopData = $f['fields']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyff => $ff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="d-flex justify-content-between w-100 flex-wrap <?php if($key != 0): ?> mt-2 <?php endif; ?>">
                                            <p><?php echo e($ff); ?></p>
                                            <div class="d-flex gap-3 align-items-center" style="">
                                                <label class="switch">
                                                    <input type="checkbox" name="UF_<?php echo e($key); ?>" id="use_pin" value="1">
                                                    <span class="slider round"></span>
                                                </label>
                                                <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('<?php echo e($key); ?>', '<?php echo e($keyff); ?>')"></i>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php break; ?>
                            <?php case ('radio'): ?>
                                <div class="listing-element service-block">
                                    <h6 class="mb-3"><?php echo e($f['title']); ?></h6>

                                    <?php
                                        $i = 0;
                                    ?>
                                    <?php $__currentLoopData = $f['fields']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyff => $ff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <div class="d-flex justify-content-between w-100 flex-wrap <?php if($i != 0): ?> mt-2 <?php endif; ?>">
                                            <p><?php echo e($ff); ?></p>
                                            <div class="d-flex gap-3 align-items-center" style="">
                                                <input type="radio" id="tak2" value="<?php echo e($ff); ?>" name="UF_<?php echo e($key); ?>" <?php if($i == 0): ?> checked <?php endif; ?>>
                                                <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('<?php echo e($key); ?>', '<?php echo e($keyff); ?>')"></i>
                                            </div>
                                        </div>
                                        <?php
                                            $i++;
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php break; ?>
                        <?php endswitch; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
                <div class="modal fade" id="addField" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modal-fields-add', [])->html();
} elseif ($_instance->childHasBeenRendered('l3093263787-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3093263787-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3093263787-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3093263787-0');
} else {
    $response = \Livewire\Livewire::mount('modal-fields-add', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3093263787-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
                <script>
                    document.addEventListener('event-add-field', () => {
                        let modalItem = new bootstrap.Modal(document.querySelector('#addField'))
                        modalItem.show()
                    })
                </script>
    </div>
    <?php endif; ?>
    <div class="mar"></div>
    <div id="heading_block3_2_dodaj_pytania">
    
    
    
        <div class="boxinbox-titlebar">
            <div class="icon">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>
            <div style="margin-left:20px;"><h3>Dodaj pytania</h3></div>
        </div>
        <div class="boxinbox" style="background-color: rgb(240, 241, 241);">
            <div class="listing-titlebar d-flex flex-column" style="margin-top:10px;">
                <button class="btn1 w-100 mb-1" style="color:white" id="add-field-in-question" wire:click.prevent="showAddModal">Dodaj pole</button>
    

    


    


    

            </div>
            <?php if(count($fieldsArr) > 0): ?>

                    <?php $__currentLoopData = $fieldsArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php switch($f['type']):
                            case ('input'): ?>

                                <div class="listing-element service-block">
                                    <h6><?php echo e($f['title']); ?></h6>
                                    <div class="d-flex gap-3 align-items-center w-100" style="">
                                        <input class="formularz" name="UF_<?php echo e($key); ?>" data-order="<?php echo e($f['order']); ?>" id="" type="" value="" maxlength="40">
                                        <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteFromPage('<?php echo e($key); ?>')"></i>
                                    </div>
                                </div>
                                <?php break; ?>
                            <?php case ('textarea'): ?>
                                <div class="listing-element service-block">
                                    <h6><?php echo e($f['title']); ?></h6>
                                    <div class="d-flex gap-3 align-items-center w-100" style="">
                                        <textarea class="formularz" name="UF_<?php echo e($key); ?>" data-order="<?php echo e($f['order']); ?>" id="" cols="30" rows="10"></textarea>
                                        <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteFromPage('<?php echo e($key); ?>')"></i>
                                    </div>
                                </div>
                                <?php break; ?>
                            <?php case ('checkbox'): ?>
                                <div class="listing-element service-block">
                                    <h6 class="mb-3"><?php echo e($f['title']); ?></h6>
                                    <?php $__currentLoopData = $f['fields']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyff => $ff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="d-flex justify-content-between w-100 flex-wrap <?php if($key != 0): ?> mt-2 <?php endif; ?>">
                                            <p><?php echo e($ff); ?></p>
                                            <div class="d-flex gap-3 align-items-center" style="">
                                                <label class="switch">
                                                    <input type="checkbox" name="UF_<?php echo e($key); ?>" id="use_pin" value="1">
                                                    <span class="slider round"></span>
                                                </label>
                                                <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteFromPage('<?php echo e($key); ?>', '<?php echo e($keyff); ?>')"></i>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php break; ?>
                            <?php case ('radio'): ?>
                                <div class="listing-element service-block">
                                    <h6 class="mb-3"><?php echo e($f['title']); ?></h6>

                                    <?php
                                        $i = 0;
                                    ?>
                                    <?php $__currentLoopData = $f['fields']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyff => $ff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="d-flex justify-content-between w-100 flex-wrap <?php if($i != 0): ?> mt-2 <?php endif; ?>">
                                            <p><?php echo e($ff); ?></p>
                                            <div class="d-flex gap-3 align-items-center" style="">
                                                <input type="radio" id="tak2" value="<?php echo e($ff); ?>" name="UF_<?php echo e($key); ?>" <?php if($i == 0): ?> checked <?php endif; ?>>
                                                <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteFromPage('<?php echo e($key); ?>', '<?php echo e($keyff); ?>')"></i>
                                            </div>
                                        </div>
                                        <?php
                                            $i++;
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php break; ?>
                        <?php endswitch; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="listing-actionbar mt-3">
                        <a><button type="button" class="btn1" style="width:100%;" wire:click.prevent="submitForm"><i class="fa-solid fa-floppy-disk" style="margin-right:15px;color:white"></i></i> Save</button></a>
                    </div>

            <?php endif; ?>
        </div>
        <div class="modal fade" id="addField" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modal-fields-add', [])->html();
} elseif ($_instance->childHasBeenRendered('l3093263787-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3093263787-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3093263787-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3093263787-1');
} else {
    $response = \Livewire\Livewire::mount('modal-fields-add', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3093263787-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <script>
            document.addEventListener('event-add-field', () => {
                let modalItem = new bootstrap.Modal(document.querySelector('#addField'))
                modalItem.show()
            })
            // document.addEventListener('close-modal', () => {
            //     let modalItem = new bootstrap.Modal(document.querySelector('#addField'))
            //     modalItem.hide()
            //     document.querySelector('#addField').removeAttribute('aria-model')
            //     document.querySelector('#addField').addAttribute('aria-hidden')
            //     document.querySelector('#addField').setAttribute('aria-hidden', 'true')
            // })

            document.addEventListener('swal:confirm', event => {

                //console.log(event.detail.firstKey)

                Swal.fire({
                    title: event.detail.title,
                    text: event.detail.text,
                    icon: event.detail.type,
                    // buttons: true,
                    // dangerModal: true,

                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                })
                    .then((willDelete) => {
                        if(willDelete.isConfirmed)
                        {
                            console.log(event.detail.secondKey)
                            window.livewire.find('<?php echo e($_instance->id); ?>').call('deleteFromDb', [event.detail.firstKey, event.detail.secondKey])
                            //window.livewire.find('<?php echo e($_instance->id); ?>').call('deleteFromDb', event.detail.secondKey)
                        }
                    })
            })
        </script>
    </div>

</div>
<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/livewire/settings/treatment-question-index.blade.php ENDPATH**/ ?>