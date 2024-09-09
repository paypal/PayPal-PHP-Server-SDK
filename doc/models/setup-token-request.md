
# Setup Token Request

Setup Token Request where the `source` defines the type of instrument to be stored.

## Structure

`SetupTokenRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`?CustomerRequest`](../../doc/models/customer-request.md) | Optional | Customer in merchant's or partner's system of records. | getCustomer(): ?CustomerRequest | setCustomer(?CustomerRequest customer): void |
| `paymentSource` | [`SetupTokenRequestPaymentSource`](../../doc/models/setup-token-request-payment-source.md) | Required | The payment method to vault with the instrument details. | getPaymentSource(): SetupTokenRequestPaymentSource | setPaymentSource(SetupTokenRequestPaymentSource paymentSource): void |

## Example (as JSON)

```json
{
  "customer": {
    "id": "id0",
    "merchant_customer_id": "merchant_customer_id2"
  },
  "payment_source": {
    "card": {
      "name": "name6",
      "number": "number6",
      "expiry": "expiry4",
      "security_code": "security_code8",
      "brand": "RUPAY"
    },
    "paypal": {
      "description": "description2",
      "shipping": {
        "name": {
          "full_name": "full_name6"
        },
        "type": "SHIPPING",
        "address": {
          "address_line_1": "address_line_16",
          "address_line_2": "address_line_26",
          "admin_area_2": "admin_area_20",
          "admin_area_1": "admin_area_12",
          "postal_code": "postal_code8",
          "country_code": "country_code6"
        }
      },
      "permit_multiple_payment_tokens": false,
      "usage_type": "usage_type2",
      "customer_type": "customer_type6"
    },
    "venmo": {
      "description": "description6",
      "shipping": {
        "name": {
          "full_name": "full_name6"
        },
        "type": "SHIPPING",
        "address": {
          "address_line_1": "address_line_16",
          "address_line_2": "address_line_26",
          "admin_area_2": "admin_area_20",
          "admin_area_1": "admin_area_12",
          "postal_code": "postal_code8",
          "country_code": "country_code6"
        }
      },
      "permit_multiple_payment_tokens": false,
      "usage_type": "usage_type6",
      "customer_type": "customer_type0"
    },
    "token": {
      "id": "id6",
      "type": "SETUP_TOKEN"
    }
  }
}
```

