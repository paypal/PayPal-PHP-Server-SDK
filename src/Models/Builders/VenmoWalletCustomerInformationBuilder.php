<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\VenmoWalletCustomerInformation;

/**
 * Builder for model VenmoWalletCustomerInformation
 *
 * @see VenmoWalletCustomerInformation
 */
class VenmoWalletCustomerInformationBuilder
{
    /**
     * @var VenmoWalletCustomerInformation
     */
    private $instance;

    private function __construct(VenmoWalletCustomerInformation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new venmo wallet customer information Builder object.
     */
    public static function init(): self
    {
        return new self(new VenmoWalletCustomerInformation());
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
     * Sets email address field.
     */
    public function emailAddress(?string $value): self
    {
        $this->instance->setEmailAddress($value);
        return $this;
    }

    /**
     * Initializes a new venmo wallet customer information object.
     */
    public function build(): VenmoWalletCustomerInformation
    {
        return CoreHelper::clone($this->instance);
    }
}