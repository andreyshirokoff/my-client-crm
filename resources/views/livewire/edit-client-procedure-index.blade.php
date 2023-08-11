<div>
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
    <div class="box">
        <div class="boxinbox__body" id="accordion">

            <div class="boxinbox-titlebar" style="margin-top:10px;">
                <div class="icon">
                    <i class="fas fa-cog" aria-hidden="true"></i>
                </div>
                <div style="margin-left:20px;">
                    <h3>Ustawienia</h3>
                </div>
            </div>

            <div class="box-content" style="background: #fff">



                <div>
                    <div>
                        <div id="heading_block3_2_edycja_karty_zabiegowej">



                            <div class="boxinbox-titlebar">
                                <div class="icon">
                                    <i class="fa-solid fa-list"></i>
                                </div>
                                <div style="margin-left:20px;"><h3>Karty zabiegowej</h3></div>
                            </div>

                            <div class="boxinbox" style="background-color: rgb(240, 241, 241);">
                                <form>
                                    {{--                                    @csrf--}}




                                    @foreach($servicesForm as $key => $service)
                                        {{--                                        <div class="listing-titlebar d-flex flex-column" style="margin-top:10px;">--}}

                                        {{--                                        </div>--}}
                                        @foreach(json_decode($service->fields, 1) as $keyS => $f)
                                            @switch($f['type'])
                                                @case('input')

                                                    <div class="listing-element service-block">
                                                        <h6>{{$f['title']}}</h6>
                                                        <div class="d-flex gap-3 align-items-center w-100" style="">
                                                            <input type="hidden" name="title_{{$key}}" value="{{$f['title']}}">
                                                            <input class="formularz" name="{{$key}}" data-order="{{$f['order']}}" id="" type="" maxlength="40" wire:model.defer="arrayToDb.{{$key}}.{{$keyS}}">
                                                            {{--                                                        <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('{{$key}}')"></i>--}}
                                                        </div>
                                                    </div>
                                                    @break
                                                @case('textarea')
                                                    <div class="listing-element service-block">
                                                        <h6>{{$f['title']}}</h6>
                                                        <div class="d-flex gap-3 align-items-center w-100" style="">                                                            =
                                                            <textarea class="formularz" name="{{$key}}" data-order="{{$f['order']}}" id="" cols="30" rows="10" wire:model.defer="arrayToDb.{{$key}}.{{$keyS}}"></textarea>
                                                            {{--                                                        <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('{{$key}}')"></i>--}}
                                                        </div>
                                                    </div>
                                                    @break
                                                @case('checkbox')
                                                    <div class="listing-element service-block">
                                                        <h6 class="mb-3">{{$f['title']}}</h6>
                                                        @foreach($f['fields'] as $keyff => $ff)
                                                            <div class="d-flex justify-content-between w-100 flex-wrap @if($keyff != 0) mt-2 @endif">
                                                                <p>{{$ff}}</p>
                                                                <div class="d-flex gap-3 align-items-center" style="">
                                                                    <label class="switch">
                                                                        <input type="checkbox" name="{{$keyff}}" id="" value="1" wire:model.defer="arrayToDb.{{$key}}.{{$keyS}}.{{$keyff}}">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                    {{--                                                                <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('{{$key}}', '{{$keyff}}')"></i>--}}
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    @break
                                                @case('radio')
                                                    <div class="listing-element service-block">
                                                        <h6 class="mb-3">{{$f['title']}}</h6>
                                                        {{--                                    @php--}}
                                                        {{--                                        $bytes = random_bytes(16);--}}
                                                        {{--                                        $randCode = substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, 16);--}}
                                                        {{--                                    @endphp--}}
                                                        @php
                                                            $i = 0;
                                                            //$radioName = uniqid();
                                                        @endphp
                                                        @foreach($f['fields'] as $keyff => $ff)

                                                            <div class="d-flex justify-content-between w-100 flex-wrap @if($i != 0) mt-2 @endif">
                                                                <p>{{$ff}}</p>
                                                                <div class="d-flex gap-3 align-items-center" style="">
                                                                    <input type="radio" id="" value="{{$ff}}" name="{{$keyff}}" @if($i == 0) checked @endif wire:model.defer="arrayToDb.{{$key}}.{{$keyS}}.{{$keyff}}">
                                                                    {{--                                                                <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('{{$key}}', '{{$keyff}}')"></i>--}}
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






                                {{--                                <div class="listing-element service-block">--}}


                                {{--                                    <h6 class="mb-3">ыфвыфвыфыф</h6>--}}
                                {{--                                    <div class="d-flex justify-content-between w-100 flex-wrap  mt-2 ">--}}
                                {{--                                        <p>ыфвыфвыф</p>--}}
                                {{--                                        <div class="d-flex gap-3 align-items-center" style="">--}}
                                {{--                                            <label class="switch">--}}
                                {{--                                                <input type="checkbox" name="UF_64c2b786586e6" id="use_pin" value="1">--}}
                                {{--                                                <span class="slider round"></span>--}}
                                {{--                                            </label>--}}
                                {{--                                            <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('64c2b786586e6', '64c2b7849bddf')"></i>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="listing-element service-block">--}}
                                {{--                                    <h6 class="mb-3">фывыфвфы</h6>--}}
                                {{--                                    <div class="d-flex justify-content-between w-100 flex-wrap  mt-2 ">--}}
                                {{--                                        <p>фывыфыфв</p>--}}
                                {{--                                        <div class="d-flex gap-3 align-items-center" style="">--}}
                                {{--                                            <label class="switch">--}}
                                {{--                                                <input type="checkbox" name="UF_64c2b7b44ee02" id="use_pin" value="1">--}}
                                {{--                                                <span class="slider round"></span>--}}
                                {{--                                            </label>--}}
                                {{--                                            <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('64c2b7b44ee02', '64c2b7b1283c8')"></i>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="d-flex justify-content-between w-100 flex-wrap  mt-2 ">--}}
                                {{--                                        <p>фывыфвыфвыф</p>--}}
                                {{--                                        <div class="d-flex gap-3 align-items-center" style="">--}}
                                {{--                                            <label class="switch">--}}
                                {{--                                                <input type="checkbox" name="UF_64c2b7b44ee02" id="use_pin" value="1">--}}
                                {{--                                                <span class="slider round"></span>--}}
                                {{--                                            </label>--}}
                                {{--                                            <i class="fa-solid fa-trash" style="cursor:pointer;color:black;font-size: 22px;" wire:click="deleteConfirm('64c2b7b44ee02', '64c2b7b28c374')"></i>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                @endforeach
                                    <div class="listing-element service-block" style="justify-content: center;">
                                        {{--                                        <h6>Iniputy</h6>--}}
                                        {{--                                        <div class="d-flex gap-3 align-items-center w-100" style="">--}}
                                        <div class="wrapper" style="display:flex;flex-direction:row;justify-content:space-between;width: 100%;align-items:center;font-size:24px;">
                                            <div style="width:70%;">
                                                Aktualny podpis
                                            </div>
                                            <div style="width:30%;" class="input-in">
                                                {{--                                                    {{url($signPath)}}--}}
                                                <img src="{{url($signPath)}}" alt="" style="height: 100px">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="listing-actionbar">
                                        <button wire:click.prevent="submit"  type="button" class="btn1" style="margin-left:10px;" ><i class="fa-solid fa-share" aria-hidden="true" style="color:white"></i> Wysłać</button>
                                    </div>
                                </form>


                            </div>





                            <!-- Livewire Component wire-end:M9Wxq53evaYOyxxJ8WBS -->                </div>
                        {{--                        <script>--}}
                        {{--                            document.addEventListener('event-add-field', () => {--}}
                        {{--                                let modalItem = new bootstrap.Modal(document.querySelector('#addField'))--}}
                        {{--                                modalItem.show()--}}
                        {{--                            })--}}
                        {{--                        </script>--}}
                    </div>
                    <div class="mar"></div>
                    {{--                        <div id="heading_block3_2_dodaj_pytania">--}}



                    {{--                            <div class="boxinbox-titlebar">--}}
                    {{--                                <div class="icon">--}}
                    {{--                                    <i class="fa-solid fa-pen-to-square"></i>--}}
                    {{--                                </div>--}}
                    {{--                                <div style="margin-left:20px;"><h3>Dodaj pytania</h3></div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="boxinbox" style="background-color: rgb(240, 241, 241);">--}}
                    {{--                                <div class="listing-titlebar d-flex flex-column" style="margin-top:10px;">--}}
                    {{--                                    <button class="btn1 w-100 mb-1" style="color:white" id="add-field-in-question" wire:click.prevent="showAddModal">Dodaj pole</button>--}}










                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="modal fade" id="addField" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                    {{--                                <div wire:id="5THpEdgRuot3nnPAdnpG" class="modal-dialog" role="document" style="top:50%;transform:translateY(-70%)">--}}
                    {{--                                    <div class="modal-content">--}}
                    {{--                                        <div class="modal-header">--}}
                    {{--                                            <h5 class="modal-title" id="exampleModalLabel" style="color:black">Dodaj pole</h5>--}}
                    {{--                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--                                                <span aria-hidden="true">×</span>--}}
                    {{--                                            </button>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="modal-body">--}}
                    {{--                                            <form>--}}
                    {{--                                                <div class="form-group">--}}

                    {{--                                                    <label for="addFieldSelect" style="color:black">Wybierz pole</label>--}}
                    {{--                                                    <select class="form-control mt-2" id="addFieldModal" wire:model="type">--}}
                    {{--                                                        <option value="input">Input</option>--}}
                    {{--                                                        <option value="textarea">Textarea</option>--}}
                    {{--                                                        <option value="checkbox">Checkbox</option>--}}
                    {{--                                                        <option value="radio">Radio</option>--}}
                    {{--                                                    </select>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="form-group mt-3">--}}
                    {{--                                                    <label for="addNameModal" style="color:black">Nazwa</label>--}}
                    {{--                                                    <input type="text" class="form-control mt-2" id="addNameModal" wire:model="title">--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="form-group mt-3" id="last-field">--}}
                    {{--                                                    <label for="addOrderModal" style="color:black">Wybierz pole</label>--}}
                    {{--                                                    <input type="number" class="form-control mt-2" id="addOrderModal" wire:model="order">--}}
                    {{--                                                </div>--}}

                    {{--                                            </form>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="modal-footer">--}}
                    {{--                                            <button type="button" class="btn1" data-dismiss="modal" wire:click="addNewFields">Add</button>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}




                    {{--                                <!-- Livewire Component wire-end:5THpEdgRuot3nnPAdnpG -->        </div>--}}
                    {{--                            <script>--}}
                    {{--                                document.addEventListener('event-add-field', () => {--}}
                    {{--                                    let modalItem = new bootstrap.Modal(document.querySelector('#addField'))--}}
                    {{--                                    modalItem.show()--}}
                    {{--                                })--}}
                    {{--                                // document.addEventListener('close-modal', () => {--}}
                    {{--                                //     let modalItem = new bootstrap.Modal(document.querySelector('#addField'))--}}
                    {{--                                //     modalItem.hide()--}}
                    {{--                                //     document.querySelector('#addField').removeAttribute('aria-model')--}}
                    {{--                                //     document.querySelector('#addField').addAttribute('aria-hidden')--}}
                    {{--                                //     document.querySelector('#addField').setAttribute('aria-hidden', 'true')--}}
                    {{--                                // })--}}

                    {{--                                document.addEventListener('swal:confirm', event => {--}}

                    {{--                                    //console.log(event.detail.firstKey)--}}

                    {{--                                    Swal.fire({--}}
                    {{--                                        title: event.detail.title,--}}
                    {{--                                        text: event.detail.text,--}}
                    {{--                                        icon: event.detail.type,--}}
                    {{--                                        // buttons: true,--}}
                    {{--                                        // dangerModal: true,--}}

                    {{--                                        showCancelButton: true,--}}
                    {{--                                        confirmButtonColor: '#3085d6',--}}
                    {{--                                        cancelButtonColor: '#d33',--}}
                    {{--                                        confirmButtonText: 'OK'--}}
                    {{--                                    })--}}
                    {{--                                        .then((willDelete) => {--}}
                    {{--                                            if(willDelete.isConfirmed)--}}
                    {{--                                            {--}}
                    {{--                                                console.log(event.detail.secondKey)--}}
                    {{--                                                window.livewire.find('Q5Tyh2hCfm48zlvWGXH5').call('deleteFromDb', [event.detail.firstKey, event.detail.secondKey])--}}
                    {{--                                                //window.livewire.find('Q5Tyh2hCfm48zlvWGXH5').call('deleteFromDb', event.detail.secondKey)--}}
                    {{--                                            }--}}
                    {{--                                        })--}}
                    {{--                                })--}}
                    {{--                            </script>--}}
                    {{--                        </div>--}}

                </div>

                <!-- Livewire Component wire-end:Q5Tyh2hCfm48zlvWGXH5 -->            </div>
        </div>
    </div>
</div>
