<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use PaypalServerSdkLib\ApiHelper;
use stdClass;

/**
 * Profile information of the sender or receiver.
 */
class ParticipantMetadata implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $ipAddress;

    /**
     * Returns Ip Address.
     * An Internet Protocol address (IP address). This address assigns a numerical label to each device
     * that is connected to a computer network through the Internet Protocol. Supports IPv4 and IPv6
     * addresses.
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * Sets Ip Address.
     * An Internet Protocol address (IP address). This address assigns a numerical label to each device
     * that is connected to a computer network through the Internet Protocol. Supports IPv4 and IPv6
     * addresses.
     *
     * @maps ip_address
     */
    public function setIpAddress(?string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * Converts the ParticipantMetadata object to a human-readable string representation.
     *
     * @return string The string representation of the ParticipantMetadata object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('ParticipantMetadata', ['ipAddress' => $this->ipAddress]);
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
        if (isset($this->ipAddress)) {
            $json['ip_address'] = $this->ipAddress;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
