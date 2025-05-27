
# Order Update Callback Request

Shipping Options Callback request. This will be implemented by the merchants.

## Structure

`OrderUpdateCallbackRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The ID of the order.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `36`, *Pattern*: `^[A-Z0-9-]+$` | getId(): ?string | setId(?string id): void |
| `shippingAddress` | [`OrderUpdateCallbackShippingAddress`](../../doc/models/order-update-callback-shipping-address.md) | Required | The portable international postal address. Maps to [AddressValidationMetadata](https://github.com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-controls-the-autocomplete-attribute). | getShippingAddress(): OrderUpdateCallbackShippingAddress | setShippingAddress(OrderUpdateCallbackShippingAddress shippingAddress): void |
| `shippingOption` | [`?OrderUpdateCallbackShippingOption`](../../doc/models/order-update-callback-shipping-option.md) | Optional | The options that the payee or merchant offers to the payer to ship or pick up their items. | getShippingOption(): ?OrderUpdateCallbackShippingOption | setShippingOption(?OrderUpdateCallbackShippingOption shippingOption): void |
| `purchaseUnits` | [`PurchaseUnitRequest[]`](../../doc/models/purchase-unit-request.md) | Required | An array of purchase units. At present only 1 purchase_unit is supported. Each purchase unit establishes a contract between a payer and the payee. Each purchase unit represents either a full or partial order that the payer intends to purchase from the payee.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `1` | getPurchaseUnits(): array | setPurchaseUnits(array purchaseUnits): void |

## Example (as JSON)

```json
{
  "shipping_address": {
    "admin_area_2": "admin_area_24",
    "admin_area_1": "admin_area_16",
    "postal_code": "postal_code2",
    "country_code": "country_code0"
  },
  "purchase_units": [
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
      "payee": {
        "email_address": "email_address4",
        "merchant_id": "merchant_id6"
      },
      "payment_instruction": {
        "platform_fees": [
          {
            "amount": {
              "currency_code": "currency_code6",
              "value": "value0"
            },
            "payee": {
              "email_address": "email_address4",
              "merchant_id": "merchant_id6"
            }
          },
          {
            "amount": {
              "currency_code": "currency_code6",
              "value": "value0"
            },
            "payee": {
              "email_address": "email_address4",
              "merchant_id": "merchant_id6"
            }
          },
          {
            "amount": {
              "currency_code": "currency_code6",
              "value": "value0"
            },
            "payee": {
              "email_address": "email_address4",
              "merchant_id": "merchant_id6"
            }
          }
        ],
        "disbursement_mode": "INSTANT",
        "payee_pricing_tier_id": "payee_pricing_tier_id2",
        "payee_receivable_fx_rate_id": "payee_receivable_fx_rate_id0"
      },
      "description": "description6",
      "custom_id": "custom_id4"
    }
  ],
  "id": "id2",
  "shipping_option": {
    "id": "id4",
    "label": "label4",
    "type": "PICKUP_IN_STORE",
    "amount": {
      "currency_code": "currency_code6",
      "value": "value0"
    }
  }
}
```

