<div class="modal-dialog" role="document" style="top:50%;transform:translateY(-70%)">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:black">Dodaj pole</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">

                            <label for="addFieldSelect" style="color:black">Wybierz pole</label>
                            <select class="form-control mt-2" id="addFieldModal" wire:model="type">
                                <option value="input">Input</option>
                                <option value="textarea">Textarea</option>
                                <option value="checkbox">Checkbox</option>
                                <option value="radio">Radio</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="addNameModal" style="color:black">Nazwa</label>
                            <input type="text" class="form-control mt-2" id="addNameModal" wire:model="title">
                        </div>
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="is-invalid" role="alert" style="color:black">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="form-group mt-3" id="last-field">
                            <label for="addOrderModal" style="color:black">Wybierz pole</label>
                            <input type="number" class="form-control mt-2" id="addOrderModal" wire:model="order">
                        </div>

                        <?php if($showMultiFields !== false): ?>
                            <button type="button" class="btn1 mt-2" wire:click="addMultiFields">Add Fields</button>
                            <div class="w-100 d-flex flex-column" id="radios">
                                <?php $__currentLoopData = $fieldsArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-group mt-3" id="last-field">
                                        <label for="addAdditField-<?php echo e($key); ?>" style="color:black">Dodatkowa nazwa pola</label>
                                        <input type="text" class="form-control mt-2" id="addAdditField-<?php echo e($key); ?>" wire:model="fieldsArr.<?php echo e($key); ?>">
                                    </div>
                                    <?php $__errorArgs = ['fieldsArr.'.$key];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="is-invalid" role="alert" style="color:black">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn1" data-dismiss="modal" wire:click="addNewFields">Add</button>
                </div>
            </div>
        </div>



<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/livewire/modal-fields-add.blade.php ENDPATH**/ ?>