<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\IDEALPaymentObject;

/**
 * Builder for model IDEALPaymentObject
 *
 * @see IDEALPaymentObject
 */
class IDEALPaymentObjectBuilder
{
    /**
     * @var IDEALPaymentObject
     */
    private $instance;

    private function __construct(IDEALPaymentObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new idealpayment object Builder object.
     */
    public static function init(): self
    {
        return new self(new IDEALPaymentObject());
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
     * Sets country code field.
     */
    public function countryCode(?string $value): self
    {
        $this->instance->setCountryCode($value);
        return $this;
    }

    /**
     * Sets bic field.
     */
    public function bic(?string $value): self
    {
        $this->instance->setBic($value);
        return $this;
    }

    /**
     * Sets iban last chars field.
     */
    public function ibanLastChars(?string $value): self
    {
        $this->instance->setIbanLastChars($value);
        return $this;
    }

    /**
     * Initializes a new idealpayment object object.
     */
    public function build(): IDEALPaymentObject
    {
        return CoreHelper::clone($this->instance);
    }
}