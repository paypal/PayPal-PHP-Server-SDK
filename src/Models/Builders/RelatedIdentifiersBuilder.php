<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\RelatedIdentifiers;

/**
 * Builder for model RelatedIdentifiers
 *
 * @see RelatedIdentifiers
 */
class RelatedIdentifiersBuilder
{
    /**
     * @var RelatedIdentifiers
     */
    private $instance;

    private function __construct(RelatedIdentifiers $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new related identifiers Builder object.
     */
    public static function init(): self
    {
        return new self(new RelatedIdentifiers());
    }

    /**
     * Sets order id field.
     */
    public function orderId(?string $value): self
    {
        $this->instance->setOrderId($value);
        return $this;
    }

    /**
     * Sets authorization id field.
     */
    public function authorizationId(?string $value): self
    {
        $this->instance->setAuthorizationId($value);
        return $this;
    }

    /**
     * Sets capture id field.
     */
    public function captureId(?string $value): self
    {
        $this->instance->setCaptureId($value);
        return $this;
    }

    /**
     * Initializes a new related identifiers object.
     */
    public function build(): RelatedIdentifiers
    {
        return CoreHelper::clone($this->instance);
    }
}
