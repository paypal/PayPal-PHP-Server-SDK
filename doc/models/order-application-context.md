
# Order Application Context

Customizes the payer experience during the approval process for the payment with PayPal.<blockquote><strong>Note:</strong> Partners and Marketplaces might configure <code>brand_name</code> and <code>shipping_preference</code> during partner account setup, which overrides the request values.</blockquote>

## Structure

`OrderApplicationContext`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brandName` | `?string` | Optional | DEPRECATED. The label that overrides the business name in the PayPal account on the PayPal site. The fields in `application_context` are now available in the `experience_context` object under the `payment_source` which supports them (eg. `payment_source.paypal.experience_context.brand_name`). Please specify this field in the `experience_context` object instead of the `application_context` object.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127` | getBrandName(): ?string | setBrandName(?string brandName): void |
| `locale` | `?string` | Optional | The [language tag](https://tools.ietf.org/html/bcp47#section-2) for the language in which to localize the error-related strings, such as messages, issues, and suggested actions. The tag is made up of the [ISO 639-2 language code](https://www.loc.gov/standards/iso639-2/php/code_list.php), the optional [ISO-15924 script tag](https://www.unicode.org/iso15924/codelists.html), and the [ISO-3166 alpha-2 country code](/api/rest/reference/country-codes/) or [M49 region code](https://unstats.un.org/unsd/methodology/m49/).<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `10`, *Pattern*: `^[a-z]{2}(?:-[A-Z][a-z]{3})?(?:-(?:[A-Z]{2}\|[0-9]{3}))?$` | getLocale(): ?string | setLocale(?string locale): void |
| `landingPage` | [`?string(OrderApplicationContextLandingPage)`](../../doc/models/order-application-context-landing-page.md) | Optional | DEPRECATED. DEPRECATED. The type of landing page to show on the PayPal site for customer checkout.  The fields in `application_context` are now available in the `experience_context` object under the `payment_source` which supports them (eg. `payment_source.paypal.experience_context.landing_page`). Please specify this field in the `experience_context` object instead of the `application_context` object.<br>**Default**: `OrderApplicationContextLandingPage::NO_PREFERENCE`<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `13`, *Pattern*: `^[0-9A-Z_]+$` | getLandingPage(): ?string | setLandingPage(?string landingPage): void |
| `shippingPreference` | [`?string(OrderApplicationContextShippingPreference)`](../../doc/models/order-application-context-shipping-preference.md) | Optional | DEPRECATED. DEPRECATED. The shipping preference:<ul><li>Displays the shipping address to the customer.</li><li>Enables the customer to choose an address on the PayPal site.</li><li>Restricts the customer from changing the address during the payment-approval process.</li></ul>.  The fields in `application_context` are now available in the `experience_context` object under the `payment_source` which supports them (eg. `payment_source.paypal.experience_context.shipping_preference`). Please specify this field in the `experience_context` object instead of the `application_context` object.<br>**Default**: `OrderApplicationContextShippingPreference::GET_FROM_FILE`<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `20`, *Pattern*: `^[0-9A-Z_]+$` | getShippingPreference(): ?string | setShippingPreference(?string shippingPreference): void |
| `userAction` | [`?string(OrderApplicationContextUserAction)`](../../doc/models/order-application-context-user-action.md) | Optional | DEPRECATED. Configures a <strong>Continue</strong> or <strong>Pay Now</strong> checkout flow.  The fields in `application_context` are now available in the `experience_context` object under the `payment_source` which supports them (eg. `payment_source.paypal.experience_context.user_action`). Please specify this field in the `experience_context` object instead of the `application_context` object.<br>**Default**: `OrderApplicationContextUserAction::CONTINUE_`<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `8`, *Pattern*: `^[0-9A-Z_]+$` | getUserAction(): ?string | setUserAction(?string userAction): void |
| `paymentMethod` | [`?PaymentMethodPreference`](../../doc/models/payment-method-preference.md) | Optional | The customer and merchant payment preferences. | getPaymentMethod(): ?PaymentMethodPreference | setPaymentMethod(?PaymentMethodPreference paymentMethod): void |
| `returnUrl` | `?string` | Optional | DEPRECATED. The URL where the customer is redirected after the customer approves the payment. The fields in `application_context` are now available in the `experience_context` object under the `payment_source` which supports them (eg. `payment_source.paypal.experience_context.return_url`). Please specify this field in the `experience_context` object instead of the `application_context` object. | getReturnUrl(): ?string | setReturnUrl(?string returnUrl): void |
| `cancelUrl` | `?string` | Optional | DEPRECATED. The URL where the customer is redirected after the customer cancels the payment. The fields in `application_context` are now available in the `experience_context` object under the `payment_source` which supports them (eg. `payment_source.paypal.experience_context.cancel_url`). Please specify this field in the `experience_context` object instead of the `application_context` object. | getCancelUrl(): ?string | setCancelUrl(?string cancelUrl): void |
| `storedPaymentSource` | [`?StoredPaymentSource`](../../doc/models/stored-payment-source.md) | Optional | Provides additional details to process a payment using a `payment_source` that has been stored or is intended to be stored (also referred to as stored_credential or card-on-file).<br/>Parameter compatibility:<br/><ul><li>`payment_type=ONE_TIME` is compatible only with `payment_initiator=CUSTOMER`.</li><li>`usage=FIRST` is compatible only with `payment_initiator=CUSTOMER`.</li><li>`previous_transaction_reference` or `previous_network_transaction_reference` is compatible only with `payment_initiator=MERCHANT`.</li><li>Only one of the parameters - `previous_transaction_reference` and `previous_network_transaction_reference` - can be present in the request.</li></ul> | getStoredPaymentSource(): ?StoredPaymentSource | setStoredPaymentSource(?StoredPaymentSource storedPaymentSource): void |

## Example (as JSON)

```json
{
  "landing_page": "NO_PREFERENCE",
  "shipping_preference": "GET_FROM_FILE",
  "user_action": "CONTINUE",
  "brand_name": "brand_name2",
  "locale": "locale6"
}
```

