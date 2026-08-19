
# Platform Fee

The platform or partner fee, commission, or brokerage fee that is associated with the transaction. Not a separate or isolated transaction leg from the external perspective. The platform fee is limited in scope and is always associated with the original payment for the purchase unit.

## Structure

`PlatformFee`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | [`Money`](../../doc/models/money.md) | Required | The currency and amount for a financial transaction, such as a balance or payment due. | getAmount(): Money | setAmount(Money amount): void |
| `payee` | [`?PayeeBase`](../../doc/models/payee-base.md) | Optional | The details for the merchant who receives the funds and fulfills the order. The merchant is also known as the payee. | getPayee(): ?PayeeBase | setPayee(?PayeeBase payee): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PlatformFeeBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\PayeeBaseBuilder;

$platformFee = PlatformFeeBuilder::init(
    MoneyBuilder::init(
        'currency_code6',
        'value0'
    )->build()
)
    ->payee(
        PayeeBaseBuilder::init()
            ->emailAddress('email_address4')
            ->merchantId('merchant_id6')
            ->build()
    )
    ->build();
```

