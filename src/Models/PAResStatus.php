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
 * Transactions status result identifier. The outcome of the issuer's authentication.
 */
class PAResStatus
{
    public const Y = 'Y';

    public const N = 'N';

    public const U = 'U';

    public const A = 'A';

    public const C = 'C';

    public const R = 'R';

    public const D = 'D';

    public const I = 'I';

    private const _ALL_VALUES = [self::Y, self::N, self::U, self::A, self::C, self::R, self::D, self::I];

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
        throw new Exception("$value is invalid for PAResStatus.");
    }
}
