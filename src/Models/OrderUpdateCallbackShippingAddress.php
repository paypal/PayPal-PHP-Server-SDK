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
 * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
 * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
 * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
 * controls-the-autocomplete-attribute).
 */
class OrderUpdateCallbackShippingAddress implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $adminArea2;

    /**
     * @var string|null
     */
    private $adminArea1;

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @param string $countryCode
     */
    public function __construct(string $countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Returns Admin Area 2.
     * A city, town, or village. Smaller than `admin_area_level_1`.
     */
    public function getAdminArea2(): ?string
    {
        return $this->adminArea2;
    }

    /**
     * Sets Admin Area 2.
     * A city, town, or village. Smaller than `admin_area_level_1`.
     *
     * @maps admin_area_2
     */
    public function setAdminArea2(?string $adminArea2): void
    {
        $this->adminArea2 = $adminArea2;
    }

    /**
     * Returns Admin Area 1.
     * The highest-level sub-division in a country, which is usually a province, state, or ISO-3166-2
     * subdivision. This data is formatted for postal delivery, for example, `CA` and not `California`.
     * Value, by country, is: UK. A county. US. A state. Canada. A province. Japan. A prefecture.
     * Switzerland. A *kanton*.
     */
    public function getAdminArea1(): ?string
    {
        return $this->adminArea1;
    }

    /**
     * Sets Admin Area 1.
     * The highest-level sub-division in a country, which is usually a province, state, or ISO-3166-2
     * subdivision. This data is formatted for postal delivery, for example, `CA` and not `California`.
     * Value, by country, is: UK. A county. US. A state. Canada. A province. Japan. A prefecture.
     * Switzerland. A *kanton*.
     *
     * @maps admin_area_1
     */
    public function setAdminArea1(?string $adminArea1): void
    {
        $this->adminArea1 = $adminArea1;
    }

    /**
     * Returns Postal Code.
     * The postal code, which is the ZIP code or equivalent. Typically required for countries with a postal
     * code or an equivalent. See [postal code](https://en.wikipedia.org/wiki/Postal_code).
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Sets Postal Code.
     * The postal code, which is the ZIP code or equivalent. Typically required for countries with a postal
     * code or an equivalent. See [postal code](https://en.wikipedia.org/wiki/Postal_code).
     *
     * @maps postal_code
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Returns Country Code.
     * The [2-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country or
     * region. Note: The country code for Great Britain is GB and not UK as used in the top-level domain
     * names for that country. Use the `C2` country code for China worldwide for comparable uncontrolled
     * price (CUP) method, bank card, and cross-border transactions.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     * The [2-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country or
     * region. Note: The country code for Great Britain is GB and not UK as used in the top-level domain
     * names for that country. Use the `C2` country code for China worldwide for comparable uncontrolled
     * price (CUP) method, bank card, and cross-border transactions.
     *
     * @required
     * @maps country_code
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Converts the OrderUpdateCallbackShippingAddress object to a human-readable string representation.
     *
     * @return string The string representation of the OrderUpdateCallbackShippingAddress object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'OrderUpdateCallbackShippingAddress',
            [
                'adminArea2' => $this->adminArea2,
                'adminArea1' => $this->adminArea1,
                'postalCode' => $this->postalCode,
                'countryCode' => $this->countryCode
            ]
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
        if (isset($this->adminArea2)) {
            $json['admin_area_2'] = $this->adminArea2;
        }
        if (isset($this->adminArea1)) {
            $json['admin_area_1'] = $this->adminArea1;
        }
        if (isset($this->postalCode)) {
            $json['postal_code']  = $this->postalCode;
        }
        $json['country_code']     = $this->countryCode;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
