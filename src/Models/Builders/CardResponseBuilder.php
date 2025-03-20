<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\AuthenticationResponse;
use PaypalServerSdkLib\Models\BinDetails;
use PaypalServerSdkLib\Models\CardAttributesResponse;
use PaypalServerSdkLib\Models\CardFromRequest;
use PaypalServerSdkLib\Models\CardResponse;
use PaypalServerSdkLib\Models\CardStoredCredential;

/**
 * Builder for model CardResponse
 *
 * @see CardResponse
 */
class CardResponseBuilder
{
    /**
     * @var CardResponse
     */
    private $instance;

    private function __construct(CardResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Card Response Builder object.
     */
    public static function init(): self
    {
        return new self(new CardResponse());
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets last digits field.
     *
     * @param string|null $value
     */
    public function lastDigits(?string $value): self
    {
        $this->instance->setLastDigits($value);
        return $this;
    }

    /**
     * Sets brand field.
     *
     * @param string|null $value
     */
    public function brand(?string $value): self
    {
        $this->instance->setBrand($value);
        return $this;
    }

    /**
     * Sets available networks field.
     *
     * @param string[]|null $value
     */
    public function availableNetworks(?array $value): self
    {
        $this->instance->setAvailableNetworks($value);
        return $this;
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets authentication result field.
     *
     * @param AuthenticationResponse|null $value
     */
    public function authenticationResult(?AuthenticationResponse $value): self
    {
        $this->instance->setAuthenticationResult($value);
        return $this;
    }

    /**
     * Sets attributes field.
     *
     * @param CardAttributesResponse|null $value
     */
    public function attributes(?CardAttributesResponse $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Sets from request field.
     *
     * @param CardFromRequest|null $value
     */
    public function fromRequest(?CardFromRequest $value): self
    {
        $this->instance->setFromRequest($value);
        return $this;
    }

    /**
     * Sets expiry field.
     *
     * @param string|null $value
     */
    public function expiry(?string $value): self
    {
        $this->instance->setExpiry($value);
        return $this;
    }

    /**
     * Sets bin details field.
     *
     * @param BinDetails|null $value
     */
    public function binDetails(?BinDetails $value): self
    {
        $this->instance->setBinDetails($value);
        return $this;
    }

    /**
     * Sets stored credential field.
     *
     * @param CardStoredCredential|null $value
     */
    public function storedCredential(?CardStoredCredential $value): self
    {
        $this->instance->setStoredCredential($value);
        return $this;
    }

    /**
     * Initializes a new Card Response object.
     */
    public function build(): CardResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
