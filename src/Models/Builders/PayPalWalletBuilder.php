<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\Address;
use PayPalRESTAPIsLib\Models\Name;
use PayPalRESTAPIsLib\Models\PayPalWallet;
use PayPalRESTAPIsLib\Models\PayPalWalletAttributes;
use PayPalRESTAPIsLib\Models\PayPalWalletExperienceContext;
use PayPalRESTAPIsLib\Models\PhoneWithType;
use PayPalRESTAPIsLib\Models\TaxInfo;

/**
 * Builder for model PayPalWallet
 *
 * @see PayPalWallet
 */
class PayPalWalletBuilder
{
    /**
     * @var PayPalWallet
     */
    private $instance;

    private function __construct(PayPalWallet $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new pay pal wallet Builder object.
     */
    public static function init(): self
    {
        return new self(new PayPalWallet());
    }

    /**
     * Sets vault id field.
     */
    public function vaultId(?string $value): self
    {
        $this->instance->setVaultId($value);
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
     * Sets name field.
     */
    public function name(?Name $value): self
    {
        $this->instance->setName($value);
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
     * Sets birth date field.
     */
    public function birthDate(?string $value): self
    {
        $this->instance->setBirthDate($value);
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
    public function attributes(?PayPalWalletAttributes $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Sets experience context field.
     */
    public function experienceContext(?PayPalWalletExperienceContext $value): self
    {
        $this->instance->setExperienceContext($value);
        return $this;
    }

    /**
     * Sets billing agreement id field.
     */
    public function billingAgreementId(?string $value): self
    {
        $this->instance->setBillingAgreementId($value);
        return $this;
    }

    /**
     * Initializes a new pay pal wallet object.
     */
    public function build(): PayPalWallet
    {
        return CoreHelper::clone($this->instance);
    }
}