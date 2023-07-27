@extends('layout.app')

@section('content')
    <div class="box">
        @include('blocks.block2_2', [
            'block2_2_icon' => 'fas fa-user',
            'block2_2_title' => 'Profil klienta',
            'block3_3_content_class' => 'block3_2_profil_klienta',
        ])
    </div>
@endsection
