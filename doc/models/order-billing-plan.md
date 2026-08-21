
# Order Billing Plan

Metadata for merchant-managed recurring billing plans. Valid only during the saved payment method token or billing agreement creation.

## Structure

`OrderBillingPlan`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `billingCycles` | [`BillingCycle[]`](../../doc/models/billing-cycle.md) | Required | An array of billing cycles for trial billing and regular billing. A plan can have at most two trial cycles and only one regular cycle.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `3` | getBillingCycles(): array | setBillingCycles(array billingCycles): void |
| `setupFee` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getSetupFee(): ?Money | setSetupFee(?Money setupFee): void |
| `name` | `?string` | Optional | Name of the recurring plan.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^[A-Za-z0-9() +',.:-]+$` | getName(): ?string | setName(?string name): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\OrderBillingPlanBuilder;
use PaypalServerSdkLib\Models\Builders\BillingCycleBuilder;
use PaypalServerSdkLib\Models\TenureType;
use PaypalServerSdkLib\Models\Builders\PricingSchemeBuilder;
use PaypalServerSdkLib\Models\PricingModel;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\CycleFrequencyBuilder;
use PaypalServerSdkLib\Models\FrequencyIntervalUnit;

$orderBillingPlan = OrderBillingPlanBuilder::init(
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
    ]
)
    ->setupFee(
        MoneyBuilder::init(
            'currency_code8',
            'value4'
        )->build()
    )
    ->name('name6')
    ->build();
```

