@if(!isset($background))
    @php $background = '#fff' @endphp
@endif

<div class="boxinbox__body" id="accordion">

    <div class="boxinbox-titlebar" style="margin-top:10px;">
        <div class="icon">
            <i class="{{$block2_2_icon}}" aria-hidden="true"></i>
        </div>
        <div style="margin-left:20px;">
            <h3>{{$block2_2_title}}</h3>
        </div>
    </div>

    <div class="box-content" style="background: {{$background}}">
        @if($block3_3_content_class == 'block3_3_usrimage')
            @if(view()->exists('blocks.block3_3'))
                @include('blocks.block3_3', [
                    'block3_3_icon' => 'fas fa-camera',
                    'block3_3_title' => 'Zmień zdjęcie',
                    'block3_3_content_class' => 'block3_3_usrimage',
                    'block3_3_content' => $block3_3_content_class,
                    'block3_3_heading' => 'heading_block3_3_usrimage'
                ])
            @endif
        @elseif($block3_3_content_class == 'block3_3_editaccount')
            @include('blocks.block3_3', [
                    'block3_3_icon' => 'fas fa-edit',
                    'block3_3_title' => 'Edytuj konto',
                    'block3_3_content_class' => 'block3_3_editaccount',
                    'block3_3_content' => $block3_3_content_class,
                    'block3_3_heading' => 'heading_block3_3_editaccount'
                ])
        @elseif($block3_3_content_class == 'block3_3_usrsignature')
            @include('blocks.block3_3', [
                    'block3_3_icon' => 'fas fa-camera',
                    'block3_3_title' => 'Dodaj/edytuj podpis',
                    'block3_3_content_class' => 'block3_3_usrsignature',
                    'block3_3_content' => $block3_3_content_class,
                    'block3_3_heading' => 'heading_block3_3_usrsignature'
                ])
        @elseif($block3_3_content_class == 'block3_3_usrpin')
            @include('blocks.block3_3', [
                    'block3_3_icon' => 'fas fa-edit',
                    'block3_3_title' => 'Ustaw pin',
                    'block3_3_content_class' => 'block3_3_usrpin',
                    'block3_3_content' => $block3_3_content_class,
                    'block3_3_heading' => 'heading_block3_3_usrpin'
                ])
        @elseif($block3_3_content_class == 'block3_2_rodoreset')
            @include('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-trash',
                    'block3_2_title' => 'Potwierdź operację',
                    'block3_2_content_class' => 'block3_2_rodoreset',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_rodoreset'
                ])
        @elseif($block3_3_content_class == 'aktualna_karta_klienta')
            @include('blocks.block3_dock', [
                    'block3_2_icon' => 'fas fa-id-card-alt',
                    'block3_2_title' => 'Aktualna karta klienta',
                    'block3_2_content_class' => 'block3_2_aktualna_karta_klienta',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_aktualna_karta_klienta',
                    'block3_doc_map_array' => $block3_doc_map_array
                ])
            <div class="mar"></div>
            @include('blocks.block3_dock', [
                    'block3_2_icon' => 'fas fa-id-card-alt',
                    'block3_2_title' => 'Dodaj pytania',
                    'block3_2_content_class' => 'block3_2_pytania',
                    'block3_2_content' => $block3_3_content_class_1,
                    'block3_2_heading' => 'heading_block3_2_pytania',
                    'block3_doc_pytania_array' => $block3_doc_pytania_array
                ])
        @endif
    </div>
</div>
