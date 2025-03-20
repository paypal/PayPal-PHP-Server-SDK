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
 * Information used to pay using P24(Przelewy24).
 */
class P24PaymentObject implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $countryCode;

    /**
     * @var string|null
     */
    private $paymentDescriptor;

    /**
     * @var string|null
     */
    private $methodId;

    /**
     * @var string|null
     */
    private $methodDescription;

    /**
     * Returns Name.
     * The full name representation like Mr J Smith.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The full name representation like Mr J Smith.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Email.
     * The internationalized email address. Note: Up to 64 characters are allowed before and 255 characters
     * are allowed after the @ sign. However, the generally accepted maximum length for an email address is
     * 254 characters. The pattern verifies that an unquoted @ sign exists.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * The internationalized email address. Note: Up to 64 characters are allowed before and 255 characters
     * are allowed after the @ sign. However, the generally accepted maximum length for an email address is
     * 254 characters. The pattern verifies that an unquoted @ sign exists.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Country Code.
     * The [two-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country
     * or region. Note: The country code for Great Britain is GB and not UK as used in the top-level domain
     * names for that country. Use the `C2` country code for China worldwide for comparable uncontrolled
     * price (CUP) method, bank card, and cross-border transactions.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     * The [two-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country
     * or region. Note: The country code for Great Britain is GB and not UK as used in the top-level domain
     * names for that country. Use the `C2` country code for China worldwide for comparable uncontrolled
     * price (CUP) method, bank card, and cross-border transactions.
     *
     * @maps country_code
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Returns Payment Descriptor.
     * P24 generated payment description.
     */
    public function getPaymentDescriptor(): ?string
    {
        return $this->paymentDescriptor;
    }

    /**
     * Sets Payment Descriptor.
     * P24 generated payment description.
     *
     * @maps payment_descriptor
     */
    public function setPaymentDescriptor(?string $paymentDescriptor): void
    {
        $this->paymentDescriptor = $paymentDescriptor;
    }

    /**
     * Returns Method Id.
     * Numeric identifier of the payment scheme or bank used for the payment.
     */
    public function getMethodId(): ?string
    {
        return $this->methodId;
    }

    /**
     * Sets Method Id.
     * Numeric identifier of the payment scheme or bank used for the payment.
     *
     * @maps method_id
     */
    public function setMethodId(?string $methodId): void
    {
        $this->methodId = $methodId;
    }

    /**
     * Returns Method Description.
     * Friendly name of the payment scheme or bank used for the payment.
     */
    public function getMethodDescription(): ?string
    {
        return $this->methodDescription;
    }

    /**
     * Sets Method Description.
     * Friendly name of the payment scheme or bank used for the payment.
     *
     * @maps method_description
     */
    public function setMethodDescription(?string $methodDescription): void
    {
        $this->methodDescription = $methodDescription;
    }

    /**
     * Converts the P24PaymentObject object to a human-readable string representation.
     *
     * @return string The string representation of the P24PaymentObject object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'P24PaymentObject',
            [
                'name' => $this->name,
                'email' => $this->email,
                'countryCode' => $this->countryCode,
                'paymentDescriptor' => $this->paymentDescriptor,
                'methodId' => $this->methodId,
                'methodDescription' => $this->methodDescription
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
        if (isset($this->name)) {
            $json['name']               = $this->name;
        }
        if (isset($this->email)) {
            $json['email']              = $this->email;
        }
        if (isset($this->countryCode)) {
            $json['country_code']       = $this->countryCode;
        }
        if (isset($this->paymentDescriptor)) {
            $json['payment_descriptor'] = $this->paymentDescriptor;
        }
        if (isset($this->methodId)) {
            $json['method_id']          = $this->methodId;
        }
        if (isset($this->methodDescription)) {
            $json['method_description'] = $this->methodDescription;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
