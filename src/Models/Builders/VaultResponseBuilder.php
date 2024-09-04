<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\VaultCustomer;
use PayPalRESTAPIsLib\Models\VaultResponse;

/**
 * Builder for model VaultResponse
 *
 * @see VaultResponse
 */
class VaultResponseBuilder
{
    /**
     * @var VaultResponse
     */
    private $instance;

    private function __construct(VaultResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new vault response Builder object.
     */
    public static function init(): self
    {
        return new self(new VaultResponse());
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets customer field.
     */
    public function customer(?VaultCustomer $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Sets links field.
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new vault response object.
     */
    public function build(): VaultResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
