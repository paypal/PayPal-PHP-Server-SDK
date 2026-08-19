
# Subscription Status

The status of the subscription.

## Enumeration

`SubscriptionStatus`

## Fields

| Name | Description |
|  --- | --- |
| `APPROVAL_PENDING` | The subscription is created but not yet approved by the buyer. |
| `APPROVED` | The buyer has approved the subscription. |
| `ACTIVE` | The subscription is active. |
| `SUSPENDED` | The subscription is suspended. |
| `CANCELLED` | The subscription is cancelled. |
| `EXPIRED` | The subscription is expired. |

## Example

```php
use PaypalServerSdkLib\Models\SubscriptionStatus;

$subscriptionStatus = SubscriptionStatus::CANCELLED;
```

