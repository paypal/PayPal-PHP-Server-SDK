<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\ExperienceContext;
use PayPalRESTAPIsLib\Models\SofortPaymentRequest;

/**
 * Builder for model SofortPaymentRequest
 *
 * @see SofortPaymentRequest
 */
class SofortPaymentRequestBuilder
{
    /**
     * @var SofortPaymentRequest
     */
    private $instance;

    private function __construct(SofortPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sofort payment request Builder object.
     */
    public static function init(string $name, string $countryCode): self
    {
        return new self(new SofortPaymentRequest($name, $countryCode));
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
     * Initializes a new sofort payment request object.
     */
    public function build(): SofortPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}