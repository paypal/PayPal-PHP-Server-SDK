
# Payment Token Response Payment Source

The vaulted payment method details.

## Structure

`PaymentTokenResponsePaymentSource`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?CardPaymentToken`](../../doc/models/card-payment-token.md) | Optional | Full representation of a Card Payment Token including network token. | getCard(): ?CardPaymentToken | setCard(?CardPaymentToken card): void |
| `paypal` | [`?PayPalPaymentToken`](../../doc/models/pay-pal-payment-token.md) | Optional | - | getPaypal(): ?PayPalPaymentToken | setPaypal(?PayPalPaymentToken paypal): void |
| `venmo` | [`?VenmoPaymentToken`](../../doc/models/venmo-payment-token.md) | Optional | - | getVenmo(): ?VenmoPaymentToken | setVenmo(?VenmoPaymentToken venmo): void |
| `applePay` | [`?ApplePayPaymentToken`](../../doc/models/apple-pay-payment-token.md) | Optional | A resource representing a response for Apple Pay. | getApplePay(): ?ApplePayPaymentToken | setApplePay(?ApplePayPaymentToken applePay): void |
| `bank` | [`?BankPaymentToken`](../../doc/models/bank-payment-token.md) | Optional | Full representation of a Bank Payment Token. | getBank(): ?BankPaymentToken | setBank(?BankPaymentToken bank): void |

## Example (as JSON)

```json
{
  "card": {
    "name": "name6",
    "last_digits": "last_digits0",
    "brand": "SYNCHRONY",
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
  },
  "apple_pay": {
    "card": {
      "name": "name6",
      "last_digits": "last_digits0",
      "type": "UNKNOWN",
      "brand": "SYNCHRONY",
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
  "bank": {
    "ach_debit": {
      "verification_status": "verification_status6"
    },
    "sepa_debit": {
      "iban_last_chars": "iban_last_chars8",
      "account_holder_name": {
        "key1": "val1",
        "key2": "val2"
      },
      "billing_address": {
        "address_line_1": "address_line_12",
        "address_line_2": "address_line_28",
        "admin_area_2": "admin_area_28",
        "admin_area_1": "admin_area_14",
        "postal_code": "postal_code0",
        "country_code": "country_code8"
      },
      "authorization_details": {
        "status": "NOT_SUPPORTED"
      }
    }
  }
}
```

