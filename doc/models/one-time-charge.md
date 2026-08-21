
# One Time Charge

The one-time charge info at the time of checkout.

## Structure

`OneTimeCharge`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `setupFee` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getSetupFee(): ?Money | setSetupFee(?Money setupFee): void |
| `shippingAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getShippingAmount(): ?Money | setShippingAmount(?Money shippingAmount): void |
| `taxes` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getTaxes(): ?Money | setTaxes(?Money taxes): void |
| `productPrice` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getProductPrice(): ?Money | setProductPrice(?Money productPrice): void |
| `subtotal` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getSubtotal(): ?Money | setSubtotal(?Money subtotal): void |
| `totalAmount` | [`Money`](../../doc/models/money.md) | Required | The currency and amount for a financial transaction, such as a balance or payment due. | getTotalAmount(): Money | setTotalAmount(Money totalAmount): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\OneTimeChargeBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$oneTimeCharge = OneTimeChargeBuilder::init(
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
    )->build();
```

