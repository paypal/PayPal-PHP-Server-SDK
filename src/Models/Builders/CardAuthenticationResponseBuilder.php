<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\CardAuthenticationResponse;
use PaypalServerSdkLib\Models\ThreeDSecureCardAuthenticationResponse;

/**
 * Builder for model CardAuthenticationResponse
 *
 * @see CardAuthenticationResponse
 */
class CardAuthenticationResponseBuilder
{
    /**
     * @var CardAuthenticationResponse
     */
    private $instance;

    private function __construct(CardAuthenticationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Card Authentication Response Builder object.
     */
    public static function init(): self
    {
        return new self(new CardAuthenticationResponse());
    }

    /**
     * Sets three d secure field.
     *
     * @param ThreeDSecureCardAuthenticationResponse|null $value
     */
    public function threeDSecure(?ThreeDSecureCardAuthenticationResponse $value): self
    {
        $this->instance->setThreeDSecure($value);
        return $this;
    }

    /**
     * Initializes a new Card Authentication Response object.
     */
    public function build(): CardAuthenticationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
