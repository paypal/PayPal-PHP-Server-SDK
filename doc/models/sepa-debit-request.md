
# Sepa Debit Request

An API resource denoting a request to securely store a SEPA Debit.

## Structure

`SepaDebitRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `experienceContext` | [`?SepaDebitExperienceContext`](../../doc/models/sepa-debit-experience-context.md) | Optional | Customizes the payer experience during the approval process for the SEPA Debit payment. | getExperienceContext(): ?SepaDebitExperienceContext | setExperienceContext(?SepaDebitExperienceContext experienceContext): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SepaDebitRequestBuilder;
use PaypalServerSdkLib\Models\Builders\SepaDebitExperienceContextBuilder;

$sepaDebitRequest = SepaDebitRequestBuilder::init()
    ->experienceContext(
        SepaDebitExperienceContextBuilder::init(
            'return_url4',
            'cancel_url6'
        )
            ->locale('locale6')
            ->build()
    )
    ->build();
```

