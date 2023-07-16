@extends('layout.app')



@section('content')
    <div class="box">
        @include('blocks.block2_2', [
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
        ])
    </div>
@endsection

@section('layout_js')
    <script>
        layout.canvasElement()
    </script>
@endsection
