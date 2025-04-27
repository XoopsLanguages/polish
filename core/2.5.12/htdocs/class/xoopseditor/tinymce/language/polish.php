<?php
/**
 *  TinyMCE adapter for XOOPS
 *
 * @copyright    (c) 2000-2025 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          core
 * @subpackage       xoopseditor
 * @since            2.3.0
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 */
/*
 * Związane z editor_registry.php
 */
// Nazwa edytora
define('_XOOPS_EDITOR_TINYMCE', 'TinyMCE');
// Wartość musi być taka sama jak /tinymce/jscripts/langs/kod_języka, na przykład "en" dla angielskiego, "fr" dla francuskiego
// Szczegóły na stronie http://tinymce.moxiecode.com/download_i18n.php
define('_XOOPS_EDITOR_TINYMCE_LANGUAGE', 'pl');
// LISTA CZCIONEK, FORMAT: "Nazwa=wartość1,wartość2;Nazwa=wartość"
define('_XOOPS_EDITOR_TINYMCE_FONTS', 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,times new roman,times,serif;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times,serif;Verdana=verdana,arial,helvetica,sans-serif;Impact=impact;WingDings=wingdings');
define('_FAILGETIMG', 'Nie udało się pobrać obrazu %s');
