<div style="display: flex; flex-direction: row; justify-content: flex-start; align-items: center; flex-wrap: wrap;">
    <div class="listing-titlebar w-100" style="margin-top:10px;flex-direction:column;">
        <h3 style="width:100%;margin-bottom:30px;">Pracownicy:</h3>
        <div style="display:flex;flex-direction:row;width:100%;" class="pac-body">
            <div style="width:25%">
                <h6>Nazwa</h6>
            </div>
            <div style="width:25%">
                <h6>Hasło</h6>
            </div>
            <div style="width:25%">
                <h6>E-mail</h6>
            </div>
            <div style="width:25%">
                <h6>Telefon</h6>
            </div>
        </div>
    </div>
    @foreach(\App\Models\User::where('group_id', auth()->user()->group_id)->get() as $item)
        <div class="listing-element w-100" style="margin-top:10px;flex-direction:column;">
            <div style="display:flex;flex-direction:row;width:100%;" class="pac-body">
                <div style="width:25%">
                    <h6>{{$item->fullname}}</h6>
                </div>
                <div style="width:25%">
                    <h6>*******</h6>
                </div>
                <div style="width:25%;">
                    <h6>{{$item->email}}</h6>
                </div>
                <div style="width:25%">
                    <h6>{{$item->phone}}</h6>
                </div>
            </div>
        </div>
    @endforeach
</div>
@if(Auth::user()->roles == 'administrator')
    <div class="listing-actionbar mt-3">
        <a href="{{route('workers')}}"><button type="button" class="btn1" style="width:100%;"><i class="fas fa-plus-circle" aria-hidden="true"></i> Dodaj pracownika</button></a>
    </div>
@endif


