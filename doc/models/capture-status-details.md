
# Capture Status Details

The details of the captured payment status.

## Structure

`CaptureStatusDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reason` | [`?string(CaptureIncompleteReason)`](../../doc/models/capture-incomplete-reason.md) | Optional | The reason why the captured payment status is `PENDING` or `DENIED`.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64`, *Pattern*: `^[A-Z_]+$` | getReason(): ?string | setReason(?string reason): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CaptureStatusDetailsBuilder;
use PaypalServerSdkLib\Models\CaptureIncompleteReason;

$captureStatusDetails = CaptureStatusDetailsBuilder::init()
    ->reason(CaptureIncompleteReason::RECEIVING_PREFERENCE_MANDATES_MANUAL_ACTION)
    ->build();
```

