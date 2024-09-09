<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use stdClass;

/**
 * The processor response information for payment requests, such as direct credit card transactions.
 */
class CardVerificationProcessorResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $avsCode;

    /**
     * @var string|null
     */
    private $cvvCode;

    /**
     * Returns Avs Code.
     * The address verification code for Visa, Discover, Mastercard, or American Express transactions.
     */
    public function getAvsCode(): ?string
    {
        return $this->avsCode;
    }

    /**
     * Sets Avs Code.
     * The address verification code for Visa, Discover, Mastercard, or American Express transactions.
     *
     * @maps avs_code
     */
    public function setAvsCode(?string $avsCode): void
    {
        $this->avsCode = $avsCode;
    }

    /**
     * Returns Cvv Code.
     * The card verification value code for for Visa, Discover, Mastercard, or American Express.
     */
    public function getCvvCode(): ?string
    {
        return $this->cvvCode;
    }

    /**
     * Sets Cvv Code.
     * The card verification value code for for Visa, Discover, Mastercard, or American Express.
     *
     * @maps cvv_code
     */
    public function setCvvCode(?string $cvvCode): void
    {
        $this->cvvCode = $cvvCode;
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
        if (isset($this->avsCode)) {
            $json['avs_code'] = AVSCode::checkValue($this->avsCode);
        }
        if (isset($this->cvvCode)) {
            $json['cvv_code'] = CVVCode::checkValue($this->cvvCode);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
