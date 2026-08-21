
# Tax Amount

The tax levied by a government on the purchase of goods or services.

## Structure

`TaxAmount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `taxAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getTaxAmount(): ?Money | setTaxAmount(?Money taxAmount): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\TaxAmountBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$taxAmount = TaxAmountBuilder::init()
    ->taxAmount(
        MoneyBuilder::init(
            'currency_code2',
            'value8'
        )->build()
    )->build();
```

