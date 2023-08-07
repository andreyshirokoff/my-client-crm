<div class="w-100">
    @if($isLimit)
        <div class="boxinbox">
            <p>Nie możesz dodać więcej pracowników (limit pakietu).</p>
        </div>

    @else
        <div class="boxinbox block1_dobaj_klienta" style="background: #f0f1f1">
            <form wire:submit.prevent="createUser" method="post">
                <div class="listing-titlebar" style="margin-top:10px;">
                    <div style="width:100%">
                        <h3>Tworzenie nowego pracownika</h3><br>
                        <p style="padding-top:10px;">Uwaga: Wprowadź dane, za pomocą których nowy pracownik będzie dostępny.</p>
                    </div>
                </div>
                <div class="listing-element">
                    <div style="width:calc(40% - 50px);">
                        Imię,Nazwisko
                    </div>
                    <div style="width:60%;">
                        <input type="text" wire:model="user.fullname" name="imie" class="formularz" minlength="3" maxlength="20" value="" required="" pattern="[-a-zA-ZÀ-ž\s]+">
                    </div>
                </div>

                <div class="listing-element">
                    <div style="width:calc(40% - 50px);">
                        E-mail
                    </div>
                    <div style="width:60%;">
                        <input type="email" name="email" wire:model="user.email" id="email" class="formularz" value="">
                    </div>
                </div>

                <div class="listing-element">
                    <div style="width:calc(40% - 50px);">
                        Nr. telefonu<br>
                        (same cyfry bez spacji i myślników)
                    </div>
                    <div style="width:60%;">
                        <input type="tel" name="tel" id="create-worker-phone" wire:model="user.phone" class="formularz" placeholder="+48 (___) ___-__-__" value="">
                    </div>
                </div>

                <div class="listing-element">
                    <div style="width:calc(40% - 50px);">Hasło<br>
                    </div>
                    <div style="width:60%;">
                        <input type="password" name="pass"  wire:model="password" class="formularz" value="">
                    </div>
                </div>


                <div class="listing-ending"></div>
                <div class="listing-actionbar" style="gap:20px">
                    <button type="button" onclick="location.href = 'http://myclientcrm/dashboard/ustawienia'" id="cancel-product" class="btn1" style=""><i class="fa-solid fa-circle-left" aria-hidden="true" style="color:white"></i> Wstecz</button>
                    <button type="submit" class="btn1" style="width:200px;"><i class="fas fa-check-circle" aria-hidden="true"></i> Zarejestruj</button>
                </div>
            </form>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var phoneMask = IMask(document.getElementById('create-worker-phone'), {
                    mask: '+{48} (000) 000-00-00'
                })
            })
        </script>
    @endif
</div>
