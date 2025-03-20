<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\BlikExperienceContext;
use PaypalServerSdkLib\Models\BlikLevel0PaymentObject;
use PaypalServerSdkLib\Models\BlikOneClickPaymentRequest;
use PaypalServerSdkLib\Models\BlikPaymentRequest;

/**
 * Builder for model BlikPaymentRequest
 *
 * @see BlikPaymentRequest
 */
class BlikPaymentRequestBuilder
{
    /**
     * @var BlikPaymentRequest
     */
    private $instance;

    private function __construct(BlikPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Blik Payment Request Builder object.
     *
     * @param string $name
     * @param string $countryCode
     */
    public static function init(string $name, string $countryCode): self
    {
        return new self(new BlikPaymentRequest($name, $countryCode));
    }

    /**
     * Sets email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Sets experience context field.
     *
     * @param BlikExperienceContext|null $value
     */
    public function experienceContext(?BlikExperienceContext $value): self
    {
        $this->instance->setExperienceContext($value);
        return $this;
    }

    /**
     * Sets level 0 field.
     *
     * @param BlikLevel0PaymentObject|null $value
     */
    public function level0(?BlikLevel0PaymentObject $value): self
    {
        $this->instance->setLevel0($value);
        return $this;
    }

    /**
     * Sets one click field.
     *
     * @param BlikOneClickPaymentRequest|null $value
     */
    public function oneClick(?BlikOneClickPaymentRequest $value): self
    {
        $this->instance->setOneClick($value);
        return $this;
    }

    /**
     * Initializes a new Blik Payment Request object.
     */
    public function build(): BlikPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
