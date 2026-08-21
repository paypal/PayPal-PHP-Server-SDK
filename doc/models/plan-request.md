
# Plan Request

The create plan request details.

## Structure

`PlanRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `string` | Required | The ID of the product created through Catalog Products API.<br><br>**Constraints**: *Minimum Length*: `22`, *Maximum Length*: `22`, *Pattern*: `^PROD-[A-Z0-9]*$` | getProductId(): string | setProductId(string productId): void |
| `name` | `string` | Required | The plan name.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^.*$` | getName(): string | setName(string name): void |
| `status` | [`?string(PlanRequestStatus)`](../../doc/models/plan-request-status.md) | Optional | The initial state of the plan. Allowed input values are CREATED and ACTIVE.<br><br>**Default**: `PlanRequestStatus::ACTIVE`<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `24`, *Pattern*: `^[A-Z_]+$` | getStatus(): ?string | setStatus(?string status): void |
| `description` | `?string` | Optional | The detailed description of the plan.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^.*$` | getDescription(): ?string | setDescription(?string description): void |
| `billingCycles` | [`SubscriptionBillingCycle[]`](../../doc/models/subscription-billing-cycle.md) | Required | An array of billing cycles for trial billing and regular billing. A plan can have at most two trial cycles and only one regular cycle.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `12` | getBillingCycles(): array | setBillingCycles(array billingCycles): void |
| `paymentPreferences` | [`PaymentPreferences`](../../doc/models/payment-preferences.md) | Required | The payment preferences for a subscription. | getPaymentPreferences(): PaymentPreferences | setPaymentPreferences(PaymentPreferences paymentPreferences): void |
| `merchantPreferences` | [`?MerchantPreferences`](../../doc/models/merchant-preferences.md) | Optional | The merchant preferences for a subscription. | getMerchantPreferences(): ?MerchantPreferences | setMerchantPreferences(?MerchantPreferences merchantPreferences): void |
| `taxes` | [`?Taxes`](../../doc/models/taxes.md) | Optional | The tax details. | getTaxes(): ?Taxes | setTaxes(?Taxes taxes): void |
| `quantitySupported` | `?bool` | Optional | Indicates whether you can subscribe to this plan by providing a quantity for the goods or service.<br><br>**Default**: `false` | getQuantitySupported(): ?bool | setQuantitySupported(?bool quantitySupported): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PlanRequestBuilder;
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
use PaypalServerSdkLib\Models\PlanRequestStatus;
use PaypalServerSdkLib\Models\Builders\MerchantPreferencesBuilder;
use PaypalServerSdkLib\Models\Builders\TaxesBuilder;

$planRequest = PlanRequestBuilder::init(
    'product_id4',
    'name0',
    [
        SubscriptionBillingCycleBuilder::init(
            FrequencyBuilder::init(
                IntervalUnit::DAY
            )
                ->intervalCount(1)
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
            ->totalCycles(1)
            ->build()
    ],
    PaymentPreferencesBuilder::init()
        ->autoBillOutstanding(true)
        ->setupFee(
            MoneyBuilder::init(
                'currency_code8',
                'value4'
            )->build()
        )
        ->setupFeeFailureAction(SetupFeeFailureAction::CANCEL)
        ->paymentFailureThreshold(0)
        ->build()
)
    ->status(PlanRequestStatus::ACTIVE)
    ->description('description0')
    ->merchantPreferences(
        MerchantPreferencesBuilder::init()
            ->returnUrl('return_url4')
            ->cancelUrl('cancel_url6')
            ->build()
    )
    ->taxes(
        TaxesBuilder::init(
            'percentage8'
        )
            ->inclusive(false)
            ->build()
    )
    ->quantitySupported(false)
    ->build();
```

