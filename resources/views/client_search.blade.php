@extends('layout.app')

@section('page')
    <a href="{{url('dashboard')}}">Strona główna</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="javascript:void(0)">Znajdź klienta</a>
@endsection

@section('content')
    <livewire:client-index>
@endsection
