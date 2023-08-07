<div class="listing-element">
    <div style="width:30%;">
        <h6>{{$client->fullname}}</h6>
    </div>
    <div style="width:30%;">
        <h6>{{$client->email}}</h6>
    </div>
    <div style="width:30%;">
        @if($show)
            <h6>{{$client->phone}}</h6>
        @else
            <h6 wire:click.prevent="showsPhone">***********</h6>
        @endif
    </div>
    <div style="width:10%;display:flex;justify-content:flex-end;" class="width-10">
        <a href="{{route('clients')}}?clientId={{$clientId}}"><button class="btn1" style="color:white">Więcej</button></a>
    </div>
</div>
