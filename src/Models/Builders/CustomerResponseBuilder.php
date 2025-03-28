<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\CustomerResponse;

/**
 * Builder for model CustomerResponse
 *
 * @see CustomerResponse
 */
class CustomerResponseBuilder
{
    /**
     * @var CustomerResponse
     */
    private $instance;

    private function __construct(CustomerResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customer Response Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomerResponse());
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets merchant customer id field.
     *
     * @param string|null $value
     */
    public function merchantCustomerId(?string $value): self
    {
        $this->instance->setMerchantCustomerId($value);
        return $this;
    }

    /**
     * Initializes a new Customer Response object.
     */
    public function build(): CustomerResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
