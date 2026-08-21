
# Shipping Information

The shipping information.

## Structure

`ShippingInformation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The recipient's name.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9_'\-., ":;\!?]*$` | getName(): ?string | setName(?string name): void |
| `method` | `?string` | Optional | The shipping method that is associated with this order.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9_'\-., ":;\!?]*$` | getMethod(): ?string | setMethod(?string method): void |
| `address` | [`?SimplePostalAddressCoarseGrained`](../../doc/models/simple-postal-address-coarse-grained.md) | Optional | A simple postal address with coarse-grained fields. Do not use for an international address. Use for backward compatibility only. Does not contain phone. | getAddress(): ?SimplePostalAddressCoarseGrained | setAddress(?SimplePostalAddressCoarseGrained address): void |
| `secondaryShippingAddress` | [`?SimplePostalAddressCoarseGrained`](../../doc/models/simple-postal-address-coarse-grained.md) | Optional | A simple postal address with coarse-grained fields. Do not use for an international address. Use for backward compatibility only. Does not contain phone. | getSecondaryShippingAddress(): ?SimplePostalAddressCoarseGrained | setSecondaryShippingAddress(?SimplePostalAddressCoarseGrained secondaryShippingAddress): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ShippingInformationBuilder;
use PaypalServerSdkLib\Models\Builders\SimplePostalAddressCoarseGrainedBuilder;

$shippingInformation = ShippingInformationBuilder::init()
    ->name('name2')
    ->method('method4')
    ->address(
        SimplePostalAddressCoarseGrainedBuilder::init(
            'line18',
            'city6',
            'country_code6'
        )
            ->line2('line20')
            ->state('state2')
            ->postalCode('postal_code8')
            ->build()
    )
    ->secondaryShippingAddress(
        SimplePostalAddressCoarseGrainedBuilder::init(
            'line16',
            'city4',
            'country_code4'
        )
            ->line2('line28')
            ->state('state0')
            ->postalCode('postal_code6')
            ->build()
    )
    ->build();
```

