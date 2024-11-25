
# Order Authorize Response

## Structure

`OrderAuthorizeResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `createTime` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular expression provides guidance but does not reject all invalid dates.</blockquote><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getCreateTime(): ?string | setCreateTime(?string createTime): void |
| `updateTime` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular expression provides guidance but does not reject all invalid dates.</blockquote><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getUpdateTime(): ?string | setUpdateTime(?string updateTime): void |
| `id` | `?string` | Optional | The ID of the order. | getId(): ?string | setId(?string id): void |
| `paymentSource` | [`?OrderAuthorizeResponsePaymentSource`](../../doc/models/order-authorize-response-payment-source.md) | Optional | The payment source used to fund the payment. | getPaymentSource(): ?OrderAuthorizeResponsePaymentSource | setPaymentSource(?OrderAuthorizeResponsePaymentSource paymentSource): void |
| `intent` | [`?string(CheckoutPaymentIntent)`](../../doc/models/checkout-payment-intent.md) | Optional | The intent to either capture payment immediately or authorize a payment for an order after order creation. | getIntent(): ?string | setIntent(?string intent): void |
| `processingInstruction` | `mixed` | Optional | - | getProcessingInstruction(): | setProcessingInstruction( processingInstruction): void |
| `payer` | [`?Payer`](../../doc/models/payer.md) | Optional | - | getPayer(): ?Payer | setPayer(?Payer payer): void |
| `purchaseUnits` | [`?(PurchaseUnit[])`](../../doc/models/purchase-unit.md) | Optional | An array of purchase units. Each purchase unit establishes a contract between a customer and merchant. Each purchase unit represents either a full or partial order that the customer intends to purchase from the merchant.<br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10` | getPurchaseUnits(): ?array | setPurchaseUnits(?array purchaseUnits): void |
| `status` | [`?string(OrderStatus)`](../../doc/models/order-status.md) | Optional | The order status.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9A-Z_]+$` | getStatus(): ?string | setStatus(?string status): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional | An array of request-related [HATEOAS links](/api/rest/responses/#hateoas-links) that are either relevant to the issue by providing additional information or offering potential resolutions.<br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `4` | getLinks(): ?array | setLinks(?array links): void |

## Example (as JSON)

```json
{
  "create_time": "create_time0",
  "update_time": "update_time4",
  "id": "id4",
  "payment_source": {
    "card": {
      "name": "name6",
      "last_digits": "last_digits0",
      "brand": "RUPAY",
      "available_networks": [
        "SYNCHRONY"
      ],
      "type": "UNKNOWN"
    },
    "paypal": {
      "email_address": "email_address0",
      "account_id": "account_id4",
      "account_status": "VERIFIED",
      "name": {
        "given_name": "given_name2",
        "surname": "surname8"
      },
      "phone_type": "FAX"
    },
    "apple_pay": {
      "id": "id0",
      "token": "token6",
      "name": "name0",
      "email_address": "email_address8",
      "phone_number": {
        "national_number": "national_number6"
      }
    },
    "google_pay": {
      "name": "name8",
      "email_address": "email_address6",
      "phone_number": {
        "country_code": "country_code2",
        "national_number": "national_number6"
      },
      "card": {
        "name": "name6",
        "last_digits": "last_digits0",
        "type": "UNKNOWN",
        "brand": "RUPAY",
        "billing_address": {
          "address_line_1": "address_line_12",
          "address_line_2": "address_line_28",
          "admin_area_2": "admin_area_28",
          "admin_area_1": "admin_area_14",
          "postal_code": "postal_code0",
          "country_code": "country_code8"
        }
      }
    },
    "venmo": {
      "email_address": "email_address4",
      "account_id": "account_id8",
      "user_name": "user_name2",
      "name": {
        "given_name": "given_name2",
        "surname": "surname8"
      },
      "phone_number": {
        "national_number": "national_number6"
      }
    }
  },
  "intent": "CAPTURE"
}
```

