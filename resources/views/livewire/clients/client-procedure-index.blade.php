<div>
    <div class="listing-titlebar justify-content-between">
        <div style="width:50%">
            <h6>Nazwa zabiegu</h6>
        </div>

        <div style="width:40%">
            <h6>Data</h6>
        </div>
        <div style="width:10%">
            <h6>Akcje</h6>
        </div>
    </div>
    <div class="listing-element service-block justify-content-between align-items-start flex-column" style="gap: 20px;" data-id="1">
        @foreach($clientServices as $cs)
            <div style="display: flex;width:100%" class="items">
                <div style="width:50%">
                    <h6>{{$cs->name}}</h6>
                </div>
                <div style="width:40%">


                    {{$cs->formatDate}}
                </div>
                <div style="width:10%">
                    <form class="d-flex gap-3" style="font-size:20px;position:relative;top:-5px">

    {{--                    <input type="hidden" value="" wire:model="idService">--}}

                        <a href="{{route('edit.procedure')}}?clientServiceId={{$cs->id}}"><i class="fa-solid fa-pen-to-square i-black"></i></a>


    {{--                    <a style="cursor: pointer" wire:click.prevent="copy('1', 'asdsadsadsa')"><i class="fa-solid fa-copy i-black"></i></a>--}}
    {{--                    <a href="" wire:click.prevent="delete('1')" id="delete-service"><i class="fa-solid fa-trash i-black"></i></a>--}}
    {{--                    <input type="hidden" wire:model="fieldName" value="">--}}

                    </form>
                </div>
            </div>
        @endforeach
    </div>

</div>

