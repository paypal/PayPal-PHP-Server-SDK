<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\PaymentTokenRequestCard;
use PayPalRESTAPIsLib\Models\PaymentTokenRequestPaymentSource;
use PayPalRESTAPIsLib\Models\VaultTokenRequest;

/**
 * Builder for model PaymentTokenRequestPaymentSource
 *
 * @see PaymentTokenRequestPaymentSource
 */
class PaymentTokenRequestPaymentSourceBuilder
{
    /**
     * @var PaymentTokenRequestPaymentSource
     */
    private $instance;

    private function __construct(PaymentTokenRequestPaymentSource $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment token request payment source Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentTokenRequestPaymentSource());
    }

    /**
     * Sets card field.
     */
    public function card(?PaymentTokenRequestCard $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Sets token field.
     */
    public function token(?VaultTokenRequest $value): self
    {
        $this->instance->setToken($value);
        return $this;
    }

    /**
     * Initializes a new payment token request payment source object.
     */
    public function build(): PaymentTokenRequestPaymentSource
    {
        return CoreHelper::clone($this->instance);
    }
}
