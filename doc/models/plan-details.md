
# Plan Details

The plan details.

## Structure

`PlanDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `?string` | Optional | The ID for the product.<br><br>**Constraints**: *Minimum Length*: `22`, *Maximum Length*: `22`, *Pattern*: `^PROD-[A-Z0-9]*$` | getProductId(): ?string | setProductId(?string productId): void |
| `name` | `?string` | Optional | The plan name.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^.*$` | getName(): ?string | setName(?string name): void |
| `description` | `?string` | Optional | The detailed description of the plan.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^.*$` | getDescription(): ?string | setDescription(?string description): void |
| `billingCycles` | [`?(SubscriptionBillingCycle[])`](../../doc/models/subscription-billing-cycle.md) | Optional | An array of billing cycles for trial billing and regular billing. A plan can have at most two trial cycles and only one regular cycle.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `12` | getBillingCycles(): ?array | setBillingCycles(?array billingCycles): void |
| `paymentPreferences` | [`?PaymentPreferences`](../../doc/models/payment-preferences.md) | Optional | The payment preferences for a subscription. | getPaymentPreferences(): ?PaymentPreferences | setPaymentPreferences(?PaymentPreferences paymentPreferences): void |
| `merchantPreferences` | [`?MerchantPreferences`](../../doc/models/merchant-preferences.md) | Optional | The merchant preferences for a subscription. | getMerchantPreferences(): ?MerchantPreferences | setMerchantPreferences(?MerchantPreferences merchantPreferences): void |
| `taxes` | [`?Taxes`](../../doc/models/taxes.md) | Optional | The tax details. | getTaxes(): ?Taxes | setTaxes(?Taxes taxes): void |
| `quantitySupported` | `?bool` | Optional | Indicates whether you can subscribe to this plan by providing a quantity for the goods or service.<br><br>**Default**: `false` | getQuantitySupported(): ?bool | setQuantitySupported(?bool quantitySupported): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PlanDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\SubscriptionBillingCycleBuilder;
use PaypalServerSdkLib\Models\Builders\FrequencyBuilder;
use PaypalServerSdkLib\Models\IntervalUnit;
use PaypalServerSdkLib\Models\TenureType;
use PaypalServerSdkLib\Models\Builders\SubscriptionPricingSchemeBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\SubscriptionPricingModel;
use PaypalServerSdkLib\Models\Builders\PricingTierBuilder;
use PaypalServerSdkLib\Models\Builders\PaymentPreferencesBuilder;
use PaypalServerSdkLib\Models\SetupFeeFailureAction;

$planDetails = PlanDetailsBuilder::init()
    ->productId('product_id4')
    ->name('name8')
    ->description('description2')
    ->billingCycles(
        [
            SubscriptionBillingCycleBuilder::init(
                FrequencyBuilder::init(
                    IntervalUnit::DAY
                )
                    ->intervalCount(94)
                    ->build(),
                TenureType::REGULAR,
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
            SubscriptionBillingCycleBuilder::init(
                FrequencyBuilder::init(
                    IntervalUnit::DAY
                )
                    ->intervalCount(94)
                    ->build(),
                TenureType::REGULAR,
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
            SubscriptionBillingCycleBuilder::init(
                FrequencyBuilder::init(
                    IntervalUnit::DAY
                )
                    ->intervalCount(94)
                    ->build(),
                TenureType::REGULAR,
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
        PaymentPreferencesBuilder::init()
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
    ->quantitySupported(false)
    ->build();
```

