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
 * Results of Authentication such as 3D Secure.
 */
class CardAuthenticationResponse implements \JsonSerializable
{
    /**
     * @var ThreeDSecureCardAuthenticationResponse|null
     */
    private $threeDSecure;

    /**
     * Returns Three D Secure.
     * Results of 3D Secure Authentication.
     */
    public function getThreeDSecure(): ?ThreeDSecureCardAuthenticationResponse
    {
        return $this->threeDSecure;
    }

    /**
     * Sets Three D Secure.
     * Results of 3D Secure Authentication.
     *
     * @maps three_d_secure
     */
    public function setThreeDSecure(?ThreeDSecureCardAuthenticationResponse $threeDSecure): void
    {
        $this->threeDSecure = $threeDSecure;
    }

    /**
     * Converts the CardAuthenticationResponse object to a human-readable string representation.
     *
     * @return string The string representation of the CardAuthenticationResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('CardAuthenticationResponse', ['threeDSecure' => $this->threeDSecure]);
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
        if (isset($this->threeDSecure)) {
            $json['three_d_secure'] = $this->threeDSecure;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
