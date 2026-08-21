
# Apple Pay Experience Context

Customizes the payer experience during the approval process for the payment.

## Structure

`ApplePayExperienceContext`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `returnUrl` | `string` | Required | Describes the URL. | getReturnUrl(): string | setReturnUrl(string returnUrl): void |
| `cancelUrl` | `string` | Required | Describes the URL. | getCancelUrl(): string | setCancelUrl(string cancelUrl): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ApplePayExperienceContextBuilder;

$applePayExperienceContext = ApplePayExperienceContextBuilder::init(
    'return_url4',
    'cancel_url6'
)->build();
```

