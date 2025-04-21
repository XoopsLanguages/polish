<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
//Nav
define('_AM_SYSTEM_MAINTENANCE_NAV_MANAGER', 'Konserwacja');
define('_AM_SYSTEM_MAINTENANCE_NAV_LIST', 'Wszystkie operacje konserwacyjne');
define('_AM_SYSTEM_MAINTENANCE_NAV_DUMP', 'Zrzut bazy danych');

define('_AM_SYSTEM_MAINTENANCE_SESSION', 'Wyczyść tabelę sesji');
define('_AM_SYSTEM_MAINTENANCE_SESSION_OK', 'Konserwacja sesji: OK');
define('_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK', 'Konserwacja sesji: Błąd');

define('_AM_SYSTEM_MAINTENANCE_AVATAR', 'Usuń nieużywane niestandardowe awatary');
define('_AM_SYSTEM_MAINTENANCE_CACHE', 'Wyczyść folder cache');
define('_AM_SYSTEM_MAINTENANCE_CACHE_OK', 'Konserwacja pamięci podręcznej: OK');
define('_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK', 'Konserwacja pamięci podręcznej: Błąd');

define('_AM_SYSTEM_MAINTENANCE_TABLES', 'Konserwacja tabel');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OK', 'Konserwacja tabel: OK');
define('_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK', 'Konserwacja tabel: Błąd');

define('_AM_SYSTEM_MAINTENANCE_QUERY_DESC', 'Optymalizuj, sprawdzaj, naprawiaj i analizuj swoje tabele');
define('_AM_SYSTEM_MAINTENANCE_QUERY_OK', 'Konserwacja bazy danych: OK');
define('_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK', 'Konserwacja bazy danych: Błąd');

define('_AM_SYSTEM_MAINTENANCE_CHOICE1', 'Optymalizuj tabelę/tabele');
define('_AM_SYSTEM_MAINTENANCE_CHOICE2', 'Sprawdź tabelę/tabele');
define('_AM_SYSTEM_MAINTENANCE_CHOICE3', 'Napraw tabelę/tabele');
define('_AM_SYSTEM_MAINTENANCE_CHOICE4', 'Analizuj tabelę/tabele');

define('_AM_SYSTEM_MAINTENANCE_TABLES_DESC',
    'ANALYZE TABLE analizuje i zapisuje rozkład kluczy w tabeli. Podczas analizy tabela jest blokowana tylko do odczytu.<br>
CHECK TABLE sprawdza tabelę lub tabele pod kątem błędów.<br>
OPTIMIZE TABLE odzyskuje niewykorzystaną przestrzeń i defragmentuje plik danych.<br>
REPAIR TABLE naprawia potencjalnie uszkodzoną tabelę.');

define('_AM_SYSTEM_MAINTENANCE_RESULT', 'Wynik');
define('_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT', 'Brak wyniku');
define('_AM_SYSTEM_MAINTENANCE_RESULT_CACHE', 'Zadanie: wyczyszczenie pamięci podręcznej');
define('_AM_SYSTEM_MAINTENANCE_RESULT_SESSION', 'Zadanie: czyszczenie tabeli sesji');
define('_AM_SYSTEM_MAINTENANCE_RESULT_QUERY', 'Zadanie: konserwacja bazy danych');
define('_AM_SYSTEM_MAINTENANCE_RESULT_AVATAR', 'Zadanie: usunięcie nieużywanych awatarów');

define('_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE', 'Nie wybrano żadnej opcji konserwacji');

define('_AM_SYSTEM_MAINTENANCE_TABLES1', 'Tabele');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE', 'Optymalizuj');
define('_AM_SYSTEM_MAINTENANCE_TABLES_CHECK', 'Sprawdź');
define('_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR', 'Napraw');
define('_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE', 'Analizuj');

// Zrzut bazy danych
define('_AM_SYSTEM_MAINTENANCE_DUMP', 'Zrzut');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES', 'Wybierz tabele lub moduły');
define('_AM_SYSTEM_MAINTENANCE_DUMP_DROP', 'Dodaj komendę DROP TABLE IF EXISTS do zrzutu');
define('_AM_SYSTEM_MAINTENANCE_DUMP_OR', 'LUB');
define('_AM_SYSTEM_MAINTENANCE_DUMP_AND', 'I');
define('_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES', 'Musisz wybrać tabele lub moduły');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES', 'Brak tabel');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES', 'Tabele');
define('_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES', 'Struktury');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS', 'Liczba rekordów');
define('_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED', 'Plik został utworzony');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RESULT', 'Wynik');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS', 'rekord(ów)');

// Wskazówki
define('_AM_SYSTEM_MAINTENANCE_TIPS', '
<ul>
<li>Możesz przeprowadzić prostą konserwację swojej instalacji XOOPS: wyczyść pamięć podręczną, tabelę sesji oraz wykonaj konserwację tabel bazy danych.</li>
</ul>');
