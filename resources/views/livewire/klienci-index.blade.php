<div>
    <div class="listing-titlebar">
        <div style="width:50%;">
            <h6>Nazwa</h6>
        </div>
        <div style="width:50%;display:flex;">
            <h6>Pokaż</h6>
        </div>
    </div>
    @foreach($docs as $doc)
        <div class="listing-element">
            {{--                    <input class="inp-hid" type="hidden" value="{{$card->id}}">--}}
            <div style="width:50%;">
                <h6>{{$doc->name}}</h6>
            </div>
            <div style="width:50%;">
                @if($doc->path)
                    <i class="fa-solid fa-download download-btn" wire:click="downloadFile('storage/docs/{{$doc->path}}')" style="cursor:pointer"></i>
                @endif
            </div>
        </div>
{{--        <div class="listing-element">--}}
{{--            <div style="width:30%;">--}}
{{--                <h6>{{$client->fullname}}</h6>--}}
{{--            </div>--}}
{{--            <div style="width:30%;">--}}
{{--                <h6>{{$client->email}}</h6>--}}
{{--            </div>--}}
{{--            <div style="width:30%;">--}}
{{--                {{$show[$client->id]}}--}}
{{--                @if($show[$client->id] === 'true')--}}
{{--                    <h6>{{$client->phone}}</h6>--}}
{{--                @else--}}
{{--                    <h6 wire:click="showsPhone({{$client->id}})">***********</h6>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--            <div style="width:10%;display:flex;justify-content:flex-end;" class="width-10">--}}
{{--                <a href="{{route('clients')}}?clientId={{$client->id}}"><button class="btn1" style="color:white">Więcej</button></a>--}}
{{--            </div>--}}
{{--        </div>--}}
    @endforeach
    {{$docs->links()}}
    <!--script to deal with ajax-->
    <script src="/functions/beautyplans/assets/js/beautyplans.js"></script>
    <!--additional css-->
    {{--    <link rel="stylesheet" href="/functions/beautyplans/assets/css/beautyplans.css">--}}
    {{--    <script src="/lib/select2/js/select2.min.js"></script>--}}
    <script>
        $(document).ready(function() {
            $('.area_choose.select2').select2();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>




</div>
