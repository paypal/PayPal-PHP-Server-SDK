<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib;

use Core\Utils\CoreHelper;
use Core\Utils\JsonHelper;
use InvalidArgumentException;
use stdClass;

/**
 * API utility class.
 */
class ApiHelper
{
    /**
     * @var JsonHelper
     */
    private static $jsonHelper;

    public static function getJsonHelper(): JsonHelper
    {
        if (self::$jsonHelper == null) {
            self::$jsonHelper = new JsonHelper([], [], null, 'PayPalRESTAPIsLib\\Models');
        }
        return self::$jsonHelper;
    }

    /**
     * Serialize any given mixed value.
     *
     * @param mixed $value Any value to be serialized
     *
     * @return string|null serialized value
     */
    public static function serialize($value): ?string
    {
        return CoreHelper::serialize($value);
    }

    /**
     * Deserialize a Json string.
     *
     * @param string $json A valid Json string
     *
     * @return mixed Decoded Json
     */
    public static function deserialize(string $json)
    {
        return CoreHelper::deserialize($json);
    }

    /**
     * Decodes a valid json string into an array to send in Api calls.
     *
     * @param  mixed  $json         Must be null or array or a valid string json to be translated into a php array.
     * @param  string $name         Name of the argument whose value is being validated in $json parameter.
     * @param  bool   $associative  Should check for associative? Default: true.
     *
     * @return array|null    Returns an array made up of key-value pairs in the provided json string
     *                       or throws exception, if the provided json is not valid.
     * @throws InvalidArgumentException
     */
    public static function decodeJson($json, string $name, bool $associative = true): ?array
    {
        if (is_null($json) || (is_array($json) && (!$associative || CoreHelper::isAssociative($json)))) {
            return $json;
        }
        if ($json instanceof stdClass) {
            $json = json_encode($json);
        }
        if (is_string($json)) {
            $decoded = json_decode($json, true);
            if (is_array($decoded) && (!$associative || CoreHelper::isAssociative($decoded))) {
                return $decoded;
            }
        }
        throw new InvalidArgumentException("Invalid json value for argument: '$name'");
    }

    /**
     * Decodes a valid jsonArray string into an array to send in Api calls.
     *
     * @param  mixed  $json   Must be null or array or a valid string jsonArray to be translated into a php array.
     * @param  string $name   Name of the argument whose value is being validated in $json parameter.
     * @param  bool   $asMap  Should decode as map? Default: false.
     *
     * @return array|null    Returns an array made up of key-value pairs in the provided jsonArray string
     *                       or throws exception, if the provided json is not valid.
     * @throws InvalidArgumentException
     */
    public static function decodeJsonArray($json, string $name, bool $asMap = false): ?array
    {
        $decoded = self::decodeJson($json, $name, false);
        if (is_null($decoded)) {
            return null;
        }
        $isAssociative = CoreHelper::isAssociative($decoded);
        if (($asMap && $isAssociative) || (!$asMap && !$isAssociative)) {
            return array_map(function ($v) use ($name) {
                return self::decodeJson($v, $name);
            }, $decoded);
        }
        $type = $asMap ? 'map' : 'array';
        throw new InvalidArgumentException("Invalid json $type value for argument: '$name'");
    }
}
