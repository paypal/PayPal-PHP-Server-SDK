<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\RefundPaymentInstruction;

/**
 * Builder for model RefundPaymentInstruction
 *
 * @see RefundPaymentInstruction
 */
class RefundPaymentInstructionBuilder
{
    /**
     * @var RefundPaymentInstruction
     */
    private $instance;

    private function __construct(RefundPaymentInstruction $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund payment instruction Builder object.
     */
    public static function init(): self
    {
        return new self(new RefundPaymentInstruction());
    }

    /**
     * Sets platform fees field.
     */
    public function platformFees(?array $value): self
    {
        $this->instance->setPlatformFees($value);
        return $this;
    }

    /**
     * Initializes a new refund payment instruction object.
     */
    public function build(): RefundPaymentInstruction
    {
        return CoreHelper::clone($this->instance);
    }
}
