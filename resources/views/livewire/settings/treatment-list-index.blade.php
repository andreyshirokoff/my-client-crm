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
            <div class="listing-element">
                <div style="width:60%">
                    <h6>{{$service->title}}</h6>
                </div>
                <div style="width:20%">
                    <h6>Karta klienta</h6>
                </div>
                <div style="width:20%">
                    <h6>Opis zabiegu</h6>
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
