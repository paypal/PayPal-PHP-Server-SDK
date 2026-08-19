
# Activate Subscription Request

The activate subscription request details.

## Structure

`ActivateSubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reason` | `?string` | Optional | The reason for activation of a subscription. Required to reactivate the subscription.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128`, *Pattern*: `^.*$` | getReason(): ?string | setReason(?string reason): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ActivateSubscriptionRequestBuilder;

$activateSubscriptionRequest = ActivateSubscriptionRequestBuilder::init()
    ->reason('reason6')
    ->build();
```

