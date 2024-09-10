<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * Type of card. i.e Credit, Debit and so on.
 */
class CardType
{
    public const CREDIT = 'CREDIT';

    public const DEBIT = 'DEBIT';

    public const PREPAID = 'PREPAID';

    public const STORE = 'STORE';

    public const UNKNOWN = 'UNKNOWN';

    private const _ALL_VALUES = [self::CREDIT, self::DEBIT, self::PREPAID, self::STORE, self::UNKNOWN];

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
        throw new Exception("$value is invalid for CardType.");
    }
}