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
use PayPalRESTAPIsLib\Models\VaultSEPADebitResponse;

/**
 * Builder for model VaultSEPADebitResponse
 *
 * @see VaultSEPADebitResponse
 */
class VaultSEPADebitResponseBuilder
{
    /**
     * @var VaultSEPADebitResponse
     */
    private $instance;

    private function __construct(VaultSEPADebitResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new vault sepadebit response Builder object.
     */
    public static function init(): self
    {
        return new self(new VaultSEPADebitResponse());
    }

    /**
     * Sets iban last chars field.
     */
    public function ibanLastChars(?string $value): self
    {
        $this->instance->setIbanLastChars($value);
        return $this;
    }

    /**
     * Sets account holder name field.
     */
    public function accountHolderName($value): self
    {
        $this->instance->setAccountHolderName($value);
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?Address $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Initializes a new vault sepadebit response object.
     */
    public function build(): VaultSEPADebitResponse
    {
        return CoreHelper::clone($this->instance);
    }
}