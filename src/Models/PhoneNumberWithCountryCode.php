<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use PaypalServerSdkLib\ApiHelper;
use stdClass;

/**
 * The phone number in its canonical international [E.164 numbering plan format](https://www.itu.
 * int/rec/T-REC-E.164/en)., The phone number, in its canonical international [E.164 numbering plan
 * format](https://www.itu.int/rec/T-REC-E.164/en).
 */
class PhoneNumberWithCountryCode implements \JsonSerializable
{
    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $nationalNumber;

    /**
     * @param string $countryCode
     * @param string $nationalNumber
     */
    public function __construct(string $countryCode, string $nationalNumber)
    {
        $this->countryCode = $countryCode;
        $this->nationalNumber = $nationalNumber;
    }

    /**
     * Returns Country Code.
     * The country calling code (CC), in its canonical international [E.164 numbering plan format](https:
     * //www.itu.int/rec/T-REC-E.164/en). The combined length of the CC and the national number must not be
     * greater than 15 digits. The national number consists of a national destination code (NDC) and
     * subscriber number (SN).
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     * The country calling code (CC), in its canonical international [E.164 numbering plan format](https:
     * //www.itu.int/rec/T-REC-E.164/en). The combined length of the CC and the national number must not be
     * greater than 15 digits. The national number consists of a national destination code (NDC) and
     * subscriber number (SN).
     *
     * @required
     * @maps country_code
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Returns National Number.
     * The national number, in its canonical international [E.164 numbering plan format](https://www.itu.
     * int/rec/T-REC-E.164/en). The combined length of the country calling code (CC) and the national
     * number must not be greater than 15 digits. The national number consists of a national destination
     * code (NDC) and subscriber number (SN).
     */
    public function getNationalNumber(): string
    {
        return $this->nationalNumber;
    }

    /**
     * Sets National Number.
     * The national number, in its canonical international [E.164 numbering plan format](https://www.itu.
     * int/rec/T-REC-E.164/en). The combined length of the country calling code (CC) and the national
     * number must not be greater than 15 digits. The national number consists of a national destination
     * code (NDC) and subscriber number (SN).
     *
     * @required
     * @maps national_number
     */
    public function setNationalNumber(string $nationalNumber): void
    {
        $this->nationalNumber = $nationalNumber;
    }

    /**
     * Converts the PhoneNumberWithCountryCode object to a human-readable string representation.
     *
     * @return string The string representation of the PhoneNumberWithCountryCode object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PhoneNumberWithCountryCode',
            ['countryCode' => $this->countryCode, 'nationalNumber' => $this->nationalNumber]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['country_code']    = $this->countryCode;
        $json['national_number'] = $this->nationalNumber;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
