
# Order Application Context Shipping Preference

DEPRECATED. DEPRECATED. The shipping preference:<ul><li>Displays the shipping address to the customer.</li><li>Enables the customer to choose an address on the PayPal site.</li><li>Restricts the customer from changing the address during the payment-approval process.</li></ul>.  The fields in `application_context` are now available in the `experience_context` object under the `payment_source` which supports them (eg. `payment_source.paypal.experience_context.shipping_preference`). Please specify this field in the `experience_context` object instead of the `application_context` object.

## Enumeration

`OrderApplicationContextShippingPreference`

## Fields

| Name |
|  --- |
| `GET_FROM_FILE` |
| `NO_SHIPPING` |
| `SET_PROVIDED_ADDRESS` |

