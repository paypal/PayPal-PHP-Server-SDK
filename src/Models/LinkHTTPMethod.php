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
 * The HTTP method required to make the related call.
 */
class LinkHTTPMethod
{
    public const GET = 'GET';

    public const POST = 'POST';

    public const PUT = 'PUT';

    public const DELETE = 'DELETE';

    public const HEAD = 'HEAD';

    public const CONNECT = 'CONNECT';

    public const OPTIONS = 'OPTIONS';

    public const PATCH = 'PATCH';

    private const _ALL_VALUES =
        [self::GET, self::POST, self::PUT, self::DELETE, self::HEAD, self::CONNECT, self::OPTIONS, self::PATCH];

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
        throw new Exception("$value is invalid for LinkHTTPMethod.");
    }
}