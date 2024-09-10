<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\Address;
use PaypalServerSDKLib\Models\Name;
use PaypalServerSDKLib\Models\PayPalWalletAttributesResponse;
use PaypalServerSDKLib\Models\PayPalWalletResponse;
use PaypalServerSDKLib\Models\PhoneNumber;
use PaypalServerSDKLib\Models\TaxInfo;

/**
 * Builder for model PayPalWalletResponse
 *
 * @see PayPalWalletResponse
 */
class PayPalWalletResponseBuilder
{
    /**
     * @var PayPalWalletResponse
     */
    private $instance;

    private function __construct(PayPalWalletResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new pay pal wallet response Builder object.
     */
    public static function init(): self
    {
        return new self(new PayPalWalletResponse());
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
     * Sets account id field.
     */
    public function accountId(?string $value): self
    {
        $this->instance->setAccountId($value);
        return $this;
    }

    /**
     * Sets account status field.
     */
    public function accountStatus(?string $value): self
    {
        $this->instance->setAccountStatus($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?Name $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets phone type field.
     */
    public function phoneType(?string $value): self
    {
        $this->instance->setPhoneType($value);
        return $this;
    }

    /**
     * Sets phone number field.
     */
    public function phoneNumber(?PhoneNumber $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Sets birth date field.
     */
    public function birthDate(?string $value): self
    {
        $this->instance->setBirthDate($value);
        return $this;
    }

    /**
     * Sets business name field.
     */
    public function businessName(?string $value): self
    {
        $this->instance->setBusinessName($value);
        return $this;
    }

    /**
     * Sets tax info field.
     */
    public function taxInfo(?TaxInfo $value): self
    {
        $this->instance->setTaxInfo($value);
        return $this;
    }

    /**
     * Sets address field.
     */
    public function address(?Address $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?PayPalWalletAttributesResponse $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Initializes a new pay pal wallet response object.
     */
    public function build(): PayPalWalletResponse
    {
        return CoreHelper::clone($this->instance);
    }
}