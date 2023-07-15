<div class="boxinbox-inside">

    <form action="client_search.php" method="get">

        <div id="searchbox-title" style="width:100%;">
            <b>Możesz wyszukać klienta po nazwisku, telefonie lub adresie email.</b>
        </div>
        <div style="display:flex;flex-direction:row;width:100%;margin-top:15px;justify-content:space-between" class="input-cont">
            <div style="width:32%; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start;">
                Nazwisko: (min. 3 znaki)<br>
                <input type="text" name="nazwisko" class="formularz" minlength="3" value="">
            </div>
            <div class="boxseparator1procent"></div>
            <div style="width:32%; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start;">
                Email:<br>
                <input type="text" name="mail" class="formularz" value="">
            </div>
            <div class="boxseparator1procent"></div>
            <div style="width:32%; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start;">
                Tel:<br>
                <input type="tel" name="tel" class="formularz" value="">
            </div>
        </div>
    </form>
</div>

<div class="listing-actionbar">
    <div style="width:80%;">
    </div>
    <button style="width:200px;" type="submit" class="btn1"><i class="fas fa-search" aria-hidden="true"></i> Szukaj</button>
</div>


