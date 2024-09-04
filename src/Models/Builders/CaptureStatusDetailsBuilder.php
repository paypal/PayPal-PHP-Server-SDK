<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\CaptureStatusDetails;

/**
 * Builder for model CaptureStatusDetails
 *
 * @see CaptureStatusDetails
 */
class CaptureStatusDetailsBuilder
{
    /**
     * @var CaptureStatusDetails
     */
    private $instance;

    private function __construct(CaptureStatusDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new capture status details Builder object.
     */
    public static function init(): self
    {
        return new self(new CaptureStatusDetails());
    }

    /**
     * Sets reason field.
     */
    public function reason(?string $value): self
    {
        $this->instance->setReason($value);
        return $this;
    }

    /**
     * Initializes a new capture status details object.
     */
    public function build(): CaptureStatusDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
