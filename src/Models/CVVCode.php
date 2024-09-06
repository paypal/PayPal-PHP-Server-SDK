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
 * The card verification value code for for Visa, Discover, Mastercard, or American Express.
 */
class CVVCode
{
    public const E = 'E';

    public const I = 'I';

    public const M = 'M';

    public const N = 'N';

    public const P = 'P';

    public const S = 'S';

    public const U = 'U';

    public const X = 'X';

    public const ENUM_ALL_OTHERS = 'All others';

    public const ENUM_0 = '0';

    public const ENUM_1 = '1';

    public const ENUM_2 = '2';

    public const ENUM_3 = '3';

    public const ENUM_4 = '4';

    private const _ALL_VALUES = [
        self::E,
        self::I,
        self::M,
        self::N,
        self::P,
        self::S,
        self::U,
        self::X,
        self::ENUM_ALL_OTHERS,
        self::ENUM_0,
        self::ENUM_1,
        self::ENUM_2,
        self::ENUM_3,
        self::ENUM_4
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
        throw new Exception("$value is invalid for CVVCode.");
    }
}
