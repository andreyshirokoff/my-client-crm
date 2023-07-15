@extends('layout.app')

@section('content')
    <div class="whitebox-listing">
        <div onclick="location.href='functions/client_create.php';" class="colorbox33">
            <div class="whiteboxiconbox">
                <i class="fas fa-user-plus" aria-hidden="true"></i>
            </div>
            <h3>Dodaj klienta</h3>
            <span>Zarejestruj nowego klienta w Twoim miejscu Beauty.</span>
        </div>

        <div class="boxseparator1procent"></div>

        <div onclick="location.href='functions/client_search.php?baza=on';" class="colorbox33">
            <div class="whiteboxiconbox">
                <i class="fas fa-search" aria-hidden="true"></i>
            </div>
            <h3>Znajdź klienta</h3>
            <span>Znajdź klienta w bazie aby wykonać nowy zabieg.</span>
        </div>

        <div class="boxseparator1procent"></div>

        <div onclick="location.href='functions/document_search.php';" class="colorbox33">
            <div class="whiteboxiconbox">
                <i class="far fa-file" aria-hidden="true"></i>
            </div>
            <h3>Baza dokumentów</h3>
            <span>Przeglądaj dokumenty podpisane przez klientów.</span>
        </div>

    </div>
@endsection
