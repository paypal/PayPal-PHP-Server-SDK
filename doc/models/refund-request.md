
# Refund Request

Refunds a captured payment, by ID. For a full refund, include an empty request body. For a partial refund, include an amount object in the request body.

## Structure

`RefundRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getAmount(): ?Money | setAmount(?Money amount): void |
| `customId` | `?string` | Optional | The API caller-provided external ID. Used to reconcile API caller-initiated transactions with PayPal transactions. Appears in transaction and settlement reports. The pattern is defined by an external party and supports Unicode.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^.*$` | getCustomId(): ?string | setCustomId(?string customId): void |
| `invoiceId` | `?string` | Optional | The API caller-provided external invoice ID for this order. The pattern is defined by an external party and supports Unicode.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^.*$` | getInvoiceId(): ?string | setInvoiceId(?string invoiceId): void |
| `noteToPayer` | `?string` | Optional | The reason for the refund. Appears in both the payer's transaction history and the emails that the payer receives. The pattern is defined by an external party and supports Unicode.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^.*$` | getNoteToPayer(): ?string | setNoteToPayer(?string noteToPayer): void |
| `paymentInstruction` | [`?RefundPaymentInstruction`](../../doc/models/refund-payment-instruction.md) | Optional | Any additional payments instructions during refund payment processing. This object is only applicable to merchants that have been enabled for PayPal Commerce Platform for Marketplaces and Platforms capability. Please speak to your account manager if you want to use this capability. | getPaymentInstruction(): ?RefundPaymentInstruction | setPaymentInstruction(?RefundPaymentInstruction paymentInstruction): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\RefundRequestBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\RefundPaymentInstructionBuilder;
use PaypalServerSdkLib\Models\Builders\RefundPlatformFeeBuilder;

$refundRequest = RefundRequestBuilder::init()
    ->amount(
        MoneyBuilder::init(
            'currency_code6',
            'value0'
        )->build()
    )
    ->customId('custom_id2')
    ->invoiceId('invoice_id4')
    ->noteToPayer('note_to_payer6')
    ->paymentInstruction(
        RefundPaymentInstructionBuilder::init()
            ->platformFees(
                [
                    RefundPlatformFeeBuilder::init(
                        MoneyBuilder::init(
                            'currency_code6',
                            'value0'
                        )->build()
                    )->build(),
                    RefundPlatformFeeBuilder::init(
                        MoneyBuilder::init(
                            'currency_code6',
                            'value0'
                        )->build()
                    )->build(),
                    RefundPlatformFeeBuilder::init(
                        MoneyBuilder::init(
                            'currency_code6',
                            'value0'
                        )->build()
                    )->build()
                ]
            )->build()
    )->build();
```

