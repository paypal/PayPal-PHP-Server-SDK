<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\BLIKOneClickPaymentObject;
use PaypalServerSDKLib\Models\BLIKPaymentObject;

/**
 * Builder for model BLIKPaymentObject
 *
 * @see BLIKPaymentObject
 */
class BLIKPaymentObjectBuilder
{
    /**
     * @var BLIKPaymentObject
     */
    private $instance;

    private function __construct(BLIKPaymentObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new blikpayment object Builder object.
     */
    public static function init(): self
    {
        return new self(new BLIKPaymentObject());
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
     * Sets email field.
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Sets one click field.
     */
    public function oneClick(?BLIKOneClickPaymentObject $value): self
    {
        $this->instance->setOneClick($value);
        return $this;
    }

    /**
     * Initializes a new blikpayment object object.
     */
    public function build(): BLIKPaymentObject
    {
        return CoreHelper::clone($this->instance);
    }
}
