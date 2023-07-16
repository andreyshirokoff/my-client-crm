
    @php $background = '#f0f1f1' @endphp

<div id="{{$block3_heading}}">
    <div class="boxinbox-titlebar" data-toggle="collapse" data-target="#{{$block3_content_class}}" aria-expanded="true" aria-controls="{{$block3_content_class}}">
        <div class="icon">
            <i class="{{$block3_icon}}" aria-hidden="true"></i>
        </div>
        <div style="margin-left:20px;"><h3>{{$block3_title}}</h3></div>
    </div>
    <div id="{{$block3_content_class}}" class="boxinbox hiden {{$block3_content_class}} collapse show" aria-labelledby="{{$block3_heading}}" data-parent="#accordion" style="background-color: {{$background}}">
        @if(view()->exists($block3_content))
            @include($block3_content)
        @endif
    </div>
</div>
