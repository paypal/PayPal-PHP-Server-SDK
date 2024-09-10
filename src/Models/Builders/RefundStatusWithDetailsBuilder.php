<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\RefundStatusDetails;
use PaypalServerSDKLib\Models\RefundStatusWithDetails;

/**
 * Builder for model RefundStatusWithDetails
 *
 * @see RefundStatusWithDetails
 */
class RefundStatusWithDetailsBuilder
{
    /**
     * @var RefundStatusWithDetails
     */
    private $instance;

    private function __construct(RefundStatusWithDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund status with details Builder object.
     */
    public static function init(): self
    {
        return new self(new RefundStatusWithDetails());
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
    public function statusDetails(?RefundStatusDetails $value): self
    {
        $this->instance->setStatusDetails($value);
        return $this;
    }

    /**
     * Initializes a new refund status with details object.
     */
    public function build(): RefundStatusWithDetails
    {
        return CoreHelper::clone($this->instance);
    }
}