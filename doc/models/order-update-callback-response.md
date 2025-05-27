
# Order Update Callback Response

Returns the updated shipping options for an order.

## Structure

`OrderUpdateCallbackResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The ID of the order.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `36`, *Pattern*: `^[A-Z0-9-]+$` | getId(): ?string | setId(?string id): void |
| `purchaseUnits` | [`?ShippingOptionsPurchaseUnit`](../../doc/models/shipping-options-purchase-unit.md) | Optional | This would contain shipping option and amount data at purchase unit level. | getPurchaseUnits(): ?ShippingOptionsPurchaseUnit | setPurchaseUnits(?ShippingOptionsPurchaseUnit purchaseUnits): void |

## Example (as JSON)

```json
{
  "id": "id2",
  "purchase_units": {
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
    "items": [
      {
        "name": "name8",
        "unit_amount": {
          "currency_code": "currency_code2",
          "value": "value8"
        },
        "tax": {
          "currency_code": "currency_code0",
          "value": "value6"
        },
        "quantity": "quantity4",
        "description": "description2",
        "sku": "sku6",
        "url": "url2",
        "category": "DONATION"
      }
    ],
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
      }
    ]
  }
}
```

