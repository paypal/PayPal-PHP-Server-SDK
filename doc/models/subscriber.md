
# Subscriber

The subscriber response information.

## Structure

`Subscriber`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | [`?Name`](../../doc/models/name.md) | Optional | The name of the party. | getName(): ?Name | setName(?Name name): void |
| `shippingAddress` | [`?ShippingDetails`](../../doc/models/shipping-details.md) | Optional | The shipping details. | getShippingAddress(): ?ShippingDetails | setShippingAddress(?ShippingDetails shippingAddress): void |
| `paymentSource` | [`?SubscriptionPaymentSourceResponse`](../../doc/models/subscription-payment-source-response.md) | Optional | The payment source used to fund the payment. | getPaymentSource(): ?SubscriptionPaymentSourceResponse | setPaymentSource(?SubscriptionPaymentSourceResponse paymentSource): void |

## Example (as JSON)

```json
{
  "name": {
    "given_name": "given_name2",
    "surname": "surname8"
  },
  "shipping_address": {
    "name": {
      "full_name": "full_name6"
    },
    "email_address": "email_address8",
    "phone_number": {
      "country_code": "country_code2",
      "national_number": "national_number6"
    },
    "type": "PICKUP_IN_STORE",
    "options": [
      {
        "id": "id2",
        "label": "label2",
        "type": "SHIPPING",
        "amount": {
          "currency_code": "currency_code6",
          "value": "value0"
        },
        "selected": false
      }
    ]
  },
  "payment_source": {
    "card": {
      "name": "name6",
      "billing_address": {
        "address_line_1": "address_line_12",
        "address_line_2": "address_line_28",
        "admin_area_2": "admin_area_28",
        "admin_area_1": "admin_area_14",
        "postal_code": "postal_code0",
        "country_code": "country_code8"
      },
      "expiry": "expiry4",
      "currency_code": "currency_code2"
    }
  }
}
```

