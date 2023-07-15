@extends('layout.app')

{{--@section('block1_icon')--}}
{{--    fas fa-hand-holding-heart--}}
{{--@endsection--}}
{{--@section('block1_title')--}}
{{--    Twoje ostatnie 5 zabiegów:--}}
{{--@endsection--}}

@section('content')
    <div class="whitebox-listing head-links">
        <div onclick="location.href='/functions/client_create';" class="colorbox33">
            <div class="whiteboxiconbox">
                <i class="fas fa-user-plus" aria-hidden="true"></i>
            </div>
            <h3>Dodaj klienta</h3>
            <span>Zarejestruj nowego klienta w Twoim miejscu Beauty.</span>
        </div>

        <div class="boxseparator1procent"></div>

        <div onclick="location.href='/functions/client_search?baza=on';" class="colorbox33">
            <div class="whiteboxiconbox">
                <i class="fas fa-search" aria-hidden="true"></i>
            </div>
            <h3>Znajdź klienta</h3>
            <span>Znajdź klienta w bazie aby wykonać nowy zabieg.</span>
        </div>

        <div class="boxseparator1procent"></div>

        <div onclick="location.href='/functions/document_search';" class="colorbox33">
            <div class="whiteboxiconbox">
                <i class="far fa-file" aria-hidden="true"></i>
            </div>
            <h3>Baza dokumentów</h3>
            <span>Przeglądaj dokumenty podpisane przez klientów.</span>
        </div>

    </div>
    @include('blocks.block1', [
        'block1_icon' => 'fas fa-hand-holding-heart',
        'block1_title' => 'Twoje ostatnie 5 zabiegów:',
        'block1_content_class' => 'block1_twoje_ostatnie_5_zabiegow',
        'block1_content' => 'blocks_content.block1_twoje_ostatnie_5_zabiegow',
    ])
    @include('blocks.block1', [
        'block1_icon' => 'far fa-newspaper',
        'block1_title' => 'Nowości w BeautyCheck:',
        'block1_content_class' => 'block1_nowosci_w_beautycheck',
        'block1_content' => 'blocks_content.block1_nowosci_w_beautycheck',
    ])
@endsection

@section('layout_js')
    <script>
        $(document).ready(() => {
            layout.colorbox33()
        })
    </script>
@endsection
