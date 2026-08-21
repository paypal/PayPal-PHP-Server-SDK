
# Google Pay Experience Context

Customizes the payer experience during the approval process for the payment.

## Structure

`GooglePayExperienceContext`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `returnUrl` | `string` | Required | Describes the URL. | getReturnUrl(): string | setReturnUrl(string returnUrl): void |
| `cancelUrl` | `string` | Required | Describes the URL. | getCancelUrl(): string | setCancelUrl(string cancelUrl): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\GooglePayExperienceContextBuilder;

$googlePayExperienceContext = GooglePayExperienceContextBuilder::init(
    'return_url6',
    'cancel_url8'
)->build();
```

