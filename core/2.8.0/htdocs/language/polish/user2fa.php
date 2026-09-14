<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Drugi krok');
define('_US_2FA_PROMPT', 'Wprowadź kod z aplikacji uwierzytelniającej');
define('_US_2FA_CODE', 'Kod uwierzytelniający');
define('_US_2FA_PROMPT_EMAIL', 'Wysłaliśmy sześciocyfrowy kod na adres %s. Wprowadź go poniżej.');
define('_US_2FA_CODE_EMAIL', 'Kod z wiadomości e-mail');
define('_US_2FA_SEND', 'Wyślij nowy kod');
define('_US_2FA_SENT', 'Nowy kod został wysłany na adres %s. Jest ważny przez dziesięć minut.');
define('_US_2FA_SEND_WAIT', 'Kod został wysłany mniej niż minutę temu. Sprawdź skrzynkę odbiorczą i folder spamu przed poproszeniem o kolejny.');
define('_US_2FA_SEND_FAILED', 'Nie udało się teraz wysłać kodu. Spróbuj ponownie za chwilę lub użyj kodu odzyskiwania.');
define('_US_2FA_EMAIL_SUBJECT', '%s: Twój kod logowania');
define('_US_2FA_EMAIL_BODY', 'Twój kod logowania do %s to:

%s

Jest ważny przez %d minut i działa jednorazowo. Jeśli o niego nie prosiłeś, zignoruj tę wiadomość i rozważ zmianę hasła.');
define('_US_2FA_RECOVERY', 'Użyj zamiast tego kodu odzyskiwania');
define('_US_2FA_RECOVERY_HINT', 'Każdy kod odzyskiwania działa jednorazowo. Jego użycie wysyła wiadomość e-mail.');
define('_US_2FA_SUBMIT', 'Kontynuuj');
define('_US_2FA_STARTAGAIN', 'To logowanie wygasło lub zostało przerwane. Zacznij ponownie.');
define('_US_2FA_BACKTOLOGIN', 'Powrót do formularza logowania');
define('_US_2FA_BADCODE', 'Ten kod nie został zaakceptowany.');
define('_US_2FA_LOCKED', 'Zbyt wiele prób. Drugi krok jest zablokowany na piętnaście minut; kod odzyskiwania nadal działa.');
define('_US_2FA_UNAVAILABLE', 'Drugi krok jest obecnie niedostępny. Kod odzyskiwania nadal działa, lub skontaktuj się z administratorem witryny.');
define('_US_2FA_REQUIRED', 'To konto ma włączone uwierzytelnianie dwuskładnikowe. Zaloguj się przez stronę logowania witryny.');
define('_US_2FA_HTTP_LOGIN', 'To okno nie może ukończyć logowania dwuskładnikowego przez HTTP, ponieważ Twoje hasło zostałoby wysłane bez szyfrowania. Użyj zamiast tego logowania witryny, lub poproś administratora o włączenie HTTPS dla witryny.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: drugi krok zablokowany');
define('_US_2FA_LOCKED_MAIL_BODY', 'Dla Twojego konta w %s wprowadzono pięć błędnych kodów drugiego kroku z %s. Drugi krok jest zablokowany na piętnaście minut. Jeśli to nie Ty, zmień hasło.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: użyto kodu odzyskiwania');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Kod odzyskiwania został użyty do zalogowania się na Twoje konto w %s z %s. Ten kod już nie działa. Jeśli to nie Ty, zmień hasło i zresetuj kody odzyskiwania.');
