
<div id="heading_block3_2_dodaj_pytania">
    <div class="boxinbox-titlebar">
        <div class="icon">
            <i class="fa-solid fa-pen-to-square"></i>
        </div>
        <div style="margin-left:20px;"><h3>Edycja karty zabiegowej</h3></div>
    </div>
    <div class="boxinbox" style="background-color: rgb(240, 241, 241);">
        <div class="listing-titlebar d-flex flex-column" style="margin-top:10px;">
            <button class="btn1 w-100 mb-1" style="color:white" id="add-field-in-question" wire:click.prevent="showAddModal">Dodaj pole</button>
{{--                <button class="btn1 w-100 mb-1" style="color:white" wire:click.prevent="addNewFields('input')">Input</button>--}}

{{--                <button class="btn1 w-100 mb-1" style="color:white;" wire:click.prevent="addNewFields('textarea')">Textarea</button>--}}


{{--                <button class="btn1 w-100 mb-1" style="color:white;" wire:click.prevent="addNewFields('checkbox')">Checkbox</button>--}}


{{--                <button class="btn1 w-100 mb-1" style="color:white;" wire:click.prevent="addNewFields('radio')">Radio</button>--}}

        </div>
        @if(count($fieldsArr) > 0)

                @foreach($fieldsArr as $f)
                    @switch($f['type'])
                        @case('input')

                            <div class="listing-element service-block">
                                <p>{{$f['title']}}</p>
                                <input class="formularz" name="" data-order="{{$f['order']}}" id="" type="" value="" maxlength="40">
                            </div>
                            @break
                        @case('textarea')
                            <div class="listing-element service-block">
                                <p>{{$f['title']}}</p>
                                <textarea class="formularz" name="" data-order="{{$f['order']}}" id="" cols="30" rows="10"></textarea>
                            </div>
                            @break
                        @case('checkbox')
                            <div class="listing-element service-block">
                                <div style="display:flex;justify-content:space-between;width:100%;flex-wrap:wrap">
                                    <p>{{$f['title']}}</p>
                                    <label class="switch">
                                        <input type="checkbox" name="use_pin" id="use_pin" value="1">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            @break
                        @case('radio')
                            <div class="listing-element service-block">
                                <p>{{$f['title']}}</p>
                                radio
                            </div>
                            @break
                    @endswitch
                @endforeach
                <div class="listing-actionbar mt-3">
                    <a href="http://myclientcrm/dashboard/ustawienia/worker-create"><button type="button" class="btn1" style="width:100%;"><i class="fa-solid fa-floppy-disk" style="margin-right:15px;color:white"></i></i> Save</button></a>
                </div>

        @endif
    </div>
    <div class="modal fade" id="addField" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <livewire:modal-fields-add/>
    </div>
    <script>
        document.addEventListener('event-add-field', () => {
            let modalItem = new bootstrap.Modal(document.querySelector('#addField'))
            modalItem.show()
        })
    </script>
</div>

