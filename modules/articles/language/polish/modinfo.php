<?php

// Polish version by 'plxoops project'
// The name of this module.
define('_MI_ARTICLES_NAME',		'Artyku造');

// Description for this module.
define('_MI_ARTICLES_DESC',		'Artyku造: Menad瞠r artyku堯w dla Xoops v2');

// Names of blocks for this module.
define('_MI_ARTICLES_BNAME1',	'Najnowsze Artyku造'); // New articles
define('_MI_ARTICLES_BNAME2',	'Najpopularniejsze artyku造'); // Top by views
define('_MI_ARTICLES_BNAME3',	'Ostatnio opublikowane artyku造'); // New articles - main display
define('_MI_ARTICLES_BNAME4',	'Najpopularniejsze opublikowane artyku造'); // Top by rates - main display

// Names of admin menu items
define('_MI_ARTICLE_ADMENU1',	'Spis');
define('_MI_ARTICLE_ADMENU2',	'Dodaj artyku�');
define('_MI_ARTICLE_ADMENU3',	'Edytuj/Kasuj artyku造');
define('_MI_ARTICLE_ADMENU4',	'Dodaj kategori�');
define('_MI_ARTICLE_ADMENU5',	'Edytuj/Kasuj kategorie');
define('_MI_ARTICLE_ADMENU6',	'Zatwierd� artyku造');

// Sub menu items
define('_MI_ARTICLE_SUBMENU1',	'Dodaj artyku�');

// Notification stuff
define('_MI_ARTICLE_GLOBAL_NOTIFY',     'Global');
define('_MI_ARTICLE_GLOBAL_NOTIFYDSC',  'Globalne opcje powiadamiania.');

define('_MI_ARTICLE_USERSUBNOTIFY',		'Admin');
define('_MI_ARTICLE_USERSUBNOTIFYDSC',	'Powiadamianie Admina o nades豉nych artyku豉ch.');

define('_MI_ARTICLE_GLOBAL_NEWARTICLE_NOTIFY',      'Dodano nowy artyku�.');
define('_MI_ARTICLE_GLOBAL_NEWARTICLE_NOTIFYCAP',   'Powiadom mnie gdy dodany zostanie nowy artyku�.');
define('_MI_ARTICLE_GLOBAL_NEWARTICLE_NOTIFYDSC',   'Zostaniesz powiadomiony gdy pojawi si� nowy artyku�.');
define('_MI_ARTICLE_GLOBAL_NEWARTICLE_NOTIFYSBJ',   '[{X_SITENAME}] Dodano nowy artyku�.');

define('_MI_ARTICLE_GLOBAL_NEWCATEGORY_NOTIFY',      'Dodano now� kategori�.');
define('_MI_ARTICLE_GLOBAL_NEWCATEGORY_NOTIFYCAP',   'Powiadom mnie gdy pojawi� si� nowe kategorie.');
define('_MI_ARTICLE_GLOBAL_NEWCATEGORY_NOTIFYDSC',   'Zostaniesz powiadomiony gdy pojawi si� nowa kategoria.');
define('_MI_ARTICLE_GLOBAL_NEWCATEGORY_NOTIFYSBJ',   '[{X_SITENAME}] Dodano now� kategori�.');

define('_MI_ART_ADMIN_USERNEWARTICLE_NOTIFY',		'Przedstawiono now� kategori�.');
define('_MI_ART_ADMIN_USERNEWARTICLE_NOTIFYCAP',	'Powiadom admina gdy u篡tkownik przedstawi nowy artyku�.');
define('_MI_ART_ADMIN_USERNEWARTICLE_NOTIFYDSC',	'Zostaniesz powiadomiony gdy u篡tkownik przedstawi nowy artyku� do publikacji.');
define('_MI_ART_ADMIN_USERNEWARTICLE_NOTIFYSBJ',	'[{X_SITENAME}] U篡tkownik przedstawi� nowy artyku� do zatwierdzenia.');


