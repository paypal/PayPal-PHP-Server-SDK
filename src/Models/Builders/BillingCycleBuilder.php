<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\BillingCycle;
use PaypalServerSdkLib\Models\PricingScheme;

/**
 * Builder for model BillingCycle
 *
 * @see BillingCycle
 */
class BillingCycleBuilder
{
    /**
     * @var BillingCycle
     */
    private $instance;

    private function __construct(BillingCycle $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Billing Cycle Builder object.
     *
     * @param string $tenureType
     */
    public static function init(string $tenureType): self
    {
        return new self(new BillingCycle($tenureType));
    }

    /**
     * Sets pricing scheme field.
     *
     * @param PricingScheme|null $value
     */
    public function pricingScheme(?PricingScheme $value): self
    {
        $this->instance->setPricingScheme($value);
        return $this;
    }

    /**
     * Sets frequency field.
     *
     * @param mixed $value
     */
    public function frequency($value): self
    {
        $this->instance->setFrequency($value);
        return $this;
    }

    /**
     * Sets total cycles field.
     *
     * @param int|null $value
     */
    public function totalCycles(?int $value): self
    {
        $this->instance->setTotalCycles($value);
        return $this;
    }

    /**
     * Sets sequence field.
     *
     * @param int|null $value
     */
    public function sequence(?int $value): self
    {
        $this->instance->setSequence($value);
        return $this;
    }

    /**
     * Sets start date field.
     *
     * @param string|null $value
     */
    public function startDate(?string $value): self
    {
        $this->instance->setStartDate($value);
        return $this;
    }

    /**
     * Initializes a new Billing Cycle object.
     */
    public function build(): BillingCycle
    {
        return CoreHelper::clone($this->instance);
    }
}
