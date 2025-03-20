<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\ErrorDetails;
use PaypalServerSdkLib\Models\LinkDescription;

/**
 * Builder for model ErrorDetails
 *
 * @see ErrorDetails
 */
class ErrorDetailsBuilder
{
    /**
     * @var ErrorDetails
     */
    private $instance;

    private function __construct(ErrorDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Error Details Builder object.
     *
     * @param string $issue
     */
    public static function init(string $issue): self
    {
        return new self(new ErrorDetails($issue));
    }

    /**
     * Sets field field.
     *
     * @param string|null $value
     */
    public function field(?string $value): self
    {
        $this->instance->setField($value);
        return $this;
    }

    /**
     * Sets value field.
     *
     * @param string|null $value
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Sets location field.
     *
     * @param string|null $value
     */
    public function location(?string $value): self
    {
        $this->instance->setLocation($value);
        return $this;
    }

    /**
     * Sets links field.
     *
     * @param LinkDescription[]|null $value
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Initializes a new Error Details object.
     */
    public function build(): ErrorDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
