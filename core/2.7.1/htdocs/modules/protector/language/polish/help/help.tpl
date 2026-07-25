<div id="help-template" class="outer">
    <h1 class="head">Pomoc: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="Powrót do administracji modułu Protector"> Protector <img src="<{xoAdminIcons 'home.png'}>" alt="Powrót do administracji modułu Protector"/></a></h1>
    <!-- -----Treść pomocy ---------- -->
    <h4 class="odd">Opis</h4>

    <p class="even">Protector to moduł chroniący Twój system XOOPS CMS przed różnymi złośliwymi atakami.</p>
    <h4 class="odd">Instalacja/deinstalacja</h4>

    <p>Najpierw zdefiniuj XOOPS_TRUST_PATH w pliku mainfile.php, jeśli jeszcze tego nie zrobiłeś.</p>
    <br>

    <p>Skopiuj folder html/modules/protector z archiwum do katalogu XOOPS_ROOT_PATH/modules/</p>

    <p>Skopiuj folder xoops_trust_path/modules/protector z archiwum do katalogu XOOPS_TRUST_PATH/modules/</p>
    <br>

    <p>Ustaw uprawnienia do zapisu dla katalogu XOOPS_TRUST_PATH/modules/protector/configs</p>
    <h4 class="odd">= Jak odzyskać dostęp =</h4>

    <p class="even">Jeśli zostałeś zablokowany przez moduł Protector, wystarczy usunąć pliki w katalogu XOOPS_TRUST_PATH/modules/protector/configs/</p>
    <h4 class="odd">Wprowadzenie do wtyczek filtrujących w tym archiwum</h4>

    <p class="even">- postcommon_post_deny_by_rbl.php
        <br>
        Wtyczka antyspamowa.
        <br>
        Wszystkie posty z adresów IP zarejestrowanych w RBL zostaną odrzucone.
        <br>
        Ta wtyczka może spowolnić działanie postów, szczególnie w modułach czatu.
    </p>

    <p>- postcommon_post_deny_by_httpbl.php
        <br>
        Wtyczka antyspamowa.
        <br>
        Wszystkie posty z adresów IP zarejestrowanych w http:BL zostaną odrzucone.
        <br>
        Przed użyciem uzyskaj klucz HTTPBL_KEY ze strony http://www.projecthoneypot.org/ i ustaw go w pliku wtyczki.
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>

    <p class="even">- postcommon_post_need_multibyte.php
        <br>
        Wtyczka antyspamowa.
        <br>
        Posty bez znaków wielobajtowych zostaną odrzucone.
        <br>
        Ta wtyczka jest przeznaczona tylko dla stron w językach japońskim, chińskim tradycyjnym, chińskim uproszczonym i koreańskim.
    </p>

    <p>- postcommon_post_htmlpurify4guest.php
        <br>
        Wszystkie dane postów wysyłane przez gości zostaną oczyszczone przez HTMLPurifier.
        <br>
        Jeśli zezwalasz gościom na publikowanie kodu HTML, zdecydowanie zaleca się włączenie tej wtyczki.
    </p>

    <p class="even">- postcommon_register_insert_js_check.php
        <br>
        Ta wtyczka chroni Twoją stronę przed rejestracją przez roboty.
        <br>
        Wymaga działania JavaScript w przeglądarce użytkownika.
    </p>

    <p>- bruteforce_overrun_message.php
        <br>
        Określa komunikat dla użytkowników, którzy wielokrotnie wprowadzili nieprawidłowe hasło.
        <br>
        Wszystkie wtyczki o nazwach *_message.php określają komunikaty dla odrzuconych dostępów.
    </p>

    <p class="even">- precommon_bwlimit_errorlog.php
        <br>
        Gdy ograniczenie przepustowości działa w niepożądany sposób, ta wtyczka zapisuje informacje do pliku error_log Apache.
    </p>

    <p>Wszystkie wtyczki o nazwach *_errorlog.php zapisują pewne informacje do pliku error_log Apache.</p>
    <h4 class="odd">Samouczek</h4>

    <p class="even">Samouczek wkrótce będzie dostępny.</p>
    <!-- -----Treść pomocy ---------- -->
</div>
