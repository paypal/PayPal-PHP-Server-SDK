
# Blik Payment Request

Information needed to pay using BLIK.

## Structure

`BlikPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | The full name representation like Mr J Smith.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `300` | getName(): string | setName(string name): void |
| `countryCode` | `string` | Required | The [two-character ISO 3166-1 code](https://developer.paypal.com/api/rest/reference/country-codes/) that identifies the country or region. Note: The country code for Great Britain is GB and not UK as used in the top-level domain names for that country. Use the `C2` country code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border transactions.<br><br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `2`, *Pattern*: `^([A-Z]{2}\|C2)$` | getCountryCode(): string | setCountryCode(string countryCode): void |
| `email` | `?string` | Optional | The internationalized email address. Note: Up to 64 characters are allowed before and 255 characters are allowed after the @ sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted @ sign exists.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `254`, *Pattern*: ``^(?:[A-Za-z0-9!#$%&'*+/=?^_`{\|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{\|}~-]+)*\|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]\|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\|\[(?:(?:25[0-5]\|2[0-4][0-9]\|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]\|2[0-4][0-9]\|[01]?[0-9][0-9]?\|[A-Za-z0-9-]*[A-Za-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]\|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$`` | getEmail(): ?string | setEmail(?string email): void |
| `experienceContext` | [`?BlikExperienceContext`](../../doc/models/blik-experience-context.md) | Optional | Customizes the payer experience during the approval process for the BLIK payment. | getExperienceContext(): ?BlikExperienceContext | setExperienceContext(?BlikExperienceContext experienceContext): void |
| `level0` | [`?BlikLevel0PaymentObject`](../../doc/models/blik-level-0-payment-object.md) | Optional | Information used to pay using BLIK level_0 flow. | getLevel0(): ?BlikLevel0PaymentObject | setLevel0(?BlikLevel0PaymentObject level0): void |
| `oneClick` | [`?BlikOneClickPaymentRequest`](../../doc/models/blik-one-click-payment-request.md) | Optional | Information used to pay using BLIK one-click flow. | getOneClick(): ?BlikOneClickPaymentRequest | setOneClick(?BlikOneClickPaymentRequest oneClick): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\BlikPaymentRequestBuilder;
use PaypalServerSdkLib\Models\Builders\BlikExperienceContextBuilder;
use PaypalServerSdkLib\Models\ExperienceContextShippingPreference;
use PaypalServerSdkLib\Models\Builders\BlikLevel0PaymentObjectBuilder;
use PaypalServerSdkLib\Models\Builders\BlikOneClickPaymentRequestBuilder;

$blikPaymentRequest = BlikPaymentRequestBuilder::init(
    'name6',
    'country_code6'
)
    ->email('email0')
    ->experienceContext(
        BlikExperienceContextBuilder::init()
            ->brandName('brand_name2')
            ->locale('locale6')
            ->shippingPreference(ExperienceContextShippingPreference::NO_SHIPPING)
            ->returnUrl('return_url4')
            ->cancelUrl('cancel_url6')
            ->build()
    )
    ->level0(
        BlikLevel0PaymentObjectBuilder::init(
            'auth_code8'
        )->build()
    )
    ->oneClick(
        BlikOneClickPaymentRequestBuilder::init(
            'consumer_reference2'
        )
            ->authCode('auth_code0')
            ->aliasLabel('alias_label6')
            ->aliasKey('alias_key4')
            ->build()
    )
    ->build();
```

