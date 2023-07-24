<form wire:submit.prevent="submitForm">

    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Nazwa salonu
        </div>
        <div style="width:30%;" class="input-in">
            <input class="formularz" name="salonname" id="salonname" type="text" value="" maxlength="40" wire:model="salonTitle">
            @error('salonTitle') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="listing-element row-with-input">
        <div style="width:70%;padding-right:60px;">
            Logo Twojego salonu.<br><br>(Dla najlepszych rezultatów wgraj plik PNG nie zawierający tła w rozmiarze maksymalnym 800 x 800 px). Po wgraniu pliku z logo zobaczysz jego podgląd w oknie obok. Sugerujemy użycie logo w wersji poziomej.
        </div>
        <div style="width:30%;" class="input-in">
            <div style="display:flex; width:100%; border: 1px solid #a5a5a5; margin-bottom:5px; padding:10px; border-radius:10px;min-height:100px; align-items:center; justify-content: center;">
                @if($image)
                    <img src="{{url('storage/salon/'.$image)}}" alt="">
                @else
                    Brak logo.
                @endif
            </div>
            <input class="formularz" name="logofile" id="logofile" type="file" image="image/png" wire:model="image">
            @error('image') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="listing-element" style="flex-direction:column">
        <div style="width:100%;">
            <h4>Stopka w mailach</h4>
            <p style="padding-bottom:20px;">Utwórz stopkę salonu, która będzie automatycznie dołączana u dołu maili wysyłanych do klientów. Stopka oddzielona jest poziomą linią od pozostałej treści maila i może zawierać dowolne dane.</p>
        </div>
        <div style="width:100%">
            <div id="quil-footer" style="height: 300px">
                <p></p>
            </div>
            <input type="hidden" id="quil-footer-input" wire:model="footer">
            @error('footer') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>


    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Wybierz kolory Twojej aplikacji BeautyCheck
        </div>
        <div style="width:30%;" class="input-in">
            <select name="motyw" class="formularz" wire:model.defer="selectedThemeId">
                @foreach($themes as $theme)
                    <option value="{{$theme->id}}">{{$theme->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Pokazywać pracownikowi nr. telefonu klienta?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;" class="input-in check">
            <label class="switch">
                <input type="checkbox" name="pracownik_telefon" value="1" wire:model="checkBoxShowPhone">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Czy pracownicy mają mieć możliwość edycji karty klienta w salonie?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;" class="input-in check">
            <label class="switch">
                <input type="checkbox" name="pracownik_edycja_kart_klienta" value="1" wire:model="checkBoxCanEditCard">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Czy pracownicy mogą zarządzać zabiegami i kartami zabiegów?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;" class="input-in check">
            <label class="switch">
                <input type="checkbox" name="pracownik_edycja_zabiegow_i_kart_zabiegow" value="1" wire:model="checkBoxCanEditControl">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Czy pracownicy mogą usuwać podpisane już dokumenty?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;" class="input-in check">
            <label class="switch">
                <input type="checkbox" name="pracownik_edycja_usuwanie_danych" value="1" wire:model="checkBoxCanRemoveSignedDocs">
                <span class="slider round"></span>
            </label>
        </div>
    </div>



    <!--
    <div class="listing-element">
        <div style="width:70%;">
            Pracownik może edytować dokumenty do 3 dni?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;">
            <label class="switch">
            <input type="checkbox" name="pracownik_edycja3dni" value="1" >
            <span class="slider round"></span>
            </label>
        </div>
    </div>
    -->


    <div class="listing-element" style="flex-direction:column">
        <div style="width:100%;">
            <h4>Oświadczenie karty zabiegowej (niemedycznej)</h4>
            <p style="padding-bottom:20px;">Poniższe oświadczenie zostało wygenerowane automatycznie i stanowi opracowanie RODO w konsultacji z działem prawnym BeautyCheck. Jeśli posiadasz własną warstwę oświadczeń - możesz edytować poniższy tekst, jednak nie ponosimy odpowiedzi za jego skutki prawne w zmienionej formie. Zostaje ono dołączone do każdego podpisywanego dokumentu (nie dotyczy zabiegów medycznych).</p>
        </div>
        <div style="width:100%">
            <div id="quil-non-medical" style="height: 300px">
                <p></p>
            </div>
            <input type="hidden" id="quil-non-medical-input" wire:model="nonMedical">
            @error('nonMedical') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="listing-element" style="flex-direction:column">
        <div style="width:100%;">
            <h4>Oświadczenie karty zabiegowej (medycznej)</h4>
            <p style="padding-bottom:20px;">Poniższe oświadczenie zostało wygenerowane automatycznie i stanowi opracowanie RODO w konsultacji z działem prawnym BeautyCheck. Jeśli posiadasz własną warstwę oświadczeń - możesz edytować poniższy tekst, jednak nie ponosimy odpowiedzi za jego skutki prawne w zmienionej formie. Zostaje ono dołączone do każdego podpisywanego dokumentu (dotyczy wyłącznie zabiegów medycznych).</p>
        </div>
        <div style="width:100%">
            <div id="quil-medical" style="height: 300px">
                <p></p>
            </div>
            <input type="hidden" id="quil-medical-input" wire:model="medical">
            @error('medical') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="listing-element" style="flex-direction:column">
        <div style="width:100%;">
            <h4>Oświadczenie ogólnej karty klienta</h4>
            <p style="padding-bottom:20px;">Poniższe oświadczenie zostało wygenerowane automatycznie i stanowi opracowanie RODO w konsultacji z działem prawnym BeautyCheck. Jeśli posiadasz własną warstwę oświadczeń - możesz edytować poniższy tekst, jednak nie ponosimy odpowiedzi za jego skutki prawne w zmienionej formie. Zostaje ono dołączone do każdego podpisywanego dokumentu (dotyczy wyłącznie zabiegów medycznych).</p>
        </div>
        <div style="width:100%">
            <div id="quil-note" style="height: 300px">
                <p></p>
            </div>
            <input type="hidden" id="quil-note-input" wire:model="note">
            @error('note') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>


    <div class="listing-ending"></div>


    <div class="listing-actionbar flex-wrap btns" style="gap:10px">
        <button type="button" class="btn1" onclick="location.href='{{url('functions/rodoreset')}}'"><i class="fas fa-history" aria-hidden="true"></i> Resetuj RODO</button>
        <button type="submit" class="btn1" style="" onclick=""><i class="fas fa-check-circle" aria-hidden="true"></i> Zapisz ustawienia</button>
    </div>
</form>
@section('addit_js')
    <script>
        $(document).ready(() => {})
        var quillFooter = new Quill('#quil-footer', {
            theme: 'snow' // Выбор темы редактора (snow или bubble)
        });
        var quillNonMedical = new Quill('#quil-non-medical', {
            theme: 'snow' // Выбор темы редактора (snow или bubble)
        });
        var quillMedical = new Quill('#quil-medical', {
            theme: 'snow' // Выбор темы редактора (snow или bubble)
        });
        var quillNote = new Quill('#quil-note', {
            theme: 'snow' // Выбор темы редактора (snow или bubble)
        });
        handleSubmit()
        function handleSubmit(event) {
            //event.preventDefault()
            quillFooter.on('text-change', () => {
                setContentToInput(quillFooter, '#quil-footer-input')
                updateLivewire(document.querySelector('#quil-footer-input'), 'footer')
            })
            quillNonMedical.on('text-change', () => {
                setContentToInput(quillNonMedical, '#quil-non-medical-input')
                updateLivewire(document.querySelector('#quil-non-medical-input'), 'nonMedical')
            })
            quillMedical.on('text-change', () => {
                setContentToInput(quillMedical, '#quil-medical-input')
                updateLivewire(document.querySelector('#quil-medical-input'), 'medical')
            })
            quillNote.on('text-change', () => {
                setContentToInput(quillNote, '#quil-note-input')
                updateLivewire(document.querySelector('#quil-note-input'), 'note')
            })
        }
        function setContentToInput(className, element)
        {
            console.log(className.getContents())
            const editorText = className.getContents();
            document.querySelector(element).value = JSON.stringify(editorText)
        }
        function updateLivewire(documentElement, value)
        {
            documentElement.addEventListener('change', function () {
                @this.set(value, documentElement.value);
            });
        }
    </script>
@endsection
