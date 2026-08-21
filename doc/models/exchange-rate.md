
# Exchange Rate

The exchange rate that determines the amount to convert from one currency to another currency.

## Structure

`ExchangeRate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sourceCurrency` | `?string` | Optional | The [three-character ISO-4217 currency code](https://developer.paypal.com/api/rest/reference/currency-codes/) that identifies the currency.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getSourceCurrency(): ?string | setSourceCurrency(?string sourceCurrency): void |
| `targetCurrency` | `?string` | Optional | The [three-character ISO-4217 currency code](https://developer.paypal.com/api/rest/reference/currency-codes/) that identifies the currency.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getTargetCurrency(): ?string | setTargetCurrency(?string targetCurrency): void |
| `value` | `?string` | Optional | The target currency amount. Equivalent to one unit of the source currency. Formatted as integer or decimal value with one to 15 digits to the right of the decimal point. | getValue(): ?string | setValue(?string value): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ExchangeRateBuilder;

$exchangeRate = ExchangeRateBuilder::init()
    ->sourceCurrency('source_currency6')
    ->targetCurrency('target_currency8')
    ->value('value8')
    ->build();
```

