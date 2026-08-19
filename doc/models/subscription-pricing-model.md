
# Subscription Pricing Model

The pricing model for tiered plan. The `tiers` parameter is required.

## Enumeration

`SubscriptionPricingModel`

## Fields

| Name | Description |
|  --- | --- |
| `VOLUME` | A volume pricing model. |
| `TIERED` | A tiered pricing model. |

## Example

```php
use PaypalServerSdkLib\Models\SubscriptionPricingModel;

$subscriptionPricingModel = SubscriptionPricingModel::VOLUME;
```

