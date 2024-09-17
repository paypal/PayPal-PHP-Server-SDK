<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\SetupTokenRequestCard;
use PaypalServerSDKLib\Models\SetupTokenRequestPaymentSource;
use PaypalServerSDKLib\Models\VaultPaypalWalletRequest;
use PaypalServerSDKLib\Models\VaultTokenRequest;
use PaypalServerSDKLib\Models\VaultVenmoRequest;

/**
 * Builder for model SetupTokenRequestPaymentSource
 *
 * @see SetupTokenRequestPaymentSource
 */
class SetupTokenRequestPaymentSourceBuilder
{
    /**
     * @var SetupTokenRequestPaymentSource
     */
    private $instance;

    private function __construct(SetupTokenRequestPaymentSource $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new setup token request payment source Builder object.
     */
    public static function init(): self
    {
        return new self(new SetupTokenRequestPaymentSource());
    }

    /**
     * Sets card field.
     */
    public function card(?SetupTokenRequestCard $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Sets paypal field.
     */
    public function paypal(?VaultPaypalWalletRequest $value): self
    {
        $this->instance->setPaypal($value);
        return $this;
    }

    /**
     * Sets venmo field.
     */
    public function venmo(?VaultVenmoRequest $value): self
    {
        $this->instance->setVenmo($value);
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
     * Initializes a new setup token request payment source object.
     */
    public function build(): SetupTokenRequestPaymentSource
    {
        return CoreHelper::clone($this->instance);
    }
}
