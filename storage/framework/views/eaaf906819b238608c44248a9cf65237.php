<?php $__env->startSection('content'); ?>
    <div class="box">
        <?php echo $__env->make('blocks.block2_2', [
            'background' => '#f0f1f1',
            'block2_2_icon' => 'fas fa-cog',
            'block2_2_title' => 'Ustawienia',
            'block3_3_content_class' => 'aktualna_karta_klienta',
            'block3_3_content_class_1' => 'pytania',
            'block3_doc_map_array' => [
                [
                    'title' => 'Skąd się Pani o nas dowiedziała?',
                    'vars' => [
                        'inst',
                        'face',
                        'z polecenia',
                        'inne'
                    ],
                    'isAddit' => 'Y'
                ],
                [
                    'title' => 'Czy posiada Pan(i) jakieś alergie?',
                    'vars' => [
                        'inst',
                        'face',
                    ],
                    'isAddit' => 'N'
                ]
            ],
            'block3_doc_pytania_array' => [
                [
                    'id' => 1,
                    'question' => 'Pytanie otwarte z dowolną odpowiedzią',
                    'description' => 'asdnakjsddasdassd',
                    'vars_question' => 'Możliwe odpowiedzi, które będzie mógł wybrać klient to:',
                    'vars' => [
                        'tak', 'nie'
                    ],
                    'input_question' => 'Jeśli klient wybierze "NIE" - zostanie poproszony o odpowiedź na pytanie o treści:',
                    'input_count' => 1
                ],
                [
                    'id' => 2,
                    'question' => 'Sasdsadsa',

                    'description' => 'asdnakjsdwqewqewqedasdassd',
                    'isTextarea' => 'Y',
                    'vars_question' => 'Możliasdwe odasdaspowiedzi, które będzieasd mógł wybrać klient to:',
                    'vars' => [
                        'tak', 'siak'
                    ],
                    'input_question' => 'Jeśli klient wybierze "NIE" - zostanie poproszony o odpowiedź na pytanie o treści:',
                    'input_des' => 'asdas',
                    'input_count' => 3
                ],

            ],
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('addit_js'); ?>
    <script>
        layout.canvasElement()
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/di.251/data/www/my-client-crm.digitallab.com.ua/resources/views/ustawienia/document_kartaklienta_edit.blade.php ENDPATH**/ ?>