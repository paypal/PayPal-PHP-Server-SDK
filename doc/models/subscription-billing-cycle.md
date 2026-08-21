
# Subscription Billing Cycle

The billing cycle details.

## Structure

`SubscriptionBillingCycle`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricingScheme` | [`?SubscriptionPricingScheme`](../../doc/models/subscription-pricing-scheme.md) | Optional | The pricing scheme details. | getPricingScheme(): ?SubscriptionPricingScheme | setPricingScheme(?SubscriptionPricingScheme pricingScheme): void |
| `frequency` | [`Frequency`](../../doc/models/frequency.md) | Required | The frequency of the billing cycle. | getFrequency(): Frequency | setFrequency(Frequency frequency): void |
| `tenureType` | [`string(TenureType)`](../../doc/models/tenure-type.md) | Required | The tenure type of the billing cycle. In case of a plan having trial cycle, only 2 trial cycles are allowed per plan.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `24`, *Pattern*: `^[A-Z_]+$` | getTenureType(): string | setTenureType(string tenureType): void |
| `sequence` | `int` | Required | The order in which this cycle is to run among other billing cycles. For example, a trial billing cycle has a `sequence` of `1` while a regular billing cycle has a `sequence` of `2`, so that trial cycle runs before the regular cycle.<br><br>**Constraints**: `>= 1`, `<= 99` | getSequence(): int | setSequence(int sequence): void |
| `totalCycles` | `?int` | Optional | The number of times this billing cycle gets executed. Trial billing cycles can only be executed a finite number of times (value between 1 and 999 for total_cycles). Regular billing cycles can be executed infinite times (value of 0 for total_cycles) or a finite number of times (value between 1 and 999 for total_cycles).<br><br>**Default**: `1`<br><br>**Constraints**: `>= 0`, `<= 999` | getTotalCycles(): ?int | setTotalCycles(?int totalCycles): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SubscriptionBillingCycleBuilder;
use PaypalServerSdkLib\Models\Builders\FrequencyBuilder;
use PaypalServerSdkLib\Models\IntervalUnit;
use PaypalServerSdkLib\Models\TenureType;
use PaypalServerSdkLib\Models\Builders\SubscriptionPricingSchemeBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\SubscriptionPricingModel;
use PaypalServerSdkLib\Models\Builders\PricingTierBuilder;

$subscriptionBillingCycle = SubscriptionBillingCycleBuilder::init(
    FrequencyBuilder::init(
        IntervalUnit::DAY
    )
        ->intervalCount(1)
        ->build(),
    TenureType::REGULAR,
    99
)
    ->pricingScheme(
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
    )
    ->totalCycles(1)
    ->build();
```

