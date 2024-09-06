<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\ACHDebitResponse;

/**
 * Builder for model ACHDebitResponse
 *
 * @see ACHDebitResponse
 */
class ACHDebitResponseBuilder
{
    /**
     * @var ACHDebitResponse
     */
    private $instance;

    private function __construct(ACHDebitResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new achdebit response Builder object.
     */
    public static function init(): self
    {
        return new self(new ACHDebitResponse());
    }

    /**
     * Sets verification status field.
     */
    public function verificationStatus(?string $value): self
    {
        $this->instance->setVerificationStatus($value);
        return $this;
    }

    /**
     * Initializes a new achdebit response object.
     */
    public function build(): ACHDebitResponse
    {
        return CoreHelper::clone($this->instance);
    }
}