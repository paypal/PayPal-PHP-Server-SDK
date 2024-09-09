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
use PaypalServerSDKLib\Models\Name;
use PaypalServerSDKLib\Models\PhoneWithType;
use PaypalServerSDKLib\Models\VaultedDigitalWalletShippingDetails;
use PaypalServerSDKLib\Models\VenmoPaymentToken;

/**
 * Builder for model VenmoPaymentToken
 *
 * @see VenmoPaymentToken
 */
class VenmoPaymentTokenBuilder
{
    /**
     * @var VenmoPaymentToken
     */
    private $instance;

    private function __construct(VenmoPaymentToken $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new venmo payment token Builder object.
     */
    public static function init(): self
    {
        return new self(new VenmoPaymentToken());
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets shipping field.
     */
    public function shipping(?VaultedDigitalWalletShippingDetails $value): self
    {
        $this->instance->setShipping($value);
        return $this;
    }

    /**
     * Sets permit multiple payment tokens field.
     */
    public function permitMultiplePaymentTokens(?bool $value): self
    {
        $this->instance->setPermitMultiplePaymentTokens($value);
        return $this;
    }

    /**
     * Sets usage type field.
     */
    public function usageType(?string $value): self
    {
        $this->instance->setUsageType($value);
        return $this;
    }

    /**
     * Sets customer type field.
     */
    public function customerType(?string $value): self
    {
        $this->instance->setCustomerType($value);
        return $this;
    }

    /**
     * Sets email address field.
     */
    public function emailAddress(?string $value): self
    {
        $this->instance->setEmailAddress($value);
        return $this;
    }

    /**
     * Sets payer id field.
     */
    public function payerId(?string $value): self
    {
        $this->instance->setPayerId($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?Name $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets phone field.
     */
    public function phone(?PhoneWithType $value): self
    {
        $this->instance->setPhone($value);
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
     * Sets user name field.
     */
    public function userName(?string $value): self
    {
        $this->instance->setUserName($value);
        return $this;
    }

    /**
     * Initializes a new venmo payment token object.
     */
    public function build(): VenmoPaymentToken
    {
        return CoreHelper::clone($this->instance);
    }
}
