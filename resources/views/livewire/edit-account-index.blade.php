<form wire:submit.prevent="submitForm">

    <div class="listing-titlebar input-element" style="margin-top:10px;">
        <div style="width:40%">
            <h6>Dostępne opcje</h6>
        </div>
        <div style="width:60%">
            <h6>Dane do zmiany</h6>
        </div>
    </div>

    <div class="listing-element input-element">
        <div style="width:40%;">
            Imię
        </div>
        <div style="width:60%;">
            <input type="text" name="imie" class="formularz" required="" wire:model="name">
        </div>
    </div>

    <div class="listing-element input-element">
        <div style="width:40%;">
            Nazwisko
        </div>
        <div style="width:60%;">
            <input type="text" name="nazwisko" class="formularz" required="" wire:model="lastName">
        </div>
    </div>



    <div class="listing-element input-element">
        <div style="width:40%;">
            Nr. Telefonu
        </div>
        <div style="width:60%;">
            <input type="tel"  name="tel" class="formularz" pattern="\+48 \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}" required="" placeholder="+48 (___) ___-__-__" wire:model="phone" id="edit-account-phone-input">
        </div>
    </div>

    <div class="listing-actionbar">
        <button type="submit" class="btn1"><i class="fas fa-check-circle" aria-hidden="true"></i> Ustaw zdjęcie</button>
    </div>
    @section('addit_js')
        <script>
            $(document).ready(() => {
                script.phoneMask('#edit-account-phone-input')
                $('#edit-account-phone-input').on('input', function(event) {
                    var phoneNumber = event.target.value;
                    @this.set('phone', phone); // Обновляем свойство phoneNumber в компоненте Livewire
                });
            })
        </script>
    @endsection

</form>

