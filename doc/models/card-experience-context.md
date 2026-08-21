
# Card Experience Context

Customizes the payer experience during the 3DS Approval for payment.

## Structure

`CardExperienceContext`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `returnUrl` | `?string` | Optional | Describes the URL. | getReturnUrl(): ?string | setReturnUrl(?string returnUrl): void |
| `cancelUrl` | `?string` | Optional | Describes the URL. | getCancelUrl(): ?string | setCancelUrl(?string cancelUrl): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CardExperienceContextBuilder;

$cardExperienceContext = CardExperienceContextBuilder::init()
    ->returnUrl('return_url0')
    ->cancelUrl('cancel_url2')
    ->build();
```

