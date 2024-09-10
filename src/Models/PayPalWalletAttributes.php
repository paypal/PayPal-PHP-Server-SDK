<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models;

use stdClass;

/**
 * Additional attributes associated with the use of this PayPal Wallet.
 */
class PayPalWalletAttributes implements \JsonSerializable
{
    /**
     * @var PayPalWalletCustomerRequest|null
     */
    private $customer;

    /**
     * @var PayPalWalletVaultInstruction|null
     */
    private $vault;

    /**
     * Returns Customer.
     */
    public function getCustomer(): ?PayPalWalletCustomerRequest
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     *
     * @maps customer
     */
    public function setCustomer(?PayPalWalletCustomerRequest $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * Returns Vault.
     */
    public function getVault(): ?PayPalWalletVaultInstruction
    {
        return $this->vault;
    }

    /**
     * Sets Vault.
     *
     * @maps vault
     */
    public function setVault(?PayPalWalletVaultInstruction $vault): void
    {
        $this->vault = $vault;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->customer)) {
            $json['customer'] = $this->customer;
        }
        if (isset($this->vault)) {
            $json['vault']    = $this->vault;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
