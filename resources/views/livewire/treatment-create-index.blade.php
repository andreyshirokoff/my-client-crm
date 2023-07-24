<form
{{--    action="{{route('treatment.create')}}" --}}
    method="post"
>
    <style>
        @media(max-width: 992px){
            .row-with-input .sec-div{
                width: 100%!important;
            }
        }
    </style>
    <div class="listing-titlebar" style="margin-top:10px;">
        <div style="width:40%">

        </div>
        <div style="width:60%" class="sec-div">

        </div>
    </div>
    <!-- Tu zaczyna się formularz z danymi -->
    <div class="listing-element row-with-input">
        <div style="width:40%;">
            Nazwa
        </div>
        <div style="width:60%;" class="sec-div">
            <input type="text" name="title" class="formularz" minlength="3" maxlength="45" value="" wire:model.defer="title">
        </div>
    </div>

    <div class="listing-element row-with-input">
        <div style="width:40%;">
            Zabieg medyczny?
        </div>
        <div style="width:60%;" class="sec-div">
            <label class="switch">
                <input type="checkbox" name="medyczny" value="1">
                <span class="slider round"></span>
            </label>
        </div>
    </div>

    <div class="listing-element row-with-input">
        <div style="width:40%;">
            Opis
        </div>
        <div style="width:60%;" class="sec-div">
            <div id="quil-description" style="height: 300px">
                <p></p>
            </div>
            <input type="hidden" id="descriptionDb" wire:model="description">
            <input type="hidden" id="quil-description-input" name="description">
        </div>
    </div>

    <div class="listing-element row-with-input">
        <div style="width:40%;">
            Przeciwskazania
        </div>
        <div style="width:60%;" class="sec-div">
            <div id="quil-contraindications" style="height: 300px">
                <p></p>
            </div>
            <input type="hidden" id="contraindicationsDb" wire:model="contraindications">
            <input type="hidden" id="quil-contraindications-input" name="contraindications">
        </div>
    </div>

    <div class="listing-element row-with-input">
        <div style="width:40%;">
            Wskazania
        </div>
        <div style="width:60%;" class="sec-div">
            <div id="quil-indications" style="height: 300px">
                <p></p>
            </div>
            <input type="hidden" id="indicationsDb" wire:model="indications">
            <input type="hidden" id="quil-indications-input" name="indications">
        </div>
    </div>

    <div class="listing-element row-with-input">
        <div style="width:40%;">
            Zalecenia po zabiegu
        </div>
        <div style="width:60%;" class="sec-div">
            <div id="quil-recommendations" style="height: 300px">
                <p></p>
            </div>
            <input type="hidden" id="recommendationsDb" wire:model="recommendations">
            <input type="hidden" id="quil-recommendations-input" name="recommendations">
        </div>
    </div>


    <div class="listing-element row-with-input">
        <div style="width:40%;">
            Zalecana ilość
        </div>
        <div style="width:60%;" class="sec-div">
            <input type="number" name="amount" class="formularz" value="" required="" wire:model.defer="amount">
        </div>
    </div>







    <div class="listing-actionbar">
        <button type="submit" class="btn1" style="margin-left:10px;"><i class="fas fa-check-circle" aria-hidden="true"></i> Dodaj</button>
    </div>
</form>
@section('addit_js')
    <script>
        $(document).ready(() => {
            var quillDescription = new Quill('#quil-description', {
                theme: 'snow' // Выбор темы редактора (snow или bubble)
            });
            var quillContraindications = new Quill('#quil-contraindications', {
                theme: 'snow' // Выбор темы редактора (snow или bubble)
            });
            var quillIndications = new Quill('#quil-indications', {
                theme: 'snow' // Выбор темы редактора (snow или bubble)
            });
            var quillRecommendations = new Quill('#quil-recommendations', {
                theme: 'snow' // Выбор темы редактора (snow или bubble)
            });


            setContentToEditor(quillDescription, document.querySelector('#descriptionDb').value);
            setContentToEditor(quillContraindications, document.querySelector('#contraindicationsDb').value);
            setContentToEditor(quillIndications, document.querySelector('#indicationsDb').value);
            setContentToEditor(quillRecommendations, document.querySelector('#recommendationsDb').value);
            handleSubmit()
            function setContentToEditor(className, content) {
                setTimeout(() => {
                    console.log()
                    className.setContents(JSON.parse(content));
                },2000)

            }
            function handleSubmit(event) {
                //event.preventDefault()
                setContentToInput(quillDescription, '#quil-description-input')
                quillDescription.on('text-change', () => {
                    setContentToInput(quillDescription, '#quil-description-input')
                    //updateLivewire(document.querySelector('#quil-footer-input'), 'footer')
                })
                setContentToInput(quillContraindications, '#quil-contraindications-input')
                quillContraindications.on('text-change', () => {
                    setContentToInput(quillContraindications, '#quil-contraindications-input')
                    //updateLivewire(document.querySelector('#quil-non-medical-input'), 'nonMedical')
                })
                setContentToInput(quillIndications, '#quil-indications-input')
                quillIndications.on('text-change', () => {
                    setContentToInput(quillIndications, '#quil-indications-input')
                    //updateLivewire(document.querySelector('#quil-medical-input'), 'medical')
                })
                setContentToInput(quillRecommendations, '#quil-recommendations-input')
                quillRecommendations.on('text-change', () => {
                    setContentToInput(quillRecommendations, '#quil-recommendations-input')
                    // updateLivewire(document.querySelector('#quil-note-input'), 'note')
                })
            }
            function setContentToInput(className, element)
            {
                const editorText = className.getContents();
                document.querySelector(element).value = JSON.stringify(editorText)
            }
        })
    </script>
@endsection
