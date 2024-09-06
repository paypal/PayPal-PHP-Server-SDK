<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models;

use stdClass;

/**
 * Identifiers related to a specific resource.
 */
class RelatedIdentifiers implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $orderId;

    /**
     * @var string|null
     */
    private $authorizationId;

    /**
     * @var string|null
     */
    private $captureId;

    /**
     * Returns Order Id.
     * Order ID related to the resource.
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * Sets Order Id.
     * Order ID related to the resource.
     *
     * @maps order_id
     */
    public function setOrderId(?string $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * Returns Authorization Id.
     * Authorization ID related to the resource.
     */
    public function getAuthorizationId(): ?string
    {
        return $this->authorizationId;
    }

    /**
     * Sets Authorization Id.
     * Authorization ID related to the resource.
     *
     * @maps authorization_id
     */
    public function setAuthorizationId(?string $authorizationId): void
    {
        $this->authorizationId = $authorizationId;
    }

    /**
     * Returns Capture Id.
     * Capture ID related to the resource.
     */
    public function getCaptureId(): ?string
    {
        return $this->captureId;
    }

    /**
     * Sets Capture Id.
     * Capture ID related to the resource.
     *
     * @maps capture_id
     */
    public function setCaptureId(?string $captureId): void
    {
        $this->captureId = $captureId;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->orderId)) {
            $json['order_id']         = $this->orderId;
        }
        if (isset($this->authorizationId)) {
            $json['authorization_id'] = $this->authorizationId;
        }
        if (isset($this->captureId)) {
            $json['capture_id']       = $this->captureId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}