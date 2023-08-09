@extends('layout.app')

@section('page')
    <a href="{{url('dashboard')}}">Strona główna</a>
@endsection

@section('content')
    <div class="whitebox-listing head-links">
        <div onclick="location.href='{{route('createClient')}}';" class="colorbox33">
            <div class="whiteboxiconbox">
                <i class="fas fa-user-plus" aria-hidden="true"></i>
            </div>
            <h3>Dodaj klienta</h3>
            <span>Zarejestruj nowego klienta w Twoim miejscu Beauty.</span>
        </div>

        <div class="boxseparator1procent"></div>

        <div onclick="location.href='{{route('searchClient')}}';" class="colorbox33">
            <div class="whiteboxiconbox">
                <i class="fas fa-search" aria-hidden="true"></i>
            </div>
            <h3>Znajdź klienta</h3>
            <span>Znajdź klienta w bazie aby wykonać nowy zabieg.</span>
        </div>

        <div class="boxseparator1procent"></div>

        <div onclick="location.href='dashboard/client-base';" class="colorbox33">
            <div class="whiteboxiconbox">
                <i class="far fa-file" aria-hidden="true"></i>
            </div>
            <h3>Baza dokumentów</h3>
            <span>Przeglądaj dokumenty podpisane przez klientów.</span>
        </div>

    </div>
    {{--@include('blocks.block1', [
        'block1_icon' => 'fas fa-hand-holding-heart',
        'block1_title' => 'Twoje ostatnie 5 zabiegów:',
        'block1_content_class' => 'block1_twoje_ostatnie_5_zabiegow',
        'block1_content' => 'blocks_content.block1_twoje_ostatnie_5_zabiegow',
    ])--}}
    <div class="boxinbox__body">
        <div class="boxinbox-titlebar" style="margin-top:10px;">
            <div class="icon">
                <i class="fas fa-hand-holding-heart" aria-hidden="true"></i>
            </div>
            <div style="margin-left:20px;">
                <h3>Twoje ostatnie 5 zabiegów:</h3>
            </div>
        </div>
        <div class="boxinbox block1_nowosci_w_beautycheck">
            <div class="listing-titlebar">
                <div style="width:28%">
                    <h6>Nazwa zabiegu</h6>
                </div>
                <div style="width:44%">
                    <h6>Imię i nazwisko klienta, notatka</h6>
                </div>
                <div style="width:15%;">
                    <h6>Data</h6>
                </div>
                <div style="width:7%;">
                    <h6>Karta</h6>
                </div>
                <div style="width:6%;">
                    <h6>Akcje</h6>
                </div>
            </div>

            @if(count($lastServices) > 0)
                @foreach($lastServices as $lastService)
                    <div class="listing-element">
                        <div style="width:28%">
                            <h6>{{\App\Models\Service::find($lastService->service_id)?->name}}</h6>
                        </div>
                        <div style="width:44%">
                            <h6>{{\App\Models\Client::find($lastService->client_id)?->fullname}}</h6>
                        </div>
                        <div style="width:15%;">
                            <h6>{{\Carbon\Carbon::parse($lastService->created_at)->format('d.m.Y')}}</h6>
                        </div>
                        <div style="width:7%;">
                            <h6><a href="{{route('edit.procedure')}}?clientServiceId={{$lastService->id}}&clientId={{$lastService->client_id}}"><i class="fa-solid fa-pen-to-square i-black"></i></a></h6>
                        </div>
                        <div style="width:6%;">
                            <h6><a href="{{route('clients')}}?clientId={{$lastService->client_id}}"><i class="far fa-eye"></i></a></h6>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <div class="boxinbox__body">
        <div class="boxinbox-titlebar" style="margin-top:10px;">
            <div class="icon">
                <i class="far fa-newspaper" aria-hidden="true"></i>
            </div>
            <div style="margin-left:20px;">
                <h3>Nowości w MyClient:</h3>
            </div>
        </div>
        <div class="boxinbox block1_nowosci_w_beautycheck">
            @foreach($news as $newsItem)
                <div class="listing-element">
                    <div style="width:75%" class="listing-element__width75">
                        <h6>{{$newsItem?->name}}</h6>
                    </div>
                    <div style="width:15%;" class="listing-element__width15">
                        <h6>{{\Carbon\Carbon::parse($newsItem->created_at)->format('d.m.Y')}}</h6>
                    </div>
                    <div style="width:10%;display:flex;flex-direction:row;" class="listing-element__width10">
                        <a href="{{route('news', ['slug' => $newsItem->slug])}}" class="iconbutton" style="text-decoration:none;">
                            <i class="far fa-eye" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('addit_js')
    <script>
        $(document).ready(() => {
            layout.colorbox33()
        })
    </script>
@endsection
