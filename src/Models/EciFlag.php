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
 * Electronic Commerce Indicator (ECI). The ECI value is part of the 2 data elements that indicate the
 * transaction was processed electronically. This should be passed on the authorization transaction to
 * the Gateway/Processor.
 */
class EciFlag
{
    public const MASTERCARD_NON_3D_SECURE_TRANSACTION = 'MASTERCARD_NON_3D_SECURE_TRANSACTION';

    public const MASTERCARD_ATTEMPTED_AUTHENTICATION_TRANSACTION = 'MASTERCARD_ATTEMPTED_AUTHENTICATION_TRANSACTION';

    public const MASTERCARD_FULLY_AUTHENTICATED_TRANSACTION = 'MASTERCARD_FULLY_AUTHENTICATED_TRANSACTION';

    public const FULLY_AUTHENTICATED_TRANSACTION = 'FULLY_AUTHENTICATED_TRANSACTION';

    public const ATTEMPTED_AUTHENTICATION_TRANSACTION = 'ATTEMPTED_AUTHENTICATION_TRANSACTION';

    public const NON_3D_SECURE_TRANSACTION = 'NON_3D_SECURE_TRANSACTION';

    private const _ALL_VALUES = [
        self::MASTERCARD_NON_3D_SECURE_TRANSACTION,
        self::MASTERCARD_ATTEMPTED_AUTHENTICATION_TRANSACTION,
        self::MASTERCARD_FULLY_AUTHENTICATED_TRANSACTION,
        self::FULLY_AUTHENTICATED_TRANSACTION,
        self::ATTEMPTED_AUTHENTICATION_TRANSACTION,
        self::NON_3D_SECURE_TRANSACTION
    ];

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
        throw new Exception("$value is invalid for EciFlag.");
    }
}
