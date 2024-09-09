<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use stdClass;

/**
 * The payment source used to fund the payment.
 */
class OrderAuthorizeResponsePaymentSource implements \JsonSerializable
{
    /**
     * @var CardResponse|null
     */
    private $card;

    /**
     * @var PayPalWalletResponse|null
     */
    private $paypal;

    /**
     * @var ApplePayPaymentObject|null
     */
    private $applePay;

    /**
     * @var GooglePayWalletResponse|null
     */
    private $googlePay;

    /**
     * @var VenmoWalletResponse|null
     */
    private $venmo;

    /**
     * Returns Card.
     * The payment card to use to fund a payment. Card can be a credit or debit card.
     */
    public function getCard(): ?CardResponse
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * The payment card to use to fund a payment. Card can be a credit or debit card.
     *
     * @maps card
     */
    public function setCard(?CardResponse $card): void
    {
        $this->card = $card;
    }

    /**
     * Returns Paypal.
     * The PayPal Wallet response.
     */
    public function getPaypal(): ?PayPalWalletResponse
    {
        return $this->paypal;
    }

    /**
     * Sets Paypal.
     * The PayPal Wallet response.
     *
     * @maps paypal
     */
    public function setPaypal(?PayPalWalletResponse $paypal): void
    {
        $this->paypal = $paypal;
    }

    /**
     * Returns Apple Pay.
     * Information needed to pay using ApplePay.
     */
    public function getApplePay(): ?ApplePayPaymentObject
    {
        return $this->applePay;
    }

    /**
     * Sets Apple Pay.
     * Information needed to pay using ApplePay.
     *
     * @maps apple_pay
     */
    public function setApplePay(?ApplePayPaymentObject $applePay): void
    {
        $this->applePay = $applePay;
    }

    /**
     * Returns Google Pay.
     * Google Pay Wallet payment data.
     */
    public function getGooglePay(): ?GooglePayWalletResponse
    {
        return $this->googlePay;
    }

    /**
     * Sets Google Pay.
     * Google Pay Wallet payment data.
     *
     * @maps google_pay
     */
    public function setGooglePay(?GooglePayWalletResponse $googlePay): void
    {
        $this->googlePay = $googlePay;
    }

    /**
     * Returns Venmo.
     * Venmo wallet response.
     */
    public function getVenmo(): ?VenmoWalletResponse
    {
        return $this->venmo;
    }

    /**
     * Sets Venmo.
     * Venmo wallet response.
     *
     * @maps venmo
     */
    public function setVenmo(?VenmoWalletResponse $venmo): void
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
