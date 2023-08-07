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
                    <input type="text" wire:model="client.firstname" name="imie" class="formularz" minlength="3" maxlength="20" value="" required="" >
{{--                    pattern="[-a-zA-ZÀ-ž\s]+"--}}
                </div>
            </div>

            <div class="listing-element">
                <div style="width:calc(40% - 50px);">
                    Nazwisko
                </div>
                <div style="width:60%;">
                    <input type="text" name="nazwisko" wire:model="client.lastname" class="formularz" minlength="3" maxlength="30" value="" required="">
                    {{--                    pattern="[-a-zA-ZÀ-ž\s]+"--}}
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
                    <input type="tel" name="tel" id="tel-client" wire:model.lazy="client.phone" class="formularz" placeholder="+48 (___) ___-__-__" value="">
{{--                    <input type="text" x-data="{ phone: '{{$client['phone']}}' }" x-init="IMask($refs.input, { mask: '+{48}(000)000-00-00' }).on('accept', function() { phone = $refs.input.value })" x-ref="input">--}}
{{--                    pattern="\+48 \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}"--}}
{{--                    pattern="[0-9]{3}[0-9]{3}[0-9]{3}"--}}
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

{{--    @section('addit_js')--}}
{{--        <script>--}}
{{--            document.addEventListener("DOMContentLoaded", function () {--}}
{{--                var phoneMask = IMask(document.getElementById('tel-client'), {--}}
{{--                    mask: '+{48} (000) 000-00-00'--}}
{{--                })--}}
{{--            })--}}
{{--        </script>--}}
{{--        <script>--}}
{{--            $(document).ready(() => {--}}
{{--                console.log($('#tel-client').inputmask({--}}
{{--                    mask: '+48 (999) 999-99-99'--}}
{{--                }))--}}
{{--                $('#tel-client').inputmask({--}}
{{--                    mask: '+48 (999) 999-99-99'--}}
{{--                })--}}


{{--            })--}}
{{--        </script>--}}
{{--    @endsection--}}
</div>
