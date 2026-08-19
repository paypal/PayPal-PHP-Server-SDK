
# Suspend Subscription

The suspend subscription request details.

## Structure

`SuspendSubscription`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reason` | `string` | Required | The reason for suspension of the Subscription.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128`, *Pattern*: `^.*$` | getReason(): string | setReason(string reason): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SuspendSubscriptionBuilder;

$suspendSubscription = SuspendSubscriptionBuilder::init(
    'reason4'
)->build();
```

