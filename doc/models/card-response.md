
# Card Response

The payment card to use to fund a payment. Card can be a credit or debit card.

## Structure

`CardResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The card holder's name as it appears on the card.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `300` | getName(): ?string | setName(?string name): void |
| `lastDigits` | `?string` | Optional | The last digits of the payment card.<br>**Constraints**: *Pattern*: `[0-9]{2,}` | getLastDigits(): ?string | setLastDigits(?string lastDigits): void |
| `brand` | [`?string(CardBrand)`](../../doc/models/card-brand.md) | Optional | The card network or brand. Applies to credit, debit, gift, and payment cards.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[A-Z_]+$` | getBrand(): ?string | setBrand(?string brand): void |
| `availableNetworks` | [`?(string(CardBrand)[])`](../../doc/models/card-brand.md) | Optional | Array of brands or networks associated with the card.<br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `256`, *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[A-Z_]+$` | getAvailableNetworks(): ?array | setAvailableNetworks(?array availableNetworks): void |
| `type` | [`?string(CardType)`](../../doc/models/card-type.md) | Optional | Type of card. i.e Credit, Debit and so on.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[A-Z_]+$` | getType(): ?string | setType(?string type): void |
| `authenticationResult` | [`?AuthenticationResponse`](../../doc/models/authentication-response.md) | Optional | Results of Authentication such as 3D Secure. | getAuthenticationResult(): ?AuthenticationResponse | setAuthenticationResult(?AuthenticationResponse authenticationResult): void |
| `attributes` | [`?CardAttributesResponse`](../../doc/models/card-attributes-response.md) | Optional | Additional attributes associated with the use of this card. | getAttributes(): ?CardAttributesResponse | setAttributes(?CardAttributesResponse attributes): void |
| `fromRequest` | [`?CardFromRequest`](../../doc/models/card-from-request.md) | Optional | Representation of card details as received in the request. | getFromRequest(): ?CardFromRequest | setFromRequest(?CardFromRequest fromRequest): void |
| `expiry` | `?string` | Optional | The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6).<br>**Constraints**: *Minimum Length*: `7`, *Maximum Length*: `7`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])$` | getExpiry(): ?string | setExpiry(?string expiry): void |
| `binDetails` | [`?BinDetails`](../../doc/models/bin-details.md) | Optional | Bank Identification Number (BIN) details used to fund a payment. | getBinDetails(): ?BinDetails | setBinDetails(?BinDetails binDetails): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "last_digits": "last_digits4",
  "brand": "UNKNOWN",
  "available_networks": [
    "CONFIDIS",
    "CONFIGOGA",
    "CB_NATIONALE"
  ],
  "type": "CREDIT"
}
```

