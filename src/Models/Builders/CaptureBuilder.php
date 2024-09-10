<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\Capture;
use PaypalServerSDKLib\Models\CaptureStatusDetails;
use PaypalServerSDKLib\Models\Money;
use PaypalServerSDKLib\Models\NetworkTransactionReference;
use PaypalServerSDKLib\Models\ProcessorResponse;
use PaypalServerSDKLib\Models\SellerProtection;
use PaypalServerSDKLib\Models\SellerReceivableBreakdown;

/**
 * Builder for model Capture
 *
 * @see Capture
 */
class CaptureBuilder
{
    /**
     * @var Capture
     */
    private $instance;

    private function __construct(Capture $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new capture Builder object.
     */
    public static function init(): self
    {
        return new self(new Capture());
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
    public function statusDetails(?CaptureStatusDetails $value): self
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
     * Sets network transaction reference field.
     */
    public function networkTransactionReference(?NetworkTransactionReference $value): self
    {
        $this->instance->setNetworkTransactionReference($value);
        return $this;
    }

    /**
     * Sets seller protection field.
     */
    public function sellerProtection(?SellerProtection $value): self
    {
        $this->instance->setSellerProtection($value);
        return $this;
    }

    /**
     * Sets final capture field.
     */
    public function finalCapture(?bool $value): self
    {
        $this->instance->setFinalCapture($value);
        return $this;
    }

    /**
     * Sets seller receivable breakdown field.
     */
    public function sellerReceivableBreakdown(?SellerReceivableBreakdown $value): self
    {
        $this->instance->setSellerReceivableBreakdown($value);
        return $this;
    }

    /**
     * Sets disbursement mode field.
     */
    public function disbursementMode(?string $value): self
    {
        $this->instance->setDisbursementMode($value);
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
     * Sets processor response field.
     */
    public function processorResponse(?ProcessorResponse $value): self
    {
        $this->instance->setProcessorResponse($value);
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
     * Initializes a new capture object.
     */
    public function build(): Capture
    {
        return CoreHelper::clone($this->instance);
    }
}
