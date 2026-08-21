
# Amount Breakdown

The breakdown of the amount. Breakdown provides details such as total item amount, total tax amount, shipping, handling, insurance, and discounts, if any.

## Structure

`AmountBreakdown`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `itemTotal` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getItemTotal(): ?Money | setItemTotal(?Money itemTotal): void |
| `shipping` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getShipping(): ?Money | setShipping(?Money shipping): void |
| `handling` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getHandling(): ?Money | setHandling(?Money handling): void |
| `taxTotal` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getTaxTotal(): ?Money | setTaxTotal(?Money taxTotal): void |
| `insurance` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getInsurance(): ?Money | setInsurance(?Money insurance): void |
| `shippingDiscount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getShippingDiscount(): ?Money | setShippingDiscount(?Money shippingDiscount): void |
| `discount` | [`?Money`](../../doc/models/money.md) | Optional | The discount amount and currency code. For list of supported currencies and decimal precision, see the PayPal REST APIs Currency Codes. | getDiscount(): ?Money | setDiscount(?Money discount): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\AmountBreakdownBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$amountBreakdown = AmountBreakdownBuilder::init()
    ->itemTotal(
        MoneyBuilder::init(
            'currency_code0',
            'value6'
        )->build()
    )
    ->shipping(
        MoneyBuilder::init(
            'currency_code0',
            'value6'
        )->build()
    )
    ->handling(
        MoneyBuilder::init(
            'currency_code2',
            'value8'
        )->build()
    )
    ->taxTotal(
        MoneyBuilder::init(
            'currency_code4',
            'value0'
        )->build()
    )
    ->insurance(
        MoneyBuilder::init(
            'currency_code2',
            'value8'
        )->build()
    )->build();
```

