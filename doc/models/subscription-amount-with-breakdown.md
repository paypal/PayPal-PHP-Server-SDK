
# Subscription Amount with Breakdown

The breakdown details for the amount. Includes the gross, tax, fee, and shipping amounts.

## Structure

`SubscriptionAmountWithBreakdown`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `grossAmount` | [`Money`](../../doc/models/money.md) | Required | The currency and amount for a financial transaction, such as a balance or payment due. | getGrossAmount(): Money | setGrossAmount(Money grossAmount): void |
| `totalItemAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getTotalItemAmount(): ?Money | setTotalItemAmount(?Money totalItemAmount): void |
| `feeAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getFeeAmount(): ?Money | setFeeAmount(?Money feeAmount): void |
| `shippingAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getShippingAmount(): ?Money | setShippingAmount(?Money shippingAmount): void |
| `taxAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getTaxAmount(): ?Money | setTaxAmount(?Money taxAmount): void |
| `netAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getNetAmount(): ?Money | setNetAmount(?Money netAmount): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SubscriptionAmountWithBreakdownBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$subscriptionAmountWithBreakdown = SubscriptionAmountWithBreakdownBuilder::init(
    MoneyBuilder::init(
        'currency_code4',
        'value0'
    )->build()
)
    ->totalItemAmount(
        MoneyBuilder::init(
            'currency_code8',
            'value4'
        )->build()
    )
    ->feeAmount(
        MoneyBuilder::init(
            'currency_code2',
            'value4'
        )->build()
    )
    ->shippingAmount(
        MoneyBuilder::init(
            'currency_code0',
            'value6'
        )->build()
    )
    ->taxAmount(
        MoneyBuilder::init(
            'currency_code2',
            'value8'
        )->build()
    )
    ->netAmount(
        MoneyBuilder::init(
            'currency_code6',
            'value2'
        )->build()
    )->build();
```

