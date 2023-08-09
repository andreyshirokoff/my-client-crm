@extends('layout.app')

@section('page')
    <a href="{{url('dashboard')}}">Strona główna</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="{{url('dashboard/client-search')}}">Znajdź klienta</a>
    <span style="font-weight: 500;">&nbsp;&gt;&nbsp;</span>
    <a href="javascript:void(0)">Profil klienta</a>
@endsection

@section('content')
    <div class="box">
        @include('blocks.block2_2', [
            'block2_2_icon' => 'fas fa-user',
            'block2_2_title' => 'Profil klienta',
            'block3_3_content_class' => 'block3_2_profil_klienta',
        ])
    </div>
@endsection

{{--@section('addit_js')--}}
{{--    <script>--}}
{{--        --}}
{{--    </script>--}}
{{--@endsection--}}
