<div style="display: flex; flex-direction: row;min-height: 100px; align-items: center;" class="user-data">
    <div style="width: 100px;" class="user-data__item">
        @if(!$user->avatar)
            <img src="{{url('image/user/default.jpg')}}" style="width:100px; border: 3px solid #ffffff; border-radius: 500px;">
        @else
            <img src="/storage/{{Auth::user()->avatar}}" style="width:54px;height:54px;border:3px solid #ffffff;border-radius:60px;">
        @endif
    </div>
    <div style="width: 40%;margin-left:10px;" class="user-data__item">
        {{$user->roles}}<br>
        <h3>{{$user->fullname}}</h3>
    </div>
    <div style="flex-grow: 1;display: flex; flex-direction: column; justify-content:center;align-items:flex-start;" class="user-data__item">
        <div style="display: flex; flex-direction: row; justify-content:flex-end;align-items:center;">
            <div class="iconround" style="margin-right: 10px;"><i class="fas fa-phone-alt" aria-hidden="true"></i></div>{{$maskedPhone}}								</div>
        <div style="display: flex; flex-direction: row; justify-content:flex-end;align-items:center;margin-top: 10px;">
            <div class="iconround" style="margin-right: 10px;"><i class="fas fa-envelope" aria-hidden="true"></i></div>{{$user->email}}								</div>
    </div>

</div>
