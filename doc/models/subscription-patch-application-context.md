
# Subscription Patch Application Context

The application context, which customizes the payer experience during the subscription approval process with PayPal.

## Structure

`SubscriptionPatchApplicationContext`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brandName` | `?string` | Optional | The label that overrides the business name in the PayPal account on the PayPal site.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^.*$` | getBrandName(): ?string | setBrandName(?string brandName): void |
| `locale` | `?string` | Optional | The BCP 47-formatted locale of pages that the PayPal payment experience shows. PayPal supports a five-character code. For example, `da-DK`, `he-IL`, `id-ID`, `ja-JP`, `no-NO`, `pt-BR`, `ru-RU`, `sv-SE`, `th-TH`, `zh-CN`, `zh-HK`, or `zh-TW`.<br><br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `10`, *Pattern*: `^[a-z]{2}(?:-[A-Z][a-z]{3})?(?:-(?:[A-Z]{2}\|[0-9]{3}))?$` | getLocale(): ?string | setLocale(?string locale): void |
| `shippingPreference` | [`?string(ExperienceContextShippingPreference)`](../../doc/models/experience-context-shipping-preference.md) | Optional | The location from which the shipping address is derived.<br><br>**Default**: `ExperienceContextShippingPreference::GET_FROM_FILE`<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `24`, *Pattern*: `^[A-Z_]+$` | getShippingPreference(): ?string | setShippingPreference(?string shippingPreference): void |
| `paymentMethod` | [`?PaymentMethod`](../../doc/models/payment-method.md) | Optional | The customer and merchant payment preferences. | getPaymentMethod(): ?PaymentMethod | setPaymentMethod(?PaymentMethod paymentMethod): void |
| `returnUrl` | `string` | Required | The URL where the customer is redirected after the customer approves the payment.<br><br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `4000` | getReturnUrl(): string | setReturnUrl(string returnUrl): void |
| `cancelUrl` | `string` | Required | The URL where the customer is redirected after the customer cancels the payment.<br><br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `4000` | getCancelUrl(): string | setCancelUrl(string cancelUrl): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SubscriptionPatchApplicationContextBuilder;
use PaypalServerSdkLib\Models\ExperienceContextShippingPreference;
use PaypalServerSdkLib\Models\Builders\PaymentMethodBuilder;
use PaypalServerSdkLib\Models\PayeePaymentMethodPreference;

$subscriptionPatchApplicationContext = SubscriptionPatchApplicationContextBuilder::init(
    'return_url0',
    'cancel_url2'
)
    ->brandName('brand_name8')
    ->locale('locale2')
    ->shippingPreference(ExperienceContextShippingPreference::GET_FROM_FILE)
    ->paymentMethod(
        PaymentMethodBuilder::init()
            ->payeePreferred(PayeePaymentMethodPreference::UNRESTRICTED)
            ->build()
    )
    ->build();
```

