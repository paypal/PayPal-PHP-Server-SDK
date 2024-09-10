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
use PaypalServerSDKLib\Models\ApplePayCardResponse;
use PaypalServerSDKLib\Models\AuthenticationResponse;
use PaypalServerSDKLib\Models\BinDetails;
use PaypalServerSDKLib\Models\CardAttributesResponse;
use PaypalServerSDKLib\Models\CardFromRequest;

/**
 * Builder for model ApplePayCardResponse
 *
 * @see ApplePayCardResponse
 */
class ApplePayCardResponseBuilder
{
    /**
     * @var ApplePayCardResponse
     */
    private $instance;

    private function __construct(ApplePayCardResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new apple pay card response Builder object.
     */
    public static function init(): self
    {
        return new self(new ApplePayCardResponse());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets last digits field.
     */
    public function lastDigits(?string $value): self
    {
        $this->instance->setLastDigits($value);
        return $this;
    }

    /**
     * Sets brand field.
     */
    public function brand(?string $value): self
    {
        $this->instance->setBrand($value);
        return $this;
    }

    /**
     * Sets available networks field.
     */
    public function availableNetworks(?array $value): self
    {
        $this->instance->setAvailableNetworks($value);
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
     * Sets authentication result field.
     */
    public function authenticationResult(?AuthenticationResponse $value): self
    {
        $this->instance->setAuthenticationResult($value);
        return $this;
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?CardAttributesResponse $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Sets from request field.
     */
    public function fromRequest(?CardFromRequest $value): self
    {
        $this->instance->setFromRequest($value);
        return $this;
    }

    /**
     * Sets expiry field.
     */
    public function expiry(?string $value): self
    {
        $this->instance->setExpiry($value);
        return $this;
    }

    /**
     * Sets bin details field.
     */
    public function binDetails(?BinDetails $value): self
    {
        $this->instance->setBinDetails($value);
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?Address $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets country code field.
     */
    public function countryCode(?string $value): self
    {
        $this->instance->setCountryCode($value);
        return $this;
    }

    /**
     * Initializes a new apple pay card response object.
     */
    public function build(): ApplePayCardResponse
    {
        return CoreHelper::clone($this->instance);
    }
}