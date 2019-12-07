<?php
/**
 * @author         Pierre-Henry Soria <hello@ph7cms.com>
 * @copyright      (c) 2019, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / Map / Inc / Class
 */

namespace PH7;

defined('PH7') or exit('Restricted access');

class Country
{
    /**
     * @param string $sCountryCode
     *
     * @return bool
     */
    public static function isCountryCodeTooLong($sCountryCode)
    {
        return strlen($sCountryCode) !== self::COUNTRY_CODE_LENGTH;
    }
}