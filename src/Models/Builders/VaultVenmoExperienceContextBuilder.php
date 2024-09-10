<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\VaultVenmoExperienceContext;

/**
 * Builder for model VaultVenmoExperienceContext
 *
 * @see VaultVenmoExperienceContext
 */
class VaultVenmoExperienceContextBuilder
{
    /**
     * @var VaultVenmoExperienceContext
     */
    private $instance;

    private function __construct(VaultVenmoExperienceContext $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new vault venmo experience context Builder object.
     */
    public static function init(): self
    {
        return new self(new VaultVenmoExperienceContext());
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
     * Sets shipping preference field.
     */
    public function shippingPreference(?string $value): self
    {
        $this->instance->setShippingPreference($value);
        return $this;
    }

    /**
     * Sets vault instruction field.
     */
    public function vaultInstruction(?string $value): self
    {
        $this->instance->setVaultInstruction($value);
        return $this;
    }

    /**
     * Initializes a new vault venmo experience context object.
     */
    public function build(): VaultVenmoExperienceContext
    {
        return CoreHelper::clone($this->instance);
    }
}