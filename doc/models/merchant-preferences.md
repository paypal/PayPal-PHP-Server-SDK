
# Merchant Preferences

The merchant preferences for a subscription.

## Structure

`MerchantPreferences`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `returnUrl` | `?string` | Optional | The URL where the customer is redirected after the customer approves the payment.<br><br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `4000` | getReturnUrl(): ?string | setReturnUrl(?string returnUrl): void |
| `cancelUrl` | `?string` | Optional | The URL where the customer is redirected after the customer cancels the payment.<br><br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `4000` | getCancelUrl(): ?string | setCancelUrl(?string cancelUrl): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\MerchantPreferencesBuilder;

$merchantPreferences = MerchantPreferencesBuilder::init()
    ->returnUrl('return_url8')
    ->cancelUrl('cancel_url0')
    ->build();
```

