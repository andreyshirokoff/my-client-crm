<style>
    h6{
        margin-bottom: 0;
    }
</style>
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
            @if($product->photo)
            <img src="/storage/product/{{$product->photo}}" alt="" style="height: 100px;">
            @endif
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
        <div style="width:20%;font-size: 20px;" class="d-flex gap-3">
            <input type="hidden" value="{{$product->id}}">

            <a href="{{url('/functions/product-edit')}}?groupId={{\Illuminate\Support\Facades\Auth::user()->group_id}}&productId={{$product->id}}"><i class="fa-solid fa-pen-to-square i-black"></i></a>
            {{--                            @livewire('treatment-list-index', ['idService' => '123'])--}}
{{--            <a href="" style="cursor: pointer"><i class="fa-solid fa-copy i-black"></i></a>--}}
            <a href="{{url('/functions/product-delete')}}?productId={{$product->id}}" id="delete-service"><i class="fa-solid fa-trash i-black"></i></a>
        </div>
    </div>
@endforeach
<!-- Wczytanie zabiegów z bazy i ich listing -->
<div class="listing-ending"></div>
<div class="listing-actionbar">
    <button type="button" onclick="location.href=`{{url('functions/product-create')}}?groupId={{\Illuminate\Support\Facades\Auth::user()->group_id}}`" class="btn1"><i class="fas fa-plus-circle" aria-hidden="true"></i> Dodaj produkt</button>
</div>



