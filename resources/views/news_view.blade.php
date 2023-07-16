@extends('layout.app')

@section('content')
    <div class="box">
        @include('blocks.block1', [
                'block1_icon' => 'far fa-newspaper',
                'block1_title' => 'Newsy',
                'block1_content_class' => 'block1_newsy',
                'block1_content' => 'blocks_content.block1_newsy',
            ])
    </div>
@endsection
