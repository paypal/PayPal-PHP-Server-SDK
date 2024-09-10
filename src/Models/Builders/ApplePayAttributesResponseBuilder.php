<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\ApplePayAttributesResponse;
use PaypalServerSDKLib\Models\VaultResponse;

/**
 * Builder for model ApplePayAttributesResponse
 *
 * @see ApplePayAttributesResponse
 */
class ApplePayAttributesResponseBuilder
{
    /**
     * @var ApplePayAttributesResponse
     */
    private $instance;

    private function __construct(ApplePayAttributesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new apple pay attributes response Builder object.
     */
    public static function init(): self
    {
        return new self(new ApplePayAttributesResponse());
    }

    /**
     * Sets vault field.
     */
    public function vault(?VaultResponse $value): self
    {
        $this->instance->setVault($value);
        return $this;
    }

    /**
     * Initializes a new apple pay attributes response object.
     */
    public function build(): ApplePayAttributesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}