<form wire:submit.prevent="submitForm" id="signSubmit">

    <div class="listing-titlebar" style="margin-top:10px;">
        <div style="width:40%">
            <p>Aktualny podpis:</p>
            <p>Brak podpisu</p>
        </div>
        <div style="width:60%">

        </div>
    </div>

    <div class="listing-element canvas-element">
        <!-- POCZĄTEK SKRYPTU PODPISU -->
        <!-- Skrypt dodania ukrytego pola formularza -->
        <script>
            function addHidden(theForm, key, value) {
                // Create a hidden input element, and append it to the form:
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = key; // 'the key/name of the attribute/field that is sent to the server
                input.value = value;
                theForm.appendChild(input);
            }
        </script>

        <!-- Pobranie skryptu podpisu -->
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

        <!-- Wyświetlenie ramki do podpisu -->
        <div class="wrapper" style="display:flex;flex-direction:column;align-items:center;font-size:24px;margin-top:30px;">
            <span style="margin-bottom:1px;"><b>Złóż podpis:</b></span>
            <span style="font-size:18px;margin-bottom:15px;">W miarę możliwości wykorzystaj całą wielkość ramki.</span>
            <canvas id="signature-pad" class="signature-pad" style="border: 1px solid rgb(176, 176, 176); touch-action: none;" width="800" height="500">
            </canvas>
            <input type="hidden" id="sign-value" wire:model="sign">
            <button class="btn1" style="margin-top:10px; color: white" type="button" onclick="signaturePad.clear()">Wyczyść podpis</button>
        </div>
        <!-- Skrypt tworzący z API ramke podpisu -->
        <script>

            var canvas = document.querySelector("canvas");

            var signaturePad = new SignaturePad(canvas, {
                backgroundColor: "rgb(255, 255, 255)"
            });

            //Funkcja wykonujaca formularz
            function zapiszpodpis(){
                if (signaturePad.isEmpty()) {
                    alert("Musisz złożyć podpis aby zapisać zmiany.");
                } else {
                    var dataURL = signaturePad.toDataURL("image/jpeg");
                    document.querySelector('#sign-value').value = dataURL
                    console.log(document.querySelector('#sign-value').value)
                    document.querySelector('#form-submit-btn').click()
                    //console.log(dataURL);
                    // addHidden(theForm, 'kluczobrazu', dataURL);
                    // document.theForm.submit();
                    // console.log("Formularz poprawny.");
                }
            }
            $(document).ready(() => {
                // var form = document.querySelector('#signSubmit[wire\\:submit\\.prevent]');
                //
                // // Обработчик события отправки формы
                // form.addEventListener('submit', function (event) {
                //     event.preventDefault();
                //
                //     // Устанавливаем флаг задержки перед отправкой формы
                //     Livewire.find(form.getAttribute('wire:id')).set('delaySubmit', true);
                //
                //     // Отправляем форму через 1 секунду (1000 мс)
                //     setTimeout(function () {
                //         form.submit();
                //     }, 1000);
                // });
            })
        </script>

        <!-- KONIEC SKRYPTU PODPISU -->
    </div>

    <div class="listing-ending">

    </div>


    <div class="listing-actionbar">
        <button class="btn1" onclick="zapiszpodpis()" type="button" id="sign-submit"><i class="far fa-check-circle" aria-hidden="true" style="margin-right: 10px;color:white"></i>Zapisz zmiany</button>
        <button class="d-none" id="form-submit-btn" type="submit"></button>
    </div>
</form>
