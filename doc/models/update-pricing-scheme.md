
# Update Pricing Scheme

The update pricing scheme request details.

## Structure

`UpdatePricingScheme`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `billingCycleSequence` | `int` | Required | The billing cycle sequence.<br><br>**Constraints**: `>= 1`, `<= 99` | getBillingCycleSequence(): int | setBillingCycleSequence(int billingCycleSequence): void |
| `pricingScheme` | [`SubscriptionPricingScheme`](../../doc/models/subscription-pricing-scheme.md) | Required | The pricing scheme details. | getPricingScheme(): SubscriptionPricingScheme | setPricingScheme(SubscriptionPricingScheme pricingScheme): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\UpdatePricingSchemeBuilder;
use PaypalServerSdkLib\Models\Builders\SubscriptionPricingSchemeBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\SubscriptionPricingModel;
use PaypalServerSdkLib\Models\Builders\PricingTierBuilder;

$updatePricingScheme = UpdatePricingSchemeBuilder::init(
    99,
    SubscriptionPricingSchemeBuilder::init()
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
        ->createTime('create_time4')
        ->build()
)->build();
```

