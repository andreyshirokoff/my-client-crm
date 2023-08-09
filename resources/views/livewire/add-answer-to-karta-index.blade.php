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
                                                        <div class="d-flex gap-3 align-items-center w-100" style="">
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
                                                                        <input type="checkbox" name="{{$keyff}}" id="use_pin" value="1" wire:model.defer="arrayToDb.{{$key}}.{{$keyS}}.{{$keyff}}">
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
                                                                    <input type="radio" id="tak2" value="{{$ff}}" name="{{$key}}" @if($i == 0) checked @endif wire:model.defer="arrayToDb.{{$key}}.{{$keyS}}.{{$keyff}}">
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

                                @endforeach
                                    <div class="listing-actionbar">
                                        <button wire:click.prevent="submitForm"  type="button" class="btn1" style="margin-left:10px;" ><i class="fa-solid fa-share" aria-hidden="true" style="color:white"></i> Wysłać</button>
                                    </div>
                                </form>


                            </div>





                            </div>
                    </div>
                    <div class="mar"></div>

                </div>

                <!-- Livewire Component wire-end:Q5Tyh2hCfm48zlvWGXH5 -->            </div>
        </div>
    </div>
</div>

