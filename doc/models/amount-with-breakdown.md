
# Amount with Breakdown

The total order amount with an optional breakdown that provides details, such as the total item amount, total tax amount, shipping, handling, insurance, and discounts, if any. If you specify `amount.breakdown`, the amount equals `item_total` plus `tax_total` plus `shipping` plus `handling` plus `insurance` minus `shipping_discount` minus discount. The amount must be a positive number. For listed of supported currencies and decimal precision, see the PayPal REST APIs Currency Codes.

## Structure

`AmountWithBreakdown`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyCode` | `string` | Required | The [three-character ISO-4217 currency code](https://developer.paypal.com/api/rest/reference/currency-codes/) that identifies the currency.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getCurrencyCode(): string | setCurrencyCode(string currencyCode): void |
| `value` | `string` | Required | The value, which might be: An integer for currencies like `JPY` that are not typically fractional. A decimal fraction for currencies like `TND` that are subdivided into thousandths. For the required number of decimal places for a currency code, see [Currency Codes](https://developer.paypal.com/api/rest/reference/currency-codes/).<br><br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^((-?[0-9]+)\|(-?([0-9]+)?[.][0-9]+))$` | getValue(): string | setValue(string value): void |
| `breakdown` | [`?AmountBreakdown`](../../doc/models/amount-breakdown.md) | Optional | The breakdown of the amount. Breakdown provides details such as total item amount, total tax amount, shipping, handling, insurance, and discounts, if any. | getBreakdown(): ?AmountBreakdown | setBreakdown(?AmountBreakdown breakdown): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\AmountWithBreakdownBuilder;
use PaypalServerSdkLib\Models\Builders\AmountBreakdownBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$amountWithBreakdown = AmountWithBreakdownBuilder::init(
    'currency_code2',
    'value8'
)
    ->breakdown(
        AmountBreakdownBuilder::init()
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
            )->build()
    )->build();
```

