
# Purchase Unit

The purchase unit details. Used to capture required information for the payment contract.

## Structure

`PurchaseUnit`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `referenceId` | `?string` | Optional | The API caller-provided external ID for the purchase unit. Required for multiple purchase units when you must update the order through `PATCH`. If you omit this value and the order contains only one purchase unit, PayPal sets this value to `default`. Note: If there are multiple purchase units, reference_id is required for each purchase unit.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `256` | getReferenceId(): ?string | setReferenceId(?string referenceId): void |
| `amount` | [`?AmountWithBreakdown`](../../doc/models/amount-with-breakdown.md) | Optional | The total order amount with an optional breakdown that provides details, such as the total item amount, total tax amount, shipping, handling, insurance, and discounts, if any. If you specify `amount.breakdown`, the amount equals `item_total` plus `tax_total` plus `shipping` plus `handling` plus `insurance` minus `shipping_discount` minus discount. The amount must be a positive number. For listed of supported currencies and decimal precision, see the PayPal REST APIs Currency Codes. | getAmount(): ?AmountWithBreakdown | setAmount(?AmountWithBreakdown amount): void |
| `payee` | [`?PayeeBase`](../../doc/models/payee-base.md) | Optional | The merchant who receives the funds and fulfills the order. The merchant is also known as the payee. | getPayee(): ?PayeeBase | setPayee(?PayeeBase payee): void |
| `paymentInstruction` | [`?PaymentInstruction`](../../doc/models/payment-instruction.md) | Optional | Any additional payment instructions to be consider during payment processing. This processing instruction is applicable for Capturing an order or Authorizing an Order. | getPaymentInstruction(): ?PaymentInstruction | setPaymentInstruction(?PaymentInstruction paymentInstruction): void |
| `description` | `?string` | Optional | The purchase description.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127` | getDescription(): ?string | setDescription(?string description): void |
| `customId` | `?string` | Optional | The API caller-provided external ID. Used to reconcile API caller-initiated transactions with PayPal transactions. Appears in transaction and settlement reports.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255` | getCustomId(): ?string | setCustomId(?string customId): void |
| `invoiceId` | `?string` | Optional | The API caller-provided external invoice ID for this order.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127` | getInvoiceId(): ?string | setInvoiceId(?string invoiceId): void |
| `id` | `?string` | Optional | The PayPal-generated ID for the purchase unit. This ID appears in both the payer's transaction history and the emails that the payer receives. In addition, this ID is available in transaction and settlement reports that merchants and API callers can use to reconcile transactions. This ID is only available when an order is saved by calling v2/checkout/orders/id/save.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `19` | getId(): ?string | setId(?string id): void |
| `softDescriptor` | `?string` | Optional | The payment descriptor on account transactions on the customer's credit card statement, that PayPal sends to processors. The maximum length of the soft descriptor information that you can pass in the API field is 22 characters, in the following format:22 - len(PAYPAL * (8)) - len(Descriptor in Payment Receiving Preferences of Merchant account + 1)The PAYPAL prefix uses 8 characters. The soft descriptor supports the following ASCII characters: Alphanumeric characters Dashes Asterisks Periods (.) Spaces For Wallet payments marketplace integrations: The merchant descriptor in the Payment Receiving Preferences must be the marketplace name. You can't use the remaining space to show the customer service number. The remaining spaces can be a combination of seller name and country. For unbranded payments (Direct Card) marketplace integrations, use a combination of the seller name and phone number.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `22` | getSoftDescriptor(): ?string | setSoftDescriptor(?string softDescriptor): void |
| `items` | [`?(Item[])`](../../doc/models/item.md) | Optional | An array of items that the customer purchases from the merchant. | getItems(): ?array | setItems(?array items): void |
| `shipping` | [`?ShippingWithTrackingDetails`](../../doc/models/shipping-with-tracking-details.md) | Optional | The order shipping details. | getShipping(): ?ShippingWithTrackingDetails | setShipping(?ShippingWithTrackingDetails shipping): void |
| `supplementaryData` | [`?SupplementaryData`](../../doc/models/supplementary-data.md) | Optional | Supplementary data about a payment. This object passes information that can be used to improve risk assessments and processing costs, for example, by providing Level 2 and Level 3 payment data. | getSupplementaryData(): ?SupplementaryData | setSupplementaryData(?SupplementaryData supplementaryData): void |
| `payments` | [`?PaymentCollection`](../../doc/models/payment-collection.md) | Optional | The collection of payments, or transactions, for a purchase unit in an order. For example, authorized payments, captured payments, and refunds. | getPayments(): ?PaymentCollection | setPayments(?PaymentCollection payments): void |
| `mostRecentErrors` | `array` | Optional | The error reason code and description that are the reason for the most recent order decline.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10` | getMostRecentErrors(): array | setMostRecentErrors(array mostRecentErrors): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PurchaseUnitBuilder;
use PaypalServerSdkLib\Models\Builders\AmountWithBreakdownBuilder;
use PaypalServerSdkLib\Models\Builders\AmountBreakdownBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\PayeeBaseBuilder;
use PaypalServerSdkLib\Models\Builders\PaymentInstructionBuilder;
use PaypalServerSdkLib\Models\Builders\PlatformFeeBuilder;
use PaypalServerSdkLib\Models\DisbursementMode;

