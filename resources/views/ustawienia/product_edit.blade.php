@extends('layout.app')
@section('additional_css')
    <link rel="stylesheet" href="{{asset('css/application.css')}}">
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
@endsection


@section('content')
    <div class="box">
        @include('blocks.block2_2', [
            'block2_2_icon' => 'fas fa-cog',
            'block2_2_title' => 'Ustawienia',
            'block3_3_content_class' => 'block3_2_product_edit',
        ])
    </div>
@endsection

