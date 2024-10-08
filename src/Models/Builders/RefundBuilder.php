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
use PaypalServerSDKLib\Models\PayeeBase;
use PaypalServerSDKLib\Models\Refund;
use PaypalServerSDKLib\Models\RefundStatusDetails;
use PaypalServerSDKLib\Models\SellerPayableBreakdown;

/**
 * Builder for model Refund
 *
 * @see Refund
 */
class RefundBuilder
{
    /**
     * @var Refund
     */
    private $instance;

    private function __construct(Refund $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund Builder object.
     */
    public static function init(): self
    {
        return new self(new Refund());
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
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?Money $value): self
    {
        $this->instance->setAmount($value);
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
     * Sets custom id field.
     */
    public function customId(?string $value): self
    {
        $this->instance->setCustomId($value);
        return $this;
    }

    /**
     * Sets acquirer reference number field.
     */
    public function acquirerReferenceNumber(?string $value): self
    {
        $this->instance->setAcquirerReferenceNumber($value);
        return $this;
    }

    /**
     * Sets note to payer field.
     */
    public function noteToPayer(?string $value): self
    {
        $this->instance->setNoteToPayer($value);
        return $this;
    }

    /**
     * Sets seller payable breakdown field.
     */
    public function sellerPayableBreakdown(?SellerPayableBreakdown $value): self
    {
        $this->instance->setSellerPayableBreakdown($value);
        return $this;
    }

    /**
     * Sets payer field.
     */
    public function payer(?PayeeBase $value): self
    {
        $this->instance->setPayer($value);
        return $this;
    }

    /**
     * Sets links field.
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Sets create time field.
     */
    public function createTime(?string $value): self
    {
        $this->instance->setCreateTime($value);
        return $this;
    }

    /**
     * Sets update time field.
     */
    public function updateTime(?string $value): self
    {
        $this->instance->setUpdateTime($value);
        return $this;
    }

    /**
     * Initializes a new refund object.
     */
    public function build(): Refund
    {
        return CoreHelper::clone($this->instance);
    }
}
