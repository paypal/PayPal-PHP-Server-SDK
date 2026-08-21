
# Capture Status with Details

The status and status details of a captured payment.

## Structure

`CaptureStatusWithDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`?string(CaptureStatus)`](../../doc/models/capture-status.md) | Optional, Read-only | The status of the captured payment. | getStatus(): ?string | setStatus(?string status): void |
| `statusDetails` | [`?CaptureStatusDetails`](../../doc/models/capture-status-details.md) | Optional | The details of the captured payment status. | getStatusDetails(): ?CaptureStatusDetails | setStatusDetails(?CaptureStatusDetails statusDetails): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CaptureStatusWithDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\CaptureStatusDetailsBuilder;
use PaypalServerSdkLib\Models\CaptureIncompleteReason;

$captureStatusWithDetails = CaptureStatusWithDetailsBuilder::init()
    ->statusDetails(
        CaptureStatusDetailsBuilder::init()
            ->reason(CaptureIncompleteReason::VERIFICATION_REQUIRED)
            ->build()
    )
    ->build();
```

