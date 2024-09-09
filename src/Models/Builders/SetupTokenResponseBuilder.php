<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\CustomerRequest;
use PaypalServerSDKLib\Models\SetupTokenResponse;
use PaypalServerSDKLib\Models\SetupTokenResponsePaymentSource;

/**
 * Builder for model SetupTokenResponse
 *
 * @see SetupTokenResponse
 */
class SetupTokenResponseBuilder
{
    /**
     * @var SetupTokenResponse
     */
    private $instance;

    private function __construct(SetupTokenResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new setup token response Builder object.
     */
    public static function init(): self
    {
        return new self(new SetupTokenResponse());
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets ordinal field.
     */
    public function ordinal(?int $value): self
    {
        $this->instance->setOrdinal($value);
        return $this;
    }

    /**
     * Sets customer field.
     */
    public function customer(?CustomerRequest $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets payment source field.
     */
    public function paymentSource(?SetupTokenResponsePaymentSource $value): self
    {
        $this->instance->setPaymentSource($value);
        return $this;
    }

    /**
     * Sets links field.
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new setup token response object.
     */
    public function build(): SetupTokenResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
