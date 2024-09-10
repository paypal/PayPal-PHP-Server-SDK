<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\Address;
use PaypalServerSDKLib\Models\PhoneNumberWithCountryCode;
use PaypalServerSDKLib\Models\ShippingDetails;
use PaypalServerSDKLib\Models\ShippingName;

/**
 * Builder for model ShippingDetails
 *
 * @see ShippingDetails
 */
class ShippingDetailsBuilder
{
    /**
     * @var ShippingDetails
     */
    private $instance;

    private function __construct(ShippingDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new shipping details Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingDetails());
    }

    /**
     * Sets name field.
     */
    public function name(?ShippingName $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets phone number field.
     */
    public function phoneNumber(?PhoneNumberWithCountryCode $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets options field.
     */
    public function options(?array $value): self
    {
        $this->instance->setOptions($value);
        return $this;
    }

    /**
     * Sets address field.
     */
    public function address(?Address $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Initializes a new shipping details object.
     */
    public function build(): ShippingDetails
    {
        return CoreHelper::clone($this->instance);
    }
}