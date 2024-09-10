
# Setup Token Response

Minimal representation of a cached setup token.

## Structure

`SetupTokenResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The PayPal-generated ID for the vault token.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `36`, *Pattern*: `^[0-9a-zA-Z_-]+$` | getId(): ?string | setId(?string id): void |
| `ordinal` | `?int` | Optional | Ordinal number for sorting.<br>**Constraints**: `>= 1`, `<= 99` | getOrdinal(): ?int | setOrdinal(?int ordinal): void |
| `customer` | [`?CustomerRequest`](../../doc/models/customer-request.md) | Optional | Customer in merchant's or partner's system of records. | getCustomer(): ?CustomerRequest | setCustomer(?CustomerRequest customer): void |
| `status` | `?string` | Optional | The status of the payment token.<br>**Default**: `'CREATED'`<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9A-Z_]+$` | getStatus(): ?string | setStatus(?string status): void |
| `paymentSource` | [`?SetupTokenResponsePaymentSource`](../../doc/models/setup-token-response-payment-source.md) | Optional | The setup payment method details. | getPaymentSource(): ?SetupTokenResponsePaymentSource | setPaymentSource(?SetupTokenResponsePaymentSource paymentSource): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional | An array of related [HATEOAS links](/api/rest/responses/#hateoas).<br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `32` | getLinks(): ?array | setLinks(?array links): void |

## Example (as JSON)

```json
{
  "status": "CREATED",
  "id": "id6",
  "ordinal": 0,
  "customer": {
    "id": "id0",
    "merchant_customer_id": "merchant_customer_id2"
  },
  "payment_source": {
    "card": {
      "name": "name6",
      "last_digits": "last_digits0",
      "brand": "RUPAY",
      "expiry": "expiry4",
      "billing_address": {
        "address_line_1": "address_line_12",
        "address_line_2": "address_line_28",
        "admin_area_2": "admin_area_28",
        "admin_area_1": "admin_area_14",
        "postal_code": "postal_code0",
        "country_code": "country_code8"
      }
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
    }
  }
}
```

