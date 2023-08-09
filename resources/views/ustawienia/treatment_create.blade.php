@extends('layout.app')
@section('additional_css')
    <link rel="stylesheet" href="{{asset('css/application.css')}}">
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
@endsection

@section('page')
    <a href="{{url('dashboard')}}">Strona główna</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="{{url('dashboard/ustawienia')}}">Ustawienia</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="javascript:void(0)">Dodaj zabieg</a>
@endsection

@section('content')
    <div class="box">
        @include('blocks.block2_2', [
            'block2_2_icon' => 'fas fa-cog',
            'block2_2_title' => 'Ustawienia',
            'block3_3_content_class' => 'block3_2_dodaj_zabieg',
        ])
    </div>
@endsection

