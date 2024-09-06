<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\PayPalWalletCustomer;
use PayPalRESTAPIsLib\Models\PhoneWithType;

/**
 * Builder for model PayPalWalletCustomer
 *
 * @see PayPalWalletCustomer
 */
class PayPalWalletCustomerBuilder
{
    /**
     * @var PayPalWalletCustomer
     */
    private $instance;

    private function __construct(PayPalWalletCustomer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new pay pal wallet customer Builder object.
     */
    public static function init(): self
    {
        return new self(new PayPalWalletCustomer());
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
     * Sets email address field.
     */
    public function emailAddress(?string $value): self
    {
        $this->instance->setEmailAddress($value);
        return $this;
    }

    /**
     * Sets phone field.
     */
    public function phone(?PhoneWithType $value): self
    {
        $this->instance->setPhone($value);
        return $this;
    }

    /**
     * Sets merchant customer id field.
     */
    public function merchantCustomerId(?string $value): self
    {
        $this->instance->setMerchantCustomerId($value);
        return $this;
    }

    /**
     * Initializes a new pay pal wallet customer object.
     */
    public function build(): PayPalWalletCustomer
    {
        return CoreHelper::clone($this->instance);
    }
}