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

/**
 * Builder for model Address
 *
 * @see Address
 */
class AddressBuilder
{
    /**
     * @var Address
     */
    private $instance;

    private function __construct(Address $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new address Builder object.
     */
    public static function init(string $countryCode): self
    {
        return new self(new Address($countryCode));
    }

    /**
     * Sets address line 1 field.
     */
    public function addressLine1(?string $value): self
    {
        $this->instance->setAddressLine1($value);
        return $this;
    }

    /**
     * Sets address line 2 field.
     */
    public function addressLine2(?string $value): self
    {
        $this->instance->setAddressLine2($value);
        return $this;
    }

    /**
     * Sets admin area 2 field.
     */
    public function adminArea2(?string $value): self
    {
        $this->instance->setAdminArea2($value);
        return $this;
    }

    /**
     * Sets admin area 1 field.
     */
    public function adminArea1(?string $value): self
    {
        $this->instance->setAdminArea1($value);
        return $this;
    }

    /**
     * Sets postal code field.
     */
    public function postalCode(?string $value): self
    {
        $this->instance->setPostalCode($value);
        return $this;
    }

    /**
     * Initializes a new address object.
     */
    public function build(): Address
    {
        return CoreHelper::clone($this->instance);
    }
}