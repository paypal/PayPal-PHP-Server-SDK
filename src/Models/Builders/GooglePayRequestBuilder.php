<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\AssuranceDetails;
use PaypalServerSDKLib\Models\GooglePayCardAttributes;
use PaypalServerSDKLib\Models\GooglePayDecryptedTokenData;
use PaypalServerSDKLib\Models\GooglePayRequest;
use PaypalServerSDKLib\Models\GooglePayRequestCard;
use PaypalServerSDKLib\Models\PhoneNumberWithCountryCode;

/**
 * Builder for model GooglePayRequest
 *
 * @see GooglePayRequest
 */
class GooglePayRequestBuilder
{
    /**
     * @var GooglePayRequest
     */
    private $instance;

    private function __construct(GooglePayRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new google pay request Builder object.
     */
    public static function init(): self
    {
        return new self(new GooglePayRequest());
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
    public function card(?GooglePayRequestCard $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Sets decrypted token field.
     */
    public function decryptedToken(?GooglePayDecryptedTokenData $value): self
    {
        $this->instance->setDecryptedToken($value);
        return $this;
    }

    /**
     * Sets assurance details field.
     */
    public function assuranceDetails(?AssuranceDetails $value): self
    {
        $this->instance->setAssuranceDetails($value);
        return $this;
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?GooglePayCardAttributes $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Initializes a new google pay request object.
     */
    public function build(): GooglePayRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
