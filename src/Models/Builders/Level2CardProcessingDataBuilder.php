<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\Level2CardProcessingData;
use PayPalRESTAPIsLib\Models\Money;

/**
 * Builder for model Level2CardProcessingData
 *
 * @see Level2CardProcessingData
 */
class Level2CardProcessingDataBuilder
{
    /**
     * @var Level2CardProcessingData
     */
    private $instance;

    private function __construct(Level2CardProcessingData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new level 2 card processing data Builder object.
     */
    public static function init(): self
    {
        return new self(new Level2CardProcessingData());
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
     * Sets tax total field.
     */
    public function taxTotal(?Money $value): self
    {
        $this->instance->setTaxTotal($value);
        return $this;
    }

    /**
     * Initializes a new level 2 card processing data object.
     */
    public function build(): Level2CardProcessingData
    {
        return CoreHelper::clone($this->instance);
    }
}