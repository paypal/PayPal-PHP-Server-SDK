<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\AuthorizationStatusDetails;
use PayPalRESTAPIsLib\Models\AuthorizationStatusWithDetails;

/**
 * Builder for model AuthorizationStatusWithDetails
 *
 * @see AuthorizationStatusWithDetails
 */
class AuthorizationStatusWithDetailsBuilder
{
    /**
     * @var AuthorizationStatusWithDetails
     */
    private $instance;

    private function __construct(AuthorizationStatusWithDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new authorization status with details Builder object.
     */
    public static function init(): self
    {
        return new self(new AuthorizationStatusWithDetails());
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
     * Sets status details field.
     */
    public function statusDetails(?AuthorizationStatusDetails $value): self
    {
        $this->instance->setStatusDetails($value);
        return $this;
    }

    /**
     * Initializes a new authorization status with details object.
     */
    public function build(): AuthorizationStatusWithDetails
    {
        return CoreHelper::clone($this->instance);
    }
}