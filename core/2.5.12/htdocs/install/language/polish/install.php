<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2025 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Pokaż/ukryj tekst pomocy');
// Licencja
//define('LICENSE_NOT_WRITEABLE', 'Plik licencji "%s" NIE jest zapisywalny!');
//define('LICENSE_IS_WRITEABLE', 'Licencja %s jest zapisywalna.');
// Strona sprawdzania konfiguracji
define('SERVER_API', 'API serwera');
define('PHP_EXTENSION', 'Rozszerzenie %s');
define('CHAR_ENCODING', 'Kodowanie znaków');
define('XML_PARSING', 'Parsowanie XML');
define('REQUIREMENTS', 'Wymagania');
define('_PHP_VERSION', 'Wersja PHP');
define('RECOMMENDED_SETTINGS', 'Zalecane ustawienia');
define('RECOMMENDED_EXTENSIONS', 'Zalecane rozszerzenia');
define('SETTING_NAME', 'Nazwa ustawienia');
define('RECOMMENDED', 'Zalecane');
define('CURRENT', 'Aktualne');
define('RECOMMENDED_EXTENSIONS_MSG', 'Te rozszerzenia nie są wymagane do normalnego użytkowania, ale mogą być niezbędne do korzystania z
    niektórych specyficznych funkcji (takich jak obsługa wielu języków lub RSS). Dlatego zaleca się ich zainstalowanie.');
define('NONE', 'Brak');
define('SUCCESS', 'Sukces');
define('WARNING', 'Ostrzeżenie');
define('FAILED', 'Niepowodzenie');
// Tytuły (główne i stron)
define('XOOPS_INSTALL_WIZARD', 'Kreator instalacji XOOPS');
define('LANGUAGE_SELECTION', 'Wybór języka');
define('LANGUAGE_SELECTION_TITLE', 'Wybierz swój język');        // L128
define('INTRODUCTION', 'Wprowadzenie');
define('INTRODUCTION_TITLE', 'Witamy w Kreatorze Instalacji XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Sprawdzenie konfiguracji');
define('CONFIGURATION_CHECK_TITLE', 'Sprawdzanie konfiguracji serwera');
define('PATHS_SETTINGS', 'Ustawienia ścieżek');
define('PATHS_SETTINGS_TITLE', 'Ustawienia ścieżek');
define('DATABASE_CONNECTION', 'Połączenie z bazą danych');
define('DATABASE_CONNECTION_TITLE', 'Połączenie z bazą danych');
define('DATABASE_CONFIG', 'Konfiguracja bazy danych');
define('DATABASE_CONFIG_TITLE', 'Konfiguracja bazy danych');
define('CONFIG_SAVE', 'Zapisz konfigurację');
define('CONFIG_SAVE_TITLE', 'Zapisywanie konfiguracji systemu');
define('TABLES_CREATION', 'Tworzenie tabel');
define('TABLES_CREATION_TITLE', 'Tworzenie tabel bazy danych');
define('INITIAL_SETTINGS', 'Ustawienia początkowe');
define('INITIAL_SETTINGS_TITLE', 'Proszę wprowadzić ustawienia początkowe');
define('DATA_INSERTION', 'Wstawianie danych');
define('DATA_INSERTION_TITLE', 'Zapisywanie ustawień do bazy danych');
define('WELCOME', 'Witamy');
define('WELCOME_TITLE', 'Witamy na Twojej stronie XOOPS');        // L0
// Ustawienia (etykiety i tekst pomocy)
define('XOOPS_PATHS', 'Fizyczne ścieżki XOOPS');
define('XOOPS_URLS', 'Adresy internetowe');
define('XOOPS_ROOT_PATH_LABEL', 'Fizyczna ścieżka do głównego katalogu dokumentów XOOPS');
define('XOOPS_ROOT_PATH_HELP', 'Fizyczna ścieżka do katalogu dokumentów XOOPS (serwowanych) BEZ końcowego ukośnika');
define('XOOPS_LIB_PATH_LABEL', 'Katalog bibliotek XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Fizyczna ścieżka do katalogu bibliotek XOOPS BEZ końcowego ukośnika, dla przyszłej kompatybilności. Umieść ten folder poza ' . XOOPS_ROOT_PATH_LABEL . ' dla bezpieczeństwa.');
define('XOOPS_DATA_PATH_LABEL', 'Katalog plików danych XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Fizyczna ścieżka do katalogu plików danych XOOPS (z możliwością zapisu) BEZ końcowego ukośnika, dla przyszłej kompatybilności. Umieść ten folder poza ' . XOOPS_ROOT_PATH_LABEL . ' dla bezpieczeństwa.');
define('XOOPS_URL_LABEL', 'Adres internetowy strony (URL)'); // L56
define('XOOPS_URL_HELP', 'Główny adres URL, który będzie używany do dostępu do Twojej instalacji XOOPS'); // L58
define('LEGEND_CONNECTION', 'Połączenie z serwerem');
define('LEGEND_DATABASE', 'Baza danych'); // L51
define('DB_HOST_LABEL', 'Nazwa hosta serwera');    // L27
define('DB_HOST_HELP', 'Nazwa hosta serwera bazy danych. Jeśli nie jesteś pewien, w większości przypadków działa <em>localhost</em>'); // L67
define('DB_USER_LABEL', 'Nazwa użytkownika');    // L28
define('DB_USER_HELP', 'Nazwa konta użytkownika, które będzie używane do połączenia z serwerem bazy danych'); // L65
define('DB_PASS_LABEL', 'Hasło');    // L52
define('DB_PASS_HELP', 'Hasło do Twojego konta użytkownika bazy danych'); // L68
define('DB_NAME_LABEL', 'Nazwa bazy danych');    // L29
define('DB_NAME_HELP', 'Nazwa bazy danych na hoście. Instalator spróbuje utworzyć bazę danych, jeśli nie istnieje'); // L64
define('DB_CHARSET_LABEL', 'Zestaw znaków bazy danych');
define('DB_CHARSET_HELP', 'MySQL obsługuje zestawy znaków, co umożliwia przechowywanie danych przy użyciu różnych zestawów znaków i przeprowadzanie porównań zgodnie z różnymi zestawieniami.');
define('DB_COLLATION_LABEL', 'Porównywanie bazy danych');
define('DB_COLLATION_HELP', 'Porównywanie to zestaw reguł porównywania znaków w zestawie znaków.');
define('DB_PREFIX_LABEL', 'Prefiks tabel');    // L30
define('DB_PREFIX_HELP', 'Ten prefiks zostanie dodany do wszystkich nowych tabel, aby uniknąć konfliktów nazw w bazie danych. Jeśli nie jesteś pewien, po prostu pozostaw domyślny'); // L63
define('DB_PCONNECT_LABEL', 'Używaj stałego połączenia');    // L54
define('DB_PCONNECT_HELP', "Domyślnie jest ustawione na 'Nie'. Pozostaw puste, jeśli nie jesteś pewien"); // L69
define('DB_DATABASE_LABEL', 'Baza danych');
define('LEGEND_ADMIN_ACCOUNT', 'Konto administratora');
define('ADMIN_LOGIN_LABEL', 'Login administratora'); // L37
define('ADMIN_EMAIL_LABEL', 'E-mail administratora'); // L38
define('ADMIN_PASS_LABEL', 'Hasło administratora'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Potwierdź hasło'); // L74
// Przyciski
define('BUTTON_PREVIOUS', 'Wstecz'); // L42
define('BUTTON_NEXT', 'Dalej'); // L47
// Wiadomości
define('XOOPS_FOUND', 'Znaleziono %s');
define('CHECKING_PERMISSIONS', 'Sprawdzanie uprawnień plików i katalogów...'); // L82
define('IS_NOT_WRITABLE', '%s NIE jest zapisywalny.'); // L83
define('IS_WRITABLE', '%s jest zapisywalny.'); // L84
define('XOOPS_PATH_FOUND', 'Ścieżka znaleziona.');
//define('READY_CREATE_TABLES', 'Nie wykryto tabel XOOPS.<br>Instalator jest gotowy do utworzenia tabel systemowych XOOPS.');
define('XOOPS_TABLES_FOUND', 'Tabele systemowe XOOPS już istnieją w Twojej bazie danych.'); // L131
define('XOOPS_TABLES_CREATED', 'Tabele systemowe XOOPS zostały utworzone.');
//define('READY_INSERT_DATA', 'Instalator jest gotowy do wstawienia początkowych danych do Twojej bazy danych.');
//define('READY_SAVE_MAINFILE', 'Instalator jest gotowy do zapisania określonych ustawień do pliku <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Ustawienia zapisane');
define('SAVED_MAINFILE_MSG', 'Instalator zapisał określone ustawienia do plików <em>mainfile.php</em> i <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'Dane XOOPS znaleziono w bazie danych.');
define('DATA_INSERTED', 'Początkowe dane zostały wstawione do bazy danych.');
// %s to nazwa bazy danych
define('DATABASE_CREATED', 'Baza danych %s utworzona!'); // L43
// %s to nazwa tabeli
define('TABLE_NOT_CREATED', 'Nie można utworzyć tabeli %s'); // L118
define('TABLE_CREATED', 'Tabela %s utworzona.'); // L45
define('ROWS_INSERTED', 'Wstawiono %d rekordów do tabeli %s.'); // L119
define('ROWS_FAILED', 'Nie udało się wstawić %d rekordów do tabeli %s.'); // L120
define('TABLE_ALTERED', 'Tabela %s zaktualizowana.'); // L133
define('TABLE_NOT_ALTERED', 'Nie udało się zaktualizować tabeli %s.'); // L134
define('TABLE_DROPPED', 'Tabela %s usunięta.'); // L163
define('TABLE_NOT_DROPPED', 'Nie udało się usunąć tabeli %s.'); // L164
// Komunikaty błędów
define('ERR_COULD_NOT_ACCESS', 'Nie można uzyskać dostępu do określonego folderu. Sprawdź, czy istnieje i czy serwer ma do niego prawa odczytu.');
define('ERR_NO_XOOPS_FOUND', 'Nie znaleziono instalacji XOOPS w określonym folderze.');
define('ERR_INVALID_EMAIL', 'Nieprawidłowy e-mail'); // L73
define('ERR_REQUIRED', 'Informacje są wymagane.'); // L41
define('ERR_PASSWORD_MATCH', 'Podane hasła nie są identyczne');
define('ERR_NEED_WRITE_ACCESS', 'Serwer musi mieć prawa zapisu do następujących plików i folderów<br>(np. <em>chmod 775 nazwa_katalogu</em> na serwerze UNIX/LINUX)<br>Jeśli nie są dostępne lub nie zostały poprawnie utworzone, utwórz je ręcznie i ustaw odpowiednie uprawnienia.');
define('ERR_NO_DATABASE', 'Nie można utworzyć bazy danych. Skontaktuj się z administratorem serwera w celu uzyskania szczegółów.'); // L31
define('ERR_NO_DBCONNECTION', 'Nie można połączyć się z serwerem bazy danych.'); // L106
define('ERR_WRITING_CONSTANT', 'Nie udało się zapisać stałej %s.'); // L122
define('ERR_COPY_MAINFILE', 'Nie można skopiować pliku dystrybucyjnego do %s');
define('ERR_WRITE_MAINFILE', 'Nie można zapisać do %s. Sprawdź uprawnienia pliku i spróbuj ponownie.');
define('ERR_READ_MAINFILE', 'Nie można otworzyć %s do odczytu');
define('ERR_INVALID_DBCHARSET', "Zestaw znaków '%s' nie jest obsługiwany.");
define('ERR_INVALID_DBCOLLATION', "Porównywanie '%s' nie jest obsługiwane.");
define('ERR_CHARSET_NOT_SET', 'Domyślny zestaw znaków nie jest ustawiony dla bazy danych XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Wsparcie');
define('LOGIN', 'Autoryzacja');
define('LOGIN_TITLE', 'Autoryzacja');
define('USER_LOGIN', 'Login administratora');
define('USERNAME', 'Nazwa użytkownika:');
define('PASSWORD', 'Hasło:');
define('ICONV_CONVERSION', 'Konwersja zestawu znaków');
define('ZLIB_COMPRESSION', 'Kompresja Zlib');
define('IMAGE_FUNCTIONS', 'Funkcje obrazów');
define('IMAGE_METAS', 'Metadane obrazów (exif)');
define('FILTER_FUNCTIONS', 'Funkcje filtrowania');
define('ADMIN_EXIST', 'Konto administratora już istnieje.');
define('CONFIG_SITE', 'Konfiguracja witryny');
define('CONFIG_SITE_TITLE', 'Konfiguracja witryny');
define('MODULES', 'Instalacja modułów');
define('MODULES_TITLE', 'Instalacja modułów');
define('THEME', 'Wybierz motyw');
define('THEME_TITLE', 'Wybierz domyślny motyw');
define('INSTALLED_MODULES', 'Następujące moduły zostały zainstalowane.');
define('NO_MODULES_FOUND', 'Nie znaleziono modułów.');
define('NO_INSTALLED_MODULES', 'Nie zainstalowano żadnych modułów.');
define('THEME_NO_SCREENSHOT', 'Nie znaleziono zrzutu ekranu');
define('IS_VALOR', ' => ');
// komunikat hasła
define('PASSWORD_LABEL', 'Siła hasła');
define('PASSWORD_DESC', 'Nie wprowadzono hasła');
define('PASSWORD_GENERATOR', 'Generator haseł');
define('PASSWORD_GENERATE', 'Generuj');
define('PASSWORD_COPY', 'Kopiuj');
define('PASSWORD_VERY_WEAK', 'Bardzo słabe');
define('PASSWORD_WEAK', 'Słabe');
define('PASSWORD_BETTER', 'Lepsze');
define('PASSWORD_MEDIUM', 'Średnie');
define('PASSWORD_STRONG', 'Silne');
define('PASSWORD_STRONGEST', 'Najsilniejsze');
//2.5.7
define('WRITTEN_LICENSE', 'Zapisano klucz licencyjny XOOPS %s: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Ponów');
define('CHMOD_CHGRP_IGNORE', 'Użyj mimo to');
define('CHMOD_CHGRP_ERROR', 'Instalator może nie być w stanie zapisać pliku konfiguracyjnego %1$s.<p>PHP zapisuje pliki jako użytkownik %2$s i grupa %3$s.<p>Katalog %4$s/ ma użytkownika %5$s i grupę %6$s');
//2.5.9
define("CURL_HTTP", "Biblioteka klienta URL (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Domena ciasteczek dla strony internetowej');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domena do ustawiania ciasteczek. Może być pusta, pełna nazwa hosta z URL (www.przyklad.com), lub zarejestrowana domena bez subdomen (przyklad.com), aby współdzielić ciasteczka między subdomenami (www.przyklad.com i blog.przyklad.com).');
define('INTL_SUPPORT', 'Funkcje internacjonalizacji');
define('XOOPS_SOURCE_CODE', "XOOPS na GitHub");
define('XOOPS_INSTALLING', 'Instalowanie');
define('XOOPS_ERROR_ENCOUNTERED', 'Błąd');
define('XOOPS_ERROR_SEE_BELOW', 'Zobacz komunikaty poniżej.');
define('MODULES_AVAILABLE', 'Dostępne moduły');
define('INSTALL_THIS_MODULE', 'Dodaj %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Nie można skopiować pliku konfiguracyjnego %s');
