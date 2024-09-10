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
 * A resource that identifies a PayPal Wallet is used for payment.
 */
class PayPalWallet implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $vaultId;

    /**
     * @var string|null
     */
    private $emailAddress;

    /**
     * @var Name|null
     */
    private $name;

    /**
     * @var PhoneWithType|null
     */
    private $phone;

    /**
     * @var string|null
     */
    private $birthDate;

    /**
     * @var TaxInfo|null
     */
    private $taxInfo;

    /**
     * @var Address|null
     */
    private $address;

    /**
     * @var PayPalWalletAttributes|null
     */
    private $attributes;

    /**
     * @var PayPalWalletExperienceContext|null
     */
    private $experienceContext;

    /**
     * @var string|null
     */
    private $billingAgreementId;

    /**
     * Returns Vault Id.
     * The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's
     * server so the saved payment source can be used for future transactions.
     */
    public function getVaultId(): ?string
    {
        return $this->vaultId;
    }

    /**
     * Sets Vault Id.
     * The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's
     * server so the saved payment source can be used for future transactions.
     *
     * @maps vault_id
     */
    public function setVaultId(?string $vaultId): void
    {
        $this->vaultId = $vaultId;
    }

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
     * Additional attributes associated with the use of this PayPal Wallet.
     */
    public function getAttributes(): ?PayPalWalletAttributes
    {
        return $this->attributes;
    }

    /**
     * Sets Attributes.
     * Additional attributes associated with the use of this PayPal Wallet.
     *
     * @maps attributes
     */
    public function setAttributes(?PayPalWalletAttributes $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * Returns Experience Context.
     * Customizes the payer experience during the approval process for payment with PayPal.
     * <blockquote><strong>Note:</strong> Partners and Marketplaces might configure <code>brand_name</code>
     * and <code>shipping_preference</code> during partner account setup, which overrides the request
     * values.</blockquote>
     */
    public function getExperienceContext(): ?PayPalWalletExperienceContext
    {
        return $this->experienceContext;
    }

    /**
     * Sets Experience Context.
     * Customizes the payer experience during the approval process for payment with PayPal.
     * <blockquote><strong>Note:</strong> Partners and Marketplaces might configure <code>brand_name</code>
     * and <code>shipping_preference</code> during partner account setup, which overrides the request
     * values.</blockquote>
     *
     * @maps experience_context
     */
    public function setExperienceContext(?PayPalWalletExperienceContext $experienceContext): void
    {
        $this->experienceContext = $experienceContext;
    }

    /**
     * Returns Billing Agreement Id.
     * The PayPal billing agreement ID. References an approved recurring payment for goods or services.
     */
    public function getBillingAgreementId(): ?string
    {
        return $this->billingAgreementId;
    }

    /**
     * Sets Billing Agreement Id.
     * The PayPal billing agreement ID. References an approved recurring payment for goods or services.
     *
     * @maps billing_agreement_id
     */
    public function setBillingAgreementId(?string $billingAgreementId): void
    {
        $this->billingAgreementId = $billingAgreementId;
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
        if (isset($this->vaultId)) {
            $json['vault_id']             = $this->vaultId;
        }
        if (isset($this->emailAddress)) {
            $json['email_address']        = $this->emailAddress;
        }
        if (isset($this->name)) {
            $json['name']                 = $this->name;
        }
        if (isset($this->phone)) {
            $json['phone']                = $this->phone;
        }
        if (isset($this->birthDate)) {
            $json['birth_date']           = $this->birthDate;
        }
        if (isset($this->taxInfo)) {
            $json['tax_info']             = $this->taxInfo;
        }
        if (isset($this->address)) {
            $json['address']              = $this->address;
        }
        if (isset($this->attributes)) {
            $json['attributes']           = $this->attributes;
        }
        if (isset($this->experienceContext)) {
            $json['experience_context']   = $this->experienceContext;
        }
        if (isset($this->billingAgreementId)) {
            $json['billing_agreement_id'] = $this->billingAgreementId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}