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
 * Customizes the Vault creation flow experience for your customers.
 */
class VaultVenmoExperienceContext implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $brandName;

    /**
     * @var string|null
     */
    private $shippingPreference = OrderApplicationContextShippingPreference::GET_FROM_FILE;

    /**
     * @var string|null
     */
    private $vaultInstruction = VaultInstructionAction::ON_CREATE_PAYMENT_TOKENS;

    /**
     * Returns Brand Name.
     * The label that overrides the business name in the PayPal account on the PayPal site. The pattern is
     * defined by an external party and supports Unicode.
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * Sets Brand Name.
     * The label that overrides the business name in the PayPal account on the PayPal site. The pattern is
     * defined by an external party and supports Unicode.
     *
     * @maps brand_name
     */
    public function setBrandName(?string $brandName): void
    {
        $this->brandName = $brandName;
    }

    /**
     * Returns Shipping Preference.
     * The shipping preference. This only applies to PayPal payment source.
     */
    public function getShippingPreference(): ?string
    {
        return $this->shippingPreference;
    }

    /**
     * Sets Shipping Preference.
     * The shipping preference. This only applies to PayPal payment source.
     *
     * @maps shipping_preference
     */
    public function setShippingPreference(?string $shippingPreference): void
    {
        $this->shippingPreference = $shippingPreference;
    }

    /**
     * Returns Vault Instruction.
     * Vault Instruction on action to be performed after a successful payer approval.
     */
    public function getVaultInstruction(): ?string
    {
        return $this->vaultInstruction;
    }

    /**
     * Sets Vault Instruction.
     * Vault Instruction on action to be performed after a successful payer approval.
     *
     * @maps vault_instruction
     */
    public function setVaultInstruction(?string $vaultInstruction): void
    {
        $this->vaultInstruction = $vaultInstruction;
    }

    /**
     * Converts the VaultVenmoExperienceContext object to a human-readable string representation.
     *
     * @return string The string representation of the VaultVenmoExperienceContext object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'VaultVenmoExperienceContext',
            [
                'brandName' => $this->brandName,
                'shippingPreference' => $this->shippingPreference,
                'vaultInstruction' => $this->vaultInstruction
            ]
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
        if (isset($this->brandName)) {
            $json['brand_name']          = $this->brandName;
        }
        if (isset($this->shippingPreference)) {
            $json['shipping_preference'] = $this->shippingPreference;
        }
        if (isset($this->vaultInstruction)) {
            $json['vault_instruction']   = $this->vaultInstruction;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
