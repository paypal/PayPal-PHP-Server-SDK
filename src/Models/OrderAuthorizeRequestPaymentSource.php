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
 * The payment source definition.
 */
class OrderAuthorizeRequestPaymentSource implements \JsonSerializable
{
    /**
     * @var CardRequest|null
     */
    private $card;

    /**
     * @var Token|null
     */
    private $token;

    /**
     * @var PayPalWallet|null
     */
    private $paypal;

    /**
     * @var ApplePayRequest|null
     */
    private $applePay;

    /**
     * @var GooglePayRequest|null
     */
    private $googlePay;

    /**
     * @var VenmoWalletRequest|null
     */
    private $venmo;

    /**
     * Returns Card.
     * The payment card to use to fund a payment. Can be a credit or debit card.<blockquote><strong>Note:
     * </strong> Passing card number, cvv and expiry directly via the API requires <a href="https://www.
     * pcisecuritystandards.org/pci_security/completing_self_assessment"> PCI SAQ D compliance</a>.
     * <br>*PayPal offers a mechanism by which you do not have to take on the <strong>PCI SAQ D</strong>
     * burden by using hosted fields - refer to <a href="https://developer.paypal.
     * com/docs/checkout/advanced/integrate/">this Integration Guide</a>*.</blockquote>
     */
    public function getCard(): ?CardRequest
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * The payment card to use to fund a payment. Can be a credit or debit card.<blockquote><strong>Note:
     * </strong> Passing card number, cvv and expiry directly via the API requires <a href="https://www.
     * pcisecuritystandards.org/pci_security/completing_self_assessment"> PCI SAQ D compliance</a>.
     * <br>*PayPal offers a mechanism by which you do not have to take on the <strong>PCI SAQ D</strong>
     * burden by using hosted fields - refer to <a href="https://developer.paypal.
     * com/docs/checkout/advanced/integrate/">this Integration Guide</a>*.</blockquote>
     *
     * @maps card
     */
    public function setCard(?CardRequest $card): void
    {
        $this->card = $card;
    }

    /**
     * Returns Token.
     * The tokenized payment source to fund a payment.
     */
    public function getToken(): ?Token
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * The tokenized payment source to fund a payment.
     *
     * @maps token
     */
    public function setToken(?Token $token): void
    {
        $this->token = $token;
    }

    /**
     * Returns Paypal.
     * A resource that identifies a PayPal Wallet is used for payment.
     */
    public function getPaypal(): ?PayPalWallet
    {
        return $this->paypal;
    }

    /**
     * Sets Paypal.
     * A resource that identifies a PayPal Wallet is used for payment.
     *
     * @maps paypal
     */
    public function setPaypal(?PayPalWallet $paypal): void
    {
        $this->paypal = $paypal;
    }

    /**
     * Returns Apple Pay.
     * Information needed to pay using ApplePay.
     */
    public function getApplePay(): ?ApplePayRequest
    {
        return $this->applePay;
    }

    /**
     * Sets Apple Pay.
     * Information needed to pay using ApplePay.
     *
     * @maps apple_pay
     */
    public function setApplePay(?ApplePayRequest $applePay): void
    {
        $this->applePay = $applePay;
    }

    /**
     * Returns Google Pay.
     * Information needed to pay using Google Pay.
     */
    public function getGooglePay(): ?GooglePayRequest
    {
        return $this->googlePay;
    }

    /**
     * Sets Google Pay.
     * Information needed to pay using Google Pay.
     *
     * @maps google_pay
     */
    public function setGooglePay(?GooglePayRequest $googlePay): void
    {
        $this->googlePay = $googlePay;
    }

    /**
     * Returns Venmo.
     * Information needed to pay using Venmo.
     */
    public function getVenmo(): ?VenmoWalletRequest
    {
        return $this->venmo;
    }

    /**
     * Sets Venmo.
     * Information needed to pay using Venmo.
     *
     * @maps venmo
     */
    public function setVenmo(?VenmoWalletRequest $venmo): void
    {
        $this->venmo = $venmo;
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
        if (isset($this->card)) {
            $json['card']       = $this->card;
        }
        if (isset($this->token)) {
            $json['token']      = $this->token;
        }
        if (isset($this->paypal)) {
            $json['paypal']     = $this->paypal;
        }
        if (isset($this->applePay)) {
            $json['apple_pay']  = $this->applePay;
        }
        if (isset($this->googlePay)) {
            $json['google_pay'] = $this->googlePay;
        }
        if (isset($this->venmo)) {
            $json['venmo']      = $this->venmo;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
