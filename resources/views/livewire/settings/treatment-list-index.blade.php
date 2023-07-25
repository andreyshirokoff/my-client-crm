<div>

    <div class="listing-titlebar">
        <div style="width:60%">
            <h6>Nazwa zabiegu</h6>
        </div>
        <div style="width:20%">
            <h6>Karta klienta</h6>
        </div>
        <div style="width:20%">
            <h6>Opis zabiegu</h6>
        </div>
    </div>
    @if($services)
        @foreach($services as $service)
            <div class="listing-element service-block" data-id="{{$service->id}}">
                <div style="width:60%">
                    <h6>{{$service->name}}</h6>
                </div>
                <div style="width:20%">
                    <h6>Karta klienta</h6>
                </div>
                <div style="width:20%">
                    <form class="d-flex gap-3" style="font-size:20px;position:relative;top:-5px">

                            <input type="hidden" value="{{$service->id}}" wire:model="idService">

                            <a href="{{url('/functions/treatment_create')}}?type=edit&id={{$service->id}}"><i class="fa-solid fa-pen-to-square i-black"></i></a>
{{--                            @livewire('treatment-list-index', ['idService' => '123'])--}}
                            <a style="cursor: pointer" wire:click.prevent="copy('{{$service->id}}', '{{$service->name}}')"><i class="fa-solid fa-copy i-black"></i></a>
                            <a href="" wire:click.prevent="delete('{{$service->id}}')" id="delete-service"><i class="fa-solid fa-trash i-black"></i></a>
                            <input type="hidden" wire:model="fieldName">

                    </form>
                </div>
            </div>
        @endforeach
    @endif


    <div class="listing-ending"></div>



    <div class="listing-actionbar btns" style="gap: 15px;">
        <button type="button" style="" onclick="location.href='{{url('functions/treatment_template')}}'" class="btn1"><i class="fas fa-plus-circle" aria-hidden="true"></i> Wybierz z gotowych</button>
        <button type="button" onclick="location.href='{{url('functions/treatment_create')}}'" class="btn1"><i class="fas fa-plus-circle" aria-hidden="true"></i> Dodaj zabieg</button>
    </div>


</div>

{{--@section('addit_js')--}}
{{--    <script>--}}
{{--        $(document).click((e) => {--}}
{{--            if(--}}
{{--                $(e.target).is('#copy-service')--}}
{{--                || $(e.target).closest('#copy').length > 0--}}
{{--            )--}}
{{--            {--}}
{{--                let id = $(e.target).closest('.service-block').attr('data-id')--}}
{{--                @this.set('idService', id)--}}
{{--            }--}}
{{--        })--}}
{{--    </script>--}}
{{--@endsection--}}
