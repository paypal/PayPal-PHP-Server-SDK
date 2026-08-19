
# Capture Request

Captures either a portion or the full authorized amount of an authorized payment.

## Structure

`CaptureRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getAmount(): ?Money | setAmount(?Money amount): void |
| `invoiceId` | `?string` | Optional | The API caller-provided external invoice number for this order. Appears in both the payer's transaction history and the emails that the payer receives.<br><br>**Constraints**: *Maximum Length*: `127` | getInvoiceId(): ?string | setInvoiceId(?string invoiceId): void |
| `finalCapture` | `?bool` | Optional | Indicates whether you can make additional captures against the authorized payment. Set to `true` if you do not intend to capture additional payments against the authorization. Set to `false` if you intend to capture additional payments against the authorization.<br><br>**Default**: `false` | getFinalCapture(): ?bool | setFinalCapture(?bool finalCapture): void |
| `paymentInstruction` | [`?CapturePaymentInstruction`](../../doc/models/capture-payment-instruction.md) | Optional | Any additional payment instructions to be consider during payment processing. This processing instruction is applicable for Capturing an order or Authorizing an Order. | getPaymentInstruction(): ?CapturePaymentInstruction | setPaymentInstruction(?CapturePaymentInstruction paymentInstruction): void |
| `noteToPayer` | `?string` | Optional | An informational note about this settlement. Appears in both the payer's transaction history and the emails that the payer receives.<br><br>**Constraints**: *Maximum Length*: `255` | getNoteToPayer(): ?string | setNoteToPayer(?string noteToPayer): void |
| `softDescriptor` | `?string` | Optional | The payment descriptor on the payer's account statement.<br><br>**Constraints**: *Maximum Length*: `22` | getSoftDescriptor(): ?string | setSoftDescriptor(?string softDescriptor): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CaptureRequestBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\CapturePaymentInstructionBuilder;
use PaypalServerSdkLib\Models\Builders\PlatformFeeBuilder;
use PaypalServerSdkLib\Models\Builders\PayeeBaseBuilder;
use PaypalServerSdkLib\Models\DisbursementMode;

$captureRequest = CaptureRequestBuilder::init()
    ->amount(
        MoneyBuilder::init(
            'currency_code6',
            'value0'
        )->build()
    )
    ->invoiceId('invoice_id8')
    ->finalCapture(false)
    ->paymentInstruction(
        CapturePaymentInstructionBuilder::init()
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
            ->payeeReceivableFxRateId('payee_receivable_fx_rate_id0')
            ->build()
    )
    ->noteToPayer('note_to_payer0')
    ->build();
```

