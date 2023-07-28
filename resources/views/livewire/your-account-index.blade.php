<div class="boxinbox-inside">

    <div style="display: flex; flex-direction: row;height: 100px; align-items: center;" class="boxinbox-inside__body">
        <div style="width: 15%;" class="boxinbox-inside__item">
            @if(!$user->avatar)
                <img src="{{url('image/user/default.jpg')}}" style="width:100px; border: 3px solid #ffffff; border-radius: 500px;">
            @else
                <img src="/storage/{{Auth::user()->avatar}}" style="width:54px;height:54px;border:3px solid #ffffff;border-radius:60px;">
            @endif
        </div>
        <div style="width: 40%;margin-left:10px;" class="boxinbox-inside__item">
            {{$user->role}}<br>
            <h3>{{$user->fullname}}</h3>
        </div>
        <div style="width:45%; display: flex; flex-direction: column; justify-content:center;align-items:flex-start;" class="boxinbox-inside__item">
            <div style="display: flex; flex-direction: row; justify-content:flex-end;align-items:center;">
                <div class="iconround" style="margin-right: 10px;"><i class="fas fa-phone-alt" aria-hidden="true"></i></div>{{$maskedPhone}}								</div>
            <div style="display: flex; flex-direction: row; justify-content:flex-end;align-items:center;margin-top: 10px;">
                <div class="iconround" style="margin-right: 10px;"><i class="fas fa-envelope" aria-hidden="true"></i></div>{{$user->email}}								</div>
        </div>

    </div>

</div>

@if(strtotime($groupTariff->active_to) > time())
<div class="boxinbox-inside" style="margin-top:10px;">

    <div style="display: flex; flex-direction: row; min-height: 100px; align-items: center;" class="boxinbox-inside__body">
        <div style="width: 15%; display: flex; flex-direction: row; justify-content:flex-start; align-items: center;" class="boxinbox-inside__item">
            <img src="{{url('image/systemfiles/BCLogo_svg_sygnet.svg')}}" width="95px">
            <!--<span class="icona-bc" style="width:75px; height:75px; background-size:75px 75px;background-position: center;"></span>-->
        </div>
        <div style="width: 40%;margin-left:10px;" class="boxinbox-inside__item">
            <span>Twój pakiet:</span><br>
            <h3>{{$groupTariff->name}}</h3>
        </div>
        <div style="width: 45%;;display: flex; flex-direction: column;" class="boxinbox-inside__item">
            <span>Ważny do: {{$activeTo}}</span>
            <h3>Pozostało: {{$remainDays}}</h3>
        </div>

    </div>
</div>
@endif

<div class="listing-actionbar justify-content-between flex-wrap" style="margin-top:10px;gap: 20px;">
    <span style="">Chcesz doładować konto? Zrobisz to przez - my-client.pl</span>
    <a href="https://beautycheck.pl/moje-konto/" style="width:300px" class=""><button style="width: 100%" type="button" class="btn-glow">DOŁADUJ PRZEZ WWW</button></a>
</div>

<div class="listing-actionbar flex-wrap bottom-buttons" style="gap:10px">
    <a href="{{url('functions/usrimage')}}" class="link1" style="display: block"><button type="button" class="btn1" style=""><i class="fas fa-camera" aria-hidden="true"></i> Zmień zdjęcie</button></a>
    <a href="{{url('functions/editaccount')}}" class="link1" style="display: block"><button type="button" class="btn1" style=""><i class="fas fa-edit" aria-hidden="true"></i> Edytuj dane</button></a>
    <a href="{{url('functions/usrsignature')}}" class="link1" style="display: block"><button type="button" class="btn1" style=""><i class="fas fa-pen" aria-hidden="true"></i> Dodaj/edytuj podpis</button></a>
{{--    <a href="{{url('functions/usrpin')}}" class="link1" style="display: block"><button type="button" class="btn1" style=""><i class="fas fa-lock" aria-hidden="true"></i> Ustaw pin</button></a>--}}
</div>



