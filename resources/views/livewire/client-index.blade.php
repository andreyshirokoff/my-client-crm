<div>
    <div class="box">
        <div class="boxinbox__body">
            <div class="boxinbox-titlebar" style="margin-top:10px;">
                <div class="icon">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </div>
                <div style="margin-left:20px;">
                    <h3>Znajdź klienta</h3>
                </div>
            </div>
            <div class="boxinbox block1_znajdz_klienta" style="background: #f0f1f1">
                <div class="boxinbox-inside">

                    <form id="search-client-form">

                        <div id="searchbox-title" style="width:100%;">
                            <b>Możesz wyszukać klienta po nazwisku, telefonie lub adresie email.</b>
                        </div>
                        <div style="display:flex;flex-direction:row;width:100%;margin-top:15px;justify-content:space-between" class="input-cont">
                            <div style="width:32%; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start;">
                                Nazwisko: (min. 3 znaki)<br>
                                <input type="text" name="nazwisko" id="fullname" class="formularz" minlength="3" value="" wire:model="fullname">
                            </div>
                            <div class="boxseparator1procent"></div>
                            <div style="width:32%; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start;">
                                Email:<br>
                                <input type="text" name="mail" id="email" class="formularz" value="" wire:model="email">
                            </div>
                            <div class="boxseparator1procent"></div>
                            <div style="width:32%; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start;">
                                Tel:<br>
                                <input type="tel" name="tel" id="phone" class="formularz" value="" wire:model="phone" placeholder="+48 (___) ___-__-__">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="listing-actionbar">
                    <div style="width:80%;">
                    </div>

                    <button style="width:200px;" type="button" id="search-client-btn" class="btn1" wire:click.prevent="checkClients"><i class="fas fa-search" aria-hidden="true"></i> Szukaj</button>
                </div>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="boxinbox__body">
            <div class="boxinbox-titlebar" style="margin-top:10px;">
                <div class="icon">
                    <i class="fas fa-user-friends" aria-hidden="true"></i>
                </div>
                <div style="margin-left:20px;">
                    <h3>Wyniki</h3>
                </div>
            </div>
            <div class="boxinbox block1_wyniki" style="background: #f0f1f1">
                <div class="listing-titlebar">
                    <div style="width:40%;">
                        <h6>Imię i Nazwisko</h6>
                    </div>
                    <div style="width:40%;">
                        <h6>E-Mail</h6>
                    </div>
                    <div style="width:10%;">
                        <h6>Tel</h6>
                    </div>
                    <div style="width:10%;display:flex;justify-content:flex-end;">
                        <h6>Pokaż</h6>
                    </div>
                </div>
                    <div>
                        @foreach($clients as $client)
                            <div class="listing-element">
                                <div style="width:40%;">
                                    <h6>{{$client->fullname}}</h6>
                                </div>
                                <div style="width:40%;">
                                    <h6>{{$client->email}}</h6>
                                </div>
                                <div style="width:10%;">
                                    <h6>{{$client->phone}}</h6>
                                </div>
                                <div style="width:10%;display:flex;justify-content:flex-end;" class="width-10">
                                    <h6>Pokaż</h6>
                                </div>
                            </div>
                        @endforeach

                        <div class="pagination-wrap mt-3">
{{--                            @if(count($clients) > 0)--}}
{{--                                {{ $clients->links() }}--}}
{{--                            @endif--}}
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
