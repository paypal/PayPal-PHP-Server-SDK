<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\OrderApplicationContext;
use PaypalServerSDKLib\Models\OrderRequest;
use PaypalServerSDKLib\Models\Payer;
use PaypalServerSDKLib\Models\PaymentSource;

/**
 * Builder for model OrderRequest
 *
 * @see OrderRequest
 */
class OrderRequestBuilder
{
    /**
     * @var OrderRequest
     */
    private $instance;

    private function __construct(OrderRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new order request Builder object.
     */
    public static function init(string $intent, array $purchaseUnits): self
    {
        return new self(new OrderRequest($intent, $purchaseUnits));
    }

    /**
     * Sets payer field.
     */
    public function payer(?Payer $value): self
    {
        $this->instance->setPayer($value);
        return $this;
    }

    /**
     * Sets payment source field.
     */
    public function paymentSource(?PaymentSource $value): self
    {
        $this->instance->setPaymentSource($value);
        return $this;
    }

    /**
     * Sets application context field.
     */
    public function applicationContext(?OrderApplicationContext $value): self
    {
        $this->instance->setApplicationContext($value);
        return $this;
    }

    /**
     * Initializes a new order request object.
     */
    public function build(): OrderRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
