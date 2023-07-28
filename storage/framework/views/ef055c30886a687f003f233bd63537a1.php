
    <?php $background = '#f0f1f1' ?>

    <div id="<?php echo e($block3_2_heading); ?>">
        <div class="boxinbox-titlebar">
            <div class="icon">
                <i class="<?php echo e($block3_2_icon); ?>" aria-hidden="true"></i>
            </div>
            <div style="margin-left:20px;"><h3><?php echo e($block3_2_title); ?></h3></div>
        </div>

        <?php if($block3_2_content_class == 'block3_2_aktualna_karta_klienta'): ?>
            <?php $__currentLoopData = $block3_doc_map_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="listing-titlebar-centered" style="margin-top:10px;">
                    <div style="color:black" >
                        <?php echo e($item['title']); ?>

                    </div>
                    <div style="display:flex;flex-direction:row;justify-content:center;align-items:center;">
                        <button type="button" onclick="location.href='document_editquestion.php?idkarty=10408&amp;iddokumentu=10408&amp;id_dokumentu=10408&amp;pytanie=2'" class="iconbutton-document editbutton"><i class="fas fa-edit" aria-hidden="true"></i></button>
                        <button type="button" onclick="location.href='document_moveupquestion.php?id_dokumentu=10408&amp;pytanie=2'" class="iconbutton-document"><i class="fas fa-chevron-up" aria-hidden="true"></i></button>
                        <button type="button" onclick="location.href='document_movedownquestion.php?id_dokumentu=10408&amp;pytanie=2'" class="iconbutton-document"><i class="fas fa-chevron-down" aria-hidden="true"></i></button>
                        <button type="button" onclick="return Confirm_Delete2()" class="iconbutton-document deletebutton"><i class="fas fa-times" aria-hidden="true"></i></button>
                        <script>
                            function Confirm_Delete2()
                            {
                                if (confirm("Czy na pewno chcesz usunć?") == true) {
                                    location.href='document_deletequestion.php?id_dokumentu=10408&pytanie=2'
                                } }
                        </script>

                    </div>
                </div>
                <div class="listing-element-ending">
                    <div style="width:100%;color:black">
                        <?php $__currentLoopData = $item['vars']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input type="radio" id="tak2" name="2" value="<?php echo e($var); ?>">
                            <label for="tak2"><?php echo e($var); ?></label><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                        <?php if(isset($item['isAddit']) && $item['isAddit'] == 'Y'): ?>
                        <label for="pytanieuzupelniajace">Jeśli tak, to na co?</label><br>
                        <input type="text" class="formularz" id="pytanieuzupelniajace" name="pytanieuzupelniajace" required="">
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php elseif($block3_2_content_class == 'block3_2_pytania'): ?>
            <div class="boxinbox">
                <div class="listing-actionbar element-header" style="justify-content: flex-start;">
                    <h4 style="padding-right:10px;">Informacja:</h4>
                    <p>Zmiany w karcie zapisywane są w sposób automatyczny po każdej akcji.</p>
                </div>

                <script>

                    // function pokazformularzpo() {
                    //     document.getElementById("po").style.display = "block";
                    //     document.getElementById("ptn").style.display = "none";
                    //     document.getElementById("ptnt").style.display = "none";
                    //     document.getElementById("ptnn").style.display = "none";
                    //     document.getElementById("pwo").style.display = "none";
                    //     document.getElementById("pjo").style.display = "none";
                    //     window.location.href = "#pytanie";
                    //     return false;
                    // }
                    // function pokazformularzptn() {
                    //     document.getElementById("po").style.display = "none";
                    //     document.getElementById("ptn").style.display = "block";
                    //     document.getElementById("ptnt").style.display = "none";
                    //     document.getElementById("ptnn").style.display = "none";
                    //     document.getElementById("pwo").style.display = "none";
                    //     document.getElementById("pjo").style.display = "none";
                    //     window.location.href = "#pytanie";
                    //     return false;
                    // }
                    // function pokazformularzptnt() {
                    //     document.getElementById("po").style.display = "none";
                    //     document.getElementById("ptn").style.display = "none";
                    //     document.getElementById("ptnt").style.display = "block";
                    //     document.getElementById("ptnn").style.display = "none";
                    //     document.getElementById("pwo").style.display = "none";
                    //     document.getElementById("pjo").style.display = "none";
                    //     window.location.href = "#pytanie";
                    //     return false;
                    // }
                    // function pokazformularzptnn() {
                    //     document.getElementById("po").style.display = "none";
                    //     document.getElementById("ptn").style.display = "none";
                    //     document.getElementById("ptnt").style.display = "none";
                    //     document.getElementById("ptnn").style.display = "block";
                    //     document.getElementById("pwo").style.display = "none";
                    //     document.getElementById("pjo").style.display = "none";
                    //     window.location.href = "#pytanie";
                    //     return false;
                    // }
                    // function pokazformularzpwo() {
                    //     document.getElementById("po").style.display = "none";
                    //     document.getElementById("ptn").style.display = "none";
                    //     document.getElementById("ptnt").style.display = "none";
                    //     document.getElementById("ptnn").style.display = "none";
                    //     document.getElementById("pwo").style.display = "block";
                    //     document.getElementById("pjo").style.display = "none";
                    //     window.location.href = "#pytanie";
                    //     return false;
                    // }
                    // function pokazformularzpjo() {
                    //     document.getElementById("po").style.display = "none";
                    //     document.getElementById("ptn").style.display = "none";
                    //     document.getElementById("ptnt").style.display = "none";
                    //     document.getElementById("ptnn").style.display = "none";
                    //     document.getElementById("pwo").style.display = "none";
                    //     document.getElementById("pjo").style.display = "block";
                    //     window.location.href = "#pytanie";
                    //     return false;
                    // }

                </script>


                <div class="listing-actionbar" style="flex-wrap:wrap;">
                    <?php $__currentLoopData = $block3_doc_pytania_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <button type="button" class="btn1 pokazformula-btn" style="width:100%;margin-bottom:10px;" data-click="#pokazformula-<?php echo e($item['id']); ?>"><i class="fas fa-plus-circle" aria-hidden="true"></i><?php echo e($item['question']); ?></button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






                </div>


                <?php $__currentLoopData = $block3_doc_pytania_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="pokazformula-item <?php if($item['id'] == 1): ?> active <?php endif; ?>" id="pokazformula-<?php echo e($item['id']); ?>">
                        <form action="document_addquestion.php?id=10408&amp;type=po" method="post">
                            <div class="listing-actionbar" style="flex-direction:column!important;align-items:flex-start;">

                                <label for="pytanie" style="margin-bottom:10px;"><b><?php echo e($item['description']); ?></b></label>
                                <?php if(isset($item['isTextarea']) && $item['isTextarea'] == 'Y'): ?>
                                <textarea id="pytanie" type="textarea" name="pytanie" class="formularz" rows="4" cols="50" minlength="3" maxlength="2500" required=""></textarea>
                                <?php endif; ?>

                                <?php if(isset($item['vars_question']) && $item['vars_question'] != ''): ?>
                                    <div style="width:100%;">
                                        <br><label><?php echo e($item['vars_question']); ?></label><br>
                                        <?php $__currentLoopData = $item['vars']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input type="radio" id="tak" name="abcd" value="<?php echo e($var); ?>">
                                        <label for="tak"><?php echo e($var); ?></label><br>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
                                    </div>
                                <?php endif; ?>

                                <?php if(isset($item['input_question']) && $item['input_question'] != ''): ?>
                                    <div style="width:100%;">
                                        <label for="pytanieuzupelniajace">Jeśli klient wybierze "NIE" - zostanie poproszony o odpowiedź na pytanie o treści:</label>

                                        <?php for($i = 1; $i <= $item['input_count']; $i++): ?>
                                            <?php if(isset($item['input_des']) && $item['input_des'] != ''): ?> <?php echo e($item['input_des'].' '.$i); ?> <?php endif; ?>
                                        <input type="text" class="formularz" id="pytanieuzupelniajace" name="pytanieuzupelniajace" required="">
                                        <?php endfor; ?>
                                    </div>
                                <?php endif; ?>
                                <button type="submit" class="btn1" style="margin-top:10px;"><i class="fas fa-check-circle" aria-hidden="true"></i>  Dodaj to pytanie</button>

                            </div>
                        </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Pytanie otwarte formularz -->






















































































































































            </div>

        <?php endif; ?>

    </div>

<?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/blocks/block3_dock.blade.php ENDPATH**/ ?>