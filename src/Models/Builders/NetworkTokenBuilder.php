<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\NetworkToken;

/**
 * Builder for model NetworkToken
 *
 * @see NetworkToken
 */
class NetworkTokenBuilder
{
    /**
     * @var NetworkToken
     */
    private $instance;

    private function __construct(NetworkToken $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new network token Builder object.
     */
    public static function init(string $number, string $expiry): self
    {
        return new self(new NetworkToken($number, $expiry));
    }

    /**
     * Sets cryptogram field.
     */
    public function cryptogram(?string $value): self
    {
        $this->instance->setCryptogram($value);
        return $this;
    }

    /**
     * Sets eci flag field.
     */
    public function eciFlag(?string $value): self
    {
        $this->instance->setEciFlag($value);
        return $this;
    }

    /**
     * Sets token requestor id field.
     */
    public function tokenRequestorId(?string $value): self
    {
        $this->instance->setTokenRequestorId($value);
        return $this;
    }

    /**
     * Initializes a new network token object.
     */
    public function build(): NetworkToken
    {
        return CoreHelper::clone($this->instance);
    }
}
