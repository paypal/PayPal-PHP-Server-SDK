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
 * Additional attributes associated with the use of this card.
 */
class GooglePayCardAttributes implements \JsonSerializable
{
    /**
     * @var CardVerification|null
     */
    private $verification;

    /**
     * Returns Verification.
     * The API caller can opt in to verify the card through PayPal offered verification services (e.g.
     * Smart Dollar Auth, 3DS).
     */
    public function getVerification(): ?CardVerification
    {
        return $this->verification;
    }

    /**
     * Sets Verification.
     * The API caller can opt in to verify the card through PayPal offered verification services (e.g.
     * Smart Dollar Auth, 3DS).
     *
     * @maps verification
     */
    public function setVerification(?CardVerification $verification): void
    {
        $this->verification = $verification;
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
        if (isset($this->verification)) {
            $json['verification'] = $this->verification;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
