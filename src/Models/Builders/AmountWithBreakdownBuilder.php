<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\AmountBreakdown;
use PaypalServerSdkLib\Models\AmountWithBreakdown;

/**
 * Builder for model AmountWithBreakdown
 *
 * @see AmountWithBreakdown
 */
class AmountWithBreakdownBuilder
{
    /**
     * @var AmountWithBreakdown
     */
    private $instance;

    private function __construct(AmountWithBreakdown $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Amount With Breakdown Builder object.
     *
     * @param string $currencyCode
     * @param string $value
     */
    public static function init(string $currencyCode, string $value): self
    {
        return new self(new AmountWithBreakdown($currencyCode, $value));
    }

    /**
     * Sets breakdown field.
     *
     * @param AmountBreakdown|null $value
     */
    public function breakdown(?AmountBreakdown $value): self
    {
        $this->instance->setBreakdown($value);
        return $this;
    }

    /**
     * Initializes a new Amount With Breakdown object.
     */
    public function build(): AmountWithBreakdown
    {
        return CoreHelper::clone($this->instance);
    }
}
