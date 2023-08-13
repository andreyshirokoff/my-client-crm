@extends('layout.app')

@section('page')
    <a href="{{url('dashboard')}}">Strona główna</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="javascript:void(0)">Baza dokumentów</a>
@endsection

@section('content')
{{--    <div class="box">--}}
{{--        @include('blocks.block1', [--}}
{{--            'block1_icon' => 'fas fa-search',--}}
{{--            'block1_title' => 'Znajdź dokument',--}}
{{--            'block1_content_class' => 'block1_znajdz_dokument',--}}
{{--            'block1_content' => 'blocks_content.block1_znajdz_dokument',--}}
{{--        ])--}}
{{--    </div>--}}
    <div class="box">
        @include('blocks.block1', [
            'block1_icon' => 'fas fa-user-friends',
            'block1_title' => 'Baza dokumentów',
            'block1_content_class' => 'block1_klienci',
            'block1_content' => 'blocks_content.block1_klienci',
        ])
    </div>
@endsection

@section('addit_js')
    @livewireScripts
@endsection

