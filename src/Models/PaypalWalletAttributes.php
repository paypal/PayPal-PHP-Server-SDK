<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use PaypalServerSdkLib\ApiHelper;
use stdClass;

/**
 * Additional attributes associated with the use of this PayPal Wallet.
 */
class PaypalWalletAttributes implements \JsonSerializable
{
    /**
     * @var PaypalWalletCustomerRequest|null
     */
    private $customer;

    /**
     * @var PaypalWalletVaultInstruction|null
     */
    private $vault;

    /**
     * Returns Customer.
     */
    public function getCustomer(): ?PaypalWalletCustomerRequest
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     *
     * @maps customer
     */
    public function setCustomer(?PaypalWalletCustomerRequest $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * Returns Vault.
     */
    public function getVault(): ?PaypalWalletVaultInstruction
    {
        return $this->vault;
    }

    /**
     * Sets Vault.
     *
     * @maps vault
     */
    public function setVault(?PaypalWalletVaultInstruction $vault): void
    {
        $this->vault = $vault;
    }

    /**
     * Converts the PaypalWalletAttributes object to a human-readable string representation.
     *
     * @return string The string representation of the PaypalWalletAttributes object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PaypalWalletAttributes',
            ['customer' => $this->customer, 'vault' => $this->vault]
        );
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
