@if(!isset($background))
    @php $background = '#f0f1f1' @endphp
@endif

<div class="boxinbox__body">
    <div class="boxinbox-titlebar" style="margin-top:10px;">
        <div class="icon">
            <i class="{{$block1_icon}}" aria-hidden="true"></i>
        </div>
        <div style="margin-left:20px;">
            <h3>{{$block1_title}}</h3>
        </div>
    </div>
    <div class="boxinbox {{$block1_content_class}}">
        @if(view()->exists($block1_content))
            @include($block1_content)
        @endif
    </div>
</div>
