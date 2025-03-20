<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\BlikOneClickPaymentRequest;

/**
 * Builder for model BlikOneClickPaymentRequest
 *
 * @see BlikOneClickPaymentRequest
 */
class BlikOneClickPaymentRequestBuilder
{
    /**
     * @var BlikOneClickPaymentRequest
     */
    private $instance;

    private function __construct(BlikOneClickPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Blik One Click Payment Request Builder object.
     *
     * @param string $consumerReference
     */
    public static function init(string $consumerReference): self
    {
        return new self(new BlikOneClickPaymentRequest($consumerReference));
    }

    /**
     * Sets auth code field.
     *
     * @param string|null $value
     */
    public function authCode(?string $value): self
    {
        $this->instance->setAuthCode($value);
        return $this;
    }

    /**
     * Sets alias label field.
     *
     * @param string|null $value
     */
    public function aliasLabel(?string $value): self
    {
        $this->instance->setAliasLabel($value);
        return $this;
    }

    /**
     * Sets alias key field.
     *
     * @param string|null $value
     */
    public function aliasKey(?string $value): self
    {
        $this->instance->setAliasKey($value);
        return $this;
    }

    /**
     * Initializes a new Blik One Click Payment Request object.
     */
    public function build(): BlikOneClickPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
