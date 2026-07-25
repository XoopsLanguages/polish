<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // Nazwa modułu
    define($constpref . '_NAME', 'Protector');

    // Krótki opis modułu
    define($constpref . '_DESC', 'Moduł ten chroni Twoją stronę XOOPS przed różnymi atakami, takimi jak DoS, SQL Injection i manipulacja zmiennymi.');

    // Menu
    define($constpref . '_ADMININDEX', 'Centrum Protector');
    define($constpref . '_ADVISORY', 'Porady bezpieczeństwa');
    define($constpref . '_PREFIXMANAGER', 'Menedżer prefiksów');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', 'Uprawnienia');

    // Konfiguracja
    define($constpref . '_GLOBAL_DISBL', 'Tymczasowo wyłączone');
    define($constpref . '_GLOBAL_DISBLDSC', 'Wszystkie zabezpieczenia są tymczasowo wyłączone.<br>Nie zapomnij ich ponownie włączyć po usunięciu problemu.');

    define($constpref . '_DEFAULT_LANG', 'Domyślny język');
    define($constpref . '_DEFAULT_LANGDSC', 'Określ język używany do wyświetlania komunikatów zanim załadowany zostanie plik common.php');

    define($constpref . '_RELIABLE_IPS', 'Zaufane adresy IP');
    define($constpref . '_RELIABLE_IPSDSC', 'Podaj adresy IP oddzielone znakiem |. ^ oznacza początek, $ koniec ciągu.');

    define($constpref . '_LOG_LEVEL', 'Poziom logowania');
    define($constpref . '_BANIP_TIME0', 'Czas blokady IP (sekundy)');

    define($constpref . '_LOGLEVEL0', 'brak');
    define($constpref . '_LOGLEVEL15', 'cichy');
    define($constpref . '_LOGLEVEL63', 'dość cichy');
    define($constpref . '_LOGLEVEL255', 'pełny');

    define($constpref . '_HIJACK_TOPBIT', 'Chronione bity IP w sesji');
    define($constpref . '_HIJACK_TOPBITDSC', 'Zabezpieczenie przed przejęciem sesji:<br>Domyślnie 24/56 (maska sieci dla IPv4/IPv6).<br>Jeśli Twój IP się zmienia, ustaw zakres IP poprzez liczbę bitów.');

    define($constpref . '_HIJACK_DENYGP', 'Grupy bez prawa do zmiany IP w sesji');
    define($constpref . '_HIJACK_DENYGPDSC', 'Zabezpieczenie przed przejęciem sesji:<br>Wybierz grupy, którym nie wolno zmieniać adresu IP w trakcie sesji.');

    define($constpref . '_SAN_NULLBYTE', 'Sanityzacja bajtów zerowych');
    define($constpref . '_SAN_NULLBYTEDSC', 'Znak "\\0" jest często używany w atakach.<br>Zamieniany jest na spację.');

    define($constpref . '_DIE_NULLBYTE', 'Zakończ jeśli wykryto bajty zerowe');
    define($constpref . '_DIE_NULLBYTEDSC', 'Zalecane jako włączone');

    define($constpref . '_DIE_BADEXT', 'Zakończ jeśli przesłano pliki z niebezpiecznymi rozszerzeniami');
    define($constpref . '_DIE_BADEXTDSC', 'Dotyczy plików z rozszerzeniami typu .php itd.');

    define($constpref . '_CONTAMI_ACTION', 'Działanie przy wykryciu kontaminacji');
    define($constpref . '_CONTAMI_ACTIONDS', 'Zalecana opcja: pusty ekran');

    define($constpref . '_ISOCOM_ACTION', 'Działanie przy izolowanym komentarzu');
    define($constpref . '_ISOCOM_ACTIONDSC', 'Zabezpieczenie SQL Injection – zalecane: sanityzacja');

    define($constpref . '_UNION_ACTION', 'Działanie przy wykryciu UNION');
    define($constpref . '_UNION_ACTIONDSC', 'Zalecana opcja: sanityzacja');

    define($constpref . '_ID_INTVAL', 'Wymuszanie intval dla zmiennych typu id');
    define($constpref . '_ID_INTVALDSC', 'Chroni przed XSS i SQL Injection');

    define($constpref . '_FILE_DOTDOT', 'Ochrona przed przejściem katalogów');
    define($constpref . '_FILE_DOTDOTDSC', 'Usuwa ".." z zapytań');

    define($constpref . '_BF_COUNT', 'Zabezpieczenie Brute Force');
    define($constpref . '_BF_COUNTDSC', 'Maksymalna liczba prób logowania w 10 minut');

    define($constpref . '_BWLIMIT_COUNT', 'Limit przepustowości');
    define($constpref . '_BWLIMIT_COUNTDSC', '0 = brak limitu. Mniej niż 10 = ignorowane.');

    define($constpref . '_DOS_SKIPMODS', 'Moduły wyłączone z kontroli DoS/Crawler');
    define($constpref . '_DOS_SKIPMODSDSC', 'Rozdzielone przez |');

    define($constpref . '_DOS_EXPIRE', 'Czas obserwacji przeciążeń (sekundy)');
    define($constpref . '_DOS_EXPIREDSC', 'Dla ataków F5 lub agresywnych botów');

    define($constpref . '_DOS_F5COUNT', 'Liczba reloadów dla ataku F5');
    define($constpref . '_DOS_F5COUNTDSC', 'Wartość uznana za atak');

    define($constpref . '_DOS_F5ACTION', 'Działanie przy ataku F5');

    define($constpref . '_DOS_CRCOUNT', 'Liczba żądań dla botów');
    define($constpref . '_DOS_CRCOUNTDSC', 'Bot uznany za niepożądany przy przekroczeniu');

    define($constpref . '_DOS_CRACTION', 'Działanie przeciw agresywnym botom');

    define($constpref . '_DOS_CRSAFE', 'Dozwolone boty (User-Agent)');
    define($constpref . '_DOS_CRSAFEDSC', 'Wyrażenie regularne dla dozwolonych botów');

    define($constpref . '_OPT_NONE', 'Brak (tylko logowanie)');
    define($constpref . '_OPT_SAN', 'Sanityzacja');
    define($constpref . '_OPT_EXIT', 'Pusty ekran');
    define($constpref . '_OPT_BIP', 'Zablokuj IP (bez limitu)');
    define($constpref . '_OPT_BIPTIME0', 'Zablokuj IP (czasowy moratorium)');

    define($constpref . '_DOSOPT_NONE', 'Brak (tylko logowanie)');
    define($constpref . '_DOSOPT_SLEEP', 'Uśpienie');
    define($constpref . '_DOSOPT_EXIT', 'Pusty ekran');
    define($constpref . '_DOSOPT_BIP', 'Zablokuj IP (bez limitu)');
    define($constpref . '_DOSOPT_BIPTIME0', 'Zablokuj IP (czasowy)');
    define($constpref . '_DOSOPT_HTA', 'Zablokuj przez .htaccess (eksperymentalnie)');

    define($constpref . '_BIP_EXCEPT', 'Grupy nigdy nie blokowane');
    define($constpref . '_BIP_EXCEPTDSC', 'Użytkownicy z tych grup nie będą banowani');

    define($constpref . '_DISABLES', 'Wyłącz niebezpieczne funkcje w XOOPS');

    define($constpref . '_DBLAYERTRAP', 'Włącz pułapkę warstwy DB przeciw SQL Injection');
    define($constpref . '_DBLAYERTRAPDSC', 'Zalecane jako włączone. Nie wyłączaj bez potrzeby.');

    define($constpref . '_DBTRAPWOSRV', 'Nie sprawdzaj _SERVER w pułapce SQL');
    define($constpref . '_DBTRAPWOSRVDSC', 'Zmniejsza fałszywe alarmy, ale osłabia ochronę.');

    define($constpref . '_BIGUMBRELLA', 'Włącz ochronę przed XSS (BigUmbrella)');
    define($constpref . '_BIGUMBRELLADSC', 'Chroni przed większością ataków XSS (ale nie wszystkimi)');

    define($constpref . '_SPAMURI4U', 'anti-SPAM: liczba URL dla użytkowników');
    define($constpref . '_SPAMURI4UDSC', '0 = wyłączone. Powyżej = spam');

    define($constpref . '_SPAMURI4G', 'anti-SPAM: liczba URL dla gości');
    define($constpref . '_SPAMURI4GDSC', '0 = wyłączone. Powyżej = spam');

    // 3.40b
    define($constpref . '_ADMINHOME', 'Strona główna');
    define($constpref . '_ADMINABOUT', 'O module');

    // 3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', 'Stop Forum Spam');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', 'Weryfikacja danych POST przez stopforumspam.com (wymaga CURL)');

    // 3.60
    define($constpref . '_ADMINSTATS', 'Podsumowanie');
    define($constpref . '_BANIP_TIME0DSC', 'Czas blokady IP (sekundy)');
}
