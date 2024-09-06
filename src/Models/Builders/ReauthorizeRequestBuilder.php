<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\Money;
use PayPalRESTAPIsLib\Models\ReauthorizeRequest;

/**
 * Builder for model ReauthorizeRequest
 *
 * @see ReauthorizeRequest
 */
class ReauthorizeRequestBuilder
{
    /**
     * @var ReauthorizeRequest
     */
    private $instance;

    private function __construct(ReauthorizeRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new reauthorize request Builder object.
     */
    public static function init(): self
    {
        return new self(new ReauthorizeRequest());
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
     * Initializes a new reauthorize request object.
     */
    public function build(): ReauthorizeRequest
    {
        return CoreHelper::clone($this->instance);
    }
}