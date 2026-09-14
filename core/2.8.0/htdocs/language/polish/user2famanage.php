<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', 'Uwierzytelnianie dwuskładnikowe');
define('_US_2FAM_PASSWORD', 'Twoje bieżące hasło');
define('_US_2FAM_ENABLE', 'Skonfiguruj aplikację uwierzytelniającą');
define('_US_2FAM_CONFIRM', 'Potwierdź aplikację uwierzytelniającą');
define('_US_2FAM_CHOOSE', 'Wybierz, jak chcesz otrzymywać drugi krok: przez aplikację uwierzytelniającą lub kod e-mailem.');
define('_US_2FAM_ENABLE_EMAIL', 'Używaj kodów e-mail');
define('_US_2FAM_EMAIL_HELP', 'Kody e-mail: sześciocyfrowy kod jest wysyłany na adres %s przy każdym logowaniu. Mniej bezpieczne niż aplikacja uwierzytelniająca, ponieważ każdy, kto może odczytać Twoją pocztę, może przejść ten krok.');
define('_US_2FAM_EMAIL_STEP', 'Wysłaliśmy sześciocyfrowy kod na adres %s. Wprowadź go poniżej, aby potwierdzić. Jest ważny przez dziesięć minut.');
define('_US_2FAM_CONFIRM_EMAIL', 'Potwierdź kody e-mail');
define('_US_2FAM_CODE_HELP_EMAIL', 'Sześciocyfrowy kod z wiadomości e-mail, którą właśnie wysłaliśmy.');
define('_US_2FAM_ENABLED_EMAIL', 'Kody e-mail są włączone. Aby wprowadzić zmianę, podaj bieżące hasło i kod wysyłany e-mailem lub kod odzyskiwania. Użyj przycisku poniżej, aby poprosić o kod.');
define('_US_2FAM_SEND', 'Wyślij mi kod');
define('_US_2FAM_MANUAL', 'Klucz konfiguracji ręcznej');
define('_US_2FAM_SCAN', 'Kod QR dla aplikacji uwierzytelniającej');
define('_US_2FAM_STEP_APP', 'Potrzebujesz aplikacji uwierzytelniającej: zadziała dowolna aplikacja lub menedżer haseł generujący jednorazowe kody czasowe (TOTP), na telefonie lub komputerze. Jeśli jeszcze jej nie masz, zainstaluj najpierw wybraną (np. Google Authenticator, Microsoft Authenticator, Aegis lub FreeOTP).');
define('_US_2FAM_STEP_ADD', 'W aplikacji dodaj konto: zeskanuj ten kod QR lub wybierz wprowadzanie ręczne i wpisz klucz konfiguracji pokazany poniżej.');
define('_US_2FAM_STEP_CODE', 'Aplikacja pokazuje teraz sześciocyfrowy kod, który zmienia się co 30 sekund. Wprowadź aktualnie wyświetlany kod w polu poniżej i potwierdź.');
define('_US_2FAM_CODE_HELP', 'Sześciocyfrowy kod aktualnie wyświetlany przez aplikację uwierzytelniającą.');
define('_US_2FAM_HTTP', 'To połączenie używa zwykłego HTTP. Twoje hasło, sesja, klucz konfiguracji i kody odzyskiwania mogą zostać przechwycone. Używaj HTTPS, kiedy to możliwe.');
define('_US_2FAM_CODES', 'Zapisz te kody odzyskiwania teraz');
define('_US_2FAM_CODES_HELP', 'Każdy kod działa jednorazowo. Te kody nie zostaną wyświetlone ponownie. Przechowuj je w bezpiecznym miejscu, oddzielnie od tego konta.');
define('_US_2FAM_DISABLE', 'Wyłącz uwierzytelnianie dwuskładnikowe');
define('_US_2FAM_REGENERATE', 'Zastąp kody odzyskiwania');
define('_US_2FAM_ENABLED', 'Aplikacja uwierzytelniająca jest skonfigurowana. Podaj bieżące hasło oraz kod uwierzytelniający lub odzyskiwania, aby wprowadzić zmianę.');
define('_US_2FAM_DISABLED', 'Uwierzytelnianie dwuskładnikowe jest wyłączone.');
define('_US_2FAM_PAUSED', 'Witryna wstrzymała wyzwania dwuskładnikowe. Twój czynnik jest zachowany, a opcja „zapamiętaj mnie” pozostaje niedostępna dla skonfigurowanych kont.');
define('_US_2FAM_UNAVAILABLE', 'Konfiguracja lub zarządzanie uwierzytelnianiem dwuskładnikowym jest niedostępne. Skontaktuj się z administratorem witryny.');
define('_US_2FAM_STARTAGAIN', 'Konfiguracja wygasła lub konto się zmieniło. Podaj hasło, aby ponownie rozpocząć konfigurację.');
define('_US_2FAM_BADPASSWORD', 'Twoje bieżące hasło nie zostało zaakceptowane.');
define('_US_2FAM_RESET', 'Zresetuj uwierzytelnianie dwuskładnikowe tego użytkownika');
define('_US_2FAM_STATUS_NONE', 'Nieskonfigurowane');
define('_US_2FAM_STATUS_TOTP', 'Aplikacja uwierzytelniająca skonfigurowana');
define('_US_2FAM_STATUS_EMAIL', 'Kody e-mail skonfigurowane');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Stan niedostępny');
define('_US_2FAM_RESET_HELP', 'To wyłącza drugi czynnik użytkownika, niezależnie od skonfigurowanej metody, i unieważnia jego kody odzyskiwania oraz pliki cookie „zapamiętaj mnie”. Istniejące zalogowane sesje pozostają aktywne. Podaj własne hasło administratora, aby potwierdzić.');
define('_US_2FAM_RESET_DONE', 'Uwierzytelnianie dwuskładnikowe użytkownika zostało zresetowane.');
define('_US_2FAM_BACK', 'Powrót do konta');
define('_US_2FAM_DONE', 'Uwierzytelnianie dwuskładnikowe jest włączone.');
define('_US_2FAM_REPLACED', 'Poprzednie kody odzyskiwania zostały unieważnione.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: zmieniono uwierzytelnianie dwuskładnikowe');
define('_US_2FAM_NOTICE_BODY', 'Uwierzytelnianie dwuskładnikowe lub kody odzyskiwania Twojego konta w %s zostały zmienione z %s. Jeśli to nie Ty, skontaktuj się z administratorem witryny.');
define('_US_2FAM_RESET_SUBJECT', '%s: administrator zresetował Twoje uwierzytelnianie dwuskładnikowe');
define('_US_2FAM_RESET_BODY', 'Administrator wyłączył Twój drugi czynnik i unieważnił jego kody odzyskiwania w %s z %s. Istniejące zalogowane sesje pozostają aktywne. Zaloguj się i skonfiguruj ponownie uwierzytelnianie dwuskładnikowe. Skontaktuj się z administratorem witryny, jeśli było to nieoczekiwane.');
