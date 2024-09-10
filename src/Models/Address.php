<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models;

use stdClass;

/**
 * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
 * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
 * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
 * controls-the-autocomplete-attribute).
 */
class Address implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $addressLine1;

    /**
     * @var string|null
     */
    private $addressLine2;

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
     * Returns Address Line 1.
     * The first line of the address, such as number and street, for example, `173 Drury Lane`. Needed for
     * data entry, and Compliance and Risk checks. This field needs to pass the full address.
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * Sets Address Line 1.
     * The first line of the address, such as number and street, for example, `173 Drury Lane`. Needed for
     * data entry, and Compliance and Risk checks. This field needs to pass the full address.
     *
     * @maps address_line_1
     */
    public function setAddressLine1(?string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Returns Address Line 2.
     * The second line of the address, for example, a suite or apartment number.
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * Sets Address Line 2.
     * The second line of the address, for example, a suite or apartment number.
     *
     * @maps address_line_2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
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
     * Value, by country, is:<ul><li>UK. A county.</li><li>US. A state.</li><li>Canada. A province.
     * </li><li>Japan. A prefecture.</li><li>Switzerland. A *kanton*.</li></ul>
     */
    public function getAdminArea1(): ?string
    {
        return $this->adminArea1;
    }

    /**
     * Sets Admin Area 1.
     * The highest-level sub-division in a country, which is usually a province, state, or ISO-3166-2
     * subdivision. This data is formatted for postal delivery, for example, `CA` and not `California`.
     * Value, by country, is:<ul><li>UK. A county.</li><li>US. A state.</li><li>Canada. A province.
     * </li><li>Japan. A prefecture.</li><li>Switzerland. A *kanton*.</li></ul>
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
     * region.<blockquote><strong>Note:</strong> The country code for Great Britain is <code>GB</code> and
     * not <code>UK</code> as used in the top-level domain names for that country. Use the `C2` country
     * code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border
     * transactions.</blockquote>
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     * The [2-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country or
     * region.<blockquote><strong>Note:</strong> The country code for Great Britain is <code>GB</code> and
     * not <code>UK</code> as used in the top-level domain names for that country. Use the `C2` country
     * code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border
     * transactions.</blockquote>
     *
     * @required
     * @maps country_code
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
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
        if (isset($this->addressLine1)) {
            $json['address_line_1'] = $this->addressLine1;
        }
        if (isset($this->addressLine2)) {
            $json['address_line_2'] = $this->addressLine2;
        }
        if (isset($this->adminArea2)) {
            $json['admin_area_2']   = $this->adminArea2;
        }
        if (isset($this->adminArea1)) {
            $json['admin_area_1']   = $this->adminArea1;
        }
        if (isset($this->postalCode)) {
            $json['postal_code']    = $this->postalCode;
        }
        $json['country_code']       = $this->countryCode;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
