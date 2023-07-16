<form action="usrpin-save.php" method="post">

    <div class="listing-titlebar" style="margin-top:10px;">
        <div style="width:100%">
            <h6>Zabezpiecz aplikację pinem.</h6>
            <p>Włączenie tej opcji sprawi, że przy próbie wyjścia z trybu podpisu dokumentu aplikacja będzie wymagała potwierdzenia akcji pinem. Uniemożliwi to dostęp pacjentowi do wrażliwych danych. </p>
        </div>
    </div>
    <div class="listing-element input-element">
        <div style="width:40%;">
            Czy włączyć zabezpieczenie pinem?
        </div>
        <div style="width:60%;display:flex;justify-content:flex-end;">
            <label class="switch">
                <input type="checkbox" name="use_pin" id="use_pin" value="1">
                <span class="slider round"></span>
            </label>
        </div>
    </div>

    <div class="listing-element input-element">
        <div style="width:40%;">
            Ustaw/zmień pin (4 cyfry)
        </div>
        <div style="width:60%;">
            <input type="password" class="formularz" name="pin_value" id="pin_value" value="" inputmode="numeric" pattern="[0-9]*" maxlength="4" minlength="4">  <i class="far fa-eye" id="togglePin" style="margin-left: -40px; cursor: pointer; display:none" aria-hidden="true"></i>
        </div>
    </div>

    <div class="listing-actionbar">
        <button class="btn1" onclick="zapiszpodpis()"><i class="far fa-check-circle" aria-hidden="true" style="margin-right: 10px;color:white"></i>Zapisz zmiany</button>
    </div>


</form>
