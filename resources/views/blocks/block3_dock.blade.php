
    @php $background = '#f0f1f1' @endphp

    <div id="{{$block3_2_heading}}">
        <div class="boxinbox-titlebar">
            <div class="icon">
                <i class="{{$block3_2_icon}}" aria-hidden="true"></i>
            </div>
            <div style="margin-left:20px;"><h3>{{$block3_2_title}}</h3></div>
        </div>

        @if($block3_2_content_class == 'block3_2_aktualna_karta_klienta')
            @foreach($block3_doc_map_array as $item)
                <div class="listing-titlebar-centered" style="margin-top:10px;">
                    <div style="color:black" >
                        {{$item['title']}}
                    </div>
                    <div style="display:flex;flex-direction:row;justify-content:center;align-items:center;">
                        <button type="button" onclick="location.href='document_editquestion.php?idkarty=10408&amp;iddokumentu=10408&amp;id_dokumentu=10408&amp;pytanie=2'" class="iconbutton-document editbutton"><i class="fas fa-edit" aria-hidden="true"></i></button>
                        <button type="button" onclick="location.href='document_moveupquestion.php?id_dokumentu=10408&amp;pytanie=2'" class="iconbutton-document"><i class="fas fa-chevron-up" aria-hidden="true"></i></button>
                        <button type="button" onclick="location.href='document_movedownquestion.php?id_dokumentu=10408&amp;pytanie=2'" class="iconbutton-document"><i class="fas fa-chevron-down" aria-hidden="true"></i></button>
                        <button type="button" onclick="return Confirm_Delete2()" class="iconbutton-document deletebutton"><i class="fas fa-times" aria-hidden="true"></i></button>
                        <script>
                            function Confirm_Delete2()
                            {
                                if (confirm("Czy na pewno chcesz usunć?") == true) {
                                    location.href='document_deletequestion.php?id_dokumentu=10408&pytanie=2'
                                } }
                        </script>

                    </div>
                </div>
                <div class="listing-element-ending">
                    <div style="width:100%;color:black">
                        @foreach($item['vars'] as $var)
                            <input type="radio" id="tak2" name="2" value="{{$var}}">
                            <label for="tak2">{{$var}}</label><br>
                        @endforeach
{{--                        <input type="radio" id="tak2" name="2" value="tak">--}}
{{--                        <label for="tak2">Tak</label><br>--}}
{{--                        <input type="radio" id="nie2" name="2" value="nie">--}}
{{--                        <label for="nie2">Nie</label><br>--}}
                        @if(isset($item['isAddit']) && $item['isAddit'] == 'Y')
                        <label for="pytanieuzupelniajace">Jeśli tak, to na co?</label><br>
                        <input type="text" class="formularz" id="pytanieuzupelniajace" name="pytanieuzupelniajace" required="">
                        @endif
                    </div>
                </div>
            @endforeach
        @elseif($block3_2_content_class == 'block3_2_pytania')
            <div class="boxinbox">
                <div class="listing-actionbar element-header" style="justify-content: flex-start;">
                    <h4 style="padding-right:10px;">Informacja:</h4>
                    <p>Zmiany w karcie zapisywane są w sposób automatyczny po każdej akcji.</p>
                </div>

                <script>

                    // function pokazformularzpo() {
                    //     document.getElementById("po").style.display = "block";
                    //     document.getElementById("ptn").style.display = "none";
                    //     document.getElementById("ptnt").style.display = "none";
                    //     document.getElementById("ptnn").style.display = "none";
                    //     document.getElementById("pwo").style.display = "none";
                    //     document.getElementById("pjo").style.display = "none";
                    //     window.location.href = "#pytanie";
                    //     return false;
                    // }
                    // function pokazformularzptn() {
                    //     document.getElementById("po").style.display = "none";
                    //     document.getElementById("ptn").style.display = "block";
                    //     document.getElementById("ptnt").style.display = "none";
                    //     document.getElementById("ptnn").style.display = "none";
                    //     document.getElementById("pwo").style.display = "none";
                    //     document.getElementById("pjo").style.display = "none";
                    //     window.location.href = "#pytanie";
                    //     return false;
                    // }
                    // function pokazformularzptnt() {
                    //     document.getElementById("po").style.display = "none";
                    //     document.getElementById("ptn").style.display = "none";
                    //     document.getElementById("ptnt").style.display = "block";
                    //     document.getElementById("ptnn").style.display = "none";
                    //     document.getElementById("pwo").style.display = "none";
                    //     document.getElementById("pjo").style.display = "none";
                    //     window.location.href = "#pytanie";
                    //     return false;
                    // }
                    // function pokazformularzptnn() {
                    //     document.getElementById("po").style.display = "none";
                    //     document.getElementById("ptn").style.display = "none";
                    //     document.getElementById("ptnt").style.display = "none";
                    //     document.getElementById("ptnn").style.display = "block";
                    //     document.getElementById("pwo").style.display = "none";
                    //     document.getElementById("pjo").style.display = "none";
                    //     window.location.href = "#pytanie";
                    //     return false;
                    // }
                    // function pokazformularzpwo() {
                    //     document.getElementById("po").style.display = "none";
                    //     document.getElementById("ptn").style.display = "none";
                    //     document.getElementById("ptnt").style.display = "none";
                    //     document.getElementById("ptnn").style.display = "none";
                    //     document.getElementById("pwo").style.display = "block";
                    //     document.getElementById("pjo").style.display = "none";
                    //     window.location.href = "#pytanie";
                    //     return false;
                    // }
                    // function pokazformularzpjo() {
                    //     document.getElementById("po").style.display = "none";
                    //     document.getElementById("ptn").style.display = "none";
                    //     document.getElementById("ptnt").style.display = "none";
                    //     document.getElementById("ptnn").style.display = "none";
                    //     document.getElementById("pwo").style.display = "none";
                    //     document.getElementById("pjo").style.display = "block";
                    //     window.location.href = "#pytanie";
                    //     return false;
                    // }

                </script>


                <div class="listing-actionbar" style="flex-wrap:wrap;">
                    @foreach($block3_doc_pytania_array as $item)
                        <button type="button" class="btn1 pokazformula-btn" style="width:100%;margin-bottom:10px;" data-click="#pokazformula-{{$item['id']}}"><i class="fas fa-plus-circle" aria-hidden="true"></i>{{$item['question']}}</button>
                    @endforeach
{{--                    <button type="button" onclick="pokazformularzpo()" class="btn" style="width:100%;margin-bottom:10px;"><i class="fas fa-plus-circle" aria-hidden="true"></i>  Pytanie otwarte z dowolną odpowiedzią</button>--}}
{{--                    <button type="button" onclick="pokazformularzptn()" class="btn" style="width:100%;margin-bottom:10px;"><i class="fas fa-plus-circle" aria-hidden="true"></i>  Pytanie z odpowiedzią tak/nie</button>--}}
{{--                    <button type="button" onclick="pokazformularzptnt()" class="btn" style="width:100%;margin-bottom:10px;"><i class="fas fa-plus-circle" aria-hidden="true"></i>  Pytanie z odpowiedzią tak/nie + dodatkowe pytanie gdy klient wybierze "tak"</button>--}}
{{--                    <button type="button" onclick="pokazformularzptnn()" class="btn" style="width:100%;margin-bottom:10px;"><i class="fas fa-plus-circle" aria-hidden="true"></i>  Pytanie z odpowiedzią tak/nie + dodatkowe pytanie gdy klient wybierze "nie"</button>--}}
{{--                    <button type="button" onclick="pokazformularzpwo()" class="btn" style="width:100%;margin-bottom:10px;"><i class="fas fa-plus-circle" aria-hidden="true"></i>  Pytanie wielokrotnego wyboru (wybór jednej, kilku lub żadnych opowiedzi.)</button>--}}
{{--                    <button type="button" onclick="pokazformularzpjo()" class="btn" style="width:100%;margin-bottom:10px;"><i class="fas fa-plus-circle" aria-hidden="true"></i>  Pytanie z odpowiedzią jedną z wielu</button>--}}
                </div>


                @foreach($block3_doc_pytania_array as $item)
                    <div class="pokazformula-item @if($item['id'] == 1) active @endif" id="pokazformula-{{$item['id']}}">
                        <form action="document_addquestion.php?id=10408&amp;type=po" method="post">
                            <div class="listing-actionbar" style="flex-direction:column!important;align-items:flex-start;">

                                <label for="pytanie" style="margin-bottom:10px;"><b>{{$item['description']}}</b></label>
                                @if(isset($item['isTextarea']) && $item['isTextarea'] == 'Y')
                                <textarea id="pytanie" type="textarea" name="pytanie" class="formularz" rows="4" cols="50" minlength="3" maxlength="2500" required=""></textarea>
                                @endif

                                @if(isset($item['vars_question']) && $item['vars_question'] != '')
                                    <div style="width:100%;">
                                        <br><label>{{$item['vars_question']}}</label><br>
                                        @foreach($item['vars'] as $var)
                                        <input type="radio" id="tak" name="abcd" value="{{$var}}">
                                        <label for="tak">{{$var}}</label><br>
                                        @endforeach
    {{--                                    <input type="radio" id="nie" name="abcd" value="nie">--}}
    {{--                                    <label for="nie">Nie</label><br>--}}
                                    </div>
                                @endif

                                @if(isset($item['input_question']) && $item['input_question'] != '')
                                    <div style="width:100%;">
                                        <label for="pytanieuzupelniajace">Jeśli klient wybierze "NIE" - zostanie poproszony o odpowiedź na pytanie o treści:</label>

                                        @for($i = 1; $i <= $item['input_count']; $i++)
                                            @if(isset($item['input_des']) && $item['input_des'] != '') {{$item['input_des'].' '.$i}} @endif
                                        <input type="text" class="formularz" id="pytanieuzupelniajace" name="pytanieuzupelniajace" required="">
                                        @endfor
                                    </div>
                                @endif
                                <button type="submit" class="btn1" style="margin-top:10px;"><i class="fas fa-check-circle" aria-hidden="true"></i>  Dodaj to pytanie</button>

                            </div>
                        </form>
                    </div>
                @endforeach
                <!-- Pytanie otwarte formularz -->
{{--                <div id="po" style="display: block;">--}}
{{--                    <form action="document_addquestion.php?id=10408&amp;type=po" method="post">--}}
{{--                        <div class="listing-actionbar" style="flex-direction:column!important;align-items:flex-start;">--}}

