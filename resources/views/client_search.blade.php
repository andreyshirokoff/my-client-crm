@extends('layout.app')

@section('page')
    <a href="{{url('dashboard')}}">Strona główna</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="{{url('dashboard/client-search')}}">Znajdź klienta</a>
@endsection

@section('content')
    <livewire:client-index>
@endsection
