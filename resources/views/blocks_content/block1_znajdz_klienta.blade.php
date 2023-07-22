<div class="boxinbox-inside">

    <form data-action="{{route('search-client')}}" data-pag="{{route('search-client-count')}}" data-token="{{csrf_token()}}" id="search-client-form">

        <div id="searchbox-title" style="width:100%;">
            <b>Możesz wyszukać klienta po nazwisku, telefonie lub adresie email.</b>
        </div>
        <div style="display:flex;flex-direction:row;width:100%;margin-top:15px;justify-content:space-between" class="input-cont">
            <div style="width:32%; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start;">
                Nazwisko: (min. 3 znaki)<br>
                <input type="text" name="nazwisko" id="fullname" class="formularz" minlength="3" value="">
            </div>
            <div class="boxseparator1procent"></div>
            <div style="width:32%; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start;">
                Email:<br>
                <input type="text" name="mail" id="email" class="formularz" value="">
            </div>
            <div class="boxseparator1procent"></div>
            <div style="width:32%; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start;">
                Tel:<br>
                <input type="tel" name="tel" id="phone" class="formularz" value="">
            </div>
        </div>
    </form>
</div>

<div class="listing-actionbar">
    <div style="width:80%;">
    </div>
    <button style="width:200px;" type="button" id="search-client-btn" class="btn1"><i class="fas fa-search" aria-hidden="true"></i> Szukaj</button>
</div>


