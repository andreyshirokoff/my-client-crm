@extends('layout.app')

@section('content')
    <div class="box">
        <div class="boxinbox__body">
            <div class="boxinbox-titlebar" style="margin-top:10px;">
                <div class="icon">
                    <i class="far fa-newspaper" aria-hidden="true"></i>
                </div>
                <div style="margin-left:20px;">
                    <h3>Newsy</h3>
                </div>
            </div>
            <div class="boxinbox block1_newsy">
                <div class="boxinbox-inside">
                    @if($news->avatars)
                        <img style="border-radius:20px;padding-bottom:20px;" src="/storage/{{$news->avatars}}">
                    @endif
                    <h3>{{$news?->name}}</h3><br>

                    <div class="w-100 mt-2">
                        {!! $news->body !!}
                    </div>
                </div>
                <div class="listing-actionbar">
                    <a href="{{route('dashboard')}}" class="btn1 ms-2" style="text-decoration:none;"><i class="fas fa-chevron-left" aria-hidden="true"></i> Wróć</a>
                </div>
            </div>
        </div>
    </div>
@endsection
