<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\GooglePayCardResponse;
use PayPalRESTAPIsLib\Models\GooglePayWalletResponse;
use PayPalRESTAPIsLib\Models\PhoneNumberWithCountryCode;

/**
 * Builder for model GooglePayWalletResponse
 *
 * @see GooglePayWalletResponse
 */
class GooglePayWalletResponseBuilder
{
    /**
     * @var GooglePayWalletResponse
     */
    private $instance;

    private function __construct(GooglePayWalletResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new google pay wallet response Builder object.
     */
    public static function init(): self
    {
        return new self(new GooglePayWalletResponse());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
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
     * Sets phone number field.
     */
    public function phoneNumber(?PhoneNumberWithCountryCode $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Sets card field.
     */
    public function card(?GooglePayCardResponse $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Initializes a new google pay wallet response object.
     */
    public function build(): GooglePayWalletResponse
    {
        return CoreHelper::clone($this->instance);
    }
}