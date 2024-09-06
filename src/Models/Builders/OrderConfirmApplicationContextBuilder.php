<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\OrderConfirmApplicationContext;
use PayPalRESTAPIsLib\Models\StoredPaymentSource;

/**
 * Builder for model OrderConfirmApplicationContext
 *
 * @see OrderConfirmApplicationContext
 */
class OrderConfirmApplicationContextBuilder
{
    /**
     * @var OrderConfirmApplicationContext
     */
    private $instance;

    private function __construct(OrderConfirmApplicationContext $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new order confirm application context Builder object.
     */
    public static function init(): self
    {
        return new self(new OrderConfirmApplicationContext());
    }

    /**
     * Sets brand name field.
     */
    public function brandName(?string $value): self
    {
        $this->instance->setBrandName($value);
        return $this;
    }

    /**
     * Sets locale field.
     */
    public function locale(?string $value): self
    {
        $this->instance->setLocale($value);
        return $this;
    }

    /**
     * Sets return url field.
     */
    public function returnUrl(?string $value): self
    {
        $this->instance->setReturnUrl($value);
        return $this;
    }

    /**
     * Sets cancel url field.
     */
    public function cancelUrl(?string $value): self
    {
        $this->instance->setCancelUrl($value);
        return $this;
    }

    /**
     * Sets stored payment source field.
     */
    public function storedPaymentSource(?StoredPaymentSource $value): self
    {
        $this->instance->setStoredPaymentSource($value);
        return $this;
    }

    /**
     * Initializes a new order confirm application context object.
     */
    public function build(): OrderConfirmApplicationContext
    {
        return CoreHelper::clone($this->instance);
    }
}