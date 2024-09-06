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
 * The purchase unit details. Used to capture required information for the payment contract.
 */
class PurchaseUnit implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $referenceId;

    /**
     * @var AmountWithBreakdown|null
     */
    private $amount;

    /**
     * @var Payee|null
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
    private $id;

    /**
     * @var string|null
     */
    private $softDescriptor;

    /**
     * @var Item[]|null
     */
    private $items;

    /**
     * @var ShippingWithTrackingDetails|null
     */
    private $shipping;

    /**
     * @var SupplementaryData|null
     */
    private $supplementaryData;

    /**
     * @var PaymentCollection|null
     */
    private $payments;

    /**
     * Returns Reference Id.
     * The API caller-provided external ID for the purchase unit. Required for multiple purchase units when
     * you must update the order through `PATCH`. If you omit this value and the order contains only one
     * purchase unit, PayPal sets this value to `default`. <blockquote><strong>Note:</strong> If there are
     * multiple purchase units, <code>reference_id</code> is required for each purchase unit.</blockquote>
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    /**
     * Sets Reference Id.
     * The API caller-provided external ID for the purchase unit. Required for multiple purchase units when
     * you must update the order through `PATCH`. If you omit this value and the order contains only one
     * purchase unit, PayPal sets this value to `default`. <blockquote><strong>Note:</strong> If there are
     * multiple purchase units, <code>reference_id</code> is required for each purchase unit.</blockquote>
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
     * amount, total tax amount, shipping, handling, insurance, and discounts, if any.<br/>If you specify
     * `amount.breakdown`, the amount equals `item_total` plus `tax_total` plus `shipping` plus `handling`
     * plus `insurance` minus `shipping_discount` minus discount.<br/>The amount must be a positive number.
     * For listed of supported currencies and decimal precision, see the PayPal REST APIs <a
     * href="/docs/integration/direct/rest/currency-codes/">Currency Codes</a>.
     */
    public function getAmount(): ?AmountWithBreakdown
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The total order amount with an optional breakdown that provides details, such as the total item
     * amount, total tax amount, shipping, handling, insurance, and discounts, if any.<br/>If you specify
     * `amount.breakdown`, the amount equals `item_total` plus `tax_total` plus `shipping` plus `handling`
     * plus `insurance` minus `shipping_discount` minus discount.<br/>The amount must be a positive number.
     * For listed of supported currencies and decimal precision, see the PayPal REST APIs <a
     * href="/docs/integration/direct/rest/currency-codes/">Currency Codes</a>.
     *
     * @maps amount
     */
    public function setAmount(?AmountWithBreakdown $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Payee.
     * The merchant who receives the funds and fulfills the order. The merchant is also known as the payee.
     */
    public function getPayee(): ?Payee
    {
        return $this->payee;
    }

    /**
     * Sets Payee.
     * The merchant who receives the funds and fulfills the order. The merchant is also known as the payee.
     *
     * @maps payee
     */
    public function setPayee(?Payee $payee): void
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
     * The purchase description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The purchase description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
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
     * Returns Invoice Id.
     * The API caller-provided external invoice ID for this order.
     */
    public function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    /**
     * Sets Invoice Id.
     * The API caller-provided external invoice ID for this order.
     *
     * @maps invoice_id
     */
    public function setInvoiceId(?string $invoiceId): void
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * Returns Id.
     * The PayPal-generated ID for the purchase unit. This ID appears in both the payer's transaction
     * history and the emails that the payer receives. In addition, this ID is available in transaction and
     * settlement reports that merchants and API callers can use to reconcile transactions. This ID is only
     * available when an order is saved by calling <code>v2/checkout/orders/id/save</code>.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The PayPal-generated ID for the purchase unit. This ID appears in both the payer's transaction
     * history and the emails that the payer receives. In addition, this ID is available in transaction and
     * settlement reports that merchants and API callers can use to reconcile transactions. This ID is only
     * available when an order is saved by calling <code>v2/checkout/orders/id/save</code>.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Soft Descriptor.
     * The payment descriptor on account transactions on the customer's credit card statement, that PayPal
     * sends to processors. The maximum length of the soft descriptor information that you can pass in the
     * API field is 22 characters, in the following format:<code>22 - len(PAYPAL * (8)) -
     * len(<var>Descriptor in Payment Receiving Preferences of Merchant account</var> + 1)</code>The PAYPAL
     * prefix uses 8 characters.<br/><br/>The soft descriptor supports the following ASCII characters:
     * <ul><li>Alphanumeric characters</li><li>Dashes</li><li>Asterisks</li><li>Periods (.
     * )</li><li>Spaces</li></ul>For Wallet payments marketplace integrations:<ul><li>The merchant
     * descriptor in the Payment Receiving Preferences must be the marketplace name.</li><li>You can't use
     * the remaining space to show the customer service number.</li><li>The remaining spaces can be a
     * combination of seller name and country.</li></ul><br/>For unbranded payments (Direct Card)
     * marketplace integrations, use a combination of the seller name and phone number.
     */
    public function getSoftDescriptor(): ?string
    {
        return $this->softDescriptor;
    }

    /**
     * Sets Soft Descriptor.
     * The payment descriptor on account transactions on the customer's credit card statement, that PayPal
     * sends to processors. The maximum length of the soft descriptor information that you can pass in the
     * API field is 22 characters, in the following format:<code>22 - len(PAYPAL * (8)) -
     * len(<var>Descriptor in Payment Receiving Preferences of Merchant account</var> + 1)</code>The PAYPAL
     * prefix uses 8 characters.<br/><br/>The soft descriptor supports the following ASCII characters:
     * <ul><li>Alphanumeric characters</li><li>Dashes</li><li>Asterisks</li><li>Periods (.
     * )</li><li>Spaces</li></ul>For Wallet payments marketplace integrations:<ul><li>The merchant
     * descriptor in the Payment Receiving Preferences must be the marketplace name.</li><li>You can't use
     * the remaining space to show the customer service number.</li><li>The remaining spaces can be a
     * combination of seller name and country.</li></ul><br/>For unbranded payments (Direct Card)
     * marketplace integrations, use a combination of the seller name and phone number.
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
     * The order shipping details.
     */
    public function getShipping(): ?ShippingWithTrackingDetails
    {
        return $this->shipping;
    }

    /**
     * Sets Shipping.
     * The order shipping details.
     *
     * @maps shipping
     */
    public function setShipping(?ShippingWithTrackingDetails $shipping): void
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
     * Returns Payments.
     * The collection of payments, or transactions, for a purchase unit in an order. For example,
     * authorized payments, captured payments, and refunds.
     */
    public function getPayments(): ?PaymentCollection
    {
        return $this->payments;
    }

    /**
     * Sets Payments.
     * The collection of payments, or transactions, for a purchase unit in an order. For example,
     * authorized payments, captured payments, and refunds.
     *
     * @maps payments
     */
    public function setPayments(?PaymentCollection $payments): void
    {
        $this->payments = $payments;
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
        if (isset($this->amount)) {
            $json['amount']              = $this->amount;
        }
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
        if (isset($this->id)) {
            $json['id']                  = $this->id;
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
        if (isset($this->payments)) {
            $json['payments']            = $this->payments;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
