
# Paypal Wallet Experience Context

Customizes the payer experience during the approval process for payment with PayPal.<blockquote><strong>Note:</strong> Partners and Marketplaces might configure <code>brand_name</code> and <code>shipping_preference</code> during partner account setup, which overrides the request values.</blockquote>

## Structure

`PaypalWalletExperienceContext`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brandName` | `?string` | Optional | The label that overrides the business name in the PayPal account on the PayPal site. The pattern is defined by an external party and supports Unicode.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^.*$` | getBrandName(): ?string | setBrandName(?string brandName): void |
| `locale` | `?string` | Optional | The [language tag](https://tools.ietf.org/html/bcp47#section-2) for the language in which to localize the error-related strings, such as messages, issues, and suggested actions. The tag is made up of the [ISO 639-2 language code](https://www.loc.gov/standards/iso639-2/php/code_list.php), the optional [ISO-15924 script tag](https://www.unicode.org/iso15924/codelists.html), and the [ISO-3166 alpha-2 country code](/api/rest/reference/country-codes/) or [M49 region code](https://unstats.un.org/unsd/methodology/m49/).<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `10`, *Pattern*: `^[a-z]{2}(?:-[A-Z][a-z]{3})?(?:-(?:[A-Z]{2}\|[0-9]{3}))?$` | getLocale(): ?string | setLocale(?string locale): void |
| `shippingPreference` | [`?string(ShippingPreference)`](../../doc/models/shipping-preference.md) | Optional | The location from which the shipping address is derived.<br>**Default**: `ShippingPreference::GET_FROM_FILE`<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `24`, *Pattern*: `^[A-Z_]+$` | getShippingPreference(): ?string | setShippingPreference(?string shippingPreference): void |
| `returnUrl` | `?string` | Optional | Describes the URL. | getReturnUrl(): ?string | setReturnUrl(?string returnUrl): void |
| `cancelUrl` | `?string` | Optional | Describes the URL. | getCancelUrl(): ?string | setCancelUrl(?string cancelUrl): void |
| `landingPage` | [`?string(PaypalExperienceLandingPage)`](../../doc/models/paypal-experience-landing-page.md) | Optional | The type of landing page to show on the PayPal site for customer checkout.<br>**Default**: `PaypalExperienceLandingPage::NO_PREFERENCE`<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `13`, *Pattern*: `^[0-9A-Z_]+$` | getLandingPage(): ?string | setLandingPage(?string landingPage): void |
| `userAction` | [`?string(PaypalExperienceUserAction)`](../../doc/models/paypal-experience-user-action.md) | Optional | Configures a <strong>Continue</strong> or <strong>Pay Now</strong> checkout flow.<br>**Default**: `PaypalExperienceUserAction::CONTINUE_`<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `8`, *Pattern*: `^[0-9A-Z_]+$` | getUserAction(): ?string | setUserAction(?string userAction): void |
| `paymentMethodPreference` | [`?string(PayeePaymentMethodPreference)`](../../doc/models/payee-payment-method-preference.md) | Optional | The merchant-preferred payment methods.<br>**Default**: `PayeePaymentMethodPreference::UNRESTRICTED`<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9A-Z_]+$` | getPaymentMethodPreference(): ?string | setPaymentMethodPreference(?string paymentMethodPreference): void |

## Example (as JSON)

```json
{
  "shipping_preference": "GET_FROM_FILE",
  "landing_page": "NO_PREFERENCE",
  "user_action": "CONTINUE",
  "payment_method_preference": "UNRESTRICTED",
  "brand_name": "brand_name6",
  "locale": "locale0",
  "return_url": "return_url8",
  "cancel_url": "cancel_url0"
}
```

