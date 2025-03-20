<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\OrderUpdateCallbackRequest;
use PaypalServerSdkLib\Models\OrderUpdateCallbackShippingAddress;
use PaypalServerSdkLib\Models\OrderUpdateCallbackShippingOption;
use PaypalServerSdkLib\Models\PurchaseUnitRequest;

/**
 * Builder for model OrderUpdateCallbackRequest
 *
 * @see OrderUpdateCallbackRequest
 */
class OrderUpdateCallbackRequestBuilder
{
    /**
     * @var OrderUpdateCallbackRequest
     */
    private $instance;

    private function __construct(OrderUpdateCallbackRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Order Update Callback Request Builder object.
     *
     * @param OrderUpdateCallbackShippingAddress $shippingAddress
     * @param PurchaseUnitRequest[] $purchaseUnits
     */
    public static function init(OrderUpdateCallbackShippingAddress $shippingAddress, array $purchaseUnits): self
    {
        return new self(new OrderUpdateCallbackRequest($shippingAddress, $purchaseUnits));
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
     * Sets shipping option field.
     *
     * @param OrderUpdateCallbackShippingOption|null $value
     */
    public function shippingOption(?OrderUpdateCallbackShippingOption $value): self
    {
        $this->instance->setShippingOption($value);
        return $this;
    }

    /**
     * Initializes a new Order Update Callback Request object.
     */
    public function build(): OrderUpdateCallbackRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
