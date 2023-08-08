<div>
    <form wire:submit.prevent="submitForm" id="create-product-form">
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
                <input type="text" name="nazwa" class="formularz" minlength="3" maxlength="45" value="" wire:model.defer="name">
            </div>
            @error('name')
            <span class="is-invalid" role="alert" style="color:black">
                                    <strong>{{ $message }}</strong>
                                </span>
            @enderror
        </div>

        <div class="listing-element row-with-input">
            <div style="width:40%;">
                Cena (opcjonalnie)
            </div>
            <div style="width:60%;" class="sec-div">
                <input type="number" name="nazwa" class="formularz" minlength="3" maxlength="45" value="" wire:model.defer="price" step="0.01">
            </div>
            @error('price')
            <span class="is-invalid" role="alert" style="color:black">
                                    <strong>{{ $message }}</strong>
                                </span>
            @enderror
        </div>

        <div class="listing-element row-with-input">
            <div style="width:40%;">
                Na ile dni wystarcza? (opcjonalnie)
            </div>
            <div style="width:60%;" class="sec-div">

                <input type="number" name="nazwa" class="formularz" minlength="3" maxlength="45" value="" wire:model.defer="dayOff">
            </div>
            @error('dayOff')
            <span class="is-invalid" role="alert" style="color:black">
                                    <strong>{{ $message }}</strong>
                                </span>
            @enderror
        </div>
        <livewire:product-create-desc-index/>
        <input type="hidden" id="descriptionDb" name="description-text">
{{--        <input type="hidden" id="quil-description-submit" name="description" wire:model="description">--}}


        <div class="listing-element row-with-input">
            <div style="width:40%;">
                Zdjęcie produktu
            </div>
            <div style="width:60%;" class="sec-div">
                <input type="file" name="plik" class="formularz" minlength="3" maxlength="45" value="" wire:model.defer="image">
            </div>
            @error('image')
            <span class="is-invalid" role="alert" style="color:black">
                                    <strong>{{ $message }}</strong>
                                </span>
            @enderror
        </div>








        <div class="listing-actionbar">
            <button type="button" onclick="location.href = '{{url('dashboard/ustawienia')}}'" id="cancel-product" class="btn1" style="margin-left:10px;"><i class="fa-solid fa-circle-left" aria-hidden="true" style="color:white"></i> Anulować</button>
            <button type="submit" id="submit-product" class="btn1" style="margin-left:10px;"><i class="fas fa-check-circle" aria-hidden="true"></i> Dodaj</button>
        </div>
    </form>
{{--    @section('addit_js')--}}
        <script>

                {{--$(document).click((e) => {--}}
                {{--    if(--}}
                {{--        $(e.target).is('#submit-product')--}}
                {{--        || $(e.target).closest('#submit-product').length > 0--}}
                {{--    )--}}
                {{--    {--}}
                {{--        e.preventDefault()--}}
                {{--        @this.set('description', document.querySelector('#quil-description-input').value)--}}
                {{--        //document.getElementById('create-product-form').submit();--}}
                {{--        Livewire.emit('submitForm');--}}
                {{--    }--}}
                {{--})--}}

                document.querySelector('#create-product-form').addEventListener('submit', (e) => {
                    e.preventDefault()
                    @this.set('description', document.querySelector('#quil-description-input').value)

                    Livewire.emit('submitForm');
                })

        </script>
{{--    @endsection--}}
</div>
