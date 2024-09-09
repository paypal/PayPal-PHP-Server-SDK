<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\PayPalPaymentToken;
use PaypalServerSdkLib\Models\SetupTokenResponseCard;
use PaypalServerSdkLib\Models\SetupTokenResponsePaymentSource;
use PaypalServerSdkLib\Models\VenmoPaymentToken;

/**
 * Builder for model SetupTokenResponsePaymentSource
 *
 * @see SetupTokenResponsePaymentSource
 */
class SetupTokenResponsePaymentSourceBuilder
{
    /**
     * @var SetupTokenResponsePaymentSource
     */
    private $instance;

    private function __construct(SetupTokenResponsePaymentSource $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new setup token response payment source Builder object.
     */
    public static function init(): self
    {
        return new self(new SetupTokenResponsePaymentSource());
    }

    /**
     * Sets card field.
     */
    public function card(?SetupTokenResponseCard $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Sets paypal field.
     */
    public function paypal(?PayPalPaymentToken $value): self
    {
        $this->instance->setPaypal($value);
        return $this;
    }

    /**
     * Sets venmo field.
     */
    public function venmo(?VenmoPaymentToken $value): self
    {
        $this->instance->setVenmo($value);
        return $this;
    }

    /**
     * Initializes a new setup token response payment source object.
     */
    public function build(): SetupTokenResponsePaymentSource
    {
        return CoreHelper::clone($this->instance);
    }
}
