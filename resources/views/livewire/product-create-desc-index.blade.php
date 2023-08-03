<div class="listing-element row-with-input">


    <div style="width:40%;">
        Opis (opcjonalnie)
    </div>
    <div style="width:60%;" class="sec-div">
        <div id="quil-description" style="height: 300px">
            <p></p>
        </div>
        <input type="hidden" id="quil-description-input" name="description">
    </div>
    @error('description')
    <span class="is-invalid" role="alert" style="color:black">
                                    <strong>{{ $message }}</strong>
                                </span>
    @enderror

    @section('addit_js')
        <script>
            $(document).ready(() => {
                var quillDescription = new Quill('#quil-description', {
                    theme: 'snow' // Выбор темы редактора (snow или bubble)
                });

                handleSubmit()
                // function setContentToEditor(className, content) {
                //     if(content.length > 0) className.setContents(JSON.parse(content));
                // }
                // setTimeout(() => {
                //     setContentToEditor(quillDescription, document.querySelector('#descriptionDb').value);
                // }, 0)


                function handleSubmit(event) {
                    //event.preventDefault()
                    setContentToInput(quillDescription, '#quil-description-input')
                    quillDescription.on('text-change', () => {
                        setContentToInput(quillDescription, '#quil-description-input')
                        //updateLivewire(document.querySelector('#quil-footer-input'), 'footer')
                    })
                }
                function setContentToInput(className, element)
                {
                    const editorText = className.getContents();
                    document.querySelector(element).value = JSON.stringify(editorText)

                }

                {{--$(document).click((e) => {--}}
                {{--    if(--}}
                {{--        $(e.target).is('#submit-product')--}}
                {{--        || $(e.target).closest('#submit-product').length > 0--}}
                {{--    )--}}
                {{--    {--}}
                {{--        @this.set('description', document.querySelector('#quil-description-input').value)--}}
                {{--    }--}}
                {{--})--}}
            })
        </script>
    @endsection
</div>
