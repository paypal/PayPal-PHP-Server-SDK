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
 * The purchase unit request. Includes required information for the payment contract.
 */
class PurchaseUnitRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $referenceId;

    /**
     * @var AmountWithBreakdown
     */
    private $amount;

    /**
     * @var PayeeBase|null
     */
    private $payee;

    /**
     * @var PaymentInstruction|null
     */
    private $paymentInstruction;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $customId;

    /**
     * @var string|null
     */
    private $invoiceId;

    /**
     * @var string|null
     */
    private $softDescriptor;

    /**
     * @var Item[]|null
     */
    private $items;

    /**
     * @var ShippingDetails|null
     */
    private $shipping;

    /**
     * @var SupplementaryData|null
     */
    private $supplementaryData;

    /**
     * @param AmountWithBreakdown $amount
     */
    public function __construct(AmountWithBreakdown $amount)
    {
        $this->amount = $amount;
    }

    /**
     * Returns Reference Id.
     * The API caller-provided external ID for the purchase unit. Required for multiple purchase units when
     * you must update the order through `PATCH`. If you omit this value and the order contains only one
     * purchase unit, PayPal sets this value to `default`.
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    /**
     * Sets Reference Id.
     * The API caller-provided external ID for the purchase unit. Required for multiple purchase units when
     * you must update the order through `PATCH`. If you omit this value and the order contains only one
     * purchase unit, PayPal sets this value to `default`.
     *
     * @maps reference_id
     */
    public function setReferenceId(?string $referenceId): void
    {
        $this->referenceId = $referenceId;
    }

    /**
     * Returns Amount.
     * The total order amount with an optional breakdown that provides details, such as the total item
     * amount, total tax amount, shipping, handling, insurance, and discounts, if any. If you specify
     * `amount.breakdown`, the amount equals `item_total` plus `tax_total` plus `shipping` plus `handling`
     * plus `insurance` minus `shipping_discount` minus discount. The amount must be a positive number. For
     * listed of supported currencies and decimal precision, see the PayPal REST APIs Currency Codes.
     */
    public function getAmount(): AmountWithBreakdown
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The total order amount with an optional breakdown that provides details, such as the total item
     * amount, total tax amount, shipping, handling, insurance, and discounts, if any. If you specify
     * `amount.breakdown`, the amount equals `item_total` plus `tax_total` plus `shipping` plus `handling`
     * plus `insurance` minus `shipping_discount` minus discount. The amount must be a positive number. For
     * listed of supported currencies and decimal precision, see the PayPal REST APIs Currency Codes.
     *
     * @required
     * @maps amount
     */
    public function setAmount(AmountWithBreakdown $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Payee.
     * The merchant who receives the funds and fulfills the order. The merchant is also known as the payee.
     */
    public function getPayee(): ?PayeeBase
    {
        return $this->payee;
    }

    /**
     * Sets Payee.
     * The merchant who receives the funds and fulfills the order. The merchant is also known as the payee.
     *
     * @maps payee
     */
    public function setPayee(?PayeeBase $payee): void
    {
        $this->payee = $payee;
    }

    /**
     * Returns Payment Instruction.
     * Any additional payment instructions to be consider during payment processing. This processing
     * instruction is applicable for Capturing an order or Authorizing an Order.
     */
    public function getPaymentInstruction(): ?PaymentInstruction
    {
        return $this->paymentInstruction;
    }

    /**
     * Sets Payment Instruction.
     * Any additional payment instructions to be consider during payment processing. This processing
     * instruction is applicable for Capturing an order or Authorizing an Order.
     *
     * @maps payment_instruction
     */
    public function setPaymentInstruction(?PaymentInstruction $paymentInstruction): void
    {
        $this->paymentInstruction = $paymentInstruction;
    }

    /**
     * Returns Description.
     * The purchase description. The maximum length of the character is dependent on the type of characters
     * used. The character length is specified assuming a US ASCII character. Depending on type of
     * character; (e.g. accented character, Japanese characters) the number of characters that that can be
     * specified as input might not equal the permissible max length.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The purchase description. The maximum length of the character is dependent on the type of characters
     * used. The character length is specified assuming a US ASCII character. Depending on type of
     * character; (e.g. accented character, Japanese characters) the number of characters that that can be
     * specified as input might not equal the permissible max length.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Custom Id.
     * The API caller-provided external ID. Used to reconcile client transactions with PayPal transactions.
     * Appears in transaction and settlement reports but is not visible to the payer.
     */
    public function getCustomId(): ?string
    {
        return $this->customId;
    }

    /**
     * Sets Custom Id.
     * The API caller-provided external ID. Used to reconcile client transactions with PayPal transactions.
     * Appears in transaction and settlement reports but is not visible to the payer.
     *
     * @maps custom_id
     */
    public function setCustomId(?string $customId): void
    {
        $this->customId = $customId;
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
     * Returns Soft Descriptor.
     * The soft descriptor is the dynamic text used to construct the statement descriptor that appears on a
     * payer's card statement. If an Order is paid using the "PayPal Wallet", the statement descriptor will
     * appear in following format on the payer's card statement:
     * PAYPAL_prefix+(space)+merchant_descriptor+(space)+ soft_descriptor Note: The merchant descriptor is
     * the descriptor of the merchant’s payment receiving preferences which can be seen by logging into the
     * merchant account https://www.sandbox.paypal.com/businessprofile/settings/info/edit The PAYPAL prefix
     * uses 8 characters. Only the first 22 characters will be displayed in the statement. For example, if:
     * The PayPal prefix toggle is PAYPAL *. The merchant descriptor in the profile is Janes Gift. The soft
     * descriptor is 800-123-1234. Then, the statement descriptor on the card is PAYPAL * Janes Gift 80.
     */
    public function getSoftDescriptor(): ?string
    {
        return $this->softDescriptor;
    }

    /**
     * Sets Soft Descriptor.
     * The soft descriptor is the dynamic text used to construct the statement descriptor that appears on a
     * payer's card statement. If an Order is paid using the "PayPal Wallet", the statement descriptor will
     * appear in following format on the payer's card statement:
     * PAYPAL_prefix+(space)+merchant_descriptor+(space)+ soft_descriptor Note: The merchant descriptor is
     * the descriptor of the merchant’s payment receiving preferences which can be seen by logging into the
     * merchant account https://www.sandbox.paypal.com/businessprofile/settings/info/edit The PAYPAL prefix
     * uses 8 characters. Only the first 22 characters will be displayed in the statement. For example, if:
     * The PayPal prefix toggle is PAYPAL *. The merchant descriptor in the profile is Janes Gift. The soft
     * descriptor is 800-123-1234. Then, the statement descriptor on the card is PAYPAL * Janes Gift 80.
     *
     * @maps soft_descriptor
     */
    public function setSoftDescriptor(?string $softDescriptor): void
    {
        $this->softDescriptor = $softDescriptor;
    }

    /**
     * Returns Items.
     * An array of items that the customer purchases from the merchant.
     *
     * @return Item[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Sets Items.
     * An array of items that the customer purchases from the merchant.
     *
     * @maps items
     *
     * @param Item[]|null $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }

    /**
     * Returns Shipping.
     * The shipping details.
     */
    public function getShipping(): ?ShippingDetails
    {
        return $this->shipping;
    }

    /**
     * Sets Shipping.
     * The shipping details.
     *
     * @maps shipping
     */
    public function setShipping(?ShippingDetails $shipping): void
    {
        $this->shipping = $shipping;
    }

    /**
     * Returns Supplementary Data.
     * Supplementary data about a payment. This object passes information that can be used to improve risk
     * assessments and processing costs, for example, by providing Level 2 and Level 3 payment data.
     */
    public function getSupplementaryData(): ?SupplementaryData
    {
        return $this->supplementaryData;
    }

    /**
     * Sets Supplementary Data.
     * Supplementary data about a payment. This object passes information that can be used to improve risk
     * assessments and processing costs, for example, by providing Level 2 and Level 3 payment data.
     *
     * @maps supplementary_data
     */
    public function setSupplementaryData(?SupplementaryData $supplementaryData): void
    {
        $this->supplementaryData = $supplementaryData;
    }

    /**
     * Converts the PurchaseUnitRequest object to a human-readable string representation.
     *
     * @return string The string representation of the PurchaseUnitRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PurchaseUnitRequest',
            [
                'referenceId' => $this->referenceId,
                'amount' => $this->amount,
                'payee' => $this->payee,
                'paymentInstruction' => $this->paymentInstruction,
                'description' => $this->description,
                'customId' => $this->customId,
                'invoiceId' => $this->invoiceId,
                'softDescriptor' => $this->softDescriptor,
                'items' => $this->items,
                'shipping' => $this->shipping,
                'supplementaryData' => $this->supplementaryData
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
        if (isset($this->referenceId)) {
            $json['reference_id']        = $this->referenceId;
        }
        $json['amount']                  = $this->amount;
        if (isset($this->payee)) {
            $json['payee']               = $this->payee;
        }
        if (isset($this->paymentInstruction)) {
            $json['payment_instruction'] = $this->paymentInstruction;
        }
        if (isset($this->description)) {
            $json['description']         = $this->description;
        }
        if (isset($this->customId)) {
            $json['custom_id']           = $this->customId;
        }
        if (isset($this->invoiceId)) {
            $json['invoice_id']          = $this->invoiceId;
        }
        if (isset($this->softDescriptor)) {
            $json['soft_descriptor']     = $this->softDescriptor;
        }
        if (isset($this->items)) {
            $json['items']               = $this->items;
        }
        if (isset($this->shipping)) {
            $json['shipping']            = $this->shipping;
        }
        if (isset($this->supplementaryData)) {
            $json['supplementary_data']  = $this->supplementaryData;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
