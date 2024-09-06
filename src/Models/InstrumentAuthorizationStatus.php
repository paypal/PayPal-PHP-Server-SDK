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
 * The authorization status of the wallet instrument.
 */
class InstrumentAuthorizationStatus
{
    public const AUTHORIZED = 'AUTHORIZED';

    public const BLOCKED = 'BLOCKED';

    public const FAILED = 'FAILED';

    public const NOT_APPLICABLE = 'NOT_APPLICABLE';

    public const NOT_SUPPORTED = 'NOT_SUPPORTED';

    public const UNAUTHORIZED = 'UNAUTHORIZED';

    private const _ALL_VALUES =
        [
            self::AUTHORIZED,
            self::BLOCKED,
            self::FAILED,
            self::NOT_APPLICABLE,
            self::NOT_SUPPORTED,
            self::UNAUTHORIZED
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
        throw new Exception("$value is invalid for InstrumentAuthorizationStatus.");
    }
}
