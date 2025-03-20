<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\PaypalWalletVaultInstruction;

/**
 * Builder for model PaypalWalletVaultInstruction
 *
 * @see PaypalWalletVaultInstruction
 */
class PaypalWalletVaultInstructionBuilder
{
    /**
     * @var PaypalWalletVaultInstruction
     */
    private $instance;

    private function __construct(PaypalWalletVaultInstruction $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Paypal Wallet Vault Instruction Builder object.
     *
     * @param string $usageType
     */
    public static function init(string $usageType): self
    {
        return new self(new PaypalWalletVaultInstruction($usageType));
    }

    /**
     * Sets store in vault field.
     *
     * @param string|null $value
     */
    public function storeInVault(?string $value): self
    {
        $this->instance->setStoreInVault($value);
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets usage pattern field.
     *
     * @param string|null $value
     */
    public function usagePattern(?string $value): self
    {
        $this->instance->setUsagePattern($value);
        return $this;
    }

    /**
     * Sets customer type field.
     *
     * @param string|null $value
     */
    public function customerType(?string $value): self
    {
        $this->instance->setCustomerType($value);
        return $this;
    }

    /**
     * Sets permit multiple payment tokens field.
     *
     * @param bool|null $value
     */
    public function permitMultiplePaymentTokens(?bool $value): self
    {
        $this->instance->setPermitMultiplePaymentTokens($value);
        return $this;
    }

    /**
     * Initializes a new Paypal Wallet Vault Instruction object.
     */
    public function build(): PaypalWalletVaultInstruction
    {
        return CoreHelper::clone($this->instance);
    }
}
