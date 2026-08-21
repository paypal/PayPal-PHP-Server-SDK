
# Balance Information

The Balance information.

## Structure

`BalanceInformation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currency` | `string` | Required | The [three-character ISO-4217 currency code](/docs/integration/direct/rest/currency-codes/) that identifies the currency.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getCurrency(): string | setCurrency(string currency): void |
| `primary` | `?bool` | Optional | Optional field representing if the currency is primary currency or not. | getPrimary(): ?bool | setPrimary(?bool primary): void |
| `totalBalance` | [`Money`](../../doc/models/money.md) | Required | The currency and amount for a financial transaction, such as a balance or payment due. | getTotalBalance(): Money | setTotalBalance(Money totalBalance): void |
| `availableBalance` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getAvailableBalance(): ?Money | setAvailableBalance(?Money availableBalance): void |
| `withheldBalance` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getWithheldBalance(): ?Money | setWithheldBalance(?Money withheldBalance): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\BalanceInformationBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$balanceInformation = BalanceInformationBuilder::init(
    'currency2',
    MoneyBuilder::init(
        'currency_code6',
        'value2'
    )->build()
)
    ->primary(false)
    ->availableBalance(
        MoneyBuilder::init(
            'currency_code8',
            'value4'
        )->build()
    )
    ->withheldBalance(
        MoneyBuilder::init(
            'currency_code2',
            'value8'
        )->build()
    )->build();
```

