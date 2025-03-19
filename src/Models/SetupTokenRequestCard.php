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
 * A Resource representing a request to vault a Card.
 */
class SetupTokenRequestCard implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $number;

    /**
     * @var string|null
     */
    private $expiry;

    /**
     * @var string|null
     */
    private $securityCode;

    /**
     * @var string|null
     */
    private $brand;

    /**
     * @var Address|null
     */
    private $billingAddress;

    /**
     * @var string|null
     */
    private $verificationMethod;

    /**
     * @var SetupTokenCardExperienceContext|null
     */
    private $experienceContext;

    /**
     * Returns Name.
     * The card holder's name as it appears on the card.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The card holder's name as it appears on the card.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Number.
     * The primary account number (PAN) for the payment card.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Sets Number.
     * The primary account number (PAN) for the payment card.
     *
     * @maps number
     */
    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }

    /**
     * Returns Expiry.
     * The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https:
     * //tools.ietf.org/html/rfc3339#section-5.6).
     */
    public function getExpiry(): ?string
    {
        return $this->expiry;
    }

    /**
     * Sets Expiry.
     * The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https:
     * //tools.ietf.org/html/rfc3339#section-5.6).
     *
     * @maps expiry
     */
    public function setExpiry(?string $expiry): void
    {
        $this->expiry = $expiry;
    }

    /**
     * Returns Security Code.
     * The three- or four-digit security code of the card. Also known as the CVV, CVC, CVN, CVE, or CID.
     * This parameter cannot be present in the request when `payment_initiator=MERCHANT`.
     */
    public function getSecurityCode(): ?string
    {
        return $this->securityCode;
    }

    /**
     * Sets Security Code.
     * The three- or four-digit security code of the card. Also known as the CVV, CVC, CVN, CVE, or CID.
     * This parameter cannot be present in the request when `payment_initiator=MERCHANT`.
     *
     * @maps security_code
     */
    public function setSecurityCode(?string $securityCode): void
    {
        $this->securityCode = $securityCode;
    }

    /**
     * Returns Brand.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Sets Brand.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Returns Billing Address.
     * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
     * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
     * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
     * controls-the-autocomplete-attribute).
     */
    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
     * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
     * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
     * controls-the-autocomplete-attribute).
     *
     * @maps billing_address
     */
    public function setBillingAddress(?Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Verification Method.
     * The verification method of the card.
     */
    public function getVerificationMethod(): ?string
    {
        return $this->verificationMethod;
    }

    /**
     * Sets Verification Method.
     * The verification method of the card.
     *
     * @maps verification_method
     */
    public function setVerificationMethod(?string $verificationMethod): void
    {
        $this->verificationMethod = $verificationMethod;
    }

    /**
     * Returns Experience Context.
     * Customizes the Vault creation flow experience for your customers.
     */
    public function getExperienceContext(): ?SetupTokenCardExperienceContext
    {
        return $this->experienceContext;
    }

    /**
     * Sets Experience Context.
     * Customizes the Vault creation flow experience for your customers.
     *
     * @maps experience_context
     */
    public function setExperienceContext(?SetupTokenCardExperienceContext $experienceContext): void
    {
        $this->experienceContext = $experienceContext;
    }

    /**
     * Converts the SetupTokenRequestCard object to a human-readable string representation.
     *
     * @return string The string representation of the SetupTokenRequestCard object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SetupTokenRequestCard',
            [
                'name' => $this->name,
                'number' => $this->number,
                'expiry' => $this->expiry,
                'securityCode' => $this->securityCode,
                'brand' => $this->brand,
                'billingAddress' => $this->billingAddress,
                'verificationMethod' => $this->verificationMethod,
                'experienceContext' => $this->experienceContext
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
            $json['name']                = $this->name;
        }
        if (isset($this->number)) {
            $json['number']              = $this->number;
        }
        if (isset($this->expiry)) {
            $json['expiry']              = $this->expiry;
        }
        if (isset($this->securityCode)) {
            $json['security_code']       = $this->securityCode;
        }
        if (isset($this->brand)) {
            $json['brand']               = $this->brand;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']     = $this->billingAddress;
        }
        if (isset($this->verificationMethod)) {
            $json['verification_method'] = $this->verificationMethod;
        }
        if (isset($this->experienceContext)) {
            $json['experience_context']  = $this->experienceContext;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
