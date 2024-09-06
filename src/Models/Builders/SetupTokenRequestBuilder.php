<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\CustomerRequest;
use PayPalRESTAPIsLib\Models\SetupTokenRequest;
use PayPalRESTAPIsLib\Models\SetupTokenRequestPaymentSource;

/**
 * Builder for model SetupTokenRequest
 *
 * @see SetupTokenRequest
 */
class SetupTokenRequestBuilder
{
    /**
     * @var SetupTokenRequest
     */
    private $instance;

    private function __construct(SetupTokenRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new setup token request Builder object.
     */
    public static function init(SetupTokenRequestPaymentSource $paymentSource): self
    {
        return new self(new SetupTokenRequest($paymentSource));
    }

    /**
     * Sets customer field.
     */
    public function customer(?CustomerRequest $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Initializes a new setup token request object.
     */
    public function build(): SetupTokenRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
