
# Plan

The merchant level Recurring Billing plan metadata for the Billing Agreement.

## Structure

`Plan`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `billingCycles` | [`BillingCycle[]`](../../doc/models/billing-cycle.md) | Required | An array of billing cycles for trial billing and regular billing. A plan can have at most two trial cycles and only one regular cycle.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `3` | getBillingCycles(): array | setBillingCycles(array billingCycles): void |
| `oneTimeCharges` | [`OneTimeCharge`](../../doc/models/one-time-charge.md) | Required | The one-time charge info at the time of checkout. | getOneTimeCharges(): OneTimeCharge | setOneTimeCharges(OneTimeCharge oneTimeCharges): void |
| `name` | `?string` | Optional | Name of the recurring plan.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^[A-Za-z0-9() +',.:-]+$` | getName(): ?string | setName(?string name): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PlanBuilder;
use PaypalServerSdkLib\Models\Builders\BillingCycleBuilder;
use PaypalServerSdkLib\Models\TenureType;
use PaypalServerSdkLib\Models\Builders\PricingSchemeBuilder;
use PaypalServerSdkLib\Models\PricingModel;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\CycleFrequencyBuilder;
use PaypalServerSdkLib\Models\FrequencyIntervalUnit;
use PaypalServerSdkLib\Models\Builders\OneTimeChargeBuilder;

$plan = PlanBuilder::init(
    [
        BillingCycleBuilder::init(
            TenureType::REGULAR
        )
            ->pricingScheme(
                PricingSchemeBuilder::init(
                    PricingModel::AUTO_RELOAD
                )
                    ->price(
                        MoneyBuilder::init(
                            'currency_code8',
                            'value4'
                        )->build()
                    )
                    ->reloadThresholdAmount(
                        MoneyBuilder::init(
                            'currency_code0',
                            'value6'
                        )->build()
                    )->build()
            )
            ->totalCycles(1)
            ->sequence(1)
            ->startDate('start_date6')
            ->frequency(
                CycleFrequencyBuilder::init(
                    FrequencyIntervalUnit::LIFETIME
                )
                    ->intervalCount(94)
                    ->build()
            )
            ->build()
    ],
    OneTimeChargeBuilder::init(
        MoneyBuilder::init(
            'currency_code2',
            'value8'
        )->build()
    )
        ->setupFee(
            MoneyBuilder::init(
                'currency_code8',
                'value4'
            )->build()
        )
        ->shippingAmount(
            MoneyBuilder::init(
                'currency_code0',
                'value6'
            )->build()
        )
        ->taxes(
            MoneyBuilder::init(
                'currency_code6',
                'value2'
            )->build()
        )
        ->productPrice(
            MoneyBuilder::init(
                'currency_code6',
                'value2'
            )->build()
        )
        ->subtotal(
            MoneyBuilder::init(
                'currency_code2',
                'value8'
            )->build()
        )->build()
)
    ->name('name4')
    ->build();
```

