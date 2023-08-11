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

        @if(count($fieldsArrs) > 0)
            @foreach($fieldsArrs as $fieldsArr)
            <div class="boxinbox" style="background-color: rgb(240, 241, 241);">
                <div class="listing-titlebar d-flex flex-column" style="margin-top:10px;">

                </div>
                @foreach(json_decode($fieldsArr, 1) as $f)
                @switch($f['type'])
                    @case('input')

                        <div class="listing-element service-block">
                            <h6>{{$f['title']}}</h6>
                            <input class="formularz" name="" data-order="{{$f['order']}}" id="" type="" value="" maxlength="40">
                        </div>
                        @break
                    @case('textarea')
                        <div class="listing-element service-block">
                            <h6>{{$f['title']}}</h6>
                            <textarea class="formularz" name="" data-order="{{$f['order']}}" id="" cols="30" rows="10"></textarea>
                        </div>
                        @break
                    @case('checkbox')
                        <div class="listing-element service-block">
                            <h6 class="mb-3">{{$f['title']}}</h6>
                            @foreach($f['fields'] as $key => $ff)
                                <div class="d-flex justify-content-between w-100 flex-wrap @if($key != 0) mt-2 @endif">
                                    <p>{{$ff}}</p>
                                    <label class="switch">
                                        <input type="checkbox" name="UF_{{$key}}" id="" value="1">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        @break
                    @case('radio')
                        <div class="listing-element service-block">
                            <h6 class="mb-3">{{$f['title']}}</h6>
                            @php
                                $bytes = random_bytes(16);
                                $randCode = substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, 16);
                            @endphp
                            @foreach($f['fields'] as $key => $ff)
                                <div class="d-flex justify-content-between w-100 flex-wrap @if($key != 0) mt-2 @endif">
                                    <p>{{$ff}}</p>
                                    <input type="radio" id="" value="{{$ff}}" name="UF_{{$randCode}}" @if($key == 0) checked @endif>
                                </div>
                            @endforeach
                        </div>
                        @break
                @endswitch
            @endforeach
            @endforeach

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
