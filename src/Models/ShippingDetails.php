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
 * The shipping details.
 */
class ShippingDetails implements \JsonSerializable
{
    /**
     * @var ShippingName|null
     */
    private $name;

    /**
     * @var PhoneNumberWithCountryCode|null
     */
    private $phoneNumber;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var ShippingOption[]|null
     */
    private $options;

    /**
     * @var Address|null
     */
    private $address;

    /**
     * Returns Name.
     * The name of the party.
     */
    public function getName(): ?ShippingName
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the party.
     *
     * @maps name
     */
    public function setName(?ShippingName $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Phone Number.
     * The phone number in its canonical international [E.164 numbering plan format](https://www.itu.
     * int/rec/T-REC-E.164/en).
     */
    public function getPhoneNumber(): ?PhoneNumberWithCountryCode
    {
        return $this->phoneNumber;
    }

    /**
     * Sets Phone Number.
     * The phone number in its canonical international [E.164 numbering plan format](https://www.itu.
     * int/rec/T-REC-E.164/en).
     *
     * @maps phone_number
     */
    public function setPhoneNumber(?PhoneNumberWithCountryCode $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns Type.
     * A classification for the method of purchase fulfillment (e.g shipping, in-store pickup, etc). Either
     * `type` or `options` may be present, but not both.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * A classification for the method of purchase fulfillment (e.g shipping, in-store pickup, etc). Either
     * `type` or `options` may be present, but not both.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Options.
     * An array of shipping options that the payee or merchant offers to the payer to ship or pick up their
     * items.
     *
     * @return ShippingOption[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * Sets Options.
     * An array of shipping options that the payee or merchant offers to the payer to ship or pick up their
     * items.
     *
     * @maps options
     *
     * @param ShippingOption[]|null $options
     */
    public function setOptions(?array $options): void
    {
        $this->options = $options;
    }

    /**
     * Returns Address.
     * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
     * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
     * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
     * controls-the-autocomplete-attribute).
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
     * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
     * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
     * controls-the-autocomplete-attribute).
     *
     * @maps address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
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
            $json['name']         = $this->name;
        }
        if (isset($this->phoneNumber)) {
            $json['phone_number'] = $this->phoneNumber;
        }
        if (isset($this->type)) {
            $json['type']         = FullfillmentType::checkValue($this->type);
        }
        if (isset($this->options)) {
            $json['options']      = $this->options;
        }
        if (isset($this->address)) {
            $json['address']      = $this->address;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
