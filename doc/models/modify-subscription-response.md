
# Modify Subscription Response

The response to a request to update the quantity of the product or service in a subscription. You can also use this method to switch the plan and update the `shipping_amount` and `shipping_address` values for the subscription. This type of update requires the buyer's consent.

## Structure

`ModifySubscriptionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planId` | `?string` | Optional | The unique PayPal-generated ID for the plan.<br><br>**Constraints**: *Minimum Length*: `26`, *Maximum Length*: `26`, *Pattern*: `^P-[A-Z0-9]*$` | getPlanId(): ?string | setPlanId(?string planId): void |
| `quantity` | `?string` | Optional | The quantity of the product or service in the subscription.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `32`, *Pattern*: `^([0-9]+\|([0-9]+)?[.][0-9]+)$` | getQuantity(): ?string | setQuantity(?string quantity): void |
| `shippingAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getShippingAmount(): ?Money | setShippingAmount(?Money shippingAmount): void |
| `shippingAddress` | [`?ShippingDetails`](../../doc/models/shipping-details.md) | Optional | The shipping details. | getShippingAddress(): ?ShippingDetails | setShippingAddress(?ShippingDetails shippingAddress): void |
| `plan` | [`?PlanOverride`](../../doc/models/plan-override.md) | Optional | An inline plan object to customise the subscription. You can override plan level default attributes by providing customised values for the subscription in this object. | getPlan(): ?PlanOverride | setPlan(?PlanOverride plan): void |
| `planOverridden` | `?bool` | Optional, Read-only | Indicates whether the subscription has overridden any plan attributes. | getPlanOverridden(): ?bool | setPlanOverridden(?bool planOverridden): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional, Read-only | An array of request-related [HATEOAS links](/docs/api/reference/api-responses/#hateoas-links). | getLinks(): ?array | setLinks(?array links): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ModifySubscriptionResponseBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\ShippingDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\ShippingNameBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberWithCountryCodeBuilder;
use PaypalServerSdkLib\Models\FulfillmentType;
use PaypalServerSdkLib\Models\Builders\ShippingOptionBuilder;
use PaypalServerSdkLib\Models\ShippingType;
use PaypalServerSdkLib\Models\Builders\PlanOverrideBuilder;
use PaypalServerSdkLib\Models\Builders\BillingCycleOverrideBuilder;
use PaypalServerSdkLib\Models\Builders\SubscriptionPricingSchemeBuilder;
use PaypalServerSdkLib\Models\SubscriptionPricingModel;
use PaypalServerSdkLib\Models\Builders\PricingTierBuilder;
use PaypalServerSdkLib\Models\Builders\PaymentPreferencesOverrideBuilder;
use PaypalServerSdkLib\Models\SetupFeeFailureAction;
use PaypalServerSdkLib\Models\Builders\TaxesOverrideBuilder;

$modifySubscriptionResponse = ModifySubscriptionResponseBuilder::init()
    ->planId('plan_id4')
    ->quantity('quantity8')
    ->shippingAmount(
        MoneyBuilder::init(
            'currency_code0',
            'value6'
        )->build()
    )
    ->shippingAddress(
        ShippingDetailsBuilder::init()
            ->name(
                ShippingNameBuilder::init()
                    ->fullName('full_name6')
                    ->build()
            )
            ->emailAddress('email_address8')
            ->phoneNumber(
                PhoneNumberWithCountryCodeBuilder::init(
                    'country_code2',
                    'national_number6'
                )->build()
            )
            ->type(FulfillmentType::PICKUP_IN_STORE)
            ->options(
                [
                    ShippingOptionBuilder::init(
                        'id2',
                        'label2',
                        false
                    )
                        ->type(ShippingType::SHIPPING)
                        ->amount(
                            MoneyBuilder::init(
                                'currency_code6',
                                'value0'
                            )->build()
                        )->build()
                ]
            )->build()
    )
    ->plan(
        PlanOverrideBuilder::init()
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
            ->build()
    )
    ->build();
```

