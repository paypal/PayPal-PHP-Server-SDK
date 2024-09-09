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
 * The customer and merchant payment preferences.
 */
class PaymentMethodPreference implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $payeePreferred = PayeePaymentMethodPreference::UNRESTRICTED;

    /**
     * @var string|null
     */
    private $standardEntryClassCode = StandardEntryClassCode::WEB;

    /**
     * Returns Payee Preferred.
     * The merchant-preferred payment methods.
     */
    public function getPayeePreferred(): ?string
    {
        return $this->payeePreferred;
    }

    /**
     * Sets Payee Preferred.
     * The merchant-preferred payment methods.
     *
     * @maps payee_preferred
     */
    public function setPayeePreferred(?string $payeePreferred): void
    {
        $this->payeePreferred = $payeePreferred;
    }

    /**
     * Returns Standard Entry Class Code.
     * NACHA (the regulatory body governing the ACH network) requires that API callers (merchants,
     * partners) obtain the consumer’s explicit authorization before initiating a transaction. To stay
     * compliant, you’ll need to make sure that you retain a compliant authorization for each transaction
     * that you originate to the ACH Network using this API. ACH transactions are categorized (using SEC
     * codes) by how you capture authorization from the Receiver (the person whose bank account is being
     * debited or credited). PayPal supports the following SEC codes.
     */
    public function getStandardEntryClassCode(): ?string
    {
        return $this->standardEntryClassCode;
    }

    /**
     * Sets Standard Entry Class Code.
     * NACHA (the regulatory body governing the ACH network) requires that API callers (merchants,
     * partners) obtain the consumer’s explicit authorization before initiating a transaction. To stay
     * compliant, you’ll need to make sure that you retain a compliant authorization for each transaction
     * that you originate to the ACH Network using this API. ACH transactions are categorized (using SEC
     * codes) by how you capture authorization from the Receiver (the person whose bank account is being
     * debited or credited). PayPal supports the following SEC codes.
     *
     * @maps standard_entry_class_code
     */
    public function setStandardEntryClassCode(?string $standardEntryClassCode): void
    {
        $this->standardEntryClassCode = $standardEntryClassCode;
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
        if (isset($this->payeePreferred)) {
            $json['payee_preferred']           = PayeePaymentMethodPreference::checkValue($this->payeePreferred);
        }
        if (isset($this->standardEntryClassCode)) {
            $json['standard_entry_class_code'] = StandardEntryClassCode::checkValue($this->standardEntryClassCode);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
