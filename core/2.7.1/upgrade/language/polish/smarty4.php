<?php

// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'Migracja XOOPS do Smarty4');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Wyniki skanowania');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Uruchom skanowanie');
define('_XOOPS_SMARTY4_SCANNER_END', 'Zakończ skanowanie');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Reguła');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Dopasowanie');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Plik');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Liczba poprawek');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Wymagana ręczna weryfikacja');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Można to naprawić automatycznie: nazwa zmiennej elementu foreach zostanie zmieniona poprzez dodanie „_item” (np. „foo” zmieni się na „foo_item”).');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Brak możliwości zapisu');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Opcje ponownego skanowania');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Zaznacz pole „Tak” poniżej, a następnie kliknij przycisk Uruchom skanowanie, aby spróbować automatycznie naprawić wszelkie znalezione problemy.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Oznacz jako zakończone');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Katalog szablonów (opcjonalny)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Rozszerzenie szablonu (opcjonalne)');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 wprowadza istotną zmianę: Smarty 4</h3>

<p>Niestety, ta zmiana może potencjalnie zakłócić działanie niektórych starszych motywów. Dlatego przed przystąpieniem do aktualizacji upewnij się, że wykonałeś następujące kroki:

<li>Uruchom preflight.php, aby sprawdzić, czy nie ma nieaktualnych motywów lub szablonów modułów.</li>
<li>Jeśli zostaną zidentyfikowane jakiekolwiek problemy, przed przystąpieniem do aktualizacji zapoznaj się z tym dokumentem, aby zrozumieć niezbędne modyfikacje.</li>
<li>Po dokonaniu wymaganych zmian uruchom ponownie preflight.php.</li>
<li>Jeśli nie ma więcej problemów, możesz rozpocząć proces aktualizacji.</li>
</p>
EOT,
);
