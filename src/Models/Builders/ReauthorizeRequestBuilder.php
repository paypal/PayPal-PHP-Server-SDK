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
use PaypalServerSdkLib\Models\ReauthorizeRequest;

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
     * Initializes a new Reauthorize Request Builder object.
     */
    public static function init(): self
    {
        return new self(new ReauthorizeRequest());
    }

    /**
     * Sets amount field.
     *
     * @param Money|null $value
     */
    public function amount(?Money $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Initializes a new Reauthorize Request object.
     */
    public function build(): ReauthorizeRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
