<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models;

use stdClass;

/**
 * The Card from Apple Pay Wallet used to fund the payment.
 */
class ApplePayCardResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $lastDigits;

    /**
     * @var string|null
     */
    private $brand;

    /**
     * @var string[]|null
     */
    private $availableNetworks;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var AuthenticationResponse|null
     */
    private $authenticationResult;

    /**
     * @var CardAttributesResponse|null
     */
    private $attributes;

    /**
     * @var CardFromRequest|null
     */
    private $fromRequest;

    /**
     * @var string|null
     */
    private $expiry;

    /**
     * @var BinDetails|null
     */
    private $binDetails;

    /**
     * @var Address|null
     */
    private $billingAddress;

    /**
     * @var string|null
     */
    private $countryCode;

    /**
     * Returns Name.
     * The card holder's name as it appears on the card.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The card holder's name as it appears on the card.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Last Digits.
     * The last digits of the payment card.
     */
    public function getLastDigits(): ?string
    {
        return $this->lastDigits;
    }

    /**
     * Sets Last Digits.
     * The last digits of the payment card.
     *
     * @maps last_digits
     */
    public function setLastDigits(?string $lastDigits): void
    {
        $this->lastDigits = $lastDigits;
    }

    /**
     * Returns Brand.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Sets Brand.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Returns Available Networks.
     * Array of brands or networks associated with the card.
     *
     * @return string[]|null
     */
    public function getAvailableNetworks(): ?array
    {
        return $this->availableNetworks;
    }

    /**
     * Sets Available Networks.
     * Array of brands or networks associated with the card.
     *
     * @maps available_networks
     *
     * @param string[]|null $availableNetworks
     */
    public function setAvailableNetworks(?array $availableNetworks): void
    {
        $this->availableNetworks = $availableNetworks;
    }

    /**
     * Returns Type.
     * Type of card. i.e Credit, Debit and so on.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Type of card. i.e Credit, Debit and so on.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Authentication Result.
     * Results of Authentication such as 3D Secure.
     */
    public function getAuthenticationResult(): ?AuthenticationResponse
    {
        return $this->authenticationResult;
    }

    /**
     * Sets Authentication Result.
     * Results of Authentication such as 3D Secure.
     *
     * @maps authentication_result
     */
    public function setAuthenticationResult(?AuthenticationResponse $authenticationResult): void
    {
        $this->authenticationResult = $authenticationResult;
    }

    /**
     * Returns Attributes.
     * Additional attributes associated with the use of this card.
     */
    public function getAttributes(): ?CardAttributesResponse
    {
        return $this->attributes;
    }

    /**
     * Sets Attributes.
     * Additional attributes associated with the use of this card.
     *
     * @maps attributes
     */
    public function setAttributes(?CardAttributesResponse $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * Returns From Request.
     * Representation of card details as received in the request.
     */
    public function getFromRequest(): ?CardFromRequest
    {
        return $this->fromRequest;
    }

    /**
     * Sets From Request.
     * Representation of card details as received in the request.
     *
     * @maps from_request
     */
    public function setFromRequest(?CardFromRequest $fromRequest): void
    {
        $this->fromRequest = $fromRequest;
    }

    /**
     * Returns Expiry.
     * The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https:
     * //tools.ietf.org/html/rfc3339#section-5.6).
     */
    public function getExpiry(): ?string
    {
        return $this->expiry;
    }

    /**
     * Sets Expiry.
     * The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https:
     * //tools.ietf.org/html/rfc3339#section-5.6).
     *
     * @maps expiry
     */
    public function setExpiry(?string $expiry): void
    {
        $this->expiry = $expiry;
    }

    /**
     * Returns Bin Details.
     * Bank Identification Number (BIN) details used to fund a payment.
     */
    public function getBinDetails(): ?BinDetails
    {
        return $this->binDetails;
    }

    /**
     * Sets Bin Details.
     * Bank Identification Number (BIN) details used to fund a payment.
     *
     * @maps bin_details
     */
    public function setBinDetails(?BinDetails $binDetails): void
    {
        $this->binDetails = $binDetails;
    }

    /**
     * Returns Billing Address.
     * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
     * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
     * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
     * controls-the-autocomplete-attribute).
     */
    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
     * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
     * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
     * controls-the-autocomplete-attribute).
     *
     * @maps billing_address
     */
    public function setBillingAddress(?Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Country Code.
     * The [two-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country
     * or region.<blockquote><strong>Note:</strong> The country code for Great Britain is <code>GB</code>
     * and not <code>UK</code> as used in the top-level domain names for that country. Use the `C2` country
     * code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border
     * transactions.</blockquote>
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     * The [two-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country
     * or region.<blockquote><strong>Note:</strong> The country code for Great Britain is <code>GB</code>
     * and not <code>UK</code> as used in the top-level domain names for that country. Use the `C2` country
     * code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border
     * transactions.</blockquote>
     *
     * @maps country_code
     */
    public function setCountryCode(?string $countryCode): void
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
        if (isset($this->name)) {
            $json['name']                  = $this->name;
        }
        if (isset($this->lastDigits)) {
            $json['last_digits']           = $this->lastDigits;
        }
        if (isset($this->brand)) {
            $json['brand']                 = CardBrand::checkValue($this->brand);
        }
        if (isset($this->availableNetworks)) {
            $json['available_networks']    = CardBrand::checkValue($this->availableNetworks);
        }
        if (isset($this->type)) {
            $json['type']                  = CardType::checkValue($this->type);
        }
        if (isset($this->authenticationResult)) {
            $json['authentication_result'] = $this->authenticationResult;
        }
        if (isset($this->attributes)) {
            $json['attributes']            = $this->attributes;
        }
        if (isset($this->fromRequest)) {
            $json['from_request']          = $this->fromRequest;
        }
        if (isset($this->expiry)) {
            $json['expiry']                = $this->expiry;
        }
        if (isset($this->binDetails)) {
            $json['bin_details']           = $this->binDetails;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']       = $this->billingAddress;
        }
        if (isset($this->countryCode)) {
            $json['country_code']          = $this->countryCode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
