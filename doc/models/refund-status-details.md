
# Refund Status Details

The details of the refund status.

## Structure

`RefundStatusDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reason` | [`?string(RefundIncompleteReason)`](../../doc/models/refund-incomplete-reason.md) | Optional | The reason why the refund has the `PENDING` or `FAILED` status. | getReason(): ?string | setReason(?string reason): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\RefundStatusDetailsBuilder;
use PaypalServerSdkLib\Models\RefundIncompleteReason;

$refundStatusDetails = RefundStatusDetailsBuilder::init()
    ->reason(RefundIncompleteReason::ECHECK)
    ->build();
```

