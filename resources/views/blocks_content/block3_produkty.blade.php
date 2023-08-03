
<div class="listing-titlebar">
    <div style="width:10%">
    </div>
    <div style="width:40%">
        <h6>Nazwa produktu</h6>
    </div>
    <div style="width:15%">
        <h6>Cena</h6>
    </div>
    <div style="width:15%">
        <h6>Wystarcza na</h6>
    </div>
    <div style="width:20%">
    </div>
</div>
@foreach(\App\Models\GroupBoot::get() as $product)
    <div class="listing-element">
        <div style="width:10%">
        </div>
        <div style="width:40%">
            <h6>{{$product->name}}</h6>
        </div>
        <div style="width:15%">
            <h6>{{$product->price}} zł</h6>
        </div>
        <div style="width:15%">
            <h6>{{$product->day_off}}</h6>
        </div>
        <div style="width:20%">
        </div>
    </div>
@endforeach
<!-- Wczytanie zabiegów z bazy i ich listing -->
<div class="listing-ending"></div>
<div class="listing-actionbar">
    <button type="button" onclick="location.href=`{{url('functions/product_create')}}?groupId={{\Illuminate\Support\Facades\Auth::user()->group_id}}`" class="btn1"><i class="fas fa-plus-circle" aria-hidden="true"></i> Dodaj produkt</button>
</div>



