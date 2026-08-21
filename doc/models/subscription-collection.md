
# Subscription Collection

The list of subscriptions.

## Structure

`SubscriptionCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptions` | [`?(Subscription[])`](../../doc/models/subscription.md) | Optional | An array of subscriptions.<br><br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `32767` | getSubscriptions(): ?array | setSubscriptions(?array subscriptions): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional, Read-only | An array of request-related [HATEOAS links](/docs/api/reference/api-responses/#hateoas-links).<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10` | getLinks(): ?array | setLinks(?array links): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SubscriptionCollectionBuilder;
use PaypalServerSdkLib\Models\Builders\SubscriptionBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$subscriptionCollection = SubscriptionCollectionBuilder::init()
    ->subscriptions(
        [
            SubscriptionBuilder::init()
                ->planId('plan_id8')
                ->startTime('start_time0')
                ->quantity('quantity2')
                ->shippingAmount(
                    MoneyBuilder::init(
                        'currency_code0',
                        'value6'
                    )->build()
                )->build(),
            SubscriptionBuilder::init()
                ->planId('plan_id8')
                ->startTime('start_time0')
                ->quantity('quantity2')
                ->shippingAmount(
                    MoneyBuilder::init(
                        'currency_code0',
                        'value6'
                    )->build()
                )->build()
        ]
    )->build();
```

