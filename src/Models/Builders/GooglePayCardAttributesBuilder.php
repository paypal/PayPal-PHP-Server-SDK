<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\CardVerification;
use PaypalServerSDKLib\Models\GooglePayCardAttributes;

/**
 * Builder for model GooglePayCardAttributes
 *
 * @see GooglePayCardAttributes
 */
class GooglePayCardAttributesBuilder
{
    /**
     * @var GooglePayCardAttributes
     */
    private $instance;

    private function __construct(GooglePayCardAttributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new google pay card attributes Builder object.
     */
    public static function init(): self
    {
        return new self(new GooglePayCardAttributes());
    }

    /**
     * Sets verification field.
     */
    public function verification(?CardVerification $value): self
    {
        $this->instance->setVerification($value);
        return $this;
    }

    /**
     * Initializes a new google pay card attributes object.
     */
    public function build(): GooglePayCardAttributes
    {
        return CoreHelper::clone($this->instance);
    }
}
