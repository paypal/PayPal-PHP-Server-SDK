
# Address

The portable international postal address. Maps to [AddressValidationMetadata](https://github.com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-controls-the-autocomplete-attribute).

## Structure

`Address`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressLine1` | `?string` | Optional | The first line of the address, such as number and street, for example, `173 Drury Lane`. Needed for data entry, and Compliance and Risk checks. This field needs to pass the full address.<br><br>**Constraints**: *Maximum Length*: `300` | getAddressLine1(): ?string | setAddressLine1(?string addressLine1): void |
| `addressLine2` | `?string` | Optional | The second line of the address, for example, a suite or apartment number.<br><br>**Constraints**: *Maximum Length*: `300` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `adminArea2` | `?string` | Optional | A city, town, or village. Smaller than `admin_area_level_1`.<br><br>**Constraints**: *Maximum Length*: `120` | getAdminArea2(): ?string | setAdminArea2(?string adminArea2): void |
| `adminArea1` | `?string` | Optional | The highest-level sub-division in a country, which is usually a province, state, or ISO-3166-2 subdivision. This data is formatted for postal delivery, for example, `CA` and not `California`. Value, by country, is: UK. A county. US. A state. Canada. A province. Japan. A prefecture. Switzerland. A *kanton*.<br><br>**Constraints**: *Maximum Length*: `300` | getAdminArea1(): ?string | setAdminArea1(?string adminArea1): void |
| `postalCode` | `?string` | Optional | The postal code, which is the ZIP code or equivalent. Typically required for countries with a postal code or an equivalent. See [postal code](https://en.wikipedia.org/wiki/Postal_code).<br><br>**Constraints**: *Maximum Length*: `60` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `countryCode` | `string` | Required | The [2-character ISO 3166-1 code](https://developer.paypal.com/api/rest/reference/country-codes/) that identifies the country or region. Note: The country code for Great Britain is GB and not UK as used in the top-level domain names for that country. Use the `C2` country code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border transactions.<br><br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `2`, *Pattern*: `^([A-Z]{2}\|C2)$` | getCountryCode(): string | setCountryCode(string countryCode): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\AddressBuilder;

$address = AddressBuilder::init(
    'country_code6'
)
    ->addressLine1('address_line_16')
    ->addressLine2('address_line_26')
    ->adminArea2('admin_area_20')
    ->adminArea1('admin_area_12')
    ->postalCode('postal_code8')
    ->build();
```

