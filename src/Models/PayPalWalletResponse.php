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
 * The PayPal Wallet response.
 */
class PayPalWalletResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $emailAddress;

    /**
     * @var string|null
     */
    private $accountId;

    /**
     * @var string|null
     */
    private $accountStatus;

    /**
     * @var Name|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $phoneType;

    /**
     * @var PhoneNumber|null
     */
    private $phoneNumber;

    /**
     * @var string|null
     */
    private $birthDate;

    /**
     * @var string|null
     */
    private $businessName;

    /**
     * @var TaxInfo|null
     */
    private $taxInfo;

    /**
     * @var Address|null
     */
    private $address;

    /**
     * @var PayPalWalletAttributesResponse|null
     */
    private $attributes;

    /**
     * Returns Email Address.
     * The internationalized email address.<blockquote><strong>Note:</strong> Up to 64 characters are
     * allowed before and 255 characters are allowed after the <code>@</code> sign. However, the generally
     * accepted maximum length for an email address is 254 characters. The pattern verifies that an
     * unquoted <code>@</code> sign exists.</blockquote>
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * Sets Email Address.
     * The internationalized email address.<blockquote><strong>Note:</strong> Up to 64 characters are
     * allowed before and 255 characters are allowed after the <code>@</code> sign. However, the generally
     * accepted maximum length for an email address is 254 characters. The pattern verifies that an
     * unquoted <code>@</code> sign exists.</blockquote>
     *
     * @maps email_address
     */
    public function setEmailAddress(?string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Returns Account Id.
     * The PayPal payer ID, which is a masked version of the PayPal account number intended for use with
     * third parties. The account number is reversibly encrypted and a proprietary variant of Base32 is
     * used to encode the result.
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     * The PayPal payer ID, which is a masked version of the PayPal account number intended for use with
     * third parties. The account number is reversibly encrypted and a proprietary variant of Base32 is
     * used to encode the result.
     *
     * @maps account_id
     */
    public function setAccountId(?string $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * Returns Account Status.
     * The account status indicates whether the buyer has verified the financial details associated with
     * their PayPal account.
     */
    public function getAccountStatus(): ?string
    {
        return $this->accountStatus;
    }

    /**
     * Sets Account Status.
     * The account status indicates whether the buyer has verified the financial details associated with
     * their PayPal account.
     *
     * @maps account_status
     */
    public function setAccountStatus(?string $accountStatus): void
    {
        $this->accountStatus = $accountStatus;
    }

    /**
     * Returns Name.
     * The name of the party.
     */
    public function getName(): ?Name
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the party.
     *
     * @maps name
     */
    public function setName(?Name $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Phone Type.
     * The phone type.
     */
    public function getPhoneType(): ?string
    {
        return $this->phoneType;
    }

    /**
     * Sets Phone Type.
     * The phone type.
     *
     * @maps phone_type
     */
    public function setPhoneType(?string $phoneType): void
    {
        $this->phoneType = $phoneType;
    }

    /**
     * Returns Phone Number.
     * The phone number in its canonical international [E.164 numbering plan format](https://www.itu.
     * int/rec/T-REC-E.164/en).
     */
    public function getPhoneNumber(): ?PhoneNumber
    {
        return $this->phoneNumber;
    }

    /**
     * Sets Phone Number.
     * The phone number in its canonical international [E.164 numbering plan format](https://www.itu.
     * int/rec/T-REC-E.164/en).
     *
     * @maps phone_number
     */
    public function setPhoneNumber(?PhoneNumber $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns Birth Date.
     * The stand-alone date, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-
     * 5.6). To represent special legal values, such as a date of birth, you should use dates with no
     * associated time or time-zone data. Whenever possible, use the standard `date_time` type. This
     * regular expression does not validate all dates. For example, February 31 is valid and nothing is
     * known about leap years.
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * Sets Birth Date.
     * The stand-alone date, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-
     * 5.6). To represent special legal values, such as a date of birth, you should use dates with no
     * associated time or time-zone data. Whenever possible, use the standard `date_time` type. This
     * regular expression does not validate all dates. For example, February 31 is valid and nothing is
     * known about leap years.
     *
     * @maps birth_date
     */
    public function setBirthDate(?string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Returns Business Name.
     * The business name of the PayPal account holder (populated for business accounts only)
     */
    public function getBusinessName(): ?string
    {
        return $this->businessName;
    }

    /**
     * Sets Business Name.
     * The business name of the PayPal account holder (populated for business accounts only)
     *
     * @maps business_name
     */
    public function setBusinessName(?string $businessName): void
    {
        $this->businessName = $businessName;
    }

    /**
     * Returns Tax Info.
     * The tax ID of the customer. The customer is also known as the payer. Both `tax_id` and `tax_id_type`
     * are required.
     */
    public function getTaxInfo(): ?TaxInfo
    {
        return $this->taxInfo;
    }

    /**
     * Sets Tax Info.
     * The tax ID of the customer. The customer is also known as the payer. Both `tax_id` and `tax_id_type`
     * are required.
     *
     * @maps tax_info
     */
    public function setTaxInfo(?TaxInfo $taxInfo): void
    {
        $this->taxInfo = $taxInfo;
    }

    /**
     * Returns Address.
     * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
     * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
     * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
     * controls-the-autocomplete-attribute).
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
     * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
     * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
     * controls-the-autocomplete-attribute).
     *
     * @maps address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Attributes.
     * Additional attributes associated with the use of a PayPal Wallet.
     */
    public function getAttributes(): ?PayPalWalletAttributesResponse
    {
        return $this->attributes;
    }

    /**
     * Sets Attributes.
     * Additional attributes associated with the use of a PayPal Wallet.
     *
     * @maps attributes
     */
    public function setAttributes(?PayPalWalletAttributesResponse $attributes): void
    {
        $this->attributes = $attributes;
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
        if (isset($this->emailAddress)) {
            $json['email_address']  = $this->emailAddress;
        }
        if (isset($this->accountId)) {
            $json['account_id']     = $this->accountId;
        }
        if (isset($this->accountStatus)) {
            $json['account_status'] = PayPalWalletAccountVerificationStatus::checkValue($this->accountStatus);
        }
        if (isset($this->name)) {
            $json['name']           = $this->name;
        }
        if (isset($this->phoneType)) {
            $json['phone_type']     = PhoneType::checkValue($this->phoneType);
        }
        if (isset($this->phoneNumber)) {
            $json['phone_number']   = $this->phoneNumber;
        }
        if (isset($this->birthDate)) {
            $json['birth_date']     = $this->birthDate;
        }
        if (isset($this->businessName)) {
            $json['business_name']  = $this->businessName;
        }
        if (isset($this->taxInfo)) {
            $json['tax_info']       = $this->taxInfo;
        }
        if (isset($this->address)) {
            $json['address']        = $this->address;
        }
        if (isset($this->attributes)) {
            $json['attributes']     = $this->attributes;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
