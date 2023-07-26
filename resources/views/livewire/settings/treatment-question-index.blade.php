
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
                                <input class="formularz" name="" id="" type="" value="" maxlength="40">
                            </div>
                            @break
                        @case('textarea')
                            <div class="listing-element service-block">
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                            @break
                        @case('textarea')
                            <div class="listing-element service-block">
                                checkbox
                            </div>
                            @break
                        @case('textarea')
                            <div class="listing-element service-block">
                                radio
                            </div>
                            @break
                    @endswitch
                @endforeach
            </div>
        @endif
    <livewire:modal-fields-add/>
</div>

