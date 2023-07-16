@if(!isset($background))
    @php $background = '#fff' @endphp
@endif

<div class="boxinbox__body" id="accordion">
    <div class="boxinbox-titlebar" style="margin-top:10px;">
        <div class="icon">
            <i class="{{$block2_icon}}" aria-hidden="true"></i>
        </div>
        <div style="margin-left:20px;">
            <h3>{{$block2_title}}</h3>
        </div>
    </div>
    <div class="box-content" style="background: {{$background}}">
        @if(view()->exists('blocks.block3'))
            @include('blocks.block3', [
                'block3_icon' => 'fas fa-user',
                'block3_title' => 'Twoje Konto',
                'block3_content_class' => 'block3_twoje_konto',
                'block3_content' => 'blocks_content.block3_twoje_konto',
                'block3_heading' => 'heading_block3_twoje_konto'
            ])
        @endif
        <div class="mar"></div>
        @if(view()->exists('blocks.block3'))
            @include('blocks.block3', [
                'block3_icon' => 'fas fa-envelope-open',
                'block3_title' => 'Pakiet SMS i historia',
                'block3_content_class' => 'block3_pakiet_sms_i_historia',
                'block3_content' => 'blocks_content.block3_pakiet_sms_i_historia',
                'block3_heading' => 'heading_block3_pakiet_sms_i_historia'
            ])
        @endif
        <div class="mar"></div>
        @if(view()->exists('blocks.block3'))
            @include('blocks.block3', [
                'block3_icon' => 'fas fa-palette',
                'block3_title' => 'Ustawienia salonu i RODO',
                'block3_content_class' => 'block3_ustawienia_salonu_i_rodo',
                'block3_content' => 'blocks_content.block3_ustawienia_salonu_i_rodo',
                'block3_heading' => 'heading_block3_ustawienia_salonu_i_rodo'
            ])
        @endif
        <div class="mar"></div>
        @if(view()->exists('blocks.block3'))
            @include('blocks.block3', [
                'block3_icon' => 'fas fa-user-friends',
                'block3_title' => 'Pracownicy',
                'block3_content_class' => 'block3_pracownicy',
                'block3_content' => 'blocks_content.block3_pracownicy',
                'block3_heading' => 'heading_block3_pracownicy'
            ])
        @endif
        <div class="mar"></div>
        @if(view()->exists('blocks.block3'))
            @include('blocks.block3', [
                'block3_icon' => 'fas fa-id-card-alt',
                'block3_title' => 'Ogólna karta klienta',
                'block3_content_class' => 'block3_ogolna_karta_klienta',
                'block3_content' => 'blocks_content.block3_ogolna_karta_klienta',
                'block3_heading' => 'heading_block3_ogolna_karta_klienta'
            ])
        @endif
        <div class="mar"></div>
        @if(view()->exists('blocks.block3'))
            @include('blocks.block3', [
                'block3_icon' => 'fas fa-hand-holding-heart',
                'block3_title' => 'Karty zabiegowe i zabiegi',
                'block3_content_class' => 'block3_karty_zabiegowe_i_zabiegi',
                'block3_content' => 'blocks_content.block3_karty_zabiegowe_i_zabiegi',
                'block3_heading' => 'heading_block3_karty_zabiegowe_i_zabiegi'
            ])
        @endif
        <div class="mar"></div>
        @if(view()->exists('blocks.block3'))
            @include('blocks.block3', [
                'block3_icon' => 'fa fa-shopping-cart',
                'block3_title' => 'Produkty',
                'block3_content_class' => 'block3_produkty',
                'block3_content' => 'blocks_content.block3_produkty',
                'block3_heading' => 'heading_block3_produkty'
            ])
        @endif
        <div class="mar"></div>
        @if(view()->exists('blocks.block3'))
            @include('blocks.block3', [
                'block3_icon' => 'fas fa-cloud-download-alt',
                'block3_title' => 'Export dokumentów do PDF',
                'block3_content_class' => 'block3_export_dokumentov_do_pdf',
                'block3_content' => 'blocks_content.block3_export_dokumentov_do_pdf',
                'block3_heading' => 'heading_block3_export_dokumentov_do_pdf'
            ])
        @endif
    </div>
</div>
