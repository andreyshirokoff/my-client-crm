@extends('layout.app')

@section('page')
    <a href="{{url('dashboard')}}">Strona główna</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="{{url('dashboard/client-search')}}">Znajdź klienta</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="{{url('dashboard/clients')}}?clientId={{$_GET['clientId']}}">Profil klienta</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="javascript:void(0)">Stare karty klienta</a>
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
        <livewire:old-client-card-index/>
{{--        @include('blocks.block1', [--}}
{{--            'block1_icon' => 'fas fa-user-friends',--}}
{{--            'block1_title' => ' Stare karty klienta',--}}
{{--            'block1_content_class' => 'block1_old_client_cards',--}}
{{--            'block1_content' => 'blocks_content.block1_old_client_cards',--}}
{{--        ])--}}
    </div>
@endsection

@section('addit_js')
    @livewireScripts
@endsection

