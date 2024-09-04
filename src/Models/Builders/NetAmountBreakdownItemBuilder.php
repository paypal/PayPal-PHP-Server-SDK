<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\ExchangeRate;
use PayPalRESTAPIsLib\Models\Money;
use PayPalRESTAPIsLib\Models\NetAmountBreakdownItem;

/**
 * Builder for model NetAmountBreakdownItem
 *
 * @see NetAmountBreakdownItem
 */
class NetAmountBreakdownItemBuilder
{
    /**
     * @var NetAmountBreakdownItem
     */
    private $instance;

    private function __construct(NetAmountBreakdownItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new net amount breakdown item Builder object.
     */
    public static function init(): self
    {
        return new self(new NetAmountBreakdownItem());
    }

    /**
     * Sets payable amount field.
     */
    public function payableAmount(?Money $value): self
    {
        $this->instance->setPayableAmount($value);
        return $this;
    }

    /**
     * Sets converted amount field.
     */
    public function convertedAmount(?Money $value): self
    {
        $this->instance->setConvertedAmount($value);
        return $this;
    }

    /**
     * Sets exchange rate field.
     */
    public function exchangeRate(?ExchangeRate $value): self
    {
        $this->instance->setExchangeRate($value);
        return $this;
    }

    /**
     * Initializes a new net amount breakdown item object.
     */
    public function build(): NetAmountBreakdownItem
    {
        return CoreHelper::clone($this->instance);
    }
}
