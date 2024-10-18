<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\CardVerificationProcessorResponse;

/**
 * Builder for model CardVerificationProcessorResponse
 *
 * @see CardVerificationProcessorResponse
 */
class CardVerificationProcessorResponseBuilder
{
    /**
     * @var CardVerificationProcessorResponse
     */
    private $instance;

    private function __construct(CardVerificationProcessorResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new card verification processor response Builder object.
     */
    public static function init(): self
    {
        return new self(new CardVerificationProcessorResponse());
    }

    /**
     * Sets avs code field.
     */
    public function avsCode(?string $value): self
    {
        $this->instance->setAvsCode($value);
        return $this;
    }

    /**
     * Sets cvv code field.
     */
    public function cvvCode(?string $value): self
    {
        $this->instance->setCvvCode($value);
        return $this;
    }

    /**
     * Initializes a new card verification processor response object.
     */
    public function build(): CardVerificationProcessorResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
