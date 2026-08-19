
# Shipping Name

The name of the party.

## Structure

`ShippingName`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fullName` | `?string` | Optional | When the party is a person, the party's full name.<br><br>**Constraints**: *Maximum Length*: `300` | getFullName(): ?string | setFullName(?string fullName): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ShippingNameBuilder;

$shippingName = ShippingNameBuilder::init()
    ->fullName('full_name8')
    ->build();
```

