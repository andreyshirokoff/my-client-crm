<div class="boxinbox__body">
    <div class="boxinbox-titlebar" style="margin-top:10px;">
        <div class="icon">
            <i class="fas fa-user-plus" aria-hidden="true"></i>
        </div>
        <div style="margin-left:20px;">
            <h3>Dodaj klienta</h3>
        </div>
    </div>
    <div class="boxinbox block1_dobaj_klienta">
        <form wire:submit.prevent="createClient" method="post">
            <div class="listing-titlebar" style="margin-top:10px;">
                <div style="width:100%">
                    <h3>Wypełnij poniżesze dane by utworzyć nowego klienta.</h3><br>
                    <p style="padding-top:10px;">Uwaga: Konta klientów tworzone są globalnie, oznacza to, że na całą aplikację klient posiada jedno konto. Zapytaj klienta czy kiedykolwiek rejestrował się do aplikacji MyClient.</p>
                </div>
            </div>
            <div class="listing-element">
                <div style="width:calc(40% - 50px);">
                    Imię
                </div>
                <div style="width:60%;">
                    <input type="text" wire:model="client.firstname" name="imie" class="formularz" minlength="3" maxlength="20" value="" required="" pattern="[-a-zA-ZÀ-ž\s]+">
                </div>
            </div>

            <div class="listing-element">
                <div style="width:calc(40% - 50px);">
                    Nazwisko
                </div>
                <div style="width:60%;">
                    <input type="text" name="nazwisko" wire:model="client.lastname" class="formularz" minlength="3" maxlength="30" value="" required="" pattern="[-a-zA-ZÀ-ž\s]+">
                </div>
            </div>

            <div class="listing-element">
                <div style="width:calc(40% - 50px);">
                    E-mail
                </div>
                <div style="width:60%;">
                    <input type="email" name="email" wire:model="client.email" id="email" class="formularz" value="">
                </div>
            </div>

            <div class="listing-element">
                <div style="width:calc(40% - 50px);">
                    Nr. telefonu<br>
                    (same cyfry bez spacji i myślników)
                </div>
                <div style="width:60%;">
                    <input type="tel" name="tel" id="tel" wire:model="client.phone" class="formularz" placeholder="np. 123456789" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" value="">
                </div>
            </div>

            <div class="listing-element">
                <div style="width:calc(40% - 50px);">
                    Jak wysłać kod?
                </div>
                <div style="width:60%;">
                    <div class="d-flex gap-3 align-items-center"><input type="radio" id="send_via_email" wire:model="typeInfo" name="how_to_send" value="send_via_email" required="" style="">    <label for="send_via_email">Na podany adres e-mail</label><br></div>
                    <div class="d-flex gap-3 align-items-center mt-3"><input type="radio" id="send_via_sms" wire:model="typeInfo" name="how_to_send" value="send_via_sms" required="" style="">    <label for="send_via_sms">Na podany nr telefonu (Masz 10 smsów w pakiecie)</label></div>
                </div>
            </div>

            <div class="listing-ending"></div>
            <div class="listing-actionbar">
                <button type="submit" class="btn1" style="margin-left:10px;width:200px;"><i class="fas fa-check-circle" aria-hidden="true"></i> Zarejestruj</button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH D:\Projects\my-client-crm\resources\views/livewire/clients/create-clients-item.blade.php ENDPATH**/ ?>