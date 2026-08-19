
# Apple Pay Attributes

Additional attributes associated with apple pay.

## Structure

`ApplePayAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`?CustomerInformation`](../../doc/models/customer-information.md) | Optional | This object represents a merchant’s customer, allowing them to store contact details, and track all payments associated with the same customer. | getCustomer(): ?CustomerInformation | setCustomer(?CustomerInformation customer): void |
| `vault` | [`?VaultInstruction`](../../doc/models/vault-instruction.md) | Optional | Base vaulting specification. The object can be extended for specific use cases within each payment_source that supports vaulting. | getVault(): ?VaultInstruction | setVault(?VaultInstruction vault): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ApplePayAttributesBuilder;
use PaypalServerSdkLib\Models\Builders\CustomerInformationBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneWithTypeBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\Builders\VaultInstructionBuilder;
use PaypalServerSdkLib\Models\StoreInVaultInstruction;

$applePayAttributes = ApplePayAttributesBuilder::init()
    ->customer(
        CustomerInformationBuilder::init()
            ->id('id0')
            ->emailAddress('email_address2')
            ->phone(
                PhoneWithTypeBuilder::init(
                    PhoneNumberBuilder::init(
                        'national_number6'
                    )->build()
                )
                    ->phoneType(PhoneType::OTHER)
                    ->build()
            )
            ->name(
                NameBuilder::init()
                    ->givenName('given_name2')
                    ->surname('surname8')
                    ->build()
            )
            ->build()
    )
    ->vault(
        VaultInstructionBuilder::init(
            StoreInVaultInstruction::ON_SUCCESS
        )->build()
    )->build();
```

