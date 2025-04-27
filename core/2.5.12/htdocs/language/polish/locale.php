<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Xoops locale
 *
 * @copyright       (c) 2000-2025 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo                To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || exit('Dostęp ograniczony');

setlocale(LC_ALL, 'pl_PL');

// !!WAŻNE!! wstaw '\' przed dowolnym znakiem spośród zarezerwowanych: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// wstaw podwójne '\' przed 't','r','n'
define('_TODAY', "\D\z\i\s\i\ą\j G:i");
define('_YESTERDAY', "\W\c\z\o\r\a\j G:i");
define('_MONTHDAY', 'j/n G:i');
define('_YEARMONTHDAY', 'Y/n/j G:i');
define('_ELAPSE', '%s temu');
define('_TIMEFORMAT_DESC', "Prawidłowe formaty: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ';<br>' . "\"c\" lub \"custom\" - format określony zgodnie z przedziałem do wyświetlenia; \"e\" - Upłynęło; \"mysql\" - Y-m-d H:i:s;<br>" . "określony ciąg - Zobacz <a href=\"https://php.net/manual/pl/function.date.php\" rel=\"external\">Podręcznik PHP</a>.");

if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * Lokalny Xoops
 *
 * @package             kernel
 * @subpackage          Język
 *
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright       (c) 2000-2016 Projekt XOOPS (www.xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * Formaty liczb
     *
     * @param  unknown_type $number
     * @return mixed
     */
    public function number_format($number)
    {
        return number_format($number, 2, ',', ' ');
    }

    /**
     * Format pieniężny
     *
     * @param  string $format
     * @param  string $number
     * @return format pieniężny
     */
    public function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'pl_PL');

        return money_format($format, $number);
    }
}
