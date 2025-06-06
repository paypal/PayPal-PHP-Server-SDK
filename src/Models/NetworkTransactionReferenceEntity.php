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
 * Previous network transaction reference including id and network.
 */
class NetworkTransactionReferenceEntity implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string|null
     */
    private $date;

    /**
     * @var string|null
     */
    private $network;

    /**
     * @var string|null
     */
    private $time;

    /**
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * Returns Id.
     * Transaction reference id returned by the scheme. For Visa and Amex, this is the "Tran id" field in
     * response. For MasterCard, this is the "BankNet reference id" field in response. For Discover, this
     * is the "NRID" field in response. The pattern we expect for this field from Visa/Amex/CB/Discover is
     * numeric, Mastercard/BNPP is alphanumeric and Paysecure is alphanumeric with special character -.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Transaction reference id returned by the scheme. For Visa and Amex, this is the "Tran id" field in
     * response. For MasterCard, this is the "BankNet reference id" field in response. For Discover, this
     * is the "NRID" field in response. The pattern we expect for this field from Visa/Amex/CB/Discover is
     * numeric, Mastercard/BNPP is alphanumeric and Paysecure is alphanumeric with special character -.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Date.
     * The date that the transaction was authorized by the scheme. This field may not be returned for all
     * networks. MasterCard refers to this field as "BankNet reference date.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Sets Date.
     * The date that the transaction was authorized by the scheme. This field may not be returned for all
     * networks. MasterCard refers to this field as "BankNet reference date.
     *
     * @maps date
     */
    public function setDate(?string $date): void
    {
        $this->date = $date;
    }

    /**
     * Returns Network.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     */
    public function getNetwork(): ?string
    {
        return $this->network;
    }

    /**
     * Sets Network.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     *
     * @maps network
     */
    public function setNetwork(?string $network): void
    {
        $this->network = $network;
    }

    /**
     * Returns Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional. Note: The regular expression
     * provides guidance but does not reject all invalid dates.
     */
    public function getTime(): ?string
    {
        return $this->time;
    }

    /**
     * Sets Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional. Note: The regular expression
     * provides guidance but does not reject all invalid dates.
     *
     * @maps time
     */
    public function setTime(?string $time): void
    {
        $this->time = $time;
    }

    /**
     * Converts the NetworkTransactionReferenceEntity object to a human-readable string representation.
     *
     * @return string The string representation of the NetworkTransactionReferenceEntity object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'NetworkTransactionReferenceEntity',
            ['id' => $this->id, 'date' => $this->date, 'network' => $this->network, 'time' => $this->time]
        );
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
        $json['id']          = $this->id;
        if (isset($this->date)) {
            $json['date']    = $this->date;
        }
        if (isset($this->network)) {
            $json['network'] = $this->network;
        }
        if (isset($this->time)) {
            $json['time']    = $this->time;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
