<form wire:submit.prevent="submitForm">

    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Nazwa salonu
        </div>
        <div style="width:30%;" class="input-in">
            <input class="formularz" name="salonname" id="salonname" type="text" value="" maxlength="40" wire:model="salonTitle">
            @error('salonTitle') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="listing-element row-with-input">
        <div style="width:70%;padding-right:60px;">
            Logo Twojego salonu.<br><br>(Dla najlepszych rezultatów wgraj plik PNG nie zawierający tła w rozmiarze maksymalnym 800 x 800 px). Po wgraniu pliku z logo zobaczysz jego podgląd w oknie obok. Sugerujemy użycie logo w wersji poziomej.
        </div>
        <div style="width:30%;" class="input-in">
            <div style="display:flex; width:100%; border: 1px solid #a5a5a5; margin-bottom:5px; padding:10px; border-radius:10px;min-height:100px; align-items:center; justify-content: center;">
                @if($image)
                    <img src="{{url('storage/salon/'.$image)}}" alt="">
                @else
                    Brak logo.
                @endif
            </div>
            <input class="formularz" name="logofile" id="logofile" type="file" image="image/png" wire:model="image">
            @error('image') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="listing-element" style="flex-direction:column">
        <div style="width:100%;">
            <h4>Stopka w mailach</h4>
            <p style="padding-bottom:20px;">Utwórz stopkę salonu, która będzie automatycznie dołączana u dołu maili wysyłanych do klientów. Stopka oddzielona jest poziomą linią od pozostałej treści maila i może zawierać dowolne dane.</p>
        </div>
        <div style="width:100%">
            <div id="quil-editor" style="height: 300px">
                <p>Начните писать здесь...</p>
            </div>
{{--            <textarea name="mail_footer" id="mail_footer" rows="40" cols="50" aria-hidden="true" style="display: none;"></textarea>--}}
{{--            <div role="application" class="tox tox-tinymce" aria-disabled="false" style="visibility: hidden; height: 200px;">--}}
{{--                <div class="tox-editor-container">--}}
{{--                    <div data-alloy-vertical-dir="toptobottom" class="tox-editor-header">--}}
{{--                        <div role="menubar" data-alloy-tabstop="true" class="tox-menubar"></div>--}}
{{--                        <div role="group" class="tox-toolbar-overlord" aria-disabled="false"><div role="group" class="tox-toolbar__primary">--}}
{{--                                <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group">--}}
{{--                                    <button aria-label="Cofnij" title="Cofnij" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true">--}}
{{--                                        <span class="tox-icon tox-tbtn__icon-wrap">--}}
{{--                                            <svg width="24" height="24" focusable="false">--}}
{{--                                                <path d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 01-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 11-1.4 1.4l-5-5a1 1 0 010-1.4l5-5a1 1 0 011.4 1.4L6.4 8z" fill-rule="nonzero"></path>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                    </button>--}}
{{--                                    <button aria-label="Powtórz" title="Powtórz" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true">--}}
{{--                                        <span class="tox-icon tox-tbtn__icon-wrap">--}}
{{--                                            <svg width="24" height="24" focusable="false">--}}
{{--                                                <path d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 11-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 111.4-1.4l5 5a1 1 0 010 1.4l-5 5a1 1 0 01-1.4-1.4l3.3-3.3z" fill-rule="nonzero"></path>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group">--}}
{{--                                    <button aria-label="Pogrubienie" title="Pogrubienie" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false">--}}
{{--                                        <span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false">--}}
{{--                                                <path d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z" fill-rule="evenodd"></path>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                    </button>--}}
{{--                                    <button aria-label="Kursywa" title="Kursywa" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false">--}}
{{--                                        <span class="tox-icon tox-tbtn__icon-wrap"--}}
{{--                                        ><svg width="24" height="24" focusable="false">--}}
{{--                                                <path d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z" fill-rule="evenodd">--}}

{{--                                                </path>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                    </button>--}}
{{--                                    <button aria-label="Podkreślenie" title="Podkreślenie" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false">--}}
{{--                                        <span class="tox-icon tox-tbtn__icon-wrap">--}}
{{--                                            <svg width="24" height="24" focusable="false">--}}
{{--                                                <path d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 01-.4 1.8l-1 1.4a5.3 5.3 0 01-5.5 1 5 5 0 01-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 01-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 002.2.8 3.4 3.4 0 002.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1zM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 010-2z" fill-rule="evenodd"></path>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tox-anchorbar"></div>--}}
{{--                    </div>--}}
{{--                    <div class="tox-sidebar-wrap">--}}
{{--                        <div class="tox-edit-area">--}}
{{--                            <iframe id="mail_footer_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area" class="tox-edit-area__iframe"></iframe>--}}
{{--                        </div>--}}
{{--                        <div role="complementary" class="tox-sidebar">--}}
{{--                            <div data-alloy-tabstop="true" tabindex="-1" class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;">--}}
{{--                                <div class="tox-sidebar__pane-container"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tox-statusbar">--}}
{{--                    <div class="tox-statusbar__text-container">--}}
{{--                        <div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path" aria-disabled="false">--}}
{{--                            <div role="button" data-index="0" tab-index="-1" aria-level="1" tabindex="-1" class="tox-statusbar__path-item" aria-disabled="false">p</div>--}}
{{--                        </div>--}}
{{--                        <span class="tox-statusbar__branding">--}}
{{--                            <a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5" rel="noopener" target="_blank" tabindex="-1" aria-label="Powered by Tiny">Powered by Tiny</a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div title="Zmiana rozmiaru" data-alloy-tabstop="true" tabindex="-1" class="tox-statusbar__resize-handle">--}}
{{--                        <svg width="10" height="10" focusable="false">--}}
{{--                            <g fill-rule="nonzero">--}}
{{--                                <path d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z"></path>--}}
{{--                            </g>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div aria-hidden="true" class="tox-throbber" style="display: none;"></div>--}}
{{--            </div>--}}
        </div>
    </div>


    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Wybierz kolory Twojej aplikacji BeautyCheck
        </div>
        <div style="width:30%;" class="input-in">
            <select name="motyw" class="formularz" wire:model.defer="selectedThemeId">
                @foreach($themes as $theme)
                    <option value="{{$theme->id}}">{{$theme->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Pokazywać pracownikowi nr. telefonu klienta?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;" class="input-in check">
            <label class="switch">
                <input type="checkbox" name="pracownik_telefon" value="1" checked="">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Czy pracownicy mają mieć możliwość edycji karty klienta w salonie?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;" class="input-in check">
            <label class="switch">
                <input type="checkbox" name="pracownik_edycja_kart_klienta" value="1">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Czy pracownicy mogą zarządzać zabiegami i kartami zabiegów?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;" class="input-in check">
            <label class="switch">
                <input type="checkbox" name="pracownik_edycja_zabiegow_i_kart_zabiegow" value="1">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div class="listing-element row-with-input">
        <div style="width:70%;">
            Czy pracownicy mogą usuwać podpisane już dokumenty?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;" class="input-in check">
            <label class="switch">
                <input type="checkbox" name="pracownik_edycja_usuwanie_danych" value="1">
                <span class="slider round"></span>
            </label>
        </div>
    </div>



    <!--
    <div class="listing-element">
        <div style="width:70%;">
            Pracownik może edytować dokumenty do 3 dni?
        </div>
        <div style="width:30%;display:flex;justify-content:flex-end;">
            <label class="switch">
            <input type="checkbox" name="pracownik_edycja3dni" value="1" >
            <span class="slider round"></span>
            </label>
        </div>
    </div>
    -->


    <div class="listing-element" style="flex-direction:column">
        <div style="width:100%;">
            <h4>Oświadczenie karty zabiegowej (niemedycznej)</h4>
            <p style="padding-bottom:20px;">Poniższe oświadczenie zostało wygenerowane automatycznie i stanowi opracowanie RODO w konsultacji z działem prawnym BeautyCheck. Jeśli posiadasz własną warstwę oświadczeń - możesz edytować poniższy tekst, jednak nie ponosimy odpowiedzi za jego skutki prawne w zmienionej formie. Zostaje ono dołączone do każdego podpisywanego dokumentu (nie dotyczy zabiegów medycznych).</p>
        </div>
        <div style="width:100%">
                            <textarea name="rodo_txt" id="rodo_txt" rows="40" cols="50" aria-hidden="true" style="display: none;">                                    &lt;strong&gt;Niniejszym oświadczam, że wyrażam świadomą zgodę na wykonanie powyższego zabiegu. Oświadczam, że poinformowano mnie o:&lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1.4;"&gt;1. możliwych powikłaniach,&lt;br&gt;2. powikłaniach nietypowych,&lt;br&gt;3. ryzyku zabiegu i jego następstwach,&lt;br&gt;4. przeciwskazaniach do wykonania zabiegu,&lt;br&gt;5. szczegółowej technice wykonania zabiegu,&lt;br&gt;6. sposobie wykonania zabiegu.&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Ponadto oświadczam, że miałem/miałam możliwość zadawania dodatkowych pytań i uzyskania dodatkowych wyjaśnień. Rozumiem, że pozytywne efekty zabiegu nie są zagwarantowane. Wszystkie informacje przekazane przez kosmetologa są dla mnie w pełni jasne i zrozumiałe. Jednocześnie oświadczam, że udzieliłem/udzieliłam aktualnych i kompletnych informacji co do mojego stanu zdrowia.&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Administratorem Twoich danych osobowych jest Test-z siedzibą w test, przy ul. test. Jeśli masz jakiekolwiek pytania odnośnie przetwarzania przez nas Twoich danych lub chcesz zrealizować swoje uprawnienia z nim związane, skontaktuj się z nami na adres firmy lub adres e-mail: tekijap368@msback.com &lt;br&gt;&lt;br&gt;&lt;strong&gt;W jakim celu, jak długo i na jakiej podstawie będziemy wykorzystywać Twoje dane? Twoje dane osobowe są przetwarzane zgodnie z odpowiednimi postanowieniami RODO, tj.:&lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;• wykonania umowy (usługi) lub do podjęcia działań przed jej zawarciem (art. 6 ust. 1 lit. b RODO, część działań musimy wykonywać na podstawie przepisów prawa – art. 6 ust. 1 lit c RODO, które nakładają na nas określony obowiązki, przy czym przetwarzanie danych osobowych dotyczących zdrowia odbywa się na podstawie art. 6 ust. 1 lit. a) i 9 ust. 2 lit a) – wyrażonej przez Ciebie zgody. Jeśli się zgodzisz (art. 6 ust. 1 lit. a RODO) zdjęcia wykonane w związku z zabiegiem będę przechowywane w aplikacji.&lt;br&gt;• Twoje dane będą przetwarzane w czasie realizacji usługi (w tym świadczenia usług dla Ciebie jako naszego Klienta/Klientki) oraz przechowywane do momentu przedawnienia ewentualnych roszczeń, w zakresie danych dotyczących zdrowia okres ten może być krótszy – w przypadku wycofania zgody,&lt;br&gt;• realizacji reklamacji. Twoje dane będą przetwarzane w czasie rozpatrywania i realizacji reklamacji oraz do momentu przedawnienia ewentualnych roszczeń lub wygaśnięcia obowiązku archiwizacji danych wynikającego z przepisów prawa;&lt;br&gt;• obowiązku prawnego (art. 6 ust. 1 lit. c RODO) indywidualnie dla celu:&lt;br&gt;- zarządzania wnioskami w sprawie realizacji Twoich uprawnień wynikającymi z RODO;&lt;br&gt;- wypełniania obowiązków wynikających z przepisów prawa, w tym przepisów o rachunkowości oraz obowiązków podatkowych,&lt;br&gt;• prawnie uzasadnionego interesu Administratora (art. 6 ust. 1 lit. f RODO) indywidualnie dla celu:&lt;br&gt;- kontaktu - udzielenia informacji, gdzie uzasadnionym interesem jest opieka nad Klientem (przy czym przetwarzanie danych osobowych dotyczących zdrowia odbywa się na podstawie art. 6 ust. 1 lit. a) i a 9 ust. 2 lit a) RODO – na podstawie wyrażonej zgody) oraz udzielanie odpowiedzi na zadane pytania. Twoje dane będą przetwarzane w czasie udzielania odpowiedzi na Twoje zgłoszenie. Administrator przestanie wcześniej przetwarzać dane na potrzeby kontaktu, jeżeli zgłosisz sprzeciw wobec przetwarzania danych w tym celu;&lt;br&gt;• badania satysfakcji Klientów z produktów i usług, gdzie uzasadnionym interesem jest opieka nad Klientem oraz podnoszenie jakości usług. Twoje dane są przetwarzane w czasie trwania prowadzonego badania opinii, w tym analizy jego&nbsp; wyników, chyba że wcześniej zgłosisz sprzeciw wobec przetwarzania Twoich danych;&lt;br&gt;• prawnie uzasadniony interes Administratora, którym jest ochrona i dochodzenie roszczeń oraz zgłaszanie szkód ubezpieczycielowi. Twoje dane są przechowywane do momentu przedawnienia ewentualnych roszczeń;&lt;br&gt;• zapewnienie bezpieczeństwa na terenie Spółki za pośrednictwem monitoringu wizyjnego (nagrania przetwarzane są przez 14 dni).&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&nbsp;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&lt;strong&gt;Informacje o wymogu podania danych&lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Podanie danych osobowych jest konieczne do korzystania z naszych usług, ale samo korzystanie z naszych usług jest dobrowolne.&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&nbsp;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&lt;strong&gt;Odbiorcy danych &lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Dane mogą zostać przekazane podmiotom przetwarzającym dane osobowe na zlecenie Administratora, m.in.: podmiotom przetwarzającym dane w celu windykacji należności, podmiotom świadczącym usługi pocztowe, usługi prawne,&nbsp; dostawcom usług IT, przy czym wskazane podmioty przetwarzają dane na podstawie umów zawartych z Administratorem i wyłącznie zgodnie z jego poleceniami. Twoje dane mogą być także przekazane podmiotom uprawnionym do ich uzyskania na podstawie obowiązującego prawa np. sądy lub organy ścigania - oczywiście gdy wystąpią z żądaniem w oparciu o stosowną podstawę prawną.&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&nbsp;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&lt;strong&gt;Twoje prawa &lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Posiadasz następujące prawa:&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;• dostępu do treści swoich danych, żądania ich sprostowania, usunięcia lub ograniczenia ich przetwarzania;&lt;br&gt;• wniesienia sprzeciwu wobec przetwarzania danych osobowych z przyczyn związanych z Twoją szczególną sytuacją w zakresie, w jakim podstawą przetwarzania danych osobowych jest prawnie uzasadniony interes Administratora. Wówczas nie będziemy już przetwarzać Twoich danych osobowych, chyba że wykażemy istnienie ważnych prawnie uzasadnionych podstaw do przetwarzania, nadrzędnych wobec Twoich interesów, praw i wolności, lub podstaw do ustalenia, dochodzenia lub obrony roszczeń;&lt;br&gt;• przenoszenia danych osobowych, tj. do otrzymania od Administratora informacji o przetwarzanych danych osobowych, w ustrukturyzowanym, powszechnie używanym formacie nadającym się do odczytu maszynowego, w zakresie, w jakim Twoje dane są przetwarzane w celu zawarcia i wykonywania usługi;&lt;br&gt;• wycofana wyrażonej zgody w dowolnym momencie bez wpływu na legalność przetwarzania dokonanego przed takim wycofaniem.&lt;br&gt;• Bezpieczeństwo Twoich danych jest dla nas priorytetem, jeśli jednak uznasz, że przetwarzając Twoje dane osobowe naruszamy przepisy RODO, masz prawo wniesienia skargi do Prezesa Urzędu Ochrony Danych Osobowych adres: Stawki 2, 00-193 Warszawa.&lt;/p&gt;                                </textarea><div role="application" class="tox tox-tinymce" aria-disabled="false" style="visibility: hidden; height: 200px;"><div class="tox-editor-container"><div data-alloy-vertical-dir="toptobottom" class="tox-editor-header"><div role="menubar" data-alloy-tabstop="true" class="tox-menubar"></div><div role="group" class="tox-toolbar-overlord" aria-disabled="false"><div role="group" class="tox-toolbar__primary"><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Cofnij" title="Cofnij" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 01-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 11-1.4 1.4l-5-5a1 1 0 010-1.4l5-5a1 1 0 011.4 1.4L6.4 8z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Powtórz" title="Powtórz" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 11-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 111.4-1.4l5 5a1 1 0 010 1.4l-5 5a1 1 0 01-1.4-1.4l3.3-3.3z" fill-rule="nonzero"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Pogrubienie" title="Pogrubienie" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--enabled" aria-disabled="false" aria-pressed="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Kursywa" title="Kursywa" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Podkreślenie" title="Podkreślenie" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 01-.4 1.8l-1 1.4a5.3 5.3 0 01-5.5 1 5 5 0 01-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 01-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 002.2.8 3.4 3.4 0 002.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1zM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 010-2z" fill-rule="evenodd"></path></svg></span></button></div></div></div><div class="tox-anchorbar"></div></div><div class="tox-sidebar-wrap"><div class="tox-edit-area"><iframe id="rodo_txt_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area" class="tox-edit-area__iframe"></iframe></div><div role="complementary" class="tox-sidebar"><div data-alloy-tabstop="true" tabindex="-1" class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;"><div class="tox-sidebar__pane-container"></div></div></div></div></div><div class="tox-statusbar"><div class="tox-statusbar__text-container"><div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path" aria-disabled="false"><div role="button" data-index="0" tab-index="-1" aria-level="1" tabindex="-1" class="tox-statusbar__path-item" aria-disabled="false">p</div><div aria-hidden="true" class="tox-statusbar__path-divider"> » </div><div role="button" data-index="1" tab-index="-1" aria-level="2" tabindex="-1" class="tox-statusbar__path-item" aria-disabled="false">strong</div></div><span class="tox-statusbar__branding"><a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5" rel="noopener" target="_blank" tabindex="-1" aria-label="Powered by Tiny">Powered by Tiny</a></span></div><div title="Zmiana rozmiaru" data-alloy-tabstop="true" tabindex="-1" class="tox-statusbar__resize-handle"><svg width="10" height="10" focusable="false"><g fill-rule="nonzero"><path d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z"></path></g></svg></div></div><div aria-hidden="true" class="tox-throbber" style="display: none;"></div></div>

        </div>
    </div>

    <div class="listing-element" style="flex-direction:column">
        <div style="width:100%;">
            <h4>Oświadczenie karty zabiegowej (medycznej)</h4>
            <p style="padding-bottom:20px;">Poniższe oświadczenie zostało wygenerowane automatycznie i stanowi opracowanie RODO w konsultacji z działem prawnym BeautyCheck. Jeśli posiadasz własną warstwę oświadczeń - możesz edytować poniższy tekst, jednak nie ponosimy odpowiedzi za jego skutki prawne w zmienionej formie. Zostaje ono dołączone do każdego podpisywanego dokumentu (dotyczy wyłącznie zabiegów medycznych).</p>
        </div>
        <div style="width:100%">
                            <textarea name="rodo_txt2" id="rodo_txt2" rows="40" cols="50" aria-hidden="true" style="display: none;">                                    &lt;strong&gt;Niniejszym oświadczam, że wyrażam świadomą zgodę, o której mowa w art. 32-35 ustawy z &lt;/strong&gt;&lt;strong&gt;dnia 5 grudnia 1996 r. o zawodach lekarza i lekarza dentysty (Dz. U. z 2021 r. poz. 790), na &lt;/strong&gt;&lt;strong&gt;wykonanie powyższego zabiegu.&lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1.4;"&gt;&lt;strong&gt;Oświadczam, że poinformowano mnie o:&lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1.4;"&gt;1. możliwych powikłaniach,&lt;br&gt;2. powikłaniach nietypowych,&lt;br&gt;3. ryzyku zabiegu i jego następstwach,&lt;br&gt;4. przeciwskazaniach do wykonania zabiegu,&lt;br&gt;5. szczegółowej technice wykonania zabiegu,&lt;br&gt;6. sposobie wykonania zabiegu.&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Ponadto oświadczam, że miałem/miałam możliwość zadawania dodatkowych pytań i uzyskania dodatkowych wyjaśnień. Rozumiem, że tak jak w przypadku wszystkich procedur ogólnomedycznych i stomatologicznych, pozytywne efekty zabiegu nie są zagwarantowane. Wszystkie informacje przekazane przez lekarza są dla mnie w pełni jasne i zrozumiałe. Jednocześnie oświadczam, że udzieliłem/udzieliłam aktualnych i kompletnych informacji co do mojego stanu zdrowia.&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Administratorem Twoich danych osobowych jest Test-z siedzibą w test, przy ul. test. Jeśli masz jakiekolwiek pytania odnośnie przetwarzania przez nas Twoich danych lub chcesz zrealizować swoje uprawnienia z nim związane, skontaktuj się z nami na adres firmy lub adres e-mail: tekijap368@msback.com&lt;br&gt;&lt;br&gt;&lt;strong&gt;W jakim celu, jak długo i na jakiej podstawie będziemy wykorzystywać Twoje dane? Twoje dane osobowe są przetwarzane zgodnie z odpowiednimi postanowieniami RODO, tj.:&lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;• wykonania umowy (usługi) lub do podjęcia działań przed jej zawarciem (art. 6 ust. 1 lit. b RODO, część działań musimy wykonywać na podstawie przepisów prawa – art. 6 ust. 1 lit c RODO, które nakładają na nas określony obowiązki, przy czym przetwarzanie danych osobowych dotyczących zdrowia odbywa się na podstawie art. 6 ust. 1 lit. a) i 9 ust. 2 lit a) – wyrażonej przez Ciebie zgody. Jeśli się zgodzisz (art. 6 ust. 1 lit. a RODO) zdjęcia wykonane w związku z zabiegiem będę przechowywane w aplikacji. &lt;br&gt;• Twoje dane będą przetwarzane w czasie realizacji usługi (w tym świadczenia usług dla Ciebie jako naszego Klienta/Klientki) oraz przechowywane do momentu przedawnienia ewentualnych roszczeń, w zakresie danych dotyczących zdrowia okres ten może być krótszy – w przypadku wycofania zgody,&lt;br&gt;• realizacji reklamacji. Twoje dane będą przetwarzane w czasie rozpatrywania i realizacji reklamacji oraz do momentu przedawnienia ewentualnych roszczeń lub wygaśnięcia obowiązku archiwizacji danych wynikającego z przepisów prawa;&lt;br&gt;• obowiązku prawnego (art. 6 ust. 1 lit. c RODO) indywidualnie dla celu:&lt;br&gt;- zarządzania wnioskami w sprawie realizacji Twoich uprawnień wynikającymi z RODO;&lt;br&gt;- wypełniania obowiązków wynikających z przepisów prawa, w tym przepisów o rachunkowości oraz obowiązków podatkowych,&lt;br&gt;• prawnie uzasadnionego interesu Administratora (art. 6 ust. 1 lit. f RODO) indywidualnie dla celu:&lt;br&gt;- kontaktu - udzielenia informacji, gdzie uzasadnionym interesem jest opieka nad Klientem (przy czym przetwarzanie danych osobowych dotyczących zdrowia odbywa się na podstawie art. 6 ust. 1 lit. a) i a 9 ust. 2 lit a) RODO – na podstawie wyrażonej zgody) oraz udzielanie odpowiedzi na zadane pytania. Twoje dane będą przetwarzane w czasie udzielania odpowiedzi na Twoje zgłoszenie. Administrator przestanie wcześniej przetwarzać dane na potrzeby kontaktu, jeżeli zgłosisz sprzeciw wobec przetwarzania danych w tym celu;&lt;br&gt;• badania satysfakcji Klientów z produktów i usług, gdzie uzasadnionym interesem jest opieka nad Klientem oraz podnoszenie jakości usług. Twoje dane są przetwarzane w czasie trwania prowadzonego badania opinii, w tym analizy jego&nbsp; wyników, chyba że wcześniej zgłosisz sprzeciw wobec przetwarzania Twoich danych;&lt;br&gt;• prawnie uzasadniony interes Administratora, którym jest ochrona i dochodzenie roszczeń oraz zgłaszanie szkód ubezpieczycielowi. Twoje dane są przechowywane do momentu przedawnienia ewentualnych roszczeń;&lt;br&gt;• zapewnienie bezpieczeństwa na terenie Spółki za pośrednictwem monitoringu wizyjnego (nagrania przetwarzane są przez 14 dni).&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&nbsp;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&lt;strong&gt;Informacje o wymogu podania danych&lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Podanie danych osobowych jest konieczne do korzystania z naszych usług, ale samo korzystanie z naszych usług jest dobrowolne.&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&nbsp;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&lt;strong&gt;Odbiorcy danych&lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Dane mogą zostać przekazane podmiotom przetwarzającym dane osobowe na zlecenie Administratora, m.in.: podmiotom przetwarzającym dane w celu windykacji należności, podmiotom świadczącym usługi pocztowe, usługi prawne,&nbsp; dostawcom usług IT, przy czym wskazane podmioty przetwarzają dane na podstawie umów zawartych z Administratorem i wyłącznie zgodnie z jego poleceniami. Twoje dane mogą być także przekazane podmiotom uprawnionym do ich uzyskania na podstawie obowiązującego prawa np. sądy lub organy ścigania - oczywiście gdy wystąpią z żądaniem w oparciu o stosowną podstawę prawną.&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&nbsp;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&lt;strong&gt;Twoje prawa&lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Posiadasz następujące prawa:&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;• dostępu do treści swoich danych, żądania ich sprostowania, usunięcia lub ograniczenia ich przetwarzania;&lt;br&gt;• wniesienia sprzeciwu wobec przetwarzania danych osobowych z przyczyn związanych z Twoją szczególną sytuacją w zakresie, w jakim podstawą przetwarzania danych osobowych jest prawnie uzasadniony interes Administratora. Wówczas nie będziemy już przetwarzać Twoich danych osobowych, chyba że wykażemy istnienie ważnych prawnie uzasadnionych podstaw do przetwarzania, nadrzędnych wobec Twoich interesów, praw i wolności, lub podstaw do ustalenia, dochodzenia lub obrony roszczeń;&lt;br&gt;• przenoszenia danych osobowych, tj. do otrzymania od Administratora informacji o przetwarzanych danych osobowych, w ustrukturyzowanym, powszechnie używanym formacie nadającym się do odczytu maszynowego, w zakresie, w jakim Twoje dane są przetwarzane w celu zawarcia i wykonywania usługi;&lt;br&gt;• wycofana wyrażonej zgody w dowolnym momencie bez wpływu na legalność przetwarzania dokonanego przed takim wycofaniem.&lt;br&gt;• Bezpieczeństwo Twoich danych jest dla nas priorytetem, jeśli jednak uznasz, że przetwarzając Twoje dane osobowe naruszamy przepisy RODO, masz prawo wniesienia skargi do Prezesa Urzędu Ochrony Danych Osobowych adres: Stawki 2, 00-193 Warszawa.&lt;/p&gt;                                </textarea><div role="application" class="tox tox-tinymce" aria-disabled="false" style="visibility: hidden; height: 200px;"><div class="tox-editor-container"><div data-alloy-vertical-dir="toptobottom" class="tox-editor-header"><div role="menubar" data-alloy-tabstop="true" class="tox-menubar"></div><div role="group" class="tox-toolbar-overlord" aria-disabled="false"><div role="group" class="tox-toolbar__primary"><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Cofnij" title="Cofnij" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 01-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 11-1.4 1.4l-5-5a1 1 0 010-1.4l5-5a1 1 0 011.4 1.4L6.4 8z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Powtórz" title="Powtórz" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 11-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 111.4-1.4l5 5a1 1 0 010 1.4l-5 5a1 1 0 01-1.4-1.4l3.3-3.3z" fill-rule="nonzero"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Pogrubienie" title="Pogrubienie" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--enabled" aria-disabled="false" aria-pressed="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Kursywa" title="Kursywa" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Podkreślenie" title="Podkreślenie" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 01-.4 1.8l-1 1.4a5.3 5.3 0 01-5.5 1 5 5 0 01-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 01-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 002.2.8 3.4 3.4 0 002.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1zM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 010-2z" fill-rule="evenodd"></path></svg></span></button></div></div></div><div class="tox-anchorbar"></div></div><div class="tox-sidebar-wrap"><div class="tox-edit-area"><iframe id="rodo_txt2_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area" class="tox-edit-area__iframe"></iframe></div><div role="complementary" class="tox-sidebar"><div data-alloy-tabstop="true" tabindex="-1" class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;"><div class="tox-sidebar__pane-container"></div></div></div></div></div><div class="tox-statusbar"><div class="tox-statusbar__text-container"><div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path" aria-disabled="false"><div role="button" data-index="0" tab-index="-1" aria-level="1" tabindex="-1" class="tox-statusbar__path-item" aria-disabled="false">p</div><div aria-hidden="true" class="tox-statusbar__path-divider"> » </div><div role="button" data-index="1" tab-index="-1" aria-level="2" tabindex="-1" class="tox-statusbar__path-item" aria-disabled="false">strong</div></div><span class="tox-statusbar__branding"><a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5" rel="noopener" target="_blank" tabindex="-1" aria-label="Powered by Tiny">Powered by Tiny</a></span></div><div title="Zmiana rozmiaru" data-alloy-tabstop="true" tabindex="-1" class="tox-statusbar__resize-handle"><svg width="10" height="10" focusable="false"><g fill-rule="nonzero"><path d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z"></path></g></svg></div></div><div aria-hidden="true" class="tox-throbber" style="display: none;"></div></div>

        </div>
    </div>
    <div class="listing-element" style="flex-direction:column">
        <div style="width:100%;">
            <h4>Oświadczenie ogólnej karty klienta</h4>
            <p style="padding-bottom:20px;">Poniższe oświadczenie zostało wygenerowane automatycznie i stanowi opracowanie RODO w konsultacji z działem prawnym BeautyCheck. Jeśli posiadasz własną warstwę oświadczeń - możesz edytować poniższy tekst, jednak nie ponosimy odpowiedzi za jego skutki prawne w zmienionej formie. Zostaje ono dołączone do każdego podpisywanego dokumentu (dotyczy wyłącznie zabiegów medycznych).</p>
        </div>
        <div style="width:100%">
                            <textarea name="rodo_txt3" id="rodo_txt3" rows="40" cols="50" aria-hidden="true" style="display: none;">                                    &lt;p style="line-height: 1;"&gt;Administratorem Twoich danych osobowych jest Test-z siedzibą w test, przy ul. test. Jeśli masz jakiekolwiek pytania odnośnie przetwarzania przez nas Twoich danych lub chcesz zrealizować swoje uprawnienia z nim związane, skontaktuj się z nami na adres firmy lub adres e-mail: tekijap368@msback.com &lt;br&gt;&lt;br&gt;&lt;strong&gt;W jakim celu, jak długo i na jakiej podstawie będziemy wykorzystywać Twoje dane? Twoje dane osobowe są przetwarzane zgodnie z odpowiednimi postanowieniami RODO, tj.:&lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;• wykonania umowy (usługi) lub do podjęcia działań przed jej zawarciem (art. 6 ust. 1 lit. b RODO, część działań musimy wykonywać na podstawie przepisów prawa – art. 6 ust. 1 lit c RODO, które nakładają na nas określony obowiązki, przy czym przetwarzanie danych osobowych dotyczących zdrowia odbywa się na podstawie art. 6 ust. 1 lit. a) i 9 ust. 2 lit a) – wyrażonej przez Ciebie zgody. Jeśli się zgodzisz (art. 6 ust. 1 lit. a RODO) zdjęcia wykonane w związku z zabiegiem będę przechowywane w aplikacji. &lt;br&gt;• Twoje dane będą przetwarzane w czasie realizacji usługi (w tym świadczenia usług dla Ciebie jako naszego Klienta/Klientki) oraz przechowywane do momentu przedawnienia ewentualnych roszczeń, w zakresie danych dotyczących zdrowia okres ten może być krótszy – w przypadku wycofania zgody,&lt;br&gt;• realizacji reklamacji. Twoje dane będą przetwarzane w czasie rozpatrywania i realizacji reklamacji oraz do momentu przedawnienia ewentualnych roszczeń lub wygaśnięcia obowiązku archiwizacji danych wynikającego z przepisów prawa;&lt;br&gt;• obowiązku prawnego (art. 6 ust. 1 lit. c RODO) indywidualnie dla celu:&lt;br&gt;- zarządzania wnioskami w sprawie realizacji Twoich uprawnień wynikającymi z RODO;&lt;br&gt;- wypełniania obowiązków wynikających z przepisów prawa, w tym przepisów o rachunkowości oraz obowiązków podatkowych,&lt;br&gt;• prawnie uzasadnionego interesu Administratora (art. 6 ust. 1 lit. f RODO) indywidualnie dla celu:&lt;br&gt;- kontaktu - udzielenia informacji, gdzie uzasadnionym interesem jest opieka nad Klientem (przy czym przetwarzanie danych osobowych dotyczących zdrowia odbywa się na podstawie art. 6 ust. 1 lit. a) i a 9 ust. 2 lit a) RODO – na podstawie wyrażonej zgody) oraz udzielanie odpowiedzi na zadane pytania. Twoje dane będą przetwarzane w czasie udzielania odpowiedzi na Twoje zgłoszenie. Administrator przestanie wcześniej przetwarzać dane na potrzeby kontaktu, jeżeli zgłosisz sprzeciw wobec przetwarzania danych w tym celu;&lt;br&gt;• badania satysfakcji Klientów z produktów i usług, gdzie uzasadnionym interesem jest opieka nad Klientem oraz podnoszenie jakości usług. Twoje dane są przetwarzane w czasie trwania prowadzonego badania opinii, w tym analizy jego&nbsp; wyników, chyba że wcześniej zgłosisz sprzeciw wobec przetwarzania Twoich danych;&lt;br&gt;• prawnie uzasadniony interes Administratora, którym jest ochrona i dochodzenie roszczeń oraz zgłaszanie szkód ubezpieczycielowi. Twoje dane są przechowywane do momentu przedawnienia ewentualnych roszczeń;&lt;br&gt;• zapewnienie bezpieczeństwa na terenie Spółki za pośrednictwem monitoringu wizyjnego (nagrania przetwarzane są przez 14 dni).&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&nbsp;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&lt;strong&gt;Informacje o wymogu podania danych&lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Podanie danych osobowych jest konieczne do korzystania z naszych usług, ale samo korzystanie z naszych usług jest dobrowolne.&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&nbsp;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&lt;strong&gt;Odbiorcy danych &lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Dane mogą zostać przekazane podmiotom przetwarzającym dane osobowe na zlecenie Administratora, m.in.: podmiotom przetwarzającym dane w celu windykacji należności, podmiotom świadczącym usługi pocztowe, usługi prawne,&nbsp; dostawcom usług IT, przy czym wskazane podmioty przetwarzają dane na podstawie umów zawartych z Administratorem i wyłącznie zgodnie z jego poleceniami. Twoje dane mogą być także przekazane podmiotom uprawnionym do ich uzyskania na podstawie obowiązującego prawa np. sądy lub organy ścigania - oczywiście gdy wystąpią z żądaniem w oparciu o stosowną podstawę prawną.&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&nbsp;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;&lt;strong&gt;Twoje prawa &lt;/strong&gt;&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;Posiadasz następujące prawa:&lt;/p&gt;
&lt;p style="line-height: 1;"&gt;• dostępu do treści swoich danych, żądania ich sprostowania, usunięcia lub ograniczenia ich przetwarzania;&lt;br&gt;• wniesienia sprzeciwu wobec przetwarzania danych osobowych z przyczyn związanych z Twoją szczególną sytuacją w zakresie, w jakim podstawą przetwarzania danych osobowych jest prawnie uzasadniony interes Administratora. Wówczas nie będziemy już przetwarzać Twoich danych osobowych, chyba że wykażemy istnienie ważnych prawnie uzasadnionych podstaw do przetwarzania, nadrzędnych wobec Twoich interesów, praw i wolności, lub podstaw do ustalenia, dochodzenia lub obrony roszczeń;&lt;br&gt;• przenoszenia danych osobowych, tj. do otrzymania od Administratora informacji o przetwarzanych danych osobowych, w ustrukturyzowanym, powszechnie używanym formacie nadającym się do odczytu maszynowego, w zakresie, w jakim Twoje dane są przetwarzane w celu zawarcia i wykonywania usługi;&lt;br&gt;• wycofana wyrażonej zgody w dowolnym momencie bez wpływu na legalność przetwarzania dokonanego przed takim wycofaniem.&lt;br&gt;• Bezpieczeństwo Twoich danych jest dla nas priorytetem, jeśli jednak uznasz, że przetwarzając Twoje dane osobowe naruszamy przepisy RODO, masz prawo wniesienia skargi do Prezesa Urzędu Ochrony Danych Osobowych adres: Stawki 2, 00-193 Warszawa.&lt;/p&gt;                                </textarea><div role="application" class="tox tox-tinymce" aria-disabled="false" style="visibility: hidden; height: 200px;"><div class="tox-editor-container"><div data-alloy-vertical-dir="toptobottom" class="tox-editor-header"><div role="menubar" data-alloy-tabstop="true" class="tox-menubar"></div><div role="group" class="tox-toolbar-overlord" aria-disabled="false"><div role="group" class="tox-toolbar__primary"><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Cofnij" title="Cofnij" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 01-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 11-1.4 1.4l-5-5a1 1 0 010-1.4l5-5a1 1 0 011.4 1.4L6.4 8z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Powtórz" title="Powtórz" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 11-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 111.4-1.4l5 5a1 1 0 010 1.4l-5 5a1 1 0 01-1.4-1.4l3.3-3.3z" fill-rule="nonzero"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Pogrubienie" title="Pogrubienie" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Kursywa" title="Kursywa" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Podkreślenie" title="Podkreślenie" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 01-.4 1.8l-1 1.4a5.3 5.3 0 01-5.5 1 5 5 0 01-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 01-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 002.2.8 3.4 3.4 0 002.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1zM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 010-2z" fill-rule="evenodd"></path></svg></span></button></div></div></div><div class="tox-anchorbar"></div></div><div class="tox-sidebar-wrap"><div class="tox-edit-area"><iframe id="rodo_txt3_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area" class="tox-edit-area__iframe"></iframe></div><div role="complementary" class="tox-sidebar"><div data-alloy-tabstop="true" tabindex="-1" class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;"><div class="tox-sidebar__pane-container"></div></div></div></div></div><div class="tox-statusbar"><div class="tox-statusbar__text-container"><div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path" aria-disabled="false"><div role="button" data-index="0" tab-index="-1" aria-level="1" tabindex="-1" class="tox-statusbar__path-item" aria-disabled="false">p</div></div><span class="tox-statusbar__branding"><a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5" rel="noopener" target="_blank" tabindex="-1" aria-label="Powered by Tiny">Powered by Tiny</a></span></div><div title="Zmiana rozmiaru" data-alloy-tabstop="true" tabindex="-1" class="tox-statusbar__resize-handle"><svg width="10" height="10" focusable="false"><g fill-rule="nonzero"><path d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z"></path></g></svg></div></div><div aria-hidden="true" class="tox-throbber" style="display: none;"></div></div>

        </div>
    </div>


    <div class="listing-ending"></div>


    <div class="listing-actionbar flex-wrap btns" style="gap:10px">
        <button type="button" class="btn1" onclick="location.href='{{url('functions/rodoreset')}}'"><i class="fas fa-history" aria-hidden="true"></i> Resetuj RODO</button>
        <button type="submit" class="btn1" style=""><i class="fas fa-check-circle" aria-hidden="true"></i> Zapisz ustawienia</button>
    </div>
</form>
@section('addit_js')
    <script>
        var quill = new Quill('#quil-editor', {
            theme: 'snow' // Выбор темы редактора (snow или bubble)
        });
    </script>
@endsection
