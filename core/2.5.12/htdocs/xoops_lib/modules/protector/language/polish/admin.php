<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN', '');
define('_MD_A_MYMENU_MYBLOCKSADMIN', 'Uprawnienia');
define('_MD_A_MYMENU_MYPREFERENCES', 'Preferencje');
// index.php
define('_AM_TH_DATETIME', 'Czas');
define('_AM_TH_USER', 'Użytkownik');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Typ');
define('_AM_TH_DESCRIPTION', 'Opis');
define('_AM_TH_BADIPS', 'Złe adresy IP<br><br><span style="font-weight:normal;">Wpisz każdy adres IP w nowej linii<br>puste oznacza, że wszystkie adresy IP są dozwolone</span>');
define('_AM_TH_GROUP1IPS', 'Dozwolone adresy IP dla Grupy=1<br><br><span style="font-weight:normal;">Wpisz każdy adres IP w nowej linii.<br>192.168. oznacza 192.168.*<br>puste oznacza, że wszystkie adresy IP są dozwolone</span>');
define('_AM_LABEL_COMPACTLOG', 'Skompresuj log');
define('_AM_BUTTON_COMPACTLOG', 'Skompresuj!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Zduplikowane rekordy (IP,Typ) zostaną usunięte');
define('_AM_LABEL_REMOVEALL', 'Usuń wszystkie rekordy');
define('_AM_BUTTON_REMOVEALL', 'Usuń wszystkie!');
define('_AM_JS_REMOVEALLCONFIRM', 'Wszystkie logi zostaną bezpowrotnie usunięte. Na pewno OK?');
define('_AM_LABEL_REMOVE', 'Usuń zaznaczone rekordy:');
define('_AM_BUTTON_REMOVE', 'Usuń!');
define('_AM_JS_REMOVECONFIRM', 'Usunąć OK?');
define('_AM_MSG_IPFILESUPDATED', 'Pliki dla adresów IP zostały zaktualizowane');
define('_AM_MSG_BADIPSCANTOPEN', 'Nie można otworzyć pliku dla złych adresów IP');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Nie można otworzyć pliku dla dozwolonych grup=1');
define('_AM_MSG_REMOVED', 'Rekordy zostały usunięte');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Ustaw katalog configs jako zapisywalny: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Menedżer Prefiksów');
define('_AM_MSG_DBUPDATED', 'Baza danych zaktualizowana pomyślnie!');
define('_AM_CONFIRM_DELETE', 'Wszystkie dane zostaną usunięte. OK?');
define('_AM_TXT_HOWTOCHANGEDB', "Jeśli chcesz zmienić prefiks,<br> edytuj ręcznie %s/data/secure.php.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Niezabezpieczone');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Jeśli widzisz obraz -NG- lub link zwraca normalną stronę, XOOPS_TRUST_PATH nie jest poprawnie umieszczony. Najlepszym miejscem dla XOOPS_TRUST_PATH jest poza DocumentRoot. Jeśli nie możesz tego zrobić, musisz umieścić .htaccess (DENY FROM ALL) bezpośrednio pod XOOPS_TRUST_PATH jako drugie najlepsze rozwiązanie.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Sprawdź, czy pliki PHP wewnątrz TRUST_PATH są ustawione jako tylko do odczytu (musi to być błąd 404,403 lub 500)');
define('_AM_ADV_REGISTERGLOBALS', "Jeśli 'WŁ.', to ustawienie naraża na różne ataki typu wstrzykiwanie. Jeśli możesz, ustaw 'register_globals off' w php.ini, a jeśli to niemożliwe, utwórz lub edytuj .htaccess w swoim katalogu XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN', "Jeśli 'WŁ.', to ustawienie pozwala atakującym na wykonywanie dowolnych skryptów na zdalnych serwerach.<br>Tylko administrator może zmienić tę opcję.<br>Jeśli jesteś administratorem, edytuj php.ini lub httpd.conf.<br><b>Przykład httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>W przeciwnym razie zgłoś to administratorom.");
define('_AM_ADV_USETRANSSID', "Jeśli 'WŁ.', ID Twojej sesji będzie wyświetlane w tagach kotwic itp.<br>Aby zapobiec przejęciu sesji, dodaj linię do .htaccess w XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX', "To ustawienie naraża na 'Wstrzykiwanie SQL'.<br>Nie zapomnij włączyć 'Wymuś czyszczenie *' w preferencjach tego modułu.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Przejdź do menedżera prefiksów');
define('_AM_ADV_MAINUNPATCHED', 'Powinieneś edytować swój mainfile.php tak, jak napisano w README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Twój databasefactory jest gotowy na DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Twój databasefactory nie jest gotowy na DBLayer Trapping anti-SQL-Injection. Wymagane są pewne poprawki.');
define('_AM_ADV_SUBTITLECHECK', 'Sprawdź, czy Protector działa poprawnie');
define('_AM_ADV_CHECKCONTAMI', 'Skażenie');
define('_AM_ADV_CHECKISOCOM', 'Izolowane komentarze');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'i umieść w nim poniższą linię:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefiks');
define('_AM_PROTECTOR_TABLES', 'Tabele');
define('_AM_PROTECTOR_UPDATED', 'Zaktualizowano');
define('_AM_PROTECTOR_COPY', 'Kopiuj');
define('_AM_PROTECTOR_ACTIONS', 'Akcje');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Zablokuj adresy IP w zaznaczonych rekordach:');
define('_AM_BUTTON_BAN_BY_IP', 'Zablokuj IP!');
define('_AM_JS_BANCONFIRM', 'Blokady IP OK?');
define('_AM_MSG_BANNEDIP', 'Adresy IP są zablokowane');
define('_AM_ADMINSTATS_TITLE', 'Podsumowanie logu Protectora');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Ostatni miesiąc');
define('_AM_ADMINSTATS_LAST_WEEK', 'Ostatni tydzień');
define('_AM_ADMINSTATS_LAST_DAY', 'Ostatni dzień');
define('_AM_ADMINSTATS_LAST_HOUR', 'Ostatnia godzina');
