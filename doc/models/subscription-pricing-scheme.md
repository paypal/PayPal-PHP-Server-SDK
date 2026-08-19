
# Subscription Pricing Scheme

The pricing scheme details.

## Structure

`SubscriptionPricingScheme`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `version` | `?int` | Optional, Read-only | The version of the pricing scheme.<br><br>**Constraints**: `>= 0`, `<= 999` | getVersion(): ?int | setVersion(?int version): void |
| `fixedPrice` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getFixedPrice(): ?Money | setFixedPrice(?Money fixedPrice): void |
| `pricingModel` | [`?string(SubscriptionPricingModel)`](../../doc/models/subscription-pricing-model.md) | Optional | The pricing model for tiered plan. The `tiers` parameter is required.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `24`, *Pattern*: `^[A-Z_]+$` | getPricingModel(): ?string | setPricingModel(?string pricingModel): void |
| `tiers` | [`?(PricingTier[])`](../../doc/models/pricing-tier.md) | Optional | An array of pricing tiers which are used for billing volume/tiered plans. pricing_model field has to be specified.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `32` | getTiers(): ?array | setTiers(?array tiers): void |
| `createTime` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional. Note: The regular expression provides guidance but does not reject all invalid dates.<br><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getCreateTime(): ?string | setCreateTime(?string createTime): void |
| `updateTime` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional. Note: The regular expression provides guidance but does not reject all invalid dates.<br><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getUpdateTime(): ?string | setUpdateTime(?string updateTime): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SubscriptionPricingSchemeBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\SubscriptionPricingModel;
use PaypalServerSdkLib\Models\Builders\PricingTierBuilder;

$subscriptionPricingScheme = SubscriptionPricingSchemeBuilder::init()
    ->fixedPrice(
        MoneyBuilder::init(
            'currency_code4',
            'value0'
        )->build()
    )
    ->pricingModel(SubscriptionPricingModel::VOLUME)
    ->tiers(
        [
            PricingTierBuilder::init(
                'starting_quantity8',
                MoneyBuilder::init(
                    'currency_code6',
                    'value0'
                )->build()
            )
                ->endingQuantity('ending_quantity6')
                ->build(),
            PricingTierBuilder::init(
                'starting_quantity8',
                MoneyBuilder::init(
                    'currency_code6',
                    'value0'
                )->build()
            )
                ->endingQuantity('ending_quantity6')
                ->build()
        ]
    )
    ->createTime('create_time2')
    ->build();
```

