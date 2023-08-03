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
            <livewire:actual-card-index/>
{{--            @include('blocks.block3_dock', [--}}
{{--                    'block3_2_icon' => 'fas fa-id-card-alt',--}}
{{--                    'block3_2_title' => 'Aktualna karta klienta',--}}
{{--                    'block3_2_content_class' => 'block3_2_aktualna_karta_klienta',--}}
{{--                    'block3_2_content' => $block3_3_content_class,--}}
{{--                    'block3_2_heading' => 'heading_block3_2_aktualna_karta_klienta',--}}
{{--                    'block3_doc_map_array' => $block3_doc_map_array--}}
{{--                ])--}}
{{--            <div class="mar"></div>--}}

{{--            @include('blocks.block3_dock', [--}}
{{--                    'block3_2_icon' => 'fas fa-id-card-alt',--}}
{{--                    'block3_2_title' => 'Dodaj pytania',--}}
{{--                    'block3_2_content_class' => 'block3_2_pytania',--}}
{{--                    'block3_2_content' => $block3_3_content_class_1,--}}
{{--                    'block3_2_heading' => 'heading_block3_2_pytania',--}}
{{--                    'block3_doc_pytania_array' => $block3_doc_pytania_array--}}
{{--                ])--}}
        @elseif($block3_3_content_class == 'block3_2_dodaj_pracownika')
            @include('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-user-friends',
                    'block3_2_title' => 'Dodaj pracownika',
                    'block3_3_content_class' => 'block3_2_dodaj_pracownika',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_dodaj_pracownika',
                ])
        @elseif($block3_3_content_class == 'block3_2_dodaj_gotowe_zabiegi')
            @include('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-hand-holding-heart',
                    'block3_2_title' => 'Dodaj gotowe zabiegi',
                    'block3_3_content_class' => 'block3_2_dodaj_gotowe_zabiegi',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_dodaj_gotowe_zabiegi',
                ])
        @elseif($block3_3_content_class == 'block3_2_dodaj_zabieg')
            @include('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-user-friends',
                    'block3_2_title' => 'Dodaj zabieg',
                    'block3_3_content_class' => 'block3_2_dodaj_zabieg',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_dodaj_zabieg',
                ])
        @elseif($block3_3_content_class == 'block3_2_dodaj_pytania')
{{--            <div>--}}
{{--            <livewire:treatment-quest-result-index />--}}
{{--            </div>--}}
            <div>
            <livewire:treatment-question-index />
            </div>
        @elseif($block3_3_content_class == 'block3_2_product_create')
            @include('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-user-friends',
                    'block3_2_title' => 'Dodaj produkt',
                    'block3_3_content_class' => 'block3_2_product_create',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_product_create',
                ])
        @elseif($block3_3_content_class == 'block3_2_product_edit')
            @include('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-user-friends',
                    'block3_2_title' => 'Edytuj produkt',
                    'block3_3_content_class' => 'block3_2_product_edit',
                    'block3_2_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_product_edit',
                ])
        @elseif($block3_3_content_class == 'block3_2_profil_klienta')
            @include('blocks.block3_2', [
                    'block3_2_icon' => 'fa-solid fa-passport',
                    'block3_2_title' => 'Inicjały',
                    'block3_3_content_class' => 'block3_2_profil_klienta',
                    'block3_3_content' => $block3_3_content_class,
                    'block3_2_heading' => 'heading_block3_2_block3_2_profil_klienta',
                ])
            <div class="mar"></div>
            @include('blocks.block3_2', [
                    'block3_2_icon' => 'fa-solid fa-list',
                    'block3_2_title' => 'Notatka',
                    'block3_3_content_class' => 'block3_2_klienta_notatka',
                    'block3_3_content' => 'block3_2_klienta_notatka',
                    'block3_2_heading' => 'heading_block3_2_block3_2_klienta_notatka',
                ])
            <div class="mar"></div>
{{--            @include('blocks.block3_2', [--}}
{{--                    'block3_2_icon' => 'fa-solid fa-image',--}}
{{--                    'block3_2_title' => 'Galeria efektów przed/po:',--}}
{{--                    'block3_3_content_class' => 'block3_2_galeria_efektow_przed',--}}
{{--                    'block3_3_content' => 'block3_2_galeria_efektow_przed',--}}
{{--                    'block3_2_heading' => 'heading_block3_2_galeria_efektow_przed',--}}
{{--                ])--}}
{{--            <div class="mar"></div>--}}
            @include('blocks.block3_2', [
                    'block3_2_icon' => 'fas fa-hand-holding-heart',
                    'block3_2_title' => 'Zabiegi klienta',
                    'block3_3_content_class' => 'block3_2_zabiegi_klienta',
                    'block3_3_content' => 'block3_2_zabiegi_klienta',
                    'block3_2_heading' => 'heading_block3_2_zabiegi_klienta',
                ])
        @endif
    </div>
</div>
