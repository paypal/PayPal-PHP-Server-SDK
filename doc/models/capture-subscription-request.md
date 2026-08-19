
# Capture Subscription Request

The charge amount from the subscriber.

## Structure

`CaptureSubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `note` | `string` | Required | The reason or note for the subscription charge.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128`, *Pattern*: `^.*$` | getNote(): string | setNote(string note): void |
| `captureType` | [`string(CaptureType)`](../../doc/models/capture-type.md) | Required | The type of capture.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `24`, *Pattern*: `^[A-Z_]+$` | getCaptureType(): string | setCaptureType(string captureType): void |
| `amount` | [`Money`](../../doc/models/money.md) | Required | The currency and amount for a financial transaction, such as a balance or payment due. | getAmount(): Money | setAmount(Money amount): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CaptureSubscriptionRequestBuilder;
use PaypalServerSdkLib\Models\CaptureType;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$captureSubscriptionRequest = CaptureSubscriptionRequestBuilder::init(
    'note2',
    CaptureType::OUTSTANDING_BALANCE,
    MoneyBuilder::init(
        'currency_code6',
        'value0'
    )->build()
)->build();
```

