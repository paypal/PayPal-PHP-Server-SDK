<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\Address;
use PayPalRESTAPIsLib\Models\ApplePayCard;

/**
 * Builder for model ApplePayCard
 *
 * @see ApplePayCard
 */
class ApplePayCardBuilder
{
    /**
     * @var ApplePayCard
     */
    private $instance;

    private function __construct(ApplePayCard $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new apple pay card Builder object.
     */
    public static function init(): self
    {
        return new self(new ApplePayCard());
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
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
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
     * Sets billing address field.
     */
    public function billingAddress(?Address $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Initializes a new apple pay card object.
     */
    public function build(): ApplePayCard
    {
        return CoreHelper::clone($this->instance);
    }
}