$purchaseUnit = PurchaseUnitBuilder::init()
    ->referenceId('reference_id0')
    ->amount(
        AmountWithBreakdownBuilder::init(
            'currency_code6',
            'value0'
        )
            ->breakdown(
                AmountBreakdownBuilder::init()
                    ->itemTotal(
                        MoneyBuilder::init(
                            'currency_code0',
                            'value6'
                        )->build()
                    )
                    ->shipping(
                        MoneyBuilder::init(
                            'currency_code0',
                            'value6'
                        )->build()
                    )
                    ->handling(
                        MoneyBuilder::init(
                            'currency_code2',
                            'value8'
                        )->build()
                    )
                    ->taxTotal(
                        MoneyBuilder::init(
                            'currency_code4',
                            'value0'
                        )->build()
                    )
                    ->insurance(
                        MoneyBuilder::init(
                            'currency_code2',
                            'value8'
                        )->build()
                    )->build()
            )->build()
    )
    ->payee(
        PayeeBaseBuilder::init()
            ->emailAddress('email_address4')
            ->merchantId('merchant_id6')
            ->build()
    )
    ->paymentInstruction(
        PaymentInstructionBuilder::init()
            ->platformFees(
                [
                    PlatformFeeBuilder::init(
                        MoneyBuilder::init(
                            'currency_code6',
                            'value0'
                        )->build()
                    )
                        ->payee(
                            PayeeBaseBuilder::init()
                                ->emailAddress('email_address4')
                                ->merchantId('merchant_id6')
                                ->build()
                        )
                        ->build(),
                    PlatformFeeBuilder::init(
                        MoneyBuilder::init(
                            'currency_code6',
                            'value0'
                        )->build()
                    )
                        ->payee(
                            PayeeBaseBuilder::init()
                                ->emailAddress('email_address4')
                                ->merchantId('merchant_id6')
                                ->build()
                        )
                        ->build(),
                    PlatformFeeBuilder::init(
                        MoneyBuilder::init(
                            'currency_code6',
                            'value0'
                        )->build()
                    )
                        ->payee(
                            PayeeBaseBuilder::init()
                                ->emailAddress('email_address4')
                                ->merchantId('merchant_id6')
                                ->build()
                        )
                        ->build()
                ]
            )
            ->disbursementMode(DisbursementMode::INSTANT)
            ->payeePricingTierId('payee_pricing_tier_id2')
            ->payeeReceivableFxRateId('payee_receivable_fx_rate_id0')
            ->build()
    )
    ->description('description2')
    ->build();
```

