
# Update Pricing Schemes Request

The update pricing scheme request details.

## Structure

`UpdatePricingSchemesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricingSchemes` | [`UpdatePricingScheme[]`](../../doc/models/update-pricing-scheme.md) | Required | An array of pricing schemes.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `99` | getPricingSchemes(): array | setPricingSchemes(array pricingSchemes): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\UpdatePricingSchemesRequestBuilder;
use PaypalServerSdkLib\Models\Builders\UpdatePricingSchemeBuilder;
use PaypalServerSdkLib\Models\Builders\SubscriptionPricingSchemeBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\SubscriptionPricingModel;
use PaypalServerSdkLib\Models\Builders\PricingTierBuilder;

$updatePricingSchemesRequest = UpdatePricingSchemesRequestBuilder::init(
    [
        UpdatePricingSchemeBuilder::init(
            34,
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
        )->build()
    ]
)->build();
```

