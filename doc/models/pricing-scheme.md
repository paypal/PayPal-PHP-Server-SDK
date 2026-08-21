
# Pricing Scheme

The pricing scheme details.

## Structure

`PricingScheme`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `price` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getPrice(): ?Money | setPrice(?Money price): void |
| `pricingModel` | [`string(PricingModel)`](../../doc/models/pricing-model.md) | Required | The pricing model for the billing cycle.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `24`, *Pattern*: `^[A-Z_]+$` | getPricingModel(): string | setPricingModel(string pricingModel): void |
| `reloadThresholdAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getReloadThresholdAmount(): ?Money | setReloadThresholdAmount(?Money reloadThresholdAmount): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PricingSchemeBuilder;
use PaypalServerSdkLib\Models\PricingModel;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$pricingScheme = PricingSchemeBuilder::init(
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
    )->build();
```

