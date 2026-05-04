<?php
//
// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> jest oprogramowaniem typu open source
    Obiektowy system publikowania w Internecie napisany w PHP. Jest to idealne narzędzie do
    tworzenie małych i dużych, dynamicznych witryn społecznościowych, portali wewnątrzfirmowych, portali korporacyjnych, blogów internetowych i wielu innych.
</p>
<p>
    XOOPS jest udostępniany na warunkach
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Powszechna licencja publiczna (GPL)</a>
    wersji 2 lub nowszej i można ją swobodnie wykorzystywać i modyfikować.
    Redystrybucja jest bezpłatna pod warunkiem przestrzegania warunków dystrybucji GPL.
</p>
<h3>Wymagania</h3>
<ul>
    <li>WWW Serwer (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS itp.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 lub wyższy, zalecany 8.4+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 lub wyższy, zalecany 8.4.5+ </li>
</ul>
<h3>Przed tobą install</h3>
<ol>
    <li>Skonfiguruj poprawnie serwer WWW, PHP i serwer bazy danych.</li>
    <li>Przygotuj bazę danych dla swojej witryny XOOPS.</li>
    <li>Przygotuj konto użytkownika i nadaj mu dostęp do bazy danych.</li>
    <li>Ustaw możliwość zapisu tych katalogów i plików: %s</li>
    <li>Ze względów bezpieczeństwa zdecydowanie zaleca się przeniesienie dwóch poniższych katalogów z <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">katalog główny dokumentu</a> i zmień nazwy folderów: %s</li>
    <li>Utwórz (jeśli jeszcze nie istnieje) i udostępnij te katalogi do zapisu: %s</li>
    <li>Włącz plik cookie i JavaScript swojej przeglądarki.</li>
</ol>
<h3>Specjalne uwagi</h3>
<ol>
    <li>Niektóre specyficzne kombinacje oprogramowania systemowego mogą wymagać do działania dodatkowych konfiguracji
    z XOOPS. Jeśli którykolwiek z tych tematów dotyczy Twojego środowiska, zapoznaj się z pełną treścią
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    instrukcja instalacji</a> aby uzyskać więcej informacji.<br><br>

    <li><strong>SELinux</strong> obsługujące systemy (np <strong>CentOS</strong>  I <strong>RHEL</strong>) może wymagać zmian w kontekście zabezpieczeń
    dla katalogów XOOPS oprócz normalnych uprawnień do plików, aby umożliwić zapis w katalogach.
    Skonsultuj się z dokumentacją systemu i/lub administratorem systemu.
</ol>
';

return $content;
