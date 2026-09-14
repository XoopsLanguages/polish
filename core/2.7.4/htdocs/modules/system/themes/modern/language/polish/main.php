<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Modern Theme Language Definitions
 */
// _LANGCODE: pl

// Compatibility with default/oxygen theme
if (!defined('_OXYGEN_SYSOPTIONS')) {
    define('_OXYGEN_SYSOPTIONS', 'Opcje systemowe');
}

// -- Dashboard: KPI Cards --
define('_MODERN_TOTAL_USERS', 'Łącznie użytkowników');
define('_MODERN_NEW_THIS_MONTH', 'Nowych w tym miesiącu');
define('_MODERN_ACTIVE_MODULES', 'Aktywne moduły');
define('_MODERN_ACTIVE_MODULES_USERS', 'Moduły użytkownika');
define('_MODERN_ACTIVE_MODULES_ADMINS', 'Moduły tylko dla admina');
define('_MODERN_ACTIVE_USERS', 'Aktywni użytkownicy');
define('_MODERN_LAST_30_DAYS', 'Ostatnie 30 dni');
define('_MODERN_SERVER_LOAD', 'Obciążenie serwera');
define('_MODERN_CURRENT', 'Bieżące');

// -- Dashboard: Charts --
define('_MODERN_USER_REGISTRATIONS', 'Rejestracje użytkowników');
define('_MODERN_NEW_USERS_6_MONTHS', 'Nowi użytkownicy w ciągu ostatnich 6 miesięcy');
define('_MODERN_USER_GROUPS', 'Grupy użytkowników');
define('_MODERN_DISTRIBUTION_BY_GROUP', 'Dystrybucja według grupy');
define('_MODERN_CONTENT_DISTRIBUTION', 'Dystrybucja treści');
define('_MODERN_CONTENT_ACROSS_MODULES', 'Treść w modułach');
define('_MODERN_NEW_USERS', 'Nowi użytkownicy');

// -- Dashboard: System Information --
define('_MODERN_SYSTEM_INFORMATION', 'Informacje o systemie');
define('_MODERN_COMPOSER_PACKAGES', 'Pakiety Composer');
define('_MODERN_COMPONENT', 'Komponent');
define('_MODERN_VALUE', 'Wartość');
define('_MODERN_STATUS', 'Status:');
define('_MODERN_PACKAGE', 'Pakiet');
define('_MODERN_VERSION', 'Wersja');
define('_MODERN_SERVER_API', 'API serwera');
define('_MODERN_OPERATING_SYSTEM', 'System operacyjny');
define('_MODERN_MEMORY_LIMIT', 'Limit pamięci');
define('_MODERN_UPLOAD_MAX_SIZE', 'Maksymalny rozmiar przesyłania');
define('_MODERN_MAX_EXECUTION_TIME', 'Maksymalny czas wykonania');
define('_MODERN_POST_MAX_SIZE', 'Maksymalny rozmiar POST');
define('_MODERN_FILE_UPLOADS', 'Przesyłanie plików');

// -- Dashboard: Status Badges --
define('_MODERN_STATUS_ACTIVE', 'Aktywny');
define('_MODERN_STATUS_RUNNING', 'Uruchomiony');
define('_MODERN_STATUS_GOOD', 'Dobry');
define('_MODERN_STATUS_CONFIGURED', 'Skonfigurowany');
define('_MODERN_STATUS_ADEQUATE', 'Wystarczający');
define('_MODERN_STATUS_ENABLED', 'Włączony');

// -- Sidebar --
define('_MODERN_CONTROL_PANEL', 'Panel sterowania');
define('_MODERN_MODULES', 'Moduły');
define('_MODERN_SYSTEM', 'Administracja');

// -- Header --
define('_MODERN_TOGGLE_MENU', 'Przełącz menu');
define('_MODERN_ONLINE', 'W Internecie');
define('_MODERN_TOGGLE_DARK_MODE', 'Przełącz tryb ciemny');

