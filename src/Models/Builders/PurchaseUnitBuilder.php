<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\AmountWithBreakdown;
use PaypalServerSDKLib\Models\Payee;
use PaypalServerSDKLib\Models\PaymentCollection;
use PaypalServerSDKLib\Models\PaymentInstruction;
use PaypalServerSDKLib\Models\PurchaseUnit;
use PaypalServerSDKLib\Models\ShippingWithTrackingDetails;
use PaypalServerSDKLib\Models\SupplementaryData;

/**
 * Builder for model PurchaseUnit
 *
 * @see PurchaseUnit
 */
class PurchaseUnitBuilder
{
    /**
     * @var PurchaseUnit
     */
    private $instance;

    private function __construct(PurchaseUnit $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new purchase unit Builder object.
     */
    public static function init(): self
    {
        return new self(new PurchaseUnit());
    }

    /**
     * Sets reference id field.
     */
    public function referenceId(?string $value): self
    {
        $this->instance->setReferenceId($value);
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?AmountWithBreakdown $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets payee field.
     */
    public function payee(?Payee $value): self
    {
        $this->instance->setPayee($value);
        return $this;
    }

    /**
     * Sets payment instruction field.
     */
    public function paymentInstruction(?PaymentInstruction $value): self
    {
        $this->instance->setPaymentInstruction($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets custom id field.
     */
    public function customId(?string $value): self
    {
        $this->instance->setCustomId($value);
        return $this;
    }

    /**
     * Sets invoice id field.
     */
    public function invoiceId(?string $value): self
    {
        $this->instance->setInvoiceId($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets soft descriptor field.
     */
    public function softDescriptor(?string $value): self
    {
        $this->instance->setSoftDescriptor($value);
        return $this;
    }

    /**
     * Sets items field.
     */
    public function items(?array $value): self
    {
        $this->instance->setItems($value);
        return $this;
    }

    /**
     * Sets shipping field.
     */
    public function shipping(?ShippingWithTrackingDetails $value): self
    {
        $this->instance->setShipping($value);
        return $this;
    }

    /**
     * Sets supplementary data field.
     */
    public function supplementaryData(?SupplementaryData $value): self
    {
        $this->instance->setSupplementaryData($value);
        return $this;
    }

    /**
     * Sets payments field.
     */
    public function payments(?PaymentCollection $value): self
    {
        $this->instance->setPayments($value);
        return $this;
    }

    /**
     * Sets most recent errors field.
     */
    public function mostRecentErrors(array $value): self
    {
        $this->instance->setMostRecentErrors($value);
        return $this;
    }

    /**
     * Initializes a new purchase unit object.
     */
    public function build(): PurchaseUnit
    {
        return CoreHelper::clone($this->instance);
    }
}
