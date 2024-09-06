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
 * Provides additional details to process a payment using a `payment_source` that has been stored or is
 * intended to be stored (also referred to as stored_credential or card-on-file).<br/>Parameter
 * compatibility:<br/><ul><li>`payment_type=ONE_TIME` is compatible only with
 * `payment_initiator=CUSTOMER`.</li><li>`usage=FIRST` is compatible only with
 * `payment_initiator=CUSTOMER`.</li><li>`previous_transaction_reference` or
 * `previous_network_transaction_reference` is compatible only with `payment_initiator=MERCHANT`.
 * </li><li>Only one of the parameters - `previous_transaction_reference` and
 * `previous_network_transaction_reference` - can be present in the request.</li></ul>
 */
class StoredPaymentSource implements \JsonSerializable
{
    /**
     * @var string
     */
    private $paymentInitiator;

    /**
     * @var string
     */
    private $paymentType;

    /**
     * @var string|null
     */
    private $usage = StoredPaymentSourceUsageType::DERIVED;

    /**
     * @var NetworkTransactionReference|null
     */
    private $previousNetworkTransactionReference;

    /**
     * @param string $paymentInitiator
     * @param string $paymentType
     */
    public function __construct(string $paymentInitiator, string $paymentType)
    {
        $this->paymentInitiator = $paymentInitiator;
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Payment Initiator.
     * The person or party who initiated or triggered the payment.
     */
    public function getPaymentInitiator(): string
    {
        return $this->paymentInitiator;
    }

    /**
     * Sets Payment Initiator.
     * The person or party who initiated or triggered the payment.
     *
     * @required
     * @maps payment_initiator
     */
    public function setPaymentInitiator(string $paymentInitiator): void
    {
        $this->paymentInitiator = $paymentInitiator;
    }

    /**
     * Returns Payment Type.
     * Indicates the type of the stored payment_source payment.
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     * Indicates the type of the stored payment_source payment.
     *
     * @required
     * @maps payment_type
     */
    public function setPaymentType(string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Usage.
     * Indicates if this is a `first` or `subsequent` payment using a stored payment source (also referred
     * to as stored credential or card on file).
     */
    public function getUsage(): ?string
    {
        return $this->usage;
    }

    /**
     * Sets Usage.
     * Indicates if this is a `first` or `subsequent` payment using a stored payment source (also referred
     * to as stored credential or card on file).
     *
     * @maps usage
     */
    public function setUsage(?string $usage): void
    {
        $this->usage = $usage;
    }

    /**
     * Returns Previous Network Transaction Reference.
     * Reference values used by the card network to identify a transaction.
     */
    public function getPreviousNetworkTransactionReference(): ?NetworkTransactionReference
    {
        return $this->previousNetworkTransactionReference;
    }

    /**
     * Sets Previous Network Transaction Reference.
     * Reference values used by the card network to identify a transaction.
     *
     * @maps previous_network_transaction_reference
     */
    public function setPreviousNetworkTransactionReference(
        ?NetworkTransactionReference $previousNetworkTransactionReference
    ): void {
        $this->previousNetworkTransactionReference = $previousNetworkTransactionReference;
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
        $json['payment_initiator']                          = PaymentInitiator::checkValue($this->paymentInitiator);
        $json['payment_type']                               =
            StoredPaymentSourcePaymentType::checkValue(
                $this->paymentType
            );
        if (isset($this->usage)) {
            $json['usage']                                  = StoredPaymentSourceUsageType::checkValue($this->usage);
        }
        if (isset($this->previousNetworkTransactionReference)) {
            $json['previous_network_transaction_reference'] = $this->previousNetworkTransactionReference;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