// -- Customizer --
define('_MODERN_THEME_SETTINGS', 'Ustawienia motywu');
define('_MODERN_COLOR_SCHEME', 'Schemat kolorów');
define('_MODERN_COLOR_DEFAULT_BLUE', 'Domyślny niebieski');
define('_MODERN_COLOR_DEFAULT', 'Domyślny');
define('_MODERN_COLOR_NATURE_GREEN', 'Naturalny zielony');
define('_MODERN_COLOR_GREEN', 'Zielony');
define('_MODERN_COLOR_ROYAL_PURPLE', 'Królewski fiolet');
define('_MODERN_COLOR_PURPLE', 'Fioletowy');
define('_MODERN_COLOR_WARM_ORANGE', 'Ciepły pomarańczowy');
define('_MODERN_COLOR_ORANGE', 'Pomarańczowy');
define('_MODERN_COLOR_OCEAN_TEAL', 'Morski turkus');
define('_MODERN_COLOR_TEAL', 'Turkusowy');
define('_MODERN_COLOR_BOLD_RED', 'Intensywna czerwień');
define('_MODERN_COLOR_RED', 'Czerwony');
define('_MODERN_DASHBOARD_SECTIONS', 'Sekcje panelu');
define('_MODERN_KPI_CARDS', 'Karty KPI');
define('_MODERN_CHARTS', 'Wykresy');
define('_MODERN_MODULE_WIDGETS', 'Widżety modułów');
define('_MODERN_CONTENT_TRACKING', 'Śledzenie treści');
define('_MODERN_CONTENT_TRACKING_HINT', 'Wybierz moduły do wyświetlenia na wykresie dystrybucji treści.');
define('_MODERN_SIDEBAR', 'Pasek boczny');
define('_MODERN_COMPACT_MODE', 'Tryb kompaktowy');
define('_MODERN_SHOW_ICONS', 'Pokaż ikony');
define('_MODERN_DISPLAY', 'Wyświetlanie');
define('_MODERN_ANIMATIONS', 'Animacje');
define('_MODERN_COMPACT_VIEW', 'Widok kompaktowy');
define('_MODERN_RESET_TO_DEFAULTS', 'Przywróć ustawienia domyślne');
define('_MODERN_CLOSE_SETTINGS', 'Zamknij ustawienia');
define('_MODERN_CUSTOMIZE_THEME', 'Dostosuj motyw');
define('_MODERN_CONFIRM_RESET', 'Zresetować wszystkie dostosowania do ustawień domyślnych?');

// -- Footer --
define('_MODERN_POWERED_BY', 'Obsługiwane przez XOOPS');
define('_MODERN_THEME_VERSION', 'Nowoczesny motyw administracyjny v1.0');

// -- Page --
define('_MODERN_OPEN', 'Otwórz');

// -- Widgets --
define('_MODERN_VIEW_ALL', 'Wyświetl wszystko');

// -- Content Module Labels (for Content Distribution chart) --
define('_MODERN_MOD_ARTICLES', 'Artykuły');
define('_MODERN_MOD_NEWS', 'Aktualności');
define('_MODERN_MOD_DOWNLOADS', 'Pliki do pobrania');
define('_MODERN_MOD_JOBS', 'Oferty pracy');
define('_MODERN_MOD_BLOG_POSTS', 'Wpisy blogowe');
define('_MODERN_MOD_ALUMNI', 'Absolwenci');
define('_MODERN_MOD_PEDIGREES', 'Genealogie');
define('_MODERN_MOD_PROPERTIES', 'Nieruchomości');
define('_MODERN_MOD_FORUM_POSTS', 'Posty na forum');
define('_MODERN_MOD_LINKS', 'Linki');

// -- Charts: Dataset Labels --
define('_MODERN_ITEMS', 'Elementy');