{{--                            <label for="pytanie" style="margin-bottom:10px;"><b>Treść pytania otwartego:</b></label>--}}
{{--                            <textarea id="pytanie" type="textarea" name="pytanie" class="formularz" rows="4" cols="50" minlength="3" maxlength="2500" required=""></textarea>--}}

{{--                            <button type="submit" class="btn" style="margin-top:10px;"><i class="fas fa-check-circle" aria-hidden="true"></i>  Dodaj to pytanie</button>--}}

{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}


{{--                <!-- Pytanie tak/nie formularz -->--}}
{{--                <div id="ptn" style="display:none;">--}}
{{--                    <form action="document_addquestion.php?id=10408&amp;type=ptn" method="post">--}}
{{--                        <div class="listing-actionbar" style="flex-direction:column!important;align-items:flex-start;">--}}

{{--                            <label for="pytanie" style="margin-bottom:10px;"><b>Treść pytania z odpowiedzią tak lub nie:</b></label>--}}
{{--                            <textarea id="pytanie" type="textarea" name="pytanie" class="formularz" rows="4" cols="50" minlength="3" maxlength="2500" required=""></textarea>--}}
{{--                            <div style="width:100%;">--}}
{{--                                <br><label>Możliwe odpowiedzi:</label><br>--}}
{{--                                <input type="radio" id="tak" name="abcd" value="tak">--}}
{{--                                <label for="tak">Tak</label><br>--}}
{{--                                <input type="radio" id="nie" name="abcd" value="nie">--}}
{{--                                <label for="nie">Nie</label><br>--}}
{{--                            </div>--}}

