<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\GooglePayDecryptedTokenData;

/**
 * Builder for model GooglePayDecryptedTokenData
 *
 * @see GooglePayDecryptedTokenData
 */
class GooglePayDecryptedTokenDataBuilder
{
    /**
     * @var GooglePayDecryptedTokenData
     */
    private $instance;

    private function __construct(GooglePayDecryptedTokenData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new google pay decrypted token data Builder object.
     */
    public static function init(string $paymentMethod, string $authenticationMethod): self
    {
        return new self(new GooglePayDecryptedTokenData($paymentMethod, $authenticationMethod));
    }

    /**
     * Sets message id field.
     */
    public function messageId(?string $value): self
    {
        $this->instance->setMessageId($value);
        return $this;
    }

    /**
     * Sets message expiration field.
     */
    public function messageExpiration(?string $value): self
    {
        $this->instance->setMessageExpiration($value);
        return $this;
    }

    /**
     * Sets cryptogram field.
     */
    public function cryptogram(?string $value): self
    {
        $this->instance->setCryptogram($value);
        return $this;
    }

    /**
     * Sets eci indicator field.
     */
    public function eciIndicator(?string $value): self
    {
        $this->instance->setEciIndicator($value);
        return $this;
    }

    /**
     * Initializes a new google pay decrypted token data object.
     */
    public function build(): GooglePayDecryptedTokenData
    {
        return CoreHelper::clone($this->instance);
    }
}
