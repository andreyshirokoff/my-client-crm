@extends('layout.app')

@section('content')
    <div class="box">
        @include('blocks.block1', [
            'block1_icon' => 'fas fa-search',
            'block1_title' => 'Znajdź klienta',
            'block1_content_class' => 'block1_znajdz_klienta',
            'block1_content' => 'blocks_content.block1_znajdz_klienta',
        ])
    </div>
    <div class="box">
        @include('blocks.block1', [
            'block1_icon' => 'fas fa-user-friends',
            'block1_title' => 'Wyniki',
            'block1_content_class' => 'block1_wyniki',
            'block1_content' => 'blocks_content.block1_wyniki',
        ])
    </div>
@endsection
