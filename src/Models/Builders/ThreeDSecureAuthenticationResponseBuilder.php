<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\ThreeDSecureAuthenticationResponse;

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
     * Initializes a new Three D Secure Authentication Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ThreeDSecureAuthenticationResponse());
    }

    /**
     * Sets authentication status field.
     *
     * @param string|null $value
     */
    public function authenticationStatus(?string $value): self
    {
        $this->instance->setAuthenticationStatus($value);
        return $this;
    }

    /**
     * Sets enrollment status field.
     *
     * @param string|null $value
     */
    public function enrollmentStatus(?string $value): self
    {
        $this->instance->setEnrollmentStatus($value);
        return $this;
    }

    /**
     * Initializes a new Three D Secure Authentication Response object.
     */
    public function build(): ThreeDSecureAuthenticationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
