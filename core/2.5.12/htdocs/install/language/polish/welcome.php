<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> to otwartoźródłowy
    obiektowy system publikacji internetowej napisany w języku PHP. Jest to idealne narzędzie
    do tworzenia małych i dużych dynamicznych stron społecznościowych, portali firmowych, intranetów, blogów i wielu innych.
</p>
<p>
    XOOPS jest udostępniany na warunkach
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">Ogólnej Licencji Publicznej GNU (GPL)</a>
    w wersji 2 lub wyższej i jest darmowy do użycia i modyfikacji.
    Można go swobodnie rozpowszechniać, o ile przestrzega się warunków licencji GPL.
</p>
<h3>Wymagania</h3>
<ul>
    <li>Serwer WWW (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, itd.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 5.6.0 lub nowszy, zalecana wersja 7.3+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.5 lub nowszy, zalecana wersja 5.7+</li>
</ul>
<h3>Przed instalacją</h3>
<ol>
    <li>Poprawnie skonfiguruj serwer WWW, PHP i serwer bazy danych.</li>
    <li>Przygotuj bazę danych dla swojej strony XOOPS.</li>
    <li>Utwórz konto użytkownika i nadaj mu dostęp do bazy danych.</li>
    <li>Uczyń zapisywalnymi następujące katalogi i pliki: %s</li>
    <li>Dla bezpieczeństwa zaleca się przeniesienie poniższych dwóch katalogów poza <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">katalog główny dokumentów</a> oraz zmianę ich nazw: %s</li>
    <li>Utwórz (jeśli jeszcze nie istnieją) i uczyń zapisywalnymi następujące katalogi: %s</li>
    <li>Włącz obsługę ciasteczek i JavaScript w swojej przeglądarce.</li>
</ol>
<h3>Uwagi specjalne</h3>
<p>Niektóre specyficzne kombinacje oprogramowania systemowego mogą wymagać dodatkowej konfiguracji, aby działały poprawnie z XOOPS. Jeśli którykolwiek z tych tematów dotyczy Twojego środowiska, zapoznaj się z pełną
 <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">instrukcją instalacji XOOPS</a> po więcej informacji.
</p>
<p>MySQL 8.0 nie jest obsługiwany przez wszystkie wersje PHP. Nawet w obsługiwanych wersjach mogą wystąpić problemy z biblioteką PHP <em>mysqlnd</em>, które wymagają ustawienia
 opcji <em>default-authentication-plugin</em> serwera MySQL na <em>mysql_native_password</em>, aby działał poprawnie.
</p>
<p>Systemy z włączonym SELinux (takie jak CentOS i RHEL) mogą wymagać zmiany kontekstu bezpieczeństwa
 dla katalogów XOOPS, oprócz zwykłych uprawnień do plików, aby umożliwić zapis. Skonsultuj się z dokumentacją systemu lub administratorem.
</p>
';

return $content;
