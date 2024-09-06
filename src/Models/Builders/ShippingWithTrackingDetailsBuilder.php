<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\Address;
use PayPalRESTAPIsLib\Models\ShippingName;
use PayPalRESTAPIsLib\Models\ShippingWithTrackingDetails;

/**
 * Builder for model ShippingWithTrackingDetails
 *
 * @see ShippingWithTrackingDetails
 */
class ShippingWithTrackingDetailsBuilder
{
    /**
     * @var ShippingWithTrackingDetails
     */
    private $instance;

    private function __construct(ShippingWithTrackingDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new shipping with tracking details Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingWithTrackingDetails());
    }

    /**
     * Sets name field.
     */
    public function name(?ShippingName $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets options field.
     */
    public function options(?array $value): self
    {
        $this->instance->setOptions($value);
        return $this;
    }

    /**
     * Sets address field.
     */
    public function address(?Address $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets trackers field.
     */
    public function trackers(?array $value): self
    {
        $this->instance->setTrackers($value);
        return $this;
    }

    /**
     * Initializes a new shipping with tracking details object.
     */
    public function build(): ShippingWithTrackingDetails
    {
        return CoreHelper::clone($this->instance);
    }
}