
# Supplementary Data

Supplementary data about a payment. This object passes information that can be used to improve risk assessments and processing costs, for example, by providing Level 2 and Level 3 payment data.

## Structure

`SupplementaryData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?CardSupplementaryData`](../../doc/models/card-supplementary-data.md) | Optional | Merchants and partners can add Level 2 and 3 data to payments to reduce risk and payment processing costs. For more information about processing payments, see <a href="https://developer.paypal.com/docs/checkout/advanced/processing/">checkout</a> or <a href="https://developer.paypal.com/docs/multiparty/checkout/advanced/processing/">multiparty checkout</a>. | getCard(): ?CardSupplementaryData | setCard(?CardSupplementaryData card): void |

## Example (as JSON)

```json
{
  "card": {
    "level_2": {
      "invoice_id": "invoice_id4",
      "tax_total": {
        "currency_code": "currency_code4",
        "value": "value0"
      }
    },
    "level_3": {
      "shipping_amount": {
        "currency_code": "currency_code0",
        "value": "value6"
      },
      "duty_amount": {
        "currency_code": "currency_code6",
        "value": "value2"
      },
      "discount_amount": {
        "currency_code": "currency_code2",
        "value": "value8"
      },
      "shipping_address": {
        "address_line_1": "address_line_10",
        "address_line_2": "address_line_20",
        "admin_area_2": "admin_area_24",
        "admin_area_1": "admin_area_16",
        "postal_code": "postal_code2",
        "country_code": "country_code0"
      },
      "ships_from_postal_code": "ships_from_postal_code4"
    }
  }
}
```

