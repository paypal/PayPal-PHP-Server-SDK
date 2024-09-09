<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * The customer type associated with the PayPal payment token. This is to indicate whether the customer
 * acting on the merchant / platform is either a business or a consumer.
 */
class PayPalPaymentTokenCustomerType
{
    public const CONSUMER = 'CONSUMER';

    public const BUSINESS = 'BUSINESS';

    private const _ALL_VALUES = [self::CONSUMER, self::BUSINESS];

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
        throw new Exception("$value is invalid for PayPalPaymentTokenCustomerType.");
    }
}
