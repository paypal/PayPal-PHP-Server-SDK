<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use PaypalServerSdkLib\ApiHelper;
use stdClass;

/**
 * Metadata for merchant-managed recurring billing plans. Valid only during the saved payment method
 * token or billing agreement creation.
 */
class OrderBillingPlan implements \JsonSerializable
{
    /**
     * @var BillingCycle[]
     */
    private $billingCycles;

    /**
     * @var Money|null
     */
    private $setupFee;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @param BillingCycle[] $billingCycles
     */
    public function __construct(array $billingCycles)
    {
        $this->billingCycles = $billingCycles;
    }

    /**
     * Returns Billing Cycles.
     * An array of billing cycles for trial billing and regular billing. A plan can have at most two trial
     * cycles and only one regular cycle.
     *
     * @return BillingCycle[]
     */
    public function getBillingCycles(): array
    {
        return $this->billingCycles;
    }

    /**
     * Sets Billing Cycles.
     * An array of billing cycles for trial billing and regular billing. A plan can have at most two trial
     * cycles and only one regular cycle.
     *
     * @required
     * @maps billing_cycles
     *
     * @param BillingCycle[] $billingCycles
     */
    public function setBillingCycles(array $billingCycles): void
    {
        $this->billingCycles = $billingCycles;
    }

    /**
     * Returns Setup Fee.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getSetupFee(): ?Money
    {
        return $this->setupFee;
    }

    /**
     * Sets Setup Fee.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps setup_fee
     */
    public function setSetupFee(?Money $setupFee): void
    {
        $this->setupFee = $setupFee;
    }

    /**
     * Returns Name.
     * Name of the recurring plan.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Name of the recurring plan.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Converts the OrderBillingPlan object to a human-readable string representation.
     *
     * @return string The string representation of the OrderBillingPlan object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'OrderBillingPlan',
            ['billingCycles' => $this->billingCycles, 'setupFee' => $this->setupFee, 'name' => $this->name]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['billing_cycles'] = $this->billingCycles;
        if (isset($this->setupFee)) {
            $json['setup_fee']  = $this->setupFee;
        }
        if (isset($this->name)) {
            $json['name']       = $this->name;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
