
# Venmo Wallet Experience Context

Customizes the buyer experience during the approval process for payment with Venmo.<blockquote><strong>Note:</strong> Partners and Marketplaces might configure <code>shipping_preference</code> during partner account setup, which overrides the request values.</blockquote>

## Structure

`VenmoWalletExperienceContext`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brandName` | `?string` | Optional | The business name of the merchant. The pattern is defined by an external party and supports Unicode.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^.*$` | getBrandName(): ?string | setBrandName(?string brandName): void |
| `shippingPreference` | [`?string(ShippingPreference)`](../../doc/models/shipping-preference.md) | Optional | The location from which the shipping address is derived.<br>**Default**: `ShippingPreference::GET_FROM_FILE`<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `24`, *Pattern*: `^[A-Z_]+$` | getShippingPreference(): ?string | setShippingPreference(?string shippingPreference): void |

## Example (as JSON)

```json
{
  "shipping_preference": "GET_FROM_FILE",
  "brand_name": "brand_name6"
}
```

