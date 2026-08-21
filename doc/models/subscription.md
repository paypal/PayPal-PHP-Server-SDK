
# Subscription

The subscription details.

## Structure

`Subscription`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional, Read-only | The PayPal-generated ID for the subscription.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `50` | getId(): ?string | setId(?string id): void |
| `planId` | `?string` | Optional | The ID of the plan.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `50` | getPlanId(): ?string | setPlanId(?string planId): void |
| `startTime` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional. Note: The regular expression provides guidance but does not reject all invalid dates.<br><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getStartTime(): ?string | setStartTime(?string startTime): void |
| `quantity` | `?string` | Optional | The quantity of the product in the subscription.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `32`, *Pattern*: `^([0-9]+\|([0-9]+)?[.][0-9]+)$` | getQuantity(): ?string | setQuantity(?string quantity): void |
| `shippingAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getShippingAmount(): ?Money | setShippingAmount(?Money shippingAmount): void |
| `subscriber` | [`?Subscriber`](../../doc/models/subscriber.md) | Optional | The subscriber response information. | getSubscriber(): ?Subscriber | setSubscriber(?Subscriber subscriber): void |
| `billingInfo` | [`?SubscriptionBillingInformation`](../../doc/models/subscription-billing-information.md) | Optional | The billing details for the subscription. If the subscription was or is active, these fields are populated. | getBillingInfo(): ?SubscriptionBillingInformation | setBillingInfo(?SubscriptionBillingInformation billingInfo): void |
| `createTime` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional. Note: The regular expression provides guidance but does not reject all invalid dates.<br><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getCreateTime(): ?string | setCreateTime(?string createTime): void |
| `updateTime` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional. Note: The regular expression provides guidance but does not reject all invalid dates.<br><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getUpdateTime(): ?string | setUpdateTime(?string updateTime): void |
| `customId` | `?string` | Optional | The custom id for the subscription. Can be invoice id.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^[\x20-\x7E]+` | getCustomId(): ?string | setCustomId(?string customId): void |
| `planOverridden` | `?bool` | Optional, Read-only | Indicates whether the subscription has overridden any plan attributes. | getPlanOverridden(): ?bool | setPlanOverridden(?bool planOverridden): void |
| `plan` | [`?PlanDetails`](../../doc/models/plan-details.md) | Optional | The plan details. | getPlan(): ?PlanDetails | setPlan(?PlanDetails plan): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional, Read-only | An array of request-related [HATEOAS links](/docs/api/reference/api-responses/#hateoas-links). | getLinks(): ?array | setLinks(?array links): void |
| `status` | [`?string(SubscriptionStatus)`](../../doc/models/subscription-status.md) | Optional | The status of the subscription. | getStatus(): ?string | setStatus(?string status): void |
| `statusChangeNote` | `?string` | Optional | The reason or notes for the status of the subscription.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128`, *Pattern*: `^.*$` | getStatusChangeNote(): ?string | setStatusChangeNote(?string statusChangeNote): void |
| `statusUpdateTime` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional. Note: The regular expression provides guidance but does not reject all invalid dates.<br><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getStatusUpdateTime(): ?string | setStatusUpdateTime(?string statusUpdateTime): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SubscriptionBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$subscription = SubscriptionBuilder::init()
    ->planId('plan_id6')
    ->startTime('start_time8')
    ->quantity('quantity0')
    ->shippingAmount(
        MoneyBuilder::init(
            'currency_code0',
            'value6'
        )->build()
    )->build();
```

