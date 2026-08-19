
# Net Amount Breakdown Item

The net amount. Returned when the currency of the refund is different from the currency of the PayPal account where the merchant holds their funds.

## Structure

`NetAmountBreakdownItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payableAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getPayableAmount(): ?Money | setPayableAmount(?Money payableAmount): void |
| `convertedAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getConvertedAmount(): ?Money | setConvertedAmount(?Money convertedAmount): void |
| `exchangeRate` | [`?ExchangeRate`](../../doc/models/exchange-rate.md) | Optional, Read-only | The exchange rate that determines the amount to convert from one currency to another currency. | getExchangeRate(): ?ExchangeRate | setExchangeRate(?ExchangeRate exchangeRate): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\NetAmountBreakdownItemBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$netAmountBreakdownItem = NetAmountBreakdownItemBuilder::init()
    ->payableAmount(
        MoneyBuilder::init(
            'currency_code8',
            'value4'
        )->build()
    )
    ->convertedAmount(
        MoneyBuilder::init(
            'currency_code0',
            'value6'
        )->build()
    )->build();
```

