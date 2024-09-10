
# Payment Token Request

Payment Token Request where the `source` defines the type of instrument to be stored.

## Structure

`PaymentTokenRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`?CustomerRequest`](../../doc/models/customer-request.md) | Optional | Customer in merchant's or partner's system of records. | getCustomer(): ?CustomerRequest | setCustomer(?CustomerRequest customer): void |
| `paymentSource` | [`PaymentTokenRequestPaymentSource`](../../doc/models/payment-token-request-payment-source.md) | Required | The payment method to vault with the instrument details. | getPaymentSource(): PaymentTokenRequestPaymentSource | setPaymentSource(PaymentTokenRequestPaymentSource paymentSource): void |

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
    "token": {
      "id": "id6",
      "type": "SETUP_TOKEN"
    }
  }
}
```

