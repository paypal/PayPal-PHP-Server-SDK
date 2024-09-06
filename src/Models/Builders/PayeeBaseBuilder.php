<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\PayeeBase;

/**
 * Builder for model PayeeBase
 *
 * @see PayeeBase
 */
class PayeeBaseBuilder
{
    /**
     * @var PayeeBase
     */
    private $instance;

    private function __construct(PayeeBase $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payee base Builder object.
     */
    public static function init(): self
    {
        return new self(new PayeeBase());
    }

    /**
     * Sets email address field.
     */
    public function emailAddress(?string $value): self
    {
        $this->instance->setEmailAddress($value);
        return $this;
    }

    /**
     * Sets merchant id field.
     */
    public function merchantId(?string $value): self
    {
        $this->instance->setMerchantId($value);
        return $this;
    }

    /**
     * Initializes a new payee base object.
     */
    public function build(): PayeeBase
    {
        return CoreHelper::clone($this->instance);
    }
}
