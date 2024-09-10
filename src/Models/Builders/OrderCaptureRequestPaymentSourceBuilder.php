<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\ApplePayRequest;
use PaypalServerSDKLib\Models\CardRequest;
use PaypalServerSDKLib\Models\GooglePayRequest;
use PaypalServerSDKLib\Models\OrderCaptureRequestPaymentSource;
use PaypalServerSDKLib\Models\PayPalWallet;
use PaypalServerSDKLib\Models\Token;
use PaypalServerSDKLib\Models\VenmoWalletRequest;

/**
 * Builder for model OrderCaptureRequestPaymentSource
 *
 * @see OrderCaptureRequestPaymentSource
 */
class OrderCaptureRequestPaymentSourceBuilder
{
    /**
     * @var OrderCaptureRequestPaymentSource
     */
    private $instance;

    private function __construct(OrderCaptureRequestPaymentSource $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new order capture request payment source Builder object.
     */
    public static function init(): self
    {
        return new self(new OrderCaptureRequestPaymentSource());
    }

    /**
     * Sets card field.
     */
    public function card(?CardRequest $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Sets token field.
     */
    public function token(?Token $value): self
    {
        $this->instance->setToken($value);
        return $this;
    }

    /**
     * Sets paypal field.
     */
    public function paypal(?PayPalWallet $value): self
    {
        $this->instance->setPaypal($value);
        return $this;
    }

    /**
     * Sets apple pay field.
     */
    public function applePay(?ApplePayRequest $value): self
    {
        $this->instance->setApplePay($value);
        return $this;
    }

    /**
     * Sets google pay field.
     */
    public function googlePay(?GooglePayRequest $value): self
    {
        $this->instance->setGooglePay($value);
        return $this;
    }

    /**
     * Sets venmo field.
     */
    public function venmo(?VenmoWalletRequest $value): self
    {
        $this->instance->setVenmo($value);
        return $this;
    }

    /**
     * Initializes a new order capture request payment source object.
     */
    public function build(): OrderCaptureRequestPaymentSource
    {
        return CoreHelper::clone($this->instance);
    }
}
