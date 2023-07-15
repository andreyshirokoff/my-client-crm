<form action="client_create_token.php" method="post">

    <div class="listing-titlebar" style="margin-top:10px;">
        <div style="width:100%">
            <h3>Wypełnij poniżesze dane by utworzyć nowego klienta.</h3><br>
            <p style="padding-top:10px;">Uwaga: Konta klientów tworzone są globalnie, oznacza to, że na całą aplikację klient posiada jedno konto. Zapytaj klienta czy kiedykolwiek rejestrował się do aplikacji BeautyCheck.</p>
        </div>
    </div>
    <!-- Tu zaczyna się formularz z danymi -->
    <div class="listing-element">
        <div style="width:calc(40% - 50px);">
            Imię
        </div>
        <div style="width:60%;">
            <input type="text" name="imie" class="formularz" minlength="3" maxlength="20" value="" required="" pattern="[-a-zA-ZÀ-ž\s]+">
        </div>
    </div>

    <div class="listing-element">
        <div style="width:calc(40% - 50px);">
            Nazwisko
        </div>
        <div style="width:60%;">
            <input type="text" name="nazwisko" class="formularz" minlength="3" maxlength="30" value="" required="" pattern="[-a-zA-ZÀ-ž\s]+">
        </div>
    </div>

    <div class="listing-element">
        <div style="width:calc(40% - 50px);">
            E-mail
        </div>
        <div style="width:60%;">
            <input type="email" name="email" id="email" class="formularz" value="" onkeyup="success()">
        </div>
    </div>

    <div class="listing-element">
        <div style="width:calc(40% - 50px);">
            Nr. telefonu<br>
            (same cyfry bez spacji i myślników)
        </div>
        <div style="width:60%;">
            <input type="tel" name="tel" id="tel" class="formularz" placeholder="np. 123456789" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" value="" onkeyup="success()">
        </div>
    </div>

    <div class="listing-element">
        <div style="width:calc(40% - 50px);">
            Jak wysłać kod?
        </div>
        <div style="width:60%;">
            <div class="d-flex gap-3 align-items-center"><input type="radio" id="send_via_email" name="how_to_send" value="send_via_email" required="" disabled="">    <label for="send_via_email">Na podany adres e-mail</label><br></div>
            <div class="d-flex gap-3 align-items-center mt-3"><input type="radio" id="send_via_sms" name="how_to_send" value="send_via_sms" required="" disabled="">    <label for="send_via_sms">Na podany nr telefonu (Masz 10 smsów w pakiecie)</label></div>
        </div>
    </div>
    <script>
        if(document.getElementById("email").value==="") {
            document.getElementById('send_via_email').disabled = true;
            document.getElementById('send_via_email').checked=false;
        } else {
            document.getElementById('send_via_email').disabled = false;
        }

        if(document.getElementById("tel").value==="") {
            document.getElementById('send_via_sms').disabled = true;
            document.getElementById('send_via_sms').checked=false;
        }


        else {
            document.getElementById('send_via_sms').disabled = false;           }

        function success() {
            if(document.getElementById("email").value==="") {
                document.getElementById('send_via_email').disabled = true;
                document.getElementById('send_via_email').checked=false;
            } else {
                document.getElementById('send_via_email').disabled = false;
            }

            if(document.getElementById("tel").value==="") {
                document.getElementById('send_via_sms').disabled = true;
                document.getElementById('send_via_sms').checked=false;
            }
            else {
                document.getElementById('send_via_sms').disabled = false;            }

        }
    </script>

    <div class="listing-ending"></div>


    <input type="hidden" name="token" value="927452">


    <input type="hidden" name="sms_quantity" value="10">

    <div class="listing-actionbar">
        <button type="submit" class="btn1" style="margin-left:10px;width:200px;"><i class="fas fa-check-circle" aria-hidden="true"></i> Zarejestruj</button>
    </div>
</form>
