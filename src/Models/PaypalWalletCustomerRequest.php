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

class PaypalWalletCustomerRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $emailAddress;

    /**
     * @var PhoneWithType|null
     */
    private $phone;

    /**
     * @var string|null
     */
    private $merchantCustomerId;

    /**
     * Returns Id.
     * The unique ID for a customer generated by PayPal.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The unique ID for a customer generated by PayPal.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Email Address.
     * The internationalized email address. Note: Up to 64 characters are allowed before and 255 characters
     * are allowed after the @ sign. However, the generally accepted maximum length for an email address is
     * 254 characters. The pattern verifies that an unquoted @ sign exists.
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * Sets Email Address.
     * The internationalized email address. Note: Up to 64 characters are allowed before and 255 characters
     * are allowed after the @ sign. However, the generally accepted maximum length for an email address is
     * 254 characters. The pattern verifies that an unquoted @ sign exists.
     *
     * @maps email_address
     */
    public function setEmailAddress(?string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Returns Phone.
     * The phone information.
     */
    public function getPhone(): ?PhoneWithType
    {
        return $this->phone;
    }

    /**
     * Sets Phone.
     * The phone information.
     *
     * @maps phone
     */
    public function setPhone(?PhoneWithType $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * Returns Merchant Customer Id.
     * Merchants and partners may already have a data-store where their customer information is persisted.
     * Use merchant_customer_id to associate the PayPal-generated customer.id to your representation of a
     * customer.
     */
    public function getMerchantCustomerId(): ?string
    {
        return $this->merchantCustomerId;
    }

    /**
     * Sets Merchant Customer Id.
     * Merchants and partners may already have a data-store where their customer information is persisted.
     * Use merchant_customer_id to associate the PayPal-generated customer.id to your representation of a
     * customer.
     *
     * @maps merchant_customer_id
     */
    public function setMerchantCustomerId(?string $merchantCustomerId): void
    {
        $this->merchantCustomerId = $merchantCustomerId;
    }

    /**
     * Converts the PaypalWalletCustomerRequest object to a human-readable string representation.
     *
     * @return string The string representation of the PaypalWalletCustomerRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PaypalWalletCustomerRequest',
            [
                'id' => $this->id,
                'emailAddress' => $this->emailAddress,
                'phone' => $this->phone,
                'merchantCustomerId' => $this->merchantCustomerId
            ]
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
        if (isset($this->id)) {
            $json['id']                   = $this->id;
        }
        if (isset($this->emailAddress)) {
            $json['email_address']        = $this->emailAddress;
        }
        if (isset($this->phone)) {
            $json['phone']                = $this->phone;
        }
        if (isset($this->merchantCustomerId)) {
            $json['merchant_customer_id'] = $this->merchantCustomerId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
