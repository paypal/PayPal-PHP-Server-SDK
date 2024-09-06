<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models;

use stdClass;

/**
 * Resource consolidating common request and response attributes for vaulting a Digital Wallet.
 */
class VaultedDigitalWallet implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $description;

    /**
     * @var VaultedDigitalWalletShippingDetails|null
     */
    private $shipping;

    /**
     * @var bool|null
     */
    private $permitMultiplePaymentTokens = false;

    /**
     * @var string|null
     */
    private $usageType;

    /**
     * @var string|null
     */
    private $customerType;

    /**
     * Returns Description.
     * The description displayed to the consumer on the approval flow for a digital wallet, as well as on
     * the merchant view of the payment token management experience. exp: PayPal.com.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The description displayed to the consumer on the approval flow for a digital wallet, as well as on
     * the merchant view of the payment token management experience. exp: PayPal.com.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Shipping.
     * The shipping details.
     */
    public function getShipping(): ?VaultedDigitalWalletShippingDetails
    {
        return $this->shipping;
    }

    /**
     * Sets Shipping.
     * The shipping details.
     *
     * @maps shipping
     */
    public function setShipping(?VaultedDigitalWalletShippingDetails $shipping): void
    {
        $this->shipping = $shipping;
    }

    /**
     * Returns Permit Multiple Payment Tokens.
     * Create multiple payment tokens for the same payer, merchant/platform combination. Use this when the
     * customer has not logged in at merchant/platform. The payment token thus generated, can then also be
     * used to create the customer account at merchant/platform. Use this also when multiple payment tokens
     * are required for the same payer, different customer at merchant/platform. This helps to identify
     * customers distinctly even though they may share the same PayPal account. This only applies to PayPal
     * payment source.
     */
    public function getPermitMultiplePaymentTokens(): ?bool
    {
        return $this->permitMultiplePaymentTokens;
    }

    /**
     * Sets Permit Multiple Payment Tokens.
     * Create multiple payment tokens for the same payer, merchant/platform combination. Use this when the
     * customer has not logged in at merchant/platform. The payment token thus generated, can then also be
     * used to create the customer account at merchant/platform. Use this also when multiple payment tokens
     * are required for the same payer, different customer at merchant/platform. This helps to identify
     * customers distinctly even though they may share the same PayPal account. This only applies to PayPal
     * payment source.
     *
     * @maps permit_multiple_payment_tokens
     */
    public function setPermitMultiplePaymentTokens(?bool $permitMultiplePaymentTokens): void
    {
        $this->permitMultiplePaymentTokens = $permitMultiplePaymentTokens;
    }

    /**
     * Returns Usage Type.
     * The usage type associated with a digital wallet payment token.
     */
    public function getUsageType(): ?string
    {
        return $this->usageType;
    }

    /**
     * Sets Usage Type.
     * The usage type associated with a digital wallet payment token.
     *
     * @maps usage_type
     */
    public function setUsageType(?string $usageType): void
    {
        $this->usageType = $usageType;
    }

    /**
     * Returns Customer Type.
     * The customer type associated with a digital wallet payment token. This is to indicate whether the
     * customer acting on the merchant / platform is either a business or a consumer.
     */
    public function getCustomerType(): ?string
    {
        return $this->customerType;
    }

    /**
     * Sets Customer Type.
     * The customer type associated with a digital wallet payment token. This is to indicate whether the
     * customer acting on the merchant / platform is either a business or a consumer.
     *
     * @maps customer_type
     */
    public function setCustomerType(?string $customerType): void
    {
        $this->customerType = $customerType;
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
        if (isset($this->description)) {
            $json['description']                    = $this->description;
        }
        if (isset($this->shipping)) {
            $json['shipping']                       = $this->shipping;
        }
        if (isset($this->permitMultiplePaymentTokens)) {
            $json['permit_multiple_payment_tokens'] = $this->permitMultiplePaymentTokens;
        }
        if (isset($this->usageType)) {
            $json['usage_type']                     = $this->usageType;
        }
        if (isset($this->customerType)) {
            $json['customer_type']                  = $this->customerType;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
