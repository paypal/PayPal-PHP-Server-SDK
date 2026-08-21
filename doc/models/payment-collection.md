
# Payment Collection

The collection of payments, or transactions, for a purchase unit in an order. For example, authorized payments, captured payments, and refunds.

## Structure

`PaymentCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `authorizations` | [`?(AuthorizationWithAdditionalData[])`](../../doc/models/authorization-with-additional-data.md) | Optional | An array of authorized payments for a purchase unit. A purchase unit can have zero or more authorized payments. | getAuthorizations(): ?array | setAuthorizations(?array authorizations): void |
| `captures` | [`?(OrdersCapture[])`](../../doc/models/orders-capture.md) | Optional | An array of captured payments for a purchase unit. A purchase unit can have zero or more captured payments. | getCaptures(): ?array | setCaptures(?array captures): void |
| `refunds` | [`?(Refund[])`](../../doc/models/refund.md) | Optional | An array of refunds for a purchase unit. A purchase unit can have zero or more refunds. | getRefunds(): ?array | setRefunds(?array refunds): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PaymentCollectionBuilder;
use PaypalServerSdkLib\Models\Builders\AuthorizationWithAdditionalDataBuilder;
use PaypalServerSdkLib\Models\Builders\AuthorizationStatusDetailsBuilder;
use PaypalServerSdkLib\Models\AuthorizationIncompleteReason;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\OrdersCaptureBuilder;
use PaypalServerSdkLib\Models\Builders\CaptureStatusDetailsBuilder;
use PaypalServerSdkLib\Models\CaptureIncompleteReason;
use PaypalServerSdkLib\Models\Builders\RefundBuilder;
use PaypalServerSdkLib\Models\Builders\RefundStatusDetailsBuilder;
use PaypalServerSdkLib\Models\RefundIncompleteReason;

$paymentCollection = PaymentCollectionBuilder::init()
    ->authorizations(
        [
            AuthorizationWithAdditionalDataBuilder::init()
                ->statusDetails(
                    AuthorizationStatusDetailsBuilder::init()
                        ->reason(AuthorizationIncompleteReason::PENDING_REVIEW)
                        ->build()
                )
                ->amount(
                    MoneyBuilder::init(
                        'currency_code6',
                        'value0'
                    )->build()
                )->build()
        ]
    )
    ->captures(
        [
            OrdersCaptureBuilder::init()
                ->statusDetails(
                    CaptureStatusDetailsBuilder::init()
                        ->reason(CaptureIncompleteReason::VERIFICATION_REQUIRED)
                        ->build()
                )
                ->amount(
                    MoneyBuilder::init(
                        'currency_code6',
                        'value0'
                    )->build()
                )->build(),
            OrdersCaptureBuilder::init()
                ->statusDetails(
                    CaptureStatusDetailsBuilder::init()
                        ->reason(CaptureIncompleteReason::VERIFICATION_REQUIRED)
                        ->build()
                )
                ->amount(
                    MoneyBuilder::init(
                        'currency_code6',
                        'value0'
                    )->build()
                )->build(),
            OrdersCaptureBuilder::init()
                ->statusDetails(
                    CaptureStatusDetailsBuilder::init()
                        ->reason(CaptureIncompleteReason::VERIFICATION_REQUIRED)
                        ->build()
                )
                ->amount(
                    MoneyBuilder::init(
                        'currency_code6',
                        'value0'
                    )->build()
                )->build()
        ]
    )
    ->refunds(
        [
            RefundBuilder::init()
                ->statusDetails(
                    RefundStatusDetailsBuilder::init()
                        ->reason(RefundIncompleteReason::ECHECK)
                        ->build()
                )
                ->amount(
                    MoneyBuilder::init(
                        'currency_code6',
                        'value0'
                    )->build()
                )->build()
        ]
    )->build();
```

