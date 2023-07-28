<div>


    <div class="boxinbox-inside">

        <form>
            <h4>Wybierz z listy jeden z gotowych zabiegów do zaimportowania.</h4><br>
            <p>W ustawieniach Twojego miejsca Beauty pojawi się wskazany zabieg wraz z przypisaną do niego kartą zabiegową. Zarówno wszystkie ustawienia poniższego zabiegu oraz karty mogą zostać przez Ciebie edytowane lub usunięte zaraz dodaniu zabiegu. Skorzystaj z gotowych rozwiązań, które oszczędzą Twój czas.</p><br>
            <select name="treatment_selected" id="treatment_selected" class="formularz" style="margin-bottom:20px;" wire:model.defer="selected">
                @if($serviceTemplates)
                    @foreach($serviceTemplates as $temp)
                        <option value="{{$temp->id}}">{{$temp->name}}</option>
                    @endforeach
                @endif
{{--                <option value="2943">Epilacja laserowa ALMA SOPRANO TITANIUM</option>--}}
{{--                <option value="2944">Mikronakłuwanie DERMAPEN </option>--}}
{{--                <option value="2945">Zagęszczenie owalu twarzy ALMA HARMONY NIR</option>--}}
{{--                <option value="2946">Zamykanie naczynek ALMA HARMONY DYE VL</option>--}}
{{--                <option value="2947">Przebudowa skóry ALMA HARMONY CLEARLIFT</option>--}}
{{--                <option value="2948">Laser frakcyjny ALMA HARMONY IPIXEL</option>--}}
{{--                <option value="2954">Zabieg na Twarz/Ciało (WZÓR)</option>--}}
{{--                <option value="2957">Makijaż Permanentny</option>--}}
{{--                <option value="2960">Endermologia LPG Alliance</option>--}}
{{--                <option value="2966">Zabiegi złuszczające (KWASY)</option>--}}
{{--                <option value="2967">Regeneracja brwi</option>--}}
{{--                <option value="2984">Stylizacja brwi</option>--}}
{{--                <option value="2990">Masaż Kobido</option>--}}
{{--                <option value="2991">Klasyczny masaż na ciało</option>--}}
{{--                <option value="2992">Masaż antycellulitowy bańką chińską</option>--}}
{{--                <option value="3150">Stylizacja rzęs</option>--}}
{{--                <option value="3151">Laminacja rzęs</option>--}}
{{--                <option value="3152">Laminacja brwi</option>--}}
{{--                <option value="3170">Podstawowy zabieg podologiczny</option>--}}
{{--                <option value="3171">Podologia - terapia wrastających paznokci</option>--}}
{{--                <option value="3172">Podologia - brodawki wirusowe</option>--}}
{{--                <option value="3173">Manicure / Pedicure (WZÓR)</option>--}}
{{--                <option value="4389">Karta zabiegowa tatuaż (WZÓR)</option>--}}
{{--                <option value="4682">Zgoda rodzica na zabieg, karta ogólna (WZÓR)</option>--}}
{{--                <option value="5063">Mezoterapia igłowa</option>--}}
{{--                <option value="5064">Zabieg na twarz GENEO</option>--}}
{{--                <option value="5066">Fala radiowa MAXIMUS TRILIPO</option>--}}
{{--                <option value="5067">Fala uderzeniowa STORZ</option>--}}
{{--                <option value="5068">Kriolipoliza COOLTECH DEFINE</option>--}}
{{--                <option value="5070">Radiofrekwencja mikroigłowa VIRTUE RF</option>--}}
{{--                <option value="5071">Autorski zabieg na twarz PRO XN I stopnia</option>--}}
{{--                <option value="5072">Autorski zabieg na twarz PRO XN II stopnia</option>--}}
{{--                <option value="5073">Autorski zabieg na twarz PRO XN III stopnia</option>--}}
{{--                <option value="5074">Autorski zabieg na twarz PRO XN ACNE RESCUE</option>--}}
{{--                <option value="5076">Stymulatory tkankowe</option>--}}
{{--                <option value="5077">Epilacja laserowa PRIME LASE</option>--}}
{{--                <option value="5078">Zabieg na Twarz PCA SKIN</option>--}}
{{--                <option value="5079">Lampa LED od Dermapen</option>--}}
{{--                <option value="5080">Zabieg pielęgnacyjny na twarz</option>--}}
{{--                <option value="5081">Oczyszczanie manualne</option>--}}
{{--                <option value="5082">Mezoterapia mikroigłowa</option>--}}
{{--                <option value="5083">Medycyna estetyczna</option>--}}

            </select>



        </form></div>

    <div class="listing-actionbar bottom-buttons">
        <a href="{{url('dashboard/ustawienia')}}"><button type="button" class="btn1"><i class="fas fa-chevron-left" aria-hidden="true"></i> Anuluj</button></a>
        <button type="submit" class="btn1" style="margin-left:10px;" wire:click.prevent="submitForm"><i class="fas fa-plus-circle" aria-hidden="true"></i> Importuj zabieg</button>

    </div>



</div>
@section('addit_js')
    <script>
        $(document).ready(() => {
            $('#treatment_selected').trigger('change')
            @this.set('selected', $('#treatment_selected').val())
        })
    </script>
@endsection
