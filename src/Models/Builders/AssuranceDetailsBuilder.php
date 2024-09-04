<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\AssuranceDetails;

/**
 * Builder for model AssuranceDetails
 *
 * @see AssuranceDetails
 */
class AssuranceDetailsBuilder
{
    /**
     * @var AssuranceDetails
     */
    private $instance;

    private function __construct(AssuranceDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new assurance details Builder object.
     */
    public static function init(): self
    {
        return new self(new AssuranceDetails());
    }

    /**
     * Sets account verified field.
     */
    public function accountVerified(?bool $value): self
    {
        $this->instance->setAccountVerified($value);
        return $this;
    }

    /**
     * Sets card holder authenticated field.
     */
    public function cardHolderAuthenticated(?bool $value): self
    {
        $this->instance->setCardHolderAuthenticated($value);
        return $this;
    }

    /**
     * Initializes a new assurance details object.
     */
    public function build(): AssuranceDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
