<?php
/**
 * @copyright       (c) 2000-2025 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// Navigation
define('_AM_SYSTEM_BLOCKS_ADMIN', 'Administracja blokami');
define('_AM_SYSTEM_BLOCKS_MANAGMENT', 'Zarządzaj');
define('_AM_SYSTEM_BLOCKS_ADDBLOCK', 'Dodaj nowy blok');
define('_AM_SYSTEM_BLOCKS_EDITBLOCK', 'Edytuj blok');
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK', 'Klonuj blok');
// Formularze
define('_AM_SYSTEM_BLOCKS_CUSTOM', 'Blok niestandardowy');
define('_AM_SYSTEM_BLOCKS_TYPES', 'Wszystkie typy');
define('_AM_SYSTEM_BLOCKS_GENERATOR', 'Moduły');
define('_AM_SYSTEM_BLOCKS_GROUP', 'Grupy');
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN', 'Strona');
define('_AM_SYSTEM_BLOCKS_DISPLAY', 'Wyświetl blok ');
define('_AM_SYSTEM_BLOCKS_HIDE', 'Ukryj blok ');
define('_AM_SYSTEM_BLOCKS_CLONE', 'Klonuj');
define('_AM_SYSTEM_BLOCKS_SIDELEFT', 'Lewo');
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT', 'Góra Lewo');
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER', 'Góra Środek');
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', 'Góra Prawo');
define('_AM_SYSTEM_BLOCKS_SIDERIGHT', 'Prawo');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', 'Dół Lewo');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', 'Dół Środek');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', 'Dół Prawo');

define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', 'Stopka Lewo');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', 'Stopka Środek');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', 'Stopka Prawo');

define('_AM_SYSTEM_BLOCKS_ADD', 'Dodaj blok');
define('_AM_SYSTEM_BLOCKS_MANAGE', 'Zarządzaj blokiem');
define('_AM_SYSTEM_BLOCKS_NAME', 'Nazwa');
define('_AM_SYSTEM_BLOCKS_TYPE', 'Typ bloku');
define('_AM_SYSTEM_BLOCKS_SBLEFT', 'Blok boczny - Lewo');
define('_AM_SYSTEM_BLOCKS_SBRIGHT', 'Blok boczny - Prawo');
define('_AM_SYSTEM_BLOCKS_CBLEFT', 'Blok centralny - Lewo');
define('_AM_SYSTEM_BLOCKS_CBRIGHT', 'Blok centralny - Prawo');
define('_AM_SYSTEM_BLOCKS_CBCENTER', 'Blok centralny - Środek');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT', 'Blok centralny - Dół lewo');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT', 'Blok centralny - Dół prawo');

define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', 'Blok stopki - Lewo');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', 'Blok stopki - Środek');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', 'Blok stopki - Prawo');

define('_AM_SYSTEM_BLOCKS_CBBOTTOM', 'Blok centralny - Dół');
define('_AM_SYSTEM_BLOCKS_WEIGHT', 'Waga');
define('_AM_SYSTEM_BLOCKS_VISIBLE', 'Widoczny');
define('_AM_SYSTEM_BLOCKS_VISIBLEIN', 'Widoczny na');
define('_AM_SYSTEM_BLOCKS_TOPPAGE', 'Strona główna');
define('_AM_SYSTEM_BLOCKS_ALLPAGES', 'Wszystkie strony');
define('_AM_SYSTEM_BLOCKS_UNASSIGNED', 'Nieprzypisane');
define('_AM_SYSTEM_BLOCKS_TITLE', 'Tytuł');
define('_AM_SYSTEM_BLOCKS_CONTENT', 'Treść');
define('_AM_SYSTEM_BLOCKS_USEFULTAGS', 'Przydatne znaczniki:');
define('_AM_SYSTEM_BLOCKS_BLOCKTAG', '%s wyświetli %s');
define('_AM_SYSTEM_BLOCKS_CTYPE', 'Typ treści');
define('_AM_SYSTEM_BLOCKS_HTML', 'HTML');
define('_AM_SYSTEM_BLOCKS_PHP', 'Skrypt PHP');
define('_AM_SYSTEM_BLOCKS_AFWSMILE', 'Automatyczne formatowanie (emotikony włączone)');
define('_AM_SYSTEM_BLOCKS_AFNOSMILE', 'Automatyczne formatowanie (emotikony wyłączone)');
define('_AM_SYSTEM_BLOCKS_BCACHETIME', 'Czas trwania pamięci podręcznej');
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML', 'Blok niestandardowy (HTML)');
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP', 'Blok niestandardowy (PHP)');
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE', 'Blok niestandardowy (Automatyczne formatowanie + emotikony)');
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE', 'Blok niestandardowy (Automatyczne formatowanie)');
define('_AM_SYSTEM_BLOCKS_EDITTPL', 'Edytuj szablon');
define('_AM_SYSTEM_BLOCKS_OPTIONS', 'Opcje');
define('_AM_SYSTEM_BLOCKS_DRAG', 'Przeciągnij lub sortuj blok');
// Komunikaty
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL', 'Czy na pewno chcesz usunąć ten blok? <div class="bold">%s</div>');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT', 'Bloki systemowe nie mogą być usunięte!');
define('_AM_SYSTEM_BLOCKS_MODULECANT', 'Ten blok nie może być usunięty bezpośrednio! Jeśli chcesz wyłączyć ten blok, dezaktywuj moduł.');
// Wskazówki
define('_AM_SYSTEM_BLOCKS_TIPS', '<ul>
<li>Możesz łatwo zmienić pozycję lub kolejność bloku za pomocą funkcji przeciągnij i upuść, kliknij na <img class="tooltip" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DRAG . '" title="' . _AM_SYSTEM_BLOCKS_DRAG . '" /> ten obraz i ustaw swoją stronę tak, jak chcesz</li>
<li>Dodaj nowy blok niestandardowy</li>
<li>Włącz lub wyłącz blok, klikając na <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DISPLAY . '" title="' . _AM_SYSTEM_BLOCKS_DISPLAY . '"/> lub <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_HIDE . '" title="' . _AM_SYSTEM_BLOCKS_HIDE . '" /></li>
</ul>');

define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', 'Stopka Lewo');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', 'Stopka Środek');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', 'Stopka Prawo');
