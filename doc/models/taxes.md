
# Taxes

The tax details.

## Structure

`Taxes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `percentage` | `string` | Required | The percentage, as a fixed-point, signed decimal number. For example, define a 19.99% interest rate as `19.99`.<br><br>**Constraints**: *Pattern*: `^((-?[0-9]+)\|(-?([0-9]+)?[.][0-9]+))$` | getPercentage(): string | setPercentage(string percentage): void |
| `inclusive` | `?bool` | Optional | Indicates whether the tax was already included in the billing amount.<br><br>**Default**: `true` | getInclusive(): ?bool | setInclusive(?bool inclusive): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\TaxesBuilder;

$taxes = TaxesBuilder::init(
    'percentage8'
)
    ->inclusive(true)
    ->build();
```

