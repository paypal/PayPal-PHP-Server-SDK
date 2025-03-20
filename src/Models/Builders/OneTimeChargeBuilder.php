<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\Money;
use PaypalServerSdkLib\Models\OneTimeCharge;

/**
 * Builder for model OneTimeCharge
 *
 * @see OneTimeCharge
 */
class OneTimeChargeBuilder
{
    /**
     * @var OneTimeCharge
     */
    private $instance;

    private function __construct(OneTimeCharge $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new One Time Charge Builder object.
     *
     * @param Money $totalAmount
     */
    public static function init(Money $totalAmount): self
    {
        return new self(new OneTimeCharge($totalAmount));
    }

    /**
     * Sets setup fee field.
     *
     * @param Money|null $value
     */
    public function setupFee(?Money $value): self
    {
        $this->instance->setSetupFee($value);
        return $this;
    }

    /**
     * Sets shipping amount field.
     *
     * @param Money|null $value
     */
    public function shippingAmount(?Money $value): self
    {
        $this->instance->setShippingAmount($value);
        return $this;
    }

    /**
     * Sets taxes field.
     *
     * @param Money|null $value
     */
    public function taxes(?Money $value): self
    {
        $this->instance->setTaxes($value);
        return $this;
    }

    /**
     * Sets product price field.
     *
     * @param Money|null $value
     */
    public function productPrice(?Money $value): self
    {
        $this->instance->setProductPrice($value);
        return $this;
    }

    /**
     * Sets subtotal field.
     *
     * @param Money|null $value
     */
    public function subtotal(?Money $value): self
    {
        $this->instance->setSubtotal($value);
        return $this;
    }

    /**
     * Initializes a new One Time Charge object.
     */
    public function build(): OneTimeCharge
    {
        return CoreHelper::clone($this->instance);
    }
}
