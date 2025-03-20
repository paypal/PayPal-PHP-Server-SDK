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
 * The breakdown of the refund.
 */
class SellerPayableBreakdown implements \JsonSerializable
{
    /**
     * @var Money|null
     */
    private $grossAmount;

    /**
     * @var Money|null
     */
    private $paypalFee;

    /**
     * @var Money|null
     */
    private $paypalFeeInReceivableCurrency;

    /**
     * @var Money|null
     */
    private $netAmount;

    /**
     * @var Money|null
     */
    private $netAmountInReceivableCurrency;

    /**
     * @var PlatformFee[]|null
     */
    private $platformFees;

    /**
     * @var NetAmountBreakdownItem[]|null
     */
    private $netAmountBreakdown;

    /**
     * @var Money|null
     */
    private $totalRefundedAmount;

    /**
     * Returns Gross Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getGrossAmount(): ?Money
    {
        return $this->grossAmount;
    }

    /**
     * Sets Gross Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps gross_amount
     */
    public function setGrossAmount(?Money $grossAmount): void
    {
        $this->grossAmount = $grossAmount;
    }

    /**
     * Returns Paypal Fee.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getPaypalFee(): ?Money
    {
        return $this->paypalFee;
    }

    /**
     * Sets Paypal Fee.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps paypal_fee
     */
    public function setPaypalFee(?Money $paypalFee): void
    {
        $this->paypalFee = $paypalFee;
    }

    /**
     * Returns Paypal Fee in Receivable Currency.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getPaypalFeeInReceivableCurrency(): ?Money
    {
        return $this->paypalFeeInReceivableCurrency;
    }

    /**
     * Sets Paypal Fee in Receivable Currency.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps paypal_fee_in_receivable_currency
     */
    public function setPaypalFeeInReceivableCurrency(?Money $paypalFeeInReceivableCurrency): void
    {
        $this->paypalFeeInReceivableCurrency = $paypalFeeInReceivableCurrency;
    }

    /**
     * Returns Net Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getNetAmount(): ?Money
    {
        return $this->netAmount;
    }

    /**
     * Sets Net Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps net_amount
     */
    public function setNetAmount(?Money $netAmount): void
    {
        $this->netAmount = $netAmount;
    }

    /**
     * Returns Net Amount in Receivable Currency.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getNetAmountInReceivableCurrency(): ?Money
    {
        return $this->netAmountInReceivableCurrency;
    }

    /**
     * Sets Net Amount in Receivable Currency.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps net_amount_in_receivable_currency
     */
    public function setNetAmountInReceivableCurrency(?Money $netAmountInReceivableCurrency): void
    {
        $this->netAmountInReceivableCurrency = $netAmountInReceivableCurrency;
    }

    /**
     * Returns Platform Fees.
     * An array of platform or partner fees, commissions, or brokerage fees for the refund.
     *
     * @return PlatformFee[]|null
     */
    public function getPlatformFees(): ?array
    {
        return $this->platformFees;
    }

    /**
     * Sets Platform Fees.
     * An array of platform or partner fees, commissions, or brokerage fees for the refund.
     *
     * @maps platform_fees
     *
     * @param PlatformFee[]|null $platformFees
     */
    public function setPlatformFees(?array $platformFees): void
    {
        $this->platformFees = $platformFees;
    }

    /**
     * Returns Net Amount Breakdown.
     * An array of breakdown values for the net amount. Returned when the currency of the refund is
     * different from the currency of the PayPal account where the payee holds their funds.
     *
     * @return NetAmountBreakdownItem[]|null
     */
    public function getNetAmountBreakdown(): ?array
    {
        return $this->netAmountBreakdown;
    }

    /**
     * Sets Net Amount Breakdown.
     * An array of breakdown values for the net amount. Returned when the currency of the refund is
     * different from the currency of the PayPal account where the payee holds their funds.
     *
     * @maps net_amount_breakdown
     *
     * @param NetAmountBreakdownItem[]|null $netAmountBreakdown
     */
    public function setNetAmountBreakdown(?array $netAmountBreakdown): void
    {
        $this->netAmountBreakdown = $netAmountBreakdown;
    }

    /**
     * Returns Total Refunded Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getTotalRefundedAmount(): ?Money
    {
        return $this->totalRefundedAmount;
    }

    /**
     * Sets Total Refunded Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps total_refunded_amount
     */
    public function setTotalRefundedAmount(?Money $totalRefundedAmount): void
    {
        $this->totalRefundedAmount = $totalRefundedAmount;
    }

    /**
     * Converts the SellerPayableBreakdown object to a human-readable string representation.
     *
     * @return string The string representation of the SellerPayableBreakdown object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SellerPayableBreakdown',
            [
                'grossAmount' => $this->grossAmount,
                'paypalFee' => $this->paypalFee,
                'paypalFeeInReceivableCurrency' => $this->paypalFeeInReceivableCurrency,
                'netAmount' => $this->netAmount,
                'netAmountInReceivableCurrency' => $this->netAmountInReceivableCurrency,
                'platformFees' => $this->platformFees,
                'netAmountBreakdown' => $this->netAmountBreakdown,
                'totalRefundedAmount' => $this->totalRefundedAmount
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
        if (isset($this->grossAmount)) {
            $json['gross_amount']                      = $this->grossAmount;
        }
        if (isset($this->paypalFee)) {
            $json['paypal_fee']                        = $this->paypalFee;
        }
        if (isset($this->paypalFeeInReceivableCurrency)) {
            $json['paypal_fee_in_receivable_currency'] = $this->paypalFeeInReceivableCurrency;
        }
        if (isset($this->netAmount)) {
            $json['net_amount']                        = $this->netAmount;
        }
        if (isset($this->netAmountInReceivableCurrency)) {
            $json['net_amount_in_receivable_currency'] = $this->netAmountInReceivableCurrency;
        }
        if (isset($this->platformFees)) {
            $json['platform_fees']                     = $this->platformFees;
        }
        if (isset($this->netAmountBreakdown)) {
            $json['net_amount_breakdown']              = $this->netAmountBreakdown;
        }
        if (isset($this->totalRefundedAmount)) {
            $json['total_refunded_amount']             = $this->totalRefundedAmount;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
