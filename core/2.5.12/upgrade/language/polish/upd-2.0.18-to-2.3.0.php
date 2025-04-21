<?php
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Fizyczne ścieżki XOOPS');
define('LEGEND_DATABASE', 'Zestaw znaków bazy danych');

define('XOOPS_LIB_PATH_LABEL', 'Katalog bibliotek XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Fizyczna ścieżka do katalogu bibliotek XOOPS BEZ końcowego ukośnika, dla przyszłej kompatybilności. Umieść folder poza ' . XOOPS_ROOT_PATH . ' dla bezpieczeństwa.');
define('XOOPS_DATA_PATH_LABEL', 'Katalog plików danych XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Fizyczna ścieżka do katalogu plików danych XOOPS (z możliwością zapisu) BEZ końcowego ukośnika, dla przyszłej kompatybilności. Umieść folder poza ' . XOOPS_ROOT_PATH . ' dla bezpieczeństwa.');

define('DB_COLLATION_LABEL', 'Zestaw znaków i porównywanie bazy danych');
define('DB_COLLATION_HELP', 'Od wersji 4.12 MySQL obsługuje niestandardowy zestaw znaków i porównywanie. Jednak jest to bardziej złożone niż oczekiwano, więc NIE dokonuj żadnych zmian, chyba że jesteś pewien swojego wyboru.');
define('DB_COLLATION_NOCHANGE', 'Nie zmieniaj');

define('XOOPS_PATH_FOUND', 'Ścieżka znaleziona.');
define('ERR_COULD_NOT_ACCESS', 'Nie można uzyskać dostępu do określonego folderu. Sprawdź, czy istnieje i czy serwer ma do niego prawa odczytu.');
define('CHECKING_PERMISSIONS', 'Sprawdzanie uprawnień plików i katalogów...');
define('ERR_NEED_WRITE_ACCESS', 'Serwer musi mieć prawa zapisu do następujących plików i folderów<br>(tj. <em>chmod 777 nazwa_katalogu</em> na serwerze UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s NIE jest zapisywalny.');
define('IS_WRITABLE', '%s jest zapisywalny.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Błąd podczas zapisywania zawartości do pliku mainfile.php, zapisz zawartość do pliku mainfile.php ręcznie.');