{{--                            <button type="submit" class="btn" style="margin-top:10px;"><i class="fas fa-check-circle" aria-hidden="true"></i>  Dodaj to pytanie</button>--}}

{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}



{{--                <!-- Pytanie PTN+T tak/nie + jeśli tak to dodatkowe pole formularz -->--}}
{{--                <div id="ptnt" style="display:none;">--}}
{{--                    <form action="document_addquestion.php?id=10408&amp;type=ptnt" method="post">--}}
{{--                        <div class="listing-actionbar" style="flex-direction:column!important;align-items:flex-start;">--}}

{{--                            <label for="pytanie" style="margin-bottom:10px;"><b>Treść pytania z odpowiedzią tak lub nie:</b></label>--}}
{{--                            <textarea id="pytanie" type="textarea" name="pytanie" class="formularz" rows="4" cols="50" minlength="3" maxlength="2500" required=""></textarea>--}}
{{--                            <div style="width:100%;">--}}
{{--                                <br><label>Możliwe odpowiedzi, które będzie mógł wybrać klient to:</label><br>--}}
{{--                                <input type="radio" id="tak" name="abcd" value="tak">--}}
{{--                                <label for="tak">Tak</label><br>--}}
{{--                                <input type="radio" id="nie" name="abcd" value="nie">--}}
{{--                                <label for="nie">Nie</label><br>--}}
{{--                            </div>--}}
{{--                            <div style="width:100%;">--}}
{{--                                <label for="pytanieuzupelniajace">Jeśli klient wybierze "TAK" - zostanie poproszony o odpowiedź na pytanie o treści:</label>--}}
{{--                                <input type="text" class="formularz" id="pytanieuzupelniajace" name="pytanieuzupelniajace" required="">--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="btn" style="margin-top:10px;"><i class="fas fa-check-circle" aria-hidden="true"></i>  Dodaj to pytanie</button>--}}

