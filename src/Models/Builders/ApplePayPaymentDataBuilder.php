<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\ApplePayPaymentData;

/**
 * Builder for model ApplePayPaymentData
 *
 * @see ApplePayPaymentData
 */
class ApplePayPaymentDataBuilder
{
    /**
     * @var ApplePayPaymentData
     */
    private $instance;

    private function __construct(ApplePayPaymentData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new apple pay payment data Builder object.
     */
    public static function init(): self
    {
        return new self(new ApplePayPaymentData());
    }

    /**
     * Sets cryptogram field.
     */
    public function cryptogram(?string $value): self
    {
        $this->instance->setCryptogram($value);
        return $this;
    }

    /**
     * Sets eci indicator field.
     */
    public function eciIndicator(?string $value): self
    {
        $this->instance->setEciIndicator($value);
        return $this;
    }

    /**
     * Sets emv data field.
     */
    public function emvData(?string $value): self
    {
        $this->instance->setEmvData($value);
        return $this;
    }

    /**
     * Sets pin field.
     */
    public function pin(?string $value): self
    {
        $this->instance->setPin($value);
        return $this;
    }

    /**
     * Initializes a new apple pay payment data object.
     */
    public function build(): ApplePayPaymentData
    {
        return CoreHelper::clone($this->instance);
    }
}