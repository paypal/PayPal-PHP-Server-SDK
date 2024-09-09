<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\SofortPaymentObject;

/**
 * Builder for model SofortPaymentObject
 *
 * @see SofortPaymentObject
 */
class SofortPaymentObjectBuilder
{
    /**
     * @var SofortPaymentObject
     */
    private $instance;

    private function __construct(SofortPaymentObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sofort payment object Builder object.
     */
    public static function init(): self
    {
        return new self(new SofortPaymentObject());
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
     * Initializes a new sofort payment object object.
     */
    public function build(): SofortPaymentObject
    {
        return CoreHelper::clone($this->instance);
    }
}
