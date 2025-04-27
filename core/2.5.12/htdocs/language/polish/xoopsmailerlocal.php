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
 *  Xoops Language
 *
 * @copyright       (c) 2000-2025 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */
defined('XOOPS_ROOT_PATH') || exit('Brak dostępu');

/**
 * Lokalizacja funkcji poczty e-mail
 *
 * Lokalizacja dla języka polskiego
 */
// Nie zmieniaj nazwy klasy
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * Konstruktor
     */
    public function __construct()
    {
        parent::__construct();
        // Zakładamy, że nie ma potrzeby zmiany kodowania znaków
        $this->charSet = strtolower(_CHARSET);
        // MUSISZ określić kod języka, aby plik istniał:
        // XOOPS_ROOT_PATH/class/mail/phpmailer/language/lang-pl.php
        $this->multimailer->setLanguage('pl');
    }

    /**
     * Dla języków wielobajtowych zaleca się odpowiednie kodowanie FromName
     *
     * @param string $text
     * @return mixed
     */
    public function encodeFromName($text)
    {
        // Odkomentuj poniższą linię, jeśli występują problemy z polskimi znakami
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }

    /**
     * Dla języków wielobajtowych zaleca się odpowiednie kodowanie tematu wiadomości
     *
     * @param string $text
     * @return mixed
     */
    public function encodeSubject($text)
    {
        // Odkomentuj poniższą linię, jeśli tematy są zniekształcane
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}
