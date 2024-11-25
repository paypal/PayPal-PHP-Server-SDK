
# Vaulted Digital Wallet Shipping Details

The shipping details.

## Structure

`VaultedDigitalWalletShippingDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | [`?ShippingName`](../../doc/models/shipping-name.md) | Optional | The name of the party. | getName(): ?ShippingName | setName(?ShippingName name): void |
| `type` | [`?string(FulfillmentType)`](../../doc/models/fulfillment-type.md) | Optional | A classification for the method of purchase fulfillment (e.g shipping, in-store pickup, etc). Either `type` or `options` may be present, but not both.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9A-Z_]+$` | getType(): ?string | setType(?string type): void |
| `address` | [`?Address`](../../doc/models/address.md) | Optional | The portable international postal address. Maps to [AddressValidationMetadata](https://github.com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-controls-the-autocomplete-attribute). | getAddress(): ?Address | setAddress(?Address address): void |

## Example (as JSON)

```json
{
  "name": {
    "full_name": "full_name6"
  },
  "type": "PICKUP_IN_STORE",
  "address": {
    "address_line_1": "address_line_16",
    "address_line_2": "address_line_26",
    "admin_area_2": "admin_area_20",
    "admin_area_1": "admin_area_12",
    "postal_code": "postal_code8",
    "country_code": "country_code6"
  }
}
```

