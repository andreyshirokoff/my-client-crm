@extends('layout.app')
@section('additional_css')
    <link rel="stylesheet" href="{{asset('css/application.css')}}">
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
@endsection

@section('page')
    <a href="{{route('dashboard')}}">Strona główna</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="javascript:void(0)">Ustawienia</a>
@endsection

@section('content')
    <div class="box">
        @include('blocks.block2', [
            'block2_icon' => 'fas fa-cog',
            'block2_title' => 'Ustawienia',
            //'block1_content_class' => 'block1_znajdz_dokument',
            //'block1_content' => 'blocks_content.block1_znajdz_dokument',
        ])
    </div>
@endsection

@section('addit_js')
    <script>
        $(document).ready(() => {
            layout.bottomButtons()
        })
    </script>
@endsection
