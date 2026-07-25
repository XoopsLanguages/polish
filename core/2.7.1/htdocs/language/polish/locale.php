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
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
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
define('_YEARMONTHDAY', 'Y-m-d H:i');
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
 * @copyright       (c) 2000-2026 Projekt XOOPS (www.xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /** Per-locale currency formatting data. Pattern uses positional placeholders: %1$s = amount, %2$s = symbol. */
    private const CURRENCY = ['locale' => 'pl_PL', 'code' => 'PLN', 'symbol' => 'zł',  'decimals' => 2, 'decSep' => ',', 'thouSep' => ' ', 'pattern' => '%1$s %2$s'];

    /**
     * Formaty liczb
     *
     * The parameter type accepts string for backward compatibility with
     * callers that still pass numeric strings, but PHP's number_format()
     * requires float. Cast at the boundary ONLY when the input is a
     * numeric string — otherwise pass through unchanged so PHP's
     * number_format() raises its own TypeError on genuinely invalid
     * input (arrays, objects, non-numeric strings) instead of silently
     * coercing them to 0 / 1 and returning a misleading formatted zero.
     *
     * @param  int|float|string $number
     * @return string
     *
     * @throws \TypeError when $number is not int, float, or a numeric string
     */
    public function number_format($number)
    {
        if (is_string($number) && is_numeric($number)) {
            $number = (float) $number;
        }

        return number_format($number, self::CURRENCY['decimals'], self::CURRENCY['decSep'], self::CURRENCY['thouSep']);
    }

    /**
     * Format pieniężny
     *
     * @param  string    $format  legacy money_format()-style format string (ignored, kept for BC)
     * @param  int|float|string $number
     * @return string format pieniężny
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function money_format($format, $number)
    {
        $c = self::CURRENCY;

        if (extension_loaded('intl')) {
            static $fmt = null;
            if (null === $fmt) {
                $fmt = new \NumberFormatter($c['locale'], \NumberFormatter::CURRENCY);
            }
            $result = $fmt->formatCurrency($number, $c['code']);
            if ($result !== false) {
                return $result;
            }
        }

        $amount = $this->number_format($number);

        return sprintf($c['pattern'], $amount, $c['symbol']);
    }
}
