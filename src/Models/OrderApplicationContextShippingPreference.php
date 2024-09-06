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
 * DEPRECATED. DEPRECATED. The shipping preference:<ul><li>Displays the shipping address to the
 * customer.</li><li>Enables the customer to choose an address on the PayPal site.</li><li>Restricts
 * the customer from changing the address during the payment-approval process.</li></ul>.  The fields
 * in `application_context` are now available in the `experience_context` object under the
 * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.
 * shipping_preference`). Please specify this field in the `experience_context` object instead of the
 * `application_context` object.
 */
class OrderApplicationContextShippingPreference
{
    public const GET_FROM_FILE = 'GET_FROM_FILE';

    public const NO_SHIPPING = 'NO_SHIPPING';

    public const SET_PROVIDED_ADDRESS = 'SET_PROVIDED_ADDRESS';

    private const _ALL_VALUES = [self::GET_FROM_FILE, self::NO_SHIPPING, self::SET_PROVIDED_ADDRESS];

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
        throw new Exception("$value is invalid for OrderApplicationContextShippingPreference.");
    }
}
