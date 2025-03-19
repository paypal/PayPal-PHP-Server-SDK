
# Shipping Options Purchase Unit

This would contain shipping option and amount data at purchase unit level.

## Structure

`ShippingOptionsPurchaseUnit`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `referenceId` | `?string` | Optional | The API caller-provided external ID for the purchase unit. Required for multiple purchase units when you must update the order through `PATCH`. If you omit this value and the order contains only one purchase unit, PayPal sets this value to `default`. Note: If there are multiple purchase units, reference_id is required for each purchase unit.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `256`, *Pattern*: `^.*$` | getReferenceId(): ?string | setReferenceId(?string referenceId): void |
| `amount` | [`?AmountWithBreakdown`](../../doc/models/amount-with-breakdown.md) | Optional | The total order amount with an optional breakdown that provides details, such as the total item amount, total tax amount, shipping, handling, insurance, and discounts, if any. If you specify `amount.breakdown`, the amount equals `item_total` plus `tax_total` plus `shipping` plus `handling` plus `insurance` minus `shipping_discount` minus discount. The amount must be a positive number. For listed of supported currencies and decimal precision, see the PayPal REST APIs Currency Codes. | getAmount(): ?AmountWithBreakdown | setAmount(?AmountWithBreakdown amount): void |
| `shippingOptions` | [`?(ShippingOption[])`](../../doc/models/shipping-option.md) | Optional | An array of shipping options that the payee or merchant offers to the payer to ship or pick up their items.<br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10` | getShippingOptions(): ?array | setShippingOptions(?array shippingOptions): void |

## Example (as JSON)

```json
{
  "reference_id": "reference_id4",
  "amount": {
    "currency_code": "currency_code6",
    "value": "value0",
    "breakdown": {
      "item_total": {
        "currency_code": "currency_code0",
        "value": "value6"
      },
      "shipping": {
        "currency_code": "currency_code0",
        "value": "value6"
      },
      "handling": {
        "currency_code": "currency_code2",
        "value": "value8"
      },
      "tax_total": {
        "currency_code": "currency_code4",
        "value": "value0"
      },
      "insurance": {
        "currency_code": "currency_code2",
        "value": "value8"
      }
    }
  },
  "shipping_options": [
    {
      "id": "id8",
      "label": "label8",
      "type": "PICKUP_IN_STORE",
      "amount": {
        "currency_code": "currency_code6",
        "value": "value0"
      },
      "selected": false
    },
    {
      "id": "id8",
      "label": "label8",
      "type": "PICKUP_IN_STORE",
      "amount": {
        "currency_code": "currency_code6",
        "value": "value0"
      },
      "selected": false
    }
  ]
}
```

