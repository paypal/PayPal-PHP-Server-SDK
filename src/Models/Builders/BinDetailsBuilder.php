<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\BinDetails;

/**
 * Builder for model BinDetails
 *
 * @see BinDetails
 */
class BinDetailsBuilder
{
    /**
     * @var BinDetails
     */
    private $instance;

    private function __construct(BinDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bin Details Builder object.
     */
    public static function init(): self
    {
        return new self(new BinDetails());
    }

    /**
     * Sets bin field.
     *
     * @param string|null $value
     */
    public function bin(?string $value): self
    {
        $this->instance->setBin($value);
        return $this;
    }

    /**
     * Sets issuing bank field.
     *
     * @param string|null $value
     */
    public function issuingBank(?string $value): self
    {
        $this->instance->setIssuingBank($value);
        return $this;
    }

    /**
     * Sets bin country code field.
     *
     * @param string|null $value
     */
    public function binCountryCode(?string $value): self
    {
        $this->instance->setBinCountryCode($value);
        return $this;
    }

    /**
     * Sets products field.
     *
     * @param string[]|null $value
     */
    public function products(?array $value): self
    {
        $this->instance->setProducts($value);
        return $this;
    }

    /**
     * Initializes a new Bin Details object.
     */
    public function build(): BinDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
