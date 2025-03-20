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
 * A captured payment.
 */
class CapturedPayment implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $status;

    /**
     * @var CaptureStatusDetails|null
     */
    private $statusDetails;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var Money|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $invoiceId;

    /**
     * @var string|null
     */
    private $customId;

    /**
     * @var NetworkTransactionReference|null
     */
    private $networkTransactionReference;

    /**
     * @var SellerProtection|null
     */
    private $sellerProtection;

    /**
     * @var bool|null
     */
    private $finalCapture = false;

    /**
     * @var SellerReceivableBreakdown|null
     */
    private $sellerReceivableBreakdown;

    /**
     * @var string|null
     */
    private $disbursementMode = DisbursementMode::INSTANT;

    /**
     * @var LinkDescription[]|null
     */
    private $links;

    /**
     * @var PaymentsProcessorResponse|null
     */
    private $processorResponse;

    /**
     * @var string|null
     */
    private $createTime;

    /**
     * @var string|null
     */
    private $updateTime;

    /**
     * @var PaymentSupplementaryData|null
     */
    private $supplementaryData;

    /**
     * @var PayeeBase|null
     */
    private $payee;

    /**
     * Returns Status.
     * The status of the captured payment.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The status of the captured payment.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Status Details.
     * The details of the captured payment status.
     */
    public function getStatusDetails(): ?CaptureStatusDetails
    {
        return $this->statusDetails;
    }

    /**
     * Sets Status Details.
     * The details of the captured payment status.
     *
     * @maps status_details
     */
    public function setStatusDetails(?CaptureStatusDetails $statusDetails): void
    {
        $this->statusDetails = $statusDetails;
    }

    /**
     * Returns Id.
     * The PayPal-generated ID for the captured payment.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The PayPal-generated ID for the captured payment.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getAmount(): ?Money
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps amount
     */
    public function setAmount(?Money $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Invoice Id.
     * The API caller-provided external invoice number for this order. Appears in both the payer's
     * transaction history and the emails that the payer receives.
     */
    public function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    /**
     * Sets Invoice Id.
     * The API caller-provided external invoice number for this order. Appears in both the payer's
     * transaction history and the emails that the payer receives.
     *
     * @maps invoice_id
     */
    public function setInvoiceId(?string $invoiceId): void
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * Returns Custom Id.
     * The API caller-provided external ID. Used to reconcile API caller-initiated transactions with PayPal
     * transactions. Appears in transaction and settlement reports.
     */
    public function getCustomId(): ?string
    {
        return $this->customId;
    }

    /**
     * Sets Custom Id.
     * The API caller-provided external ID. Used to reconcile API caller-initiated transactions with PayPal
     * transactions. Appears in transaction and settlement reports.
     *
     * @maps custom_id
     */
    public function setCustomId(?string $customId): void
    {
        $this->customId = $customId;
    }

    /**
     * Returns Network Transaction Reference.
     * Reference values used by the card network to identify a transaction.
     */
    public function getNetworkTransactionReference(): ?NetworkTransactionReference
    {
        return $this->networkTransactionReference;
    }

    /**
     * Sets Network Transaction Reference.
     * Reference values used by the card network to identify a transaction.
     *
     * @maps network_transaction_reference
     */
    public function setNetworkTransactionReference(?NetworkTransactionReference $networkTransactionReference): void
    {
        $this->networkTransactionReference = $networkTransactionReference;
    }

    /**
     * Returns Seller Protection.
     * The level of protection offered as defined by [PayPal Seller Protection for Merchants](https://www.
     * paypal.com/us/webapps/mpp/security/seller-protection).
     */
    public function getSellerProtection(): ?SellerProtection
    {
        return $this->sellerProtection;
    }

    /**
     * Sets Seller Protection.
     * The level of protection offered as defined by [PayPal Seller Protection for Merchants](https://www.
     * paypal.com/us/webapps/mpp/security/seller-protection).
     *
     * @maps seller_protection
     */
    public function setSellerProtection(?SellerProtection $sellerProtection): void
    {
        $this->sellerProtection = $sellerProtection;
    }

    /**
     * Returns Final Capture.
     * Indicates whether you can make additional captures against the authorized payment. Set to `true` if
     * you do not intend to capture additional payments against the authorization. Set to `false` if you
     * intend to capture additional payments against the authorization.
     */
    public function getFinalCapture(): ?bool
    {
        return $this->finalCapture;
    }

    /**
     * Sets Final Capture.
     * Indicates whether you can make additional captures against the authorized payment. Set to `true` if
     * you do not intend to capture additional payments against the authorization. Set to `false` if you
     * intend to capture additional payments against the authorization.
     *
     * @maps final_capture
     */
    public function setFinalCapture(?bool $finalCapture): void
    {
        $this->finalCapture = $finalCapture;
    }

    /**
     * Returns Seller Receivable Breakdown.
     * The detailed breakdown of the capture activity. This is not available for transactions that are in
     * pending state.
     */
    public function getSellerReceivableBreakdown(): ?SellerReceivableBreakdown
    {
        return $this->sellerReceivableBreakdown;
    }

    /**
     * Sets Seller Receivable Breakdown.
     * The detailed breakdown of the capture activity. This is not available for transactions that are in
     * pending state.
     *
     * @maps seller_receivable_breakdown
     */
    public function setSellerReceivableBreakdown(?SellerReceivableBreakdown $sellerReceivableBreakdown): void
    {
        $this->sellerReceivableBreakdown = $sellerReceivableBreakdown;
    }

    /**
     * Returns Disbursement Mode.
     * The funds that are held on behalf of the merchant.
     */
    public function getDisbursementMode(): ?string
    {
        return $this->disbursementMode;
    }

    /**
     * Sets Disbursement Mode.
     * The funds that are held on behalf of the merchant.
     *
     * @maps disbursement_mode
     */
    public function setDisbursementMode(?string $disbursementMode): void
    {
        $this->disbursementMode = $disbursementMode;
    }

    /**
     * Returns Links.
     * An array of related [HATEOAS links](/docs/api/reference/api-responses/#hateoas-links).
     *
     * @return LinkDescription[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Sets Links.
     * An array of related [HATEOAS links](/docs/api/reference/api-responses/#hateoas-links).
     *
     * @maps links
     *
     * @param LinkDescription[]|null $links
     */
    public function setLinks(?array $links): void
    {
        $this->links = $links;
    }

    /**
     * Returns Processor Response.
     * The processor response information for payment requests, such as direct credit card transactions.
     */
    public function getProcessorResponse(): ?PaymentsProcessorResponse
    {
        return $this->processorResponse;
    }

    /**
     * Sets Processor Response.
     * The processor response information for payment requests, such as direct credit card transactions.
     *
     * @maps processor_response
     */
    public function setProcessorResponse(?PaymentsProcessorResponse $processorResponse): void
    {
        $this->processorResponse = $processorResponse;
    }

    /**
     * Returns Create Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional. Note: The regular expression
     * provides guidance but does not reject all invalid dates.
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * Sets Create Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional. Note: The regular expression
     * provides guidance but does not reject all invalid dates.
     *
     * @maps create_time
     */
    public function setCreateTime(?string $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * Returns Update Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional. Note: The regular expression
     * provides guidance but does not reject all invalid dates.
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * Sets Update Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional. Note: The regular expression
     * provides guidance but does not reject all invalid dates.
     *
     * @maps update_time
     */
    public function setUpdateTime(?string $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * Returns Supplementary Data.
     * The supplementary data.
     */
    public function getSupplementaryData(): ?PaymentSupplementaryData
    {
        return $this->supplementaryData;
    }

    /**
     * Sets Supplementary Data.
     * The supplementary data.
     *
     * @maps supplementary_data
     */
    public function setSupplementaryData(?PaymentSupplementaryData $supplementaryData): void
    {
        $this->supplementaryData = $supplementaryData;
    }

    /**
     * Returns Payee.
     * The details for the merchant who receives the funds and fulfills the order. The merchant is also
     * known as the payee.
     */
    public function getPayee(): ?PayeeBase
    {
        return $this->payee;
    }

    /**
     * Sets Payee.
     * The details for the merchant who receives the funds and fulfills the order. The merchant is also
     * known as the payee.
     *
     * @maps payee
     */
    public function setPayee(?PayeeBase $payee): void
    {
        $this->payee = $payee;
    }

    /**
     * Converts the CapturedPayment object to a human-readable string representation.
     *
     * @return string The string representation of the CapturedPayment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CapturedPayment',
            [
                'status' => $this->status,
                'statusDetails' => $this->statusDetails,
                'id' => $this->id,
                'amount' => $this->amount,
                'invoiceId' => $this->invoiceId,
                'customId' => $this->customId,
                'networkTransactionReference' => $this->networkTransactionReference,
                'sellerProtection' => $this->sellerProtection,
                'finalCapture' => $this->finalCapture,
                'sellerReceivableBreakdown' => $this->sellerReceivableBreakdown,
                'disbursementMode' => $this->disbursementMode,
                'links' => $this->links,
                'processorResponse' => $this->processorResponse,
                'createTime' => $this->createTime,
                'updateTime' => $this->updateTime,
                'supplementaryData' => $this->supplementaryData,
                'payee' => $this->payee
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
        if (isset($this->status)) {
            $json['status']                        = $this->status;
        }
        if (isset($this->statusDetails)) {
            $json['status_details']                = $this->statusDetails;
        }
        if (isset($this->id)) {
            $json['id']                            = $this->id;
        }
        if (isset($this->amount)) {
            $json['amount']                        = $this->amount;
        }
        if (isset($this->invoiceId)) {
            $json['invoice_id']                    = $this->invoiceId;
        }
        if (isset($this->customId)) {
            $json['custom_id']                     = $this->customId;
        }
        if (isset($this->networkTransactionReference)) {
            $json['network_transaction_reference'] = $this->networkTransactionReference;
        }
        if (isset($this->sellerProtection)) {
            $json['seller_protection']             = $this->sellerProtection;
        }
        if (isset($this->finalCapture)) {
            $json['final_capture']                 = $this->finalCapture;
        }
        if (isset($this->sellerReceivableBreakdown)) {
            $json['seller_receivable_breakdown']   = $this->sellerReceivableBreakdown;
        }
        if (isset($this->disbursementMode)) {
            $json['disbursement_mode']             = $this->disbursementMode;
        }
        if (isset($this->links)) {
            $json['links']                         = $this->links;
        }
        if (isset($this->processorResponse)) {
            $json['processor_response']            = $this->processorResponse;
        }
        if (isset($this->createTime)) {
            $json['create_time']                   = $this->createTime;
        }
        if (isset($this->updateTime)) {
            $json['update_time']                   = $this->updateTime;
        }
        if (isset($this->supplementaryData)) {
            $json['supplementary_data']            = $this->supplementaryData;
        }
        if (isset($this->payee)) {
            $json['payee']                         = $this->payee;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
