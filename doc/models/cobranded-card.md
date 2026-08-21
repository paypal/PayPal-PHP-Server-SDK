
# Cobranded Card

Details about the merchant cobranded card used for order purchase.

## Structure

`CobrandedCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `labels` | `?(string[])` | Optional | Array of labels for the cobranded card.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `25`, *Minimum Length*: `1`, *Maximum Length*: `256` | getLabels(): ?array | setLabels(?array labels): void |
| `payee` | [`?PayeeBase`](../../doc/models/payee-base.md) | Optional | The details for the merchant who receives the funds and fulfills the order. The merchant is also known as the payee. | getPayee(): ?PayeeBase | setPayee(?PayeeBase payee): void |
| `amount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getAmount(): ?Money | setAmount(?Money amount): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CobrandedCardBuilder;
use PaypalServerSdkLib\Models\Builders\PayeeBaseBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$cobrandedCard = CobrandedCardBuilder::init()
    ->labels(
        [
            'labels2'
        ]
    )
    ->payee(
        PayeeBaseBuilder::init()
            ->emailAddress('email_address4')
            ->merchantId('merchant_id6')
            ->build()
    )
    ->amount(
        MoneyBuilder::init(
            'currency_code6',
            'value0'
        )->build()
    )->build();
```

