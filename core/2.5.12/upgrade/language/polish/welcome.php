<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>Aktualizator XOOPS</h2>

<p>
<em>Aktualizacja</em> sprawdzi tę instalację XOOPS i zastosuje niezbędne poprawki, aby była kompatybilna 
z nowym kodem XOOPS. Poprawki mogą obejmować zmiany w bazie danych, dodanie domyślnych ustawień dla nowych 
opcji konfiguracyjnych, aktualizację plików i danych oraz inne działania.
</p>
<p>
Po każdej poprawce aktualizator wyświetli jej status i poczeka na Twoje potwierdzenie, aby kontynuować. 
Po zakończeniu procesu aktualizacji kontrola zostanie przekazana do funkcji aktualizacji modułu systemowego.
</p>

<div class="alert alert-warning">
Po zakończeniu aktualizacji nie zapomnij:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> usunąć folderu <code>upgrade</code></li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> zaktualizować wszystkie zmodyfikowane moduły</li>
</ul>
</div>
EOT,
);
