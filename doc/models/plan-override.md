
# Plan Override

An inline plan object to customise the subscription. You can override plan level default attributes by providing customised values for the subscription in this object.

## Structure

`PlanOverride`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `billingCycles` | [`?(BillingCycleOverride[])`](../../doc/models/billing-cycle-override.md) | Optional | An array of billing cycles for trial billing and regular billing. The subscription billing cycle definition has to adhere to the plan billing cycle definition.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `12` | getBillingCycles(): ?array | setBillingCycles(?array billingCycles): void |
| `paymentPreferences` | [`?PaymentPreferencesOverride`](../../doc/models/payment-preferences-override.md) | Optional | The payment preferences to override at subscription level. | getPaymentPreferences(): ?PaymentPreferencesOverride | setPaymentPreferences(?PaymentPreferencesOverride paymentPreferences): void |
| `taxes` | [`?TaxesOverride`](../../doc/models/taxes-override.md) | Optional | The tax details. | getTaxes(): ?TaxesOverride | setTaxes(?TaxesOverride taxes): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PlanOverrideBuilder;
use PaypalServerSdkLib\Models\Builders\BillingCycleOverrideBuilder;
use PaypalServerSdkLib\Models\Builders\SubscriptionPricingSchemeBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\SubscriptionPricingModel;
use PaypalServerSdkLib\Models\Builders\PricingTierBuilder;
use PaypalServerSdkLib\Models\Builders\PaymentPreferencesOverrideBuilder;
use PaypalServerSdkLib\Models\SetupFeeFailureAction;
use PaypalServerSdkLib\Models\Builders\TaxesOverrideBuilder;

$planOverride = PlanOverrideBuilder::init()
    ->billingCycles(
        [
            BillingCycleOverrideBuilder::init(
                8
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
                ->totalCycles(198)
                ->build(),
            BillingCycleOverrideBuilder::init(
                8
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
                ->totalCycles(198)
                ->build(),
            BillingCycleOverrideBuilder::init(
                8
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
                ->totalCycles(198)
                ->build()
        ]
    )
    ->paymentPreferences(
        PaymentPreferencesOverrideBuilder::init()
            ->autoBillOutstanding(false)
            ->setupFee(
                MoneyBuilder::init(
                    'currency_code8',
                    'value4'
                )->build()
            )
            ->setupFeeFailureAction(SetupFeeFailureAction::CONTINUE_)
            ->paymentFailureThreshold(104)
            ->build()
    )
    ->taxes(
        TaxesOverrideBuilder::init()
            ->percentage('percentage8')
            ->inclusive(false)
            ->build()
    )
    ->build();
```

