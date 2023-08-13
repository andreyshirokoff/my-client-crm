@extends('layout.app')

@section('page')
    <a href="{{url('dashboard')}}">Strona główna</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="{{url('dashboard/client-search')}}">Znajdź klienta</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="{{url('dashboard/clients')}}?clientId={{$_GET['clientId']}}">Profil klienta</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="javascript:void(0)">Wypełnienie karty klienta</a>
@endsection

@section('content')
    <livewire:add-answer-to-karta-index/>
@endsection
