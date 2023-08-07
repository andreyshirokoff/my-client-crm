@extends('layout.app')



@section('content')
    <div class="box">
        @include('blocks.block2_2', [
            'block2_2_icon' => 'fas fa-cog',
            'block2_2_title' => 'Ustawienia',
            'block3_3_content_class' => 'block3_2_card_client_delete',
        ])
    </div>
@endsection

@section('addit_js')
    <script>
        layout.canvasElement()
    </script>
@endsection
