<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\VaultInstructionBase;

/**
 * Builder for model VaultInstructionBase
 *
 * @see VaultInstructionBase
 */
class VaultInstructionBaseBuilder
{
    /**
     * @var VaultInstructionBase
     */
    private $instance;

    private function __construct(VaultInstructionBase $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Vault Instruction Base Builder object.
     */
    public static function init(): self
    {
        return new self(new VaultInstructionBase());
    }

    /**
     * Sets store in vault field.
     *
     * @param string|null $value
     */
    public function storeInVault(?string $value): self
    {
        $this->instance->setStoreInVault($value);
        return $this;
    }

    /**
     * Initializes a new Vault Instruction Base object.
     */
    public function build(): VaultInstructionBase
    {
        return CoreHelper::clone($this->instance);
    }
}