{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}




{{--                <!-- Pytanie PTN+N tak/nie + jeśli nie to dodatkowe pole formularz -->--}}
{{--                <div id="ptnn" style="display:none;">--}}
{{--                    <form action="document_addquestion.php?id=10408&amp;type=ptnn" method="post">--}}
{{--                        <div class="listing-actionbar" style="flex-direction:column!important;align-items:flex-start;">--}}

{{--                            <label for="pytanie" style="margin-bottom:10px;"><b>Treść pytania z odpowiedzią tak lub nie:</b></label>--}}
{{--                            <textarea id="pytanie" type="textarea" name="pytanie" class="formularz" rows="4" cols="50" minlength="3" maxlength="2500" required=""></textarea>--}}
{{--                            <div style="width:100%;">--}}
{{--                                <br><label>Możliwe odpowiedzi, które będzie mógł wybrać klient to:</label><br>--}}
{{--                                <input type="radio" id="tak" name="abcd" value="tak">--}}
{{--                                <label for="tak">Tak</label><br>--}}
{{--                                <input type="radio" id="nie" name="abcd" value="nie">--}}
{{--                                <label for="nie">Nie</label><br>--}}
{{--                            </div>--}}
{{--                            <div style="width:100%;">--}}
{{--                                <label for="pytanieuzupelniajace">Jeśli klient wybierze "NIE" - zostanie poproszony o odpowiedź na pytanie o treści:</label>--}}
{{--                                <input type="text" class="formularz" id="pytanieuzupelniajace" name="pytanieuzupelniajace" required="">--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="btn" style="margin-top:10px;"><i class="fas fa-check-circle" aria-hidden="true"></i>  Dodaj to pytanie</button>--}}

{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}




{{--                <!-- Pytanie wielokrotne formularz -->--}}
{{--                <div id="pwo" style="display:none;">--}}
{{--                    <form action="document_addquestion.php?id=10408&amp;type=pwo" method="post">--}}
{{--                        <div class="listing-actionbar" style="flex-direction:column!important;align-items:flex-start;">--}}

