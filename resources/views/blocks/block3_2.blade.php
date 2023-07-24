
    @php $background = '#f0f1f1' @endphp

    <div id="{{$block3_2_heading}}">
        <div class="boxinbox-titlebar">
            <div class="icon">
                <i class="{{$block3_2_icon}}" aria-hidden="true"></i>
            </div>
            <div style="margin-left:20px;"><h3>{{$block3_2_title}}</h3></div>
        </div>


        @if($block3_3_content_class == 'block3_2_rodoreset')
            @include('blocks_content.block3_2_rodoreset')
{{--        @elseif($block3_3_content_class == 'block3_3_editaccount')--}}
{{--            @include('blocks_content.block3_3_editaccount')--}}
        @elseif($block3_3_content_class == 'block3_2_dodaj_pracownika')
            <livewire:workers.create-worker/>
        @elseif($block3_3_content_class == 'block3_2_dodaj_gotowe_zabiegi')
            <div class="boxinbox" style="background: {{$background}}">
            @include('blocks_content.block3_2_dodaj_gotowe_zabiegi')
            </div>
        @elseif($block3_3_content_class == 'block3_2_dodaj_gotowe_zabiegi')
            <div class="boxinbox" style="background: {{$background}}">
                @include('blocks_content.block3_2_dodaj_gotowe_zabiegi')
            </div>
        @elseif($block3_3_content_class == 'block3_2_dodaj_zabieg')
            <div class="boxinbox" style="background: {{$background}}">
                @include('blocks_content.block3_2_dodaj_zabieg')
            </div>
        @elseif($block3_3_content_class == 'block3_2_product_create')
            <div class="boxinbox" style="background: {{$background}}">
                @include('blocks_content.block3_2_product_create')
            </div>
        @endif()
    </div>

