<div>
    <div class="listing-titlebar justify-content-between">
        <div style="width:50%">
            <h6>Nazwa zabiegu</h6>
        </div>
        <div style="width:10%">
            <h6>Notatka</h6>
        </div>
        <div style="width:10%">
            <h6>Data</h6>
        </div>
        <div style="width:10%">
            <h6>Akcje</h6>
        </div>
    </div>
    <div class="listing-element service-block justify-content-between" data-id="1">
        @foreach($clientServices as $cs)

            <div style="width:50%">
                <h6>{{$cs->name}}</h6>
            </div>
            <div style="width:10%">

            </div>
            <div style="width:10%">

                {{$cs->created_at}}
            </div>
            <div style="width:10%">
                <form class="d-flex gap-3" style="font-size:20px;position:relative;top:-5px">

{{--                    <input type="hidden" value="" wire:model="idService">--}}

                    <a href="http://myclientcrm/functions/treatment_create?type=edit&amp;id=1"><i class="fa-solid fa-pen-to-square i-black"></i></a>

{{--                    <a style="cursor: pointer" wire:click.prevent="copy('1', 'asdsadsadsa')"><i class="fa-solid fa-copy i-black"></i></a>--}}
{{--                    <a href="" wire:click.prevent="delete('1')" id="delete-service"><i class="fa-solid fa-trash i-black"></i></a>--}}
{{--                    <input type="hidden" wire:model="fieldName" value="">--}}

                </form>
            </div>
        @endforeach
    </div>
</div>