{{--                            <label for="pytanie" style="margin-bottom:10px;"><b>Treść pytania z odpowiedzią wielokrotną:</b></label>--}}
{{--                            <textarea id="pytanie" type="textarea" name="pytanie" class="formularz" rows="4" cols="50" minlength="3" maxlength="2500" required=""></textarea>--}}
{{--                            <br><label>Możliwe odpowiedzi (Maksymalnie 15, klient będzie mógł wybrać WSZYSTKIE, KILKA lub ŻADNĄ z odpowiedzi.):</label><br>--}}
{{--                            Odpowiedź 1: <input type="text" class="formularz" name="Odpowiedz1"><br>--}}
{{--                            Odpowiedź 2: <input type="text" class="formularz" name="Odpowiedz2"><br>--}}
{{--                            Odpowiedź 3: <input type="text" class="formularz" name="Odpowiedz3"><br>--}}
{{--                            Odpowiedź 4: <input type="text" class="formularz" name="Odpowiedz4"><br>--}}
{{--                            Odpowiedź 5: <input type="text" class="formularz" name="Odpowiedz5"><br>--}}
{{--                            Odpowiedź 6: <input type="text" class="formularz" name="Odpowiedz6"><br>--}}
{{--                            Odpowiedź 7: <input type="text" class="formularz" name="Odpowiedz7"><br>--}}
{{--                            Odpowiedź 8: <input type="text" class="formularz" name="Odpowiedz8"><br>--}}
{{--                            Odpowiedź 9: <input type="text" class="formularz" name="Odpowiedz9"><br>--}}
{{--                            Odpowiedź 10: <input type="text" class="formularz" name="Odpowiedz10"><br>--}}
{{--                            Odpowiedź 11: <input type="text" class="formularz" name="Odpowiedz11"><br>--}}
{{--                            Odpowiedź 12: <input type="text" class="formularz" name="Odpowiedz12"><br>--}}
{{--                            Odpowiedź 13: <input type="text" class="formularz" name="Odpowiedz13"><br>--}}
{{--                            Odpowiedź 14: <input type="text" class="formularz" name="Odpowiedz14"><br>--}}
{{--                            Odpowiedź 15: <input type="text" class="formularz" name="Odpowiedz15"><br>--}}

{{--                            <button type="submit" class="btn" style="margin-top:10px;"><i class="fas fa-check-circle" aria-hidden="true"></i>  Dodaj to pytanie</button>--}}

{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}

{{--                <!-- Pytanie jednaodpowiedz formularz -->--}}
{{--                <div id="pjo" style="display:none;">--}}
{{--                    <form action="document_addquestion.php?id=10408&amp;type=pjo" method="post">--}}
{{--                        <div class="listing-actionbar" style="flex-direction:column!important;align-items:flex-start;">--}}

{{--                            <label for="pytanie" style="margin-bottom:10px;"><b>Treść pytania z odpowiedzią jedną z wielu:</b></label>--}}
{{--                            <textarea id="pytanie" type="textarea" name="pytanie" class="formularz" rows="4" cols="50" minlength="3" maxlength="2500" required=""></textarea>--}}
{{--                            <br><label>Możliwe odpowiedzi (Maksymalnie 15, klient będzie mógł wybrać JEDNĄ odpowiedź):</label><br>--}}
{{--                            Odpowiedź 1: <input type="text" class="formularz" name="Odpowiedz1"><br>--}}
{{--                            Odpowiedź 2: <input type="text" class="formularz" name="Odpowiedz2"><br>--}}
{{--                            Odpowiedź 3: <input type="text" class="formularz" name="Odpowiedz3"><br>--}}
{{--                            Odpowiedź 4: <input type="text" class="formularz" name="Odpowiedz4"><br>--}}
{{--                            Odpowiedź 5: <input type="text" class="formularz" name="Odpowiedz5"><br>--}}
{{--                            Odpowiedź 6: <input type="text" class="formularz" name="Odpowiedz6"><br>--}}
{{--                            Odpowiedź 7: <input type="text" class="formularz" name="Odpowiedz7"><br>--}}
{{--                            Odpowiedź 8: <input type="text" class="formularz" name="Odpowiedz8"><br>--}}
{{--                            Odpowiedź 9: <input type="text" class="formularz" name="Odpowiedz9"><br>--}}
{{--                            Odpowiedź 10: <input type="text" class="formularz" name="Odpowiedz10"><br>--}}
{{--                            Odpowiedź 11: <input type="text" class="formularz" name="Odpowiedz11"><br>--}}
{{--                            Odpowiedź 12: <input type="text" class="formularz" name="Odpowiedz12"><br>--}}
{{--                            Odpowiedź 13: <input type="text" class="formularz" name="Odpowiedz13"><br>--}}
{{--                            Odpowiedź 14: <input type="text" class="formularz" name="Odpowiedz14"><br>--}}
{{--                            Odpowiedź 15: <input type="text" class="formularz" name="Odpowiedz15"><br>--}}
{{--                            <button type="submit" class="btn" style="margin-top:10px;"><i class="fas fa-check-circle" aria-hidden="true"></i>  Dodaj to pytanie</button>--}}

{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}

            </div>

        @endif

    </div>

