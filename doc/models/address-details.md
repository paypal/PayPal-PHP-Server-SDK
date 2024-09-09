
# Address Details

Address request details.

## Structure

`AddressDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressLine1` | `?string` | Optional | The first line of the address, such as number and street, for example, `173 Drury Lane`. Needed for data entry, and Compliance and Risk checks. This field needs to pass the full address.<br>**Constraints**: *Maximum Length*: `300` | getAddressLine1(): ?string | setAddressLine1(?string addressLine1): void |
| `addressLine2` | `?string` | Optional | The second line of the address, for example, a suite or apartment number.<br>**Constraints**: *Maximum Length*: `300` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `adminArea2` | `?string` | Optional | A city, town, or village. Smaller than `admin_area_level_1`.<br>**Constraints**: *Maximum Length*: `120` | getAdminArea2(): ?string | setAdminArea2(?string adminArea2): void |
| `adminArea1` | `?string` | Optional | The highest-level sub-division in a country, which is usually a province, state, or ISO-3166-2 subdivision. This data is formatted for postal delivery, for example, `CA` and not `California`. Value, by country, is:<ul><li>UK. A county.</li><li>US. A state.</li><li>Canada. A province.</li><li>Japan. A prefecture.</li><li>Switzerland. A *kanton*.</li></ul><br>**Constraints**: *Maximum Length*: `300` | getAdminArea1(): ?string | setAdminArea1(?string adminArea1): void |
| `postalCode` | `?string` | Optional | The postal code, which is the ZIP code or equivalent. Typically required for countries with a postal code or an equivalent. See [postal code](https://en.wikipedia.org/wiki/Postal_code).<br>**Constraints**: *Maximum Length*: `60` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `countryCode` | `string` | Required | The [2-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country or region.<blockquote><strong>Note:</strong> The country code for Great Britain is <code>GB</code> and not <code>UK</code> as used in the top-level domain names for that country. Use the `C2` country code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border transactions.</blockquote><br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `2`, *Pattern*: `^([A-Z]{2}\|C2)$` | getCountryCode(): string | setCountryCode(string countryCode): void |
| `name` | [`?Name`](../../doc/models/name.md) | Optional | The name of the party. | getName(): ?Name | setName(?Name name): void |
| `id` | `?string` | Optional | The resource ID of the address.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `36`, *Pattern*: `^[0-9A-Za-z-_]+$` | getId(): ?string | setId(?string id): void |
| `company` | `?string` | Optional | The name of the company or business associated to the address.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `100`, *Pattern*: `^.*$` | getCompany(): ?string | setCompany(?string company): void |
| `phone` | `?string` | Optional | The phone number that can go on the mailing label with the address to track the shipping. Phone number is in E.164 format.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `16`, *Pattern*: `^\+[1-9]\d{1,14}$` | getPhone(): ?string | setPhone(?string phone): void |
| `phoneNumber` | [`?Phone`](../../doc/models/phone.md) | Optional | The phone number, in its canonical international [E.164 numbering plan format](https://www.itu.int/rec/T-REC-E.164/en). | getPhoneNumber(): ?Phone | setPhoneNumber(?Phone phoneNumber): void |

## Example (as JSON)

```json
{
  "address_line_1": "address_line_10",
  "address_line_2": "address_line_20",
  "admin_area_2": "admin_area_24",
  "admin_area_1": "admin_area_16",
  "postal_code": "postal_code2",
  "country_code": "country_code0"
}
```

