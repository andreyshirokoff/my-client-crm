
    @php $background = '#f0f1f1' @endphp

<div id="{{$block3_3_heading}}">
    <div class="boxinbox-titlebar">
        <div class="icon">
            <i class="{{$block3_3_icon}}" aria-hidden="true"></i>
        </div>
        <div style="margin-left:20px;"><h3>{{$block3_3_title}}</h3></div>
    </div>
    <div id="{{$block3_3_content_class}}" class="boxinbox hiden {{$block3_3_content_class}}" style="background-color: {{$background}}">
        <div class="boxinbox-inside">
            <livewire:user-data-index/>
{{--            <div style="display: flex; flex-direction: row;min-height: 100px; align-items: center;" class="user-data">--}}
{{--                <div style="width: 100px;" class="user-data__item">--}}
{{--                    <img src="{{url('image/user/default.jpg')}}" style="width:100px; border: 3px solid #ffffff; border-radius: 500px;">--}}
{{--                </div>--}}
{{--                <div style="width: 40%;margin-left:10px;" class="user-data__item">--}}
{{--                    Administrator<br>--}}
{{--                    <h3>Test Test</h3>--}}
{{--                </div>--}}
{{--                <div style="flex-grow: 1;display: flex; flex-direction: column; justify-content:center;align-items:flex-start;" class="user-data__item">--}}
{{--                    <div style="display: flex; flex-direction: row; justify-content:flex-end;align-items:center;">--}}
{{--                        <div class="iconround" style="margin-right: 10px;"><i class="fas fa-phone-alt" aria-hidden="true"></i></div>+48 323232323								</div>--}}
{{--                    <div style="display: flex; flex-direction: row; justify-content:flex-end;align-items:center;margin-top: 10px;">--}}
{{--                        <div class="iconround" style="margin-right: 10px;"><i class="fas fa-envelope" aria-hidden="true"></i></div>tekijap368@msback.com								</div>--}}
{{--                </div>--}}

{{--            </div>--}}

        </div>
        @if($block3_3_content_class == 'block3_3_usrimage')
            @include('blocks_content.block3_3_usrimage')
        @elseif($block3_3_content_class == 'block3_3_editaccount')
            @include('blocks_content.block3_3_editaccount')
        @elseif($block3_3_content_class == 'block3_3_usrsignature')
            @include('blocks_content.block3_3_usrsignature')
        @elseif($block3_3_content_class == 'block3_3_usrpin')
            @include('blocks_content.block3_3_usrpin')
        @elseif($block3_3_content_class == 'block3_2_profil_klienta')
            @include('blocks_content.block3_3_profil_klienta')
        @endif()
    </div>
</div>
