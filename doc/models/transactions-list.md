
# Transactions List

The list transactions for a subscription request details.

## Structure

`TransactionsList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactions` | [`?(SubscriptionTransactionDetails[])`](../../doc/models/subscription-transaction-details.md) | Optional | An array of transactions.<br><br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `32767` | getTransactions(): ?array | setTransactions(?array transactions): void |
| `totalItems` | `?int` | Optional | The total number of items.<br><br>**Constraints**: `>= 0`, `<= 500000000` | getTotalItems(): ?int | setTotalItems(?int totalItems): void |
| `totalPages` | `?int` | Optional | The total number of pages.<br><br>**Constraints**: `>= 0`, `<= 100000000` | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional, Read-only | An array of request-related [HATEOAS links](/docs/api/reference/api-responses/#hateoas-links).<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10` | getLinks(): ?array | setLinks(?array links): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\TransactionsListBuilder;
use PaypalServerSdkLib\Models\Builders\SubscriptionTransactionDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\SubscriptionAmountWithBreakdownBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\SubscriptionPayerNameBuilder;

$transactionsList = TransactionsListBuilder::init()
    ->transactions(
        [
            SubscriptionTransactionDetailsBuilder::init(
                '',
                SubscriptionAmountWithBreakdownBuilder::init(
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
                    )->build(),
                'time8'
            )
                ->payerName(
                    SubscriptionPayerNameBuilder::init()
                        ->prefix('prefix8')
                        ->givenName('given_name2')
                        ->surname('surname8')
                        ->middleName('middle_name0')
                        ->suffix('suffix0')
                        ->build()
                )
                ->payerEmail('payer_email6')
                ->build(),
            SubscriptionTransactionDetailsBuilder::init(
                '',
                SubscriptionAmountWithBreakdownBuilder::init(
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
                    )->build(),
                'time8'
            )
                ->payerName(
                    SubscriptionPayerNameBuilder::init()
                        ->prefix('prefix8')
                        ->givenName('given_name2')
                        ->surname('surname8')
                        ->middleName('middle_name0')
                        ->suffix('suffix0')
                        ->build()
                )
                ->payerEmail('payer_email6')
                ->build()
        ]
    )
    ->totalItems(36)
    ->totalPages(72)
    ->build();
```

