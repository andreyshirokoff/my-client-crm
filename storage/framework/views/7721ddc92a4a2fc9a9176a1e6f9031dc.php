<form action="<?php echo e(route('submit.visual')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Nazwa salonu
        </div>
        <div style="width:30%;" class="input-in">
            <input class="formularz" name="salonTitle" id="salonname" type="text" value="" maxlength="40" wire:model.defer="salonTitle">
            <?php $__errorArgs = ['salonTitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>

    <div class="listing-element row-with-input">
        <div style="width:70%;padding-right:60px;">
            Logo Twojego salonu.<br><br>(Dla najlepszych rezultatów wgraj plik PNG nie zawierający tła w rozmiarze maksymalnym 800 x 800 px). Po wgraniu pliku z logo zobaczysz jego podgląd w oknie obok. Sugerujemy użycie logo w wersji poziomej.
        </div>
        <div style="width:30%;" class="input-in">
            <div style="display:flex; width:100%; border: 1px solid #a5a5a5; margin-bottom:5px; padding:10px; border-radius:10px;min-height:100px; align-items:center; justify-content: center;">
                <?php if($image): ?>
                    <img src="<?php echo e(url('storage/salon/'.$image)); ?>" alt="">
                <?php else: ?>
                    Brak logo.
                <?php endif; ?>
            </div>
            <input class="formularz" name="logofile" id="logofile" type="file" image="image/png">
            <?php $__errorArgs = ['logofile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>

    <div class="listing-element" style="flex-direction:column">
        <div style="width:100%;">
            <h4>Stopka w mailach</h4>
            <p style="padding-bottom:20px;">Utwórz stopkę salonu, która będzie automatycznie dołączana u dołu maili wysyłanych do klientów. Stopka oddzielona jest poziomą linią od pozostałej treści maila i może zawierać dowolne dane.</p>
        </div>
        <div style="width:100%">



            <div id="quil-footer" style="height: 300px">
                <p></p>
            </div>
            <input type="hidden" id="footerDb" wire:model="footer">
            <input type="hidden" id="quil-footer-input" name="footer">
            <?php $__errorArgs = ['footer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>


    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Wybierz kolory Twojej aplikacji BeautyCheck
        </div>
        <div style="width:30%;" class="input-in">
            <select name="selectedThemeId" class="formularz" wire:model.defer="selectedThemeId" name="selectedThemeId">
                <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($theme->id); ?>"><?php echo e($theme->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>

    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Pokazywać pracownikowi nr. telefonu klienta?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;" class="input-in check">
            <label class="switch">
                <input type="checkbox" value="1" wire:model="checkBoxShowPhone" name="checkBoxShowPhone">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Czy pracownicy mają mieć możliwość edycji karty klienta w salonie?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;" class="input-in check">
            <label class="switch">
                <input type="checkbox" value="1" wire:model="checkBoxCanEditCard" name="checkBoxCanEditCard">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Czy pracownicy mogą zarządzać zabiegami i kartami zabiegów?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;" class="input-in check">
            <label class="switch">
                <input type="checkbox" value="1" wire:model="checkBoxCanEditControl" name="checkBoxCanEditControl">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Czy pracownicy mogą usuwać podpisane już dokumenty?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;" class="input-in check">
            <label class="switch">
                <input type="checkbox" value="1" wire:model="checkBoxCanRemoveSignedDocs" name="checkBoxCanRemoveSignedDocs">
                <span class="slider round"></span>
            </label>
        </div>
    </div>



    <!--
    <div class="listing-element">
        <div style="width:70%;">
            Pracownik może edytować dokumenty do 3 dni?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;">
            <label class="switch">
            <input type="checkbox" name="pracownik_edycja3dni" value="1" >
            <span class="slider round"></span>
            </label>
        </div>
    </div>
    -->


    <div class="listing-element" style="flex-direction:column">
        <div style="width:100%;">
            <h4>Oświadczenie karty zabiegowej (niemedycznej)</h4>
            <p style="padding-bottom:20px;">Poniższe oświadczenie zostało wygenerowane automatycznie i stanowi opracowanie RODO w konsultacji z działem prawnym BeautyCheck. Jeśli posiadasz własną warstwę oświadczeń - możesz edytować poniższy tekst, jednak nie ponosimy odpowiedzi za jego skutki prawne w zmienionej formie. Zostaje ono dołączone do każdego podpisywanego dokumentu (nie dotyczy zabiegów medycznych).</p>
        </div>
        <div style="width:100%">



            <div id="quil-non-medical" style="height: 300px">
                <p></p>
            </div>
            <input type="hidden" id="nonMedicalDb" wire:model="nonMedical">
            <input type="hidden" id="quil-non-medical-input" name="nonMedical">
            <?php $__errorArgs = ['nonMedical'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>

    <div class="listing-element" style="flex-direction:column">
        <div style="width:100%;">
            <h4>Oświadczenie karty zabiegowej (medycznej)</h4>
            <p style="padding-bottom:20px;">Poniższe oświadczenie zostało wygenerowane automatycznie i stanowi opracowanie RODO w konsultacji z działem prawnym BeautyCheck. Jeśli posiadasz własną warstwę oświadczeń - możesz edytować poniższy tekst, jednak nie ponosimy odpowiedzi za jego skutki prawne w zmienionej formie. Zostaje ono dołączone do każdego podpisywanego dokumentu (dotyczy wyłącznie zabiegów medycznych).</p>
        </div>
        <div style="width:100%">



            <div id="quil-medical" style="height: 300px">
                <p></p>
            </div>

            <input type="hidden" id="medicalDb" wire:model="medical">
            <input type="hidden" id="quil-medical-input" name="medical">
            <?php $__errorArgs = ['medical'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="listing-element" style="flex-direction:column">
        <div style="width:100%;">
            <h4>Oświadczenie ogólnej karty klienta</h4>
            <p style="padding-bottom:20px;">Poniższe oświadczenie zostało wygenerowane automatycznie i stanowi opracowanie RODO w konsultacji z działem prawnym BeautyCheck. Jeśli posiadasz własną warstwę oświadczeń - możesz edytować poniższy tekst, jednak nie ponosimy odpowiedzi za jego skutki prawne w zmienionej formie. Zostaje ono dołączone do każdego podpisywanego dokumentu (dotyczy wyłącznie zabiegów medycznych).</p>
        </div>
        <div style="width:100%">



            <div id="quil-note" style="height: 300px">
                <p></p>
            </div>
            <input type="hidden" id="noteDb" wire:model="note">
            <input type="hidden" id="quil-note-input" name="note">
            <?php $__errorArgs = ['note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>


    <div class="listing-ending"></div>


    <div class="listing-actionbar flex-wrap btns" style="gap:10px">
        <button type="button" class="btn1" onclick="location.href='<?php echo e(url('functions/rodoreset')); ?>'"><i class="fas fa-history" aria-hidden="true"></i> Resetuj RODO</button>
        <button type="submit" class="btn1" style="" onclick="" id="submit-rodo-btn"><i class="fas fa-check-circle" aria-hidden="true"></i> Zapisz ustawienia</button>
    </div>
</form>
<?php $__env->startSection('addit_js'); ?>
    <script>
        $(document).ready(() => {
            var quillFooter = new Quill('#quil-footer', {
                theme: 'snow' // Выбор темы редактора (snow или bubble)
            });
            var quillNonMedical = new Quill('#quil-non-medical', {
                theme: 'snow' // Выбор темы редактора (snow или bubble)
            });
            var quillMedical = new Quill('#quil-medical', {
                theme: 'snow' // Выбор темы редактора (snow или bubble)
            });
            var quillNote = new Quill('#quil-note', {
                theme: 'snow' // Выбор темы редактора (snow или bubble)
            });

            setContentToEditor(quillFooter, document.querySelector('#footerDb').value);
            setContentToEditor(quillNonMedical, document.querySelector('#nonMedicalDb').value);
            setContentToEditor(quillMedical, document.querySelector('#medicalDb').value);
            setContentToEditor(quillNote, document.querySelector('#noteDb').value);
            handleSubmit()
            function setContentToEditor(className, content) {
                setTimeout(() => {
                    console.log()
                    if(content.length > 0) className.setContents(JSON.parse(content));
                },2000)

            }
            function handleSubmit(event) {
                //event.preventDefault()
                setContentToInput(quillFooter, '#quil-footer-input')
                quillFooter.on('text-change', () => {
                    setContentToInput(quillFooter, '#quil-footer-input')
                    //updateLivewire(document.querySelector('#quil-footer-input'), 'footer')
                })
                setContentToInput(quillNonMedical, '#quil-non-medical-input')
                quillNonMedical.on('text-change', () => {
                    setContentToInput(quillNonMedical, '#quil-non-medical-input')
                    //updateLivewire(document.querySelector('#quil-non-medical-input'), 'nonMedical')
                })
                setContentToInput(quillMedical, '#quil-medical-input')
                quillMedical.on('text-change', () => {
                    setContentToInput(quillMedical, '#quil-medical-input')
                    //updateLivewire(document.querySelector('#quil-medical-input'), 'medical')
                })
                setContentToInput(quillNote, '#quil-note-input')
                quillNote.on('text-change', () => {
                    setContentToInput(quillNote, '#quil-note-input')
                    // updateLivewire(document.querySelector('#quil-note-input'), 'note')
                })
            }
            function setContentToInput(className, element)
            {

                const editorText = className.getContents();
                if(document.querySelector(element).value.length > 0) document.querySelector(element).value = JSON.stringify(editorText)
            }
            
            
            
            
            
            
        })

    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/livewire/rodo-index.blade.php ENDPATH**/ ?>