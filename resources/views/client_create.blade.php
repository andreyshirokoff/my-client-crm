@extends('layout.app')

@section('content')
    <div class="box">
        @include('blocks.block1', [
            'block1_icon' => 'fas fa-user-plus',
            'block1_title' => 'Dodaj klienta',
            'block1_content_class' => 'block1_dobaj_klienta',
            'block1_content' => 'blocks_content.block1_dobaj_klienta',
        ])
    </div>
@endsection
