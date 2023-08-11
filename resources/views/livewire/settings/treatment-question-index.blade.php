<div>
    @if(count($returnFields) > 0)
    <div id="heading_block3_2_edycja_karty_zabiegowej">
        {{--    @php echo '<pre style="color:black">'.print_r($_GET,1).'</pre>'; @endphp--}}
        {{--    <p style="color:black">{{$_GET['id']}}</p>--}}
        {{--    <input type="hidden" value="{{$_GET['id']}}" wire:model.defer="idService">--}}
        <div class="boxinbox-titlebar">
            <div class="icon">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>
            <div style="margin-left:20px;"><h3>Edycja karty zabiegowej</h3></div>
        </div>

        <div class="boxinbox" style="background-color: rgb(240, 241, 241);">
            @foreach($returnFields as $returnField)

                    <div class="listing-titlebar d-flex flex-column" style="margin-top:10px;">

                    </div>
                    @foreach(json_decode($returnField, 1) as $key => $f)
                        @switch($f['type'])
                            @case('input')

                                <div class="listing-element service-block">
                                    {{--                                    here--}}
                                    <h6>@if($f['is_required'] === true)<span style="color:red">* </span>@endif{{$f['title']}}</h6>
                                    <div class="d-flex gap-3 align-items-center w-100" style="">
                                        <input class="formularz" name="UF_{{$key}}" data-order="{{$f['order']}}" id="" type="" value="" maxlength="40">
                                        <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('{{$key}}')"></i>
                                    </div>
                                </div>
                                @break
                            @case('textarea')
                                <div class="listing-element service-block">
                                    {{--                                    here--}}
                                    <h6>@if($f['is_required'] === true)<span style="color:red">* </span>@endif{{$f['title']}}</h6>
                                    <div class="d-flex gap-3 align-items-center w-100" style="">
                                        <textarea class="formularz" name="UF_{{$key}}" data-order="{{$f['order']}}" id="" cols="30" rows="10"></textarea>
                                        <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('{{$key}}')"></i>
                                    </div>
                                </div>
                                @break
                            @case('checkbox')
                                <div class="listing-element service-block">
                                    {{--                                    here--}}
                                    <h6 class="mb-3">@if($f['is_required'] === true)<span style="color:red">* </span>@endif{{$f['title']}}</h6>
                                    @foreach($f['fields'] as $keyff => $ff)
                                        <div class="d-flex justify-content-between w-100 flex-wrap @if($key != 0) mt-2 @endif">
                                            <p>{{$ff}}</p>
                                            <div class="d-flex gap-3 align-items-center" style="">
                                                <label class="switch">
                                                    <input type="checkbox" name="UF_{{$key}}" id="" value="1">
                                                    <span class="slider round"></span>
                                                </label>
                                                <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('{{$key}}', '{{$keyff}}')"></i>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                @break
                            @case('radio')
                                <div class="listing-element service-block">
                                    {{--                                    here--}}
                                    <h6 class="mb-3">@if($f['is_required'] === true)<span style="color:red">* </span>@endif{{$f['title']}}</h6>
{{--                                    @php--}}
{{--                                        $bytes = random_bytes(16);--}}
{{--                                        $randCode = substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, 16);--}}
{{--                                    @endphp--}}
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach($f['fields'] as $keyff => $ff)

                                        <div class="d-flex justify-content-between w-100 flex-wrap @if($i != 0) mt-2 @endif">
                                            <p>{{$ff}}</p>
                                            <div class="d-flex gap-3 align-items-center" style="">
                                                <input type="radio" id="" value="{{$ff}}" name="UF_{{$key}}" @if($i == 0) checked @endif>
                                                <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('{{$key}}', '{{$keyff}}')"></i>
                                            </div>
                                        </div>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </div>
                                @break
                        @endswitch
                    @endforeach
                @endforeach


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
    @endif
    <div class="mar"></div>
    <div id="heading_block3_2_dodaj_pytania">
    {{--    @php echo '<pre style="color:black">'.print_r($_GET,1).'</pre>'; @endphp--}}
    {{--    <p style="color:black">{{$_GET['id']}}</p>--}}
    {{--    <input type="hidden" value="{{$_GET['id']}}" wire:model.defer="idService">--}}
        <div class="boxinbox-titlebar">
            <div class="icon">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>
            <div style="margin-left:20px;"><h3>Dodaj pytania</h3></div>
        </div>
        <div class="boxinbox" style="background-color: rgb(240, 241, 241);">
            <div class="listing-titlebar d-flex flex-column" style="margin-top:10px;">
                <button class="btn1 w-100 mb-1" style="color:white" id="add-field-in-question" wire:click.prevent="showAddModal">Dodaj pole</button>
            </div>
            @if(count($fieldsArr) > 0)

                    @foreach($fieldsArr as $key => $f)
                        @switch($f['type'])
                            @case('input')

                                <div class="listing-element service-block">
                                    {{--                                    here--}}
                                    <h6>@if($f['is_required'] === true)<span style="color:red">* </span>@endif{{$f['title']}}</h6>
                                    <div class="d-flex gap-3 align-items-center w-100" style="">
                                        <input class="formularz" name="UF_{{$key}}" data-order="{{$f['order']}}" id="" type="" value="" maxlength="40">
                                        <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteFromPage('{{$key}}')"></i>
                                    </div>
                                </div>
                                @break
                            @case('textarea')
                                <div class="listing-element service-block">
                                    {{--                                    here--}}
                                    <h6>@if($f['is_required'] === true)<span style="color:red">* </span>@endif{{$f['title']}}</h6>
                                    <div class="d-flex gap-3 align-items-center w-100" style="">
                                        <textarea class="formularz" name="UF_{{$key}}" data-order="{{$f['order']}}" id="" cols="30" rows="10"></textarea>
                                        <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteFromPage('{{$key}}')"></i>
                                    </div>
                                </div>
                                @break
                            @case('checkbox')
                                <div class="listing-element service-block">
{{--                                    here--}}
                                    <h6 class="mb-3">@if($f['is_required'] === true)<span style="color:red">* </span>@endif{{$f['title']}}</h6>
                                    @foreach($f['fields'] as $keyff => $ff)
                                        <div class="d-flex justify-content-between w-100 flex-wrap @if($key != 0) mt-2 @endif">
                                            <p>{{$ff}}</p>
                                            <div class="d-flex gap-3 align-items-center" style="">
                                                <label class="switch">
                                                    <input type="checkbox" name="UF_{{$key}}" id="" value="1">
                                                    <span class="slider round"></span>
                                                </label>
                                                <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteFromPage('{{$key}}', '{{$keyff}}')"></i>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                @break
                            @case('radio')
                                <div class="listing-element service-block">
                                    {{--                                    here--}}
                                    <h6 class="mb-3">@if($f['is_required'] === true)<span style="color:red">* </span>@endif{{$f['title']}}</h6>
{{--                                    @php--}}
{{--                                        $bytes = random_bytes(16);--}}
{{--                                        $randCode = substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, 16);--}}
{{--                                    @endphp--}}
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach($f['fields'] as $keyff => $ff)
                                        <div class="d-flex justify-content-between w-100 flex-wrap @if($i != 0) mt-2 @endif">
                                            <p>{{$ff}}</p>
                                            <div class="d-flex gap-3 align-items-center" style="">
                                                <input type="radio" id="" value="{{$ff}}" name="UF_{{$key}}" @if($i == 0) checked @endif>
                                                <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteFromPage('{{$key}}', '{{$keyff}}')"></i>
                                            </div>
                                        </div>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </div>
                                @break
                        @endswitch
                    @endforeach
                    <div class="listing-actionbar mt-3">
                        <a><button type="button" class="btn1" style="width:100%;" wire:click.prevent="submitForm"><i class="fa-solid fa-floppy-disk" style="margin-right:15px;color:white"></i></i> Save</button></a>
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
            // document.addEventListener('close-modal', () => {
            //     let modalItem = new bootstrap.Modal(document.querySelector('#addField'))
            //     modalItem.hide()
            //     document.querySelector('#addField').removeAttribute('aria-model')
            //     document.querySelector('#addField').addAttribute('aria-hidden')
            //     document.querySelector('#addField').setAttribute('aria-hidden', 'true')
            // })

            document.addEventListener('swal:confirm', event => {

                //console.log(event.detail.firstKey)

                Swal.fire({
                    title: event.detail.title,
                    text: event.detail.text,
                    icon: event.detail.type,
                    // buttons: true,
                    // dangerModal: true,

                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                })
                    .then((willDelete) => {
                        if(willDelete.isConfirmed)
                        {
                            console.log(event.detail.secondKey)
                            @this.call('deleteFromDb', [event.detail.firstKey, event.detail.secondKey])
                            //@this.call('deleteFromDb', event.detail.secondKey)
                        }
                    })
            })
        </script>
    </div>

</div>
