<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\PaypalWalletAttributesResponse;
use PaypalServerSDKLib\Models\PaypalWalletVaultResponse;

/**
 * Builder for model PaypalWalletAttributesResponse
 *
 * @see PaypalWalletAttributesResponse
 */
class PaypalWalletAttributesResponseBuilder
{
    /**
     * @var PaypalWalletAttributesResponse
     */
    private $instance;

    private function __construct(PaypalWalletAttributesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new paypal wallet attributes response Builder object.
     */
    public static function init(): self
    {
        return new self(new PaypalWalletAttributesResponse());
    }

    /**
     * Sets vault field.
     */
    public function vault(?PaypalWalletVaultResponse $value): self
    {
        $this->instance->setVault($value);
        return $this;
    }

    /**
     * Sets cobranded cards field.
     */
    public function cobrandedCards(?array $value): self
    {
        $this->instance->setCobrandedCards($value);
        return $this;
    }

    /**
     * Initializes a new paypal wallet attributes response object.
     */
    public function build(): PaypalWalletAttributesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
