<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\PayPalWalletCustomer;
use PaypalServerSdkLib\Models\PayPalWalletVaultResponse;

/**
 * Builder for model PayPalWalletVaultResponse
 *
 * @see PayPalWalletVaultResponse
 */
class PayPalWalletVaultResponseBuilder
{
    /**
     * @var PayPalWalletVaultResponse
     */
    private $instance;

    private function __construct(PayPalWalletVaultResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new pay pal wallet vault response Builder object.
     */
    public static function init(): self
    {
        return new self(new PayPalWalletVaultResponse());
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
    public function customer(?PayPalWalletCustomer $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Initializes a new pay pal wallet vault response object.
     */
    public function build(): PayPalWalletVaultResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
