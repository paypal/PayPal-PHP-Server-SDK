<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\ThreeDSecureAuthenticationResponse;

/**
 * Builder for model ThreeDSecureAuthenticationResponse
 *
 * @see ThreeDSecureAuthenticationResponse
 */
class ThreeDSecureAuthenticationResponseBuilder
{
    /**
     * @var ThreeDSecureAuthenticationResponse
     */
    private $instance;

    private function __construct(ThreeDSecureAuthenticationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new three dsecure authentication response Builder object.
     */
    public static function init(): self
    {
        return new self(new ThreeDSecureAuthenticationResponse());
    }

    /**
     * Sets authentication status field.
     */
    public function authenticationStatus(?string $value): self
    {
        $this->instance->setAuthenticationStatus($value);
        return $this;
    }

    /**
     * Sets enrollment status field.
     */
    public function enrollmentStatus(?string $value): self
    {
        $this->instance->setEnrollmentStatus($value);
        return $this;
    }

    /**
     * Initializes a new three dsecure authentication response object.
     */
    public function build(): ThreeDSecureAuthenticationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
