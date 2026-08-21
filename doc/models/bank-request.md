
# Bank Request

A Resource representing a request to vault a Bank used for ACH Debit.

## Structure

`BankRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `achDebit` | `mixed` | Optional | A Resource representing a request to vault a ACH Debit. | getAchDebit(): | setAchDebit( achDebit): void |
| `sepaDebit` | [`?SepaDebitRequest`](../../doc/models/sepa-debit-request.md) | Optional | An API resource denoting a request to securely store a SEPA Debit. | getSepaDebit(): ?SepaDebitRequest | setSepaDebit(?SepaDebitRequest sepaDebit): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\BankRequestBuilder;
use PaypalServerSdkLib\Models\Builders\SepaDebitRequestBuilder;
use PaypalServerSdkLib\Models\Builders\SepaDebitExperienceContextBuilder;

$bankRequest = BankRequestBuilder::init()
    ->achDebit('{"key1":"val1","key2":"val2"}')
    ->sepaDebit(
        SepaDebitRequestBuilder::init()
            ->experienceContext(
                SepaDebitExperienceContextBuilder::init(
                    'return_url4',
                    'cancel_url6'
                )
                    ->locale('locale6')
                    ->build()
            )
            ->build()
    )
    ->build();
```

