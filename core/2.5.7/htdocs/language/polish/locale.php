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
 * @copyright       The XOOPS project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         kernel
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 * @todo            To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

setlocale(LC_ALL, 'pl_PL');

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// insert double '\' before 't','r','n'

define("_TODAY","\D\z\i\s\i\a\j G:i");
define("_YESTERDAY","\W\c\z\o\\r\a\j G:i");
define("_MONTHDAY","n/j G:i");
define("_YEARMONTHDAY","Y/n/j G:i");

define("_ELAPSE","%s temu");

define("_TIMEFORMAT_DESC","Poprawne formaty: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ";<br />".
                            "\"c\" lub \"custom\" -  format określony zgodnie z przedziałem do prezentacji; \"e\" - Upływający; \"mysql\" - Y-m-d H:i:s;<br />".
                            "Podany ciąg - Sprawdź w <a href=\"http://php.net/manual/en/function.date.php\" rel=\"external\">Podręczniku PHP</a>."
                            );

class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * Number Formats
     *
     * @param  unknown_type $number
     * @return unknown
     */
    function number_format($number)
    {
        return number_format($number, 2, ',',' ');
    }

    /**
     * Money Format
     *
     * @param  string $format
     * @param  string $number
     * @return money  format
     */
    function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'pl_PL');

        return money_format($format, $number);
    }
}
