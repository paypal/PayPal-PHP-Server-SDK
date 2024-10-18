<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\ExperienceContext;
use PaypalServerSdkLib\Models\GiropayPaymentRequest;

/**
 * Builder for model GiropayPaymentRequest
 *
 * @see GiropayPaymentRequest
 */
class GiropayPaymentRequestBuilder
{
    /**
     * @var GiropayPaymentRequest
     */
    private $instance;

    private function __construct(GiropayPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new giropay payment request Builder object.
     */
    public static function init(string $name, string $countryCode): self
    {
        return new self(new GiropayPaymentRequest($name, $countryCode));
    }

    /**
     * Sets experience context field.
     */
    public function experienceContext(?ExperienceContext $value): self
    {
        $this->instance->setExperienceContext($value);
        return $this;
    }

    /**
     * Initializes a new giropay payment request object.
     */
    public function build(): GiropayPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