// Config stuff
define('_MI_ART_OPTION_LOGGEDIN',		'Zezw鏊 anonimowym u篡tkownikom na pisanie artyku堯w:');
define('_MI_ART_OPTION_LOGGEDINDSC',	'Anonimowi u篡tkownicy b璠� mogli przedstawia� swoje artyku造.');
define('_MI_ART_OPTIONALLOWSUB',		'Zezw鏊 zarejestrowanym u篡tkownikom na pisanie artyku堯w');
define('_MI_ART_OPTIONALLOWSUBDSC',		'Zarejstrowani u篡tkownicy b璠� mogli przedstawia� swoje artyku造.');
define('_MI_ART_OPTION_ICONSIZE',		'Rozmiar ikony artyku逝');
define('_MI_ART_OPTION_ICONSIZEDSC',	'Rozmiar ikon przy wykazie artyku堯w.');
define('_MI_ART_OPTION_EDITADMIN',		'Edytor Admina.');
define('_MI_ART_OPTION_EDITADMINDSC',	'The editor to use in the admin area. If a third party editor is selected, but not installed, the default editor will be used.');
define('_MI_ART_OPTION_EDITUSER',		'Edytor u篡tkownika.');
define('_MI_ART_OPTION_EDITUSERDSC',	'The editor to use in user/visitor areas. If a third party editor is selected, but not installed, the default editor will be used.');
define('_MI_ART_OPTION_INDEXVIEW',		'Typ widoku indeksu');
define('_MI_ART_OPTION_INDEXVIEWDSC',	'select how the main index page should show display.');
define('_MI_ART_OPTION_INDEXFLAT',		'P豉ski');
define('_MI_ART_OPTION_INDEXTHREAD',	'Przesuni皻y');
define('_MI_ART_OPTION_BGCOLOR',		'T這 artyku逝');
define('_MI_ART_OPTION_BGCOLORDSC',		'The background colour for the article text.');
define('_MI_ART_OPTION_SHWREADS',		'Poka� ods這ny artyku逝');
define('_MI_ART_OPTION_SHWREADSDSC',	'display numbers of times read on article page.');
define('_MI_ART_OPTION_SHWPOSTED',		'Poka� dat� nades豉nia');
define('_MI_ART_OPTION_SHWPOSTEDSC',	'display when article was posted.');
define('_MI_ART_OPTION_SHWPOSTR',		'Poka� kto wys豉� artyku�');
define('_MI_ART_OPTION_SHWPOSTRDSC',	'display who posted the article.');
define('_MI_ART_OPTION_SHWINDRDS',		'Poka� ods這ny w indeksie');
define('_MI_ART_OPTION_SHWINDRDSDSC',	'display number of article reads in index listing.');
define('_MI_ART_OPTION_ALLOWEMAIL',		'Zazw鏊 na e-mail');
define('_MI_ART_OPTION_ALLOWEMAILDSC',	'allow send e-mail to friend feature. Disabling this will also hide the e-mail link.');
define('_MI_ART_OPTION_EMLLOGGEDIN',	'Tylko zalogowani mog� wysy豉� maile');
define('_MI_ART_OPTION_EMLLOGGEDINDSC',	'whether user should be logged in to use e-mail to friend feature.');
define('_MI_ART_OPTION_EMLOWNMSG',		'Zezw鏊 na w豉sn� wiadomo嗆');
define('_MI_ART_OPTION_EMLOWNMSGDSC',	'allow user to add their own message to e-mail.');
define('_MI_ART_OPTION_EMLMSGSBJCT',	'Temat E-maila');
define('_MI_ART_OPTION_EMLMSGSBJCTDSC',	'the text that will appear in the e-mail\'s subject field.');
define('_MI_ART_OPTION_EMLMSGSUBJECT',	'Kolega poleca ten artyku�');
define('_MI_ART_OPTION_EMLMSGCHRS',		'Liczba znak闚 we w豉snej wiadomo軼i');
define('_MI_ART_OPTION_EMLMSGCHRSDSC',	'the maximum number of characters user is allowed to send in own message.');
define('_MI_ART_OPTION_NOINCADN',		'Nie wliczaj ods這n admin闚');
define('_MI_ART_OPTION_NOINCADNDSC',	'when set, admins viewing articles will not increment how many times the article has been viewed.');
define('_MI_ART_OPTION_EMAILTXT',		'Wiadomo嗆 E-mail');
define('_MI_ART_OPTION_EMAILTXTSC',		'Tre嗆 wiadomo軼i kt鏎a b璠zie wysy豉na w \'e-mail to friend\'.');
define('_MI_ART_OPTION_EMAILTXTMSG',	'Hello,

A user of {SITE_NAME} feels that the following page may be of interest to you.

{ARTICLE_URL}

Their message below:

**

{USER_MESSAGE}

**

Security information:
If this e-mail has been sent inappropriately, please forward the complete e-mail to {ADMIN_EMAIL}.
User\'s IP address: {USER_IP}
User\'s Browser: {USER_BROWSER}
Time sent: {USER_TIME}

-- 
 {SITE_NAME}
 {SITE_URL}
');

define('_MI_ART_OPTION_DATEFRMT',	'Format daty - artyku�');
define('_MI_ART_OPTION_DATEFRMTSC',	'Format daty dla strony g堯wnej Artyku堯w. Szczeg馧y znajdziesz na stronie <a href="http://www.php.net/date" target="_blank">PHP.net</a> .');
define('_MI_ART_OPTION_DATEFRMTP',	'Format daty - drukowanie');
define('_MI_ART_OPTION_DATEFRMTPSC',	'Date format for the printable version page. See PHP\'s <a href="http://www.php.net/date" target="_blank">date format page</a> for the different date format characters you can use.');
define('_MI_ART_OPTION_ALLWPRT',	'Wersja strony przyjazna drukarkom');
define('_MI_ART_OPTION_ALLWPRTDSC',	'allow visitors to use the printable version page. Disabling this will also hide the print link.');
define('_MI_ART_OPTION_PAGETTL',	'Tytu� artyku逝 jako tytu� strony:');
define('_MI_ART_OPTION_PAGETTLDSC',	'display the article\'s title in the page title.');
define('_MI_ART_OPTION_PAGETTL1',	'Nie');
define('_MI_ART_OPTION_PAGETTL2',	'Tak: &lt;nazwa modu逝&gt; - &lt;Tytu� artyku逝&gt;');
define('_MI_ART_OPTION_PAGETTL3',	'Tak: &lt;Tytu� artyku逝&gt; - &lt;nazwa modu逝&gt;');


?>
