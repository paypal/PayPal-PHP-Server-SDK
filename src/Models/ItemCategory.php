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
 * The item category type.
 */
class ItemCategory
{
    public const DIGITAL_GOODS = 'DIGITAL_GOODS';

    public const PHYSICAL_GOODS = 'PHYSICAL_GOODS';

    public const DONATION = 'DONATION';

    private const _ALL_VALUES = [self::DIGITAL_GOODS, self::PHYSICAL_GOODS, self::DONATION];

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
        throw new Exception("$value is invalid for ItemCategory.");
    }
}
