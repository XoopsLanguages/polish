<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: pl

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Raportowanie błędów i analiza wydajności za pomocą PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Pokaż DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Włącz Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', 'Włącz kartę dołączonych plików');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Pokaż wszystkie pliki PHP załadowane podczas żądania');
define('_MI_DEBUGBAR_SLOWQUERY', 'Próg wolnego zapytania (sekundy)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Zapytania wolniejsze niż to są wyróżnione na czerwono (np. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Logowanie zapytań');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Wszystkie zapytania lub tylko wolne i błędy');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Wszystkie zapytania');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Tylko wolne i błędy');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Włącz integrację Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Wysyłaj dane debugowania do aplikacji Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Strona główna');
define('_MI_DEBUGBAR_MENU_ABOUT', 'O module');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Powrót do administracji ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Przegląd');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Zastrzeżenie');
\define('_MI_DEBUGBAR_LICENSE', 'Licencja');
\define('_MI_DEBUGBAR_SUPPORT', 'Wsparcie');
