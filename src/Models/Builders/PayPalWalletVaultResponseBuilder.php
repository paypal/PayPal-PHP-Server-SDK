<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\PaypalWalletCustomer;
use PaypalServerSDKLib\Models\PaypalWalletVaultResponse;

/**
 * Builder for model PaypalWalletVaultResponse
 *
 * @see PaypalWalletVaultResponse
 */
class PaypalWalletVaultResponseBuilder
{
    /**
     * @var PaypalWalletVaultResponse
     */
    private $instance;

    private function __construct(PaypalWalletVaultResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new paypal wallet vault response Builder object.
     */
    public static function init(): self
    {
        return new self(new PaypalWalletVaultResponse());
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets links field.
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Sets customer field.
     */
    public function customer(?PaypalWalletCustomer $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Initializes a new paypal wallet vault response object.
     */
    public function build(): PaypalWalletVaultResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
