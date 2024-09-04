<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * Indicates whether the transaction is eligible for seller protection. For information, see [PayPal
 * Seller Protection for Merchants](https://www.paypal.com/us/webapps/mpp/security/seller-protection).
 */
class SellerProtectionStatus
{
    public const ELIGIBLE = 'ELIGIBLE';

    public const PARTIALLY_ELIGIBLE = 'PARTIALLY_ELIGIBLE';

    public const NOT_ELIGIBLE = 'NOT_ELIGIBLE';

    private const _ALL_VALUES = [self::ELIGIBLE, self::PARTIALLY_ELIGIBLE, self::NOT_ELIGIBLE];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for SellerProtectionStatus.");
    }
}
