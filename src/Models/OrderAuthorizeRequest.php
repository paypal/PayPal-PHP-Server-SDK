<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models;

use stdClass;

/**
 * The authorization of an order request.
 */
class OrderAuthorizeRequest implements \JsonSerializable
{
    /**
     * @var OrderAuthorizeRequestPaymentSource|null
     */
    private $paymentSource;

    /**
     * Returns Payment Source.
     * The payment source definition.
     */
    public function getPaymentSource(): ?OrderAuthorizeRequestPaymentSource
    {
        return $this->paymentSource;
    }

    /**
     * Sets Payment Source.
     * The payment source definition.
     *
     * @maps payment_source
     */
    public function setPaymentSource(?OrderAuthorizeRequestPaymentSource $paymentSource): void
    {
        $this->paymentSource = $paymentSource;
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
        if (isset($this->paymentSource)) {
            $json['payment_source'] = $this->paymentSource;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
