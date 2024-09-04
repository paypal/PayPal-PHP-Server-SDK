
# Order Application Context User Action

DEPRECATED. Configures a <strong>Continue</strong> or <strong>Pay Now</strong> checkout flow.  The fields in `application_context` are now available in the `experience_context` object under the `payment_source` which supports them (eg. `payment_source.paypal.experience_context.user_action`). Please specify this field in the `experience_context` object instead of the `application_context` object.

## Enumeration

`OrderApplicationContextUserAction`

## Fields

| Name |
|  --- |
| `CONTINUE_` |
| `PAY_NOW` |

