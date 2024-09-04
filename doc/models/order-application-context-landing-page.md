
# Order Application Context Landing Page

DEPRECATED. DEPRECATED. The type of landing page to show on the PayPal site for customer checkout.  The fields in `application_context` are now available in the `experience_context` object under the `payment_source` which supports them (eg. `payment_source.paypal.experience_context.landing_page`). Please specify this field in the `experience_context` object instead of the `application_context` object.

## Enumeration

`OrderApplicationContextLandingPage`

## Fields

| Name |
|  --- |
| `LOGIN` |
| `BILLING` |
| `NO_PREFERENCE` |

