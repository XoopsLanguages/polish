<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: pl

define('_MD_DEBUGBAR_DEBUG', 'Debugowanie');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Dołączone pliki');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP Wersja');
define('_MD_DEBUGBAR_NONE', 'Żaden');
define('_MD_DEBUGBAR_ERRORS', 'Błędy');
define('_MD_DEBUGBAR_DEPRECATED', 'Przestarzałe');
define('_MD_DEBUGBAR_QUERIES', 'Zapytania');
define('_MD_DEBUGBAR_BLOCKS', 'Bloki');
define('_MD_DEBUGBAR_EXTRA', 'Dodatkowe');
define('_MD_DEBUGBAR_TIMERS', 'Timery');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s ładował się przez %s sekund.');
define('_MD_DEBUGBAR_TOTAL', 'Łącznie');
define('_MD_DEBUGBAR_NOT_CACHED', 'Niebuforowane');
define('_MD_DEBUGBAR_CACHED', 'Buforowane (odświeżane co %s sekund)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(pusty ciąg znaków)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool PRAWDA');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FAŁSZ');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Zapytania do bazy danych');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Użycie pamięci');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d zapytania');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d duplikaty)');
define('_MD_DEBUGBAR_BYTES', '%s bajtów');
define('_MD_DEBUGBAR_DB_VERSION', '%s wersja');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Numer błędu: %s Komunikat o błędzie: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Błąd #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Wyjątek');
define('_MD_DEBUGBAR_RAY_QUERY', 'Zapytanie #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'WOLNO');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Blok (w pamięci podręcznej %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Blok (nie buforowany)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Zapis do pliku sql tabel bazy danych systemu wraz z danymi');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Kontekst szablonu');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(brak zmiennych szablonu)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d var)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Katalog „modules/debugbar/%s” nie został utworzony');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Nie udało się utworzyć katalogu „%s” podczas kopiowania zasobu');
