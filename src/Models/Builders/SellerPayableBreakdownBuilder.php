<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\Money;
use PaypalServerSDKLib\Models\SellerPayableBreakdown;

/**
 * Builder for model SellerPayableBreakdown
 *
 * @see SellerPayableBreakdown
 */
class SellerPayableBreakdownBuilder
{
    /**
     * @var SellerPayableBreakdown
     */
    private $instance;

    private function __construct(SellerPayableBreakdown $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new seller payable breakdown Builder object.
     */
    public static function init(): self
    {
        return new self(new SellerPayableBreakdown());
    }

    /**
     * Sets gross amount field.
     */
    public function grossAmount(?Money $value): self
    {
        $this->instance->setGrossAmount($value);
        return $this;
    }

    /**
     * Sets paypal fee field.
     */
    public function paypalFee(?Money $value): self
    {
        $this->instance->setPaypalFee($value);
        return $this;
    }

    /**
     * Sets paypal fee in receivable currency field.
     */
    public function paypalFeeInReceivableCurrency(?Money $value): self
    {
        $this->instance->setPaypalFeeInReceivableCurrency($value);
        return $this;
    }

    /**
     * Sets net amount field.
     */
    public function netAmount(?Money $value): self
    {
        $this->instance->setNetAmount($value);
        return $this;
    }

    /**
     * Sets net amount in receivable currency field.
     */
    public function netAmountInReceivableCurrency(?Money $value): self
    {
        $this->instance->setNetAmountInReceivableCurrency($value);
        return $this;
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
     * Sets net amount breakdown field.
     */
    public function netAmountBreakdown(?array $value): self
    {
        $this->instance->setNetAmountBreakdown($value);
        return $this;
    }

    /**
     * Sets total refunded amount field.
     */
    public function totalRefundedAmount(?Money $value): self
    {
        $this->instance->setTotalRefundedAmount($value);
        return $this;
    }

    /**
     * Initializes a new seller payable breakdown object.
     */
    public function build(): SellerPayableBreakdown
    {
        return CoreHelper::clone($this->instance);
    }
}
