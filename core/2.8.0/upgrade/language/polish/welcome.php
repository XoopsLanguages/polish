<?php

// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Aktualizator</h2>

<p>
<em>Aktualizacja</em> sprawdzi tę instalację XOOPS i zastosuje wszelkie potrzebne poprawki, aby była kompatybilna 
z nowym kodem XOOPS. Poprawki mogą obejmować zmiany w bazie danych, dodanie ustawień domyślnych dla nowych
elementy konfiguracji, aktualizacje plików i danych i nie tylko.
<p>
Po każdej łatce osoba aktualizująca zgłosi status i będzie czekać na kontynuację wprowadzonych danych. Na
zakończeniu aktualizacji kontrola zostanie przekazana funkcji aktualizacji modułu systemu.

<div class="alert alert-warning">
Po zakończeniu aktualizacji nie zapomnij:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> usuń folder aktualizacji</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> zaktualizuj wszystkie moduły, które uległy zmianie</li>
</div>

EOT,
);
