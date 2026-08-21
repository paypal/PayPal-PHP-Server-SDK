
# Card Attributes

Additional attributes associated with the use of this card.

## Structure

`CardAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`?CardCustomerInformation`](../../doc/models/card-customer-information.md) | Optional | The details about a customer in PayPal's system of record. | getCustomer(): ?CardCustomerInformation | setCustomer(?CardCustomerInformation customer): void |
| `vault` | [`?VaultInstructionBase`](../../doc/models/vault-instruction-base.md) | Optional | Basic vault instruction specification that can be extended by specific payment sources that supports vaulting. | getVault(): ?VaultInstructionBase | setVault(?VaultInstructionBase vault): void |
| `verification` | [`?CardVerification`](../../doc/models/card-verification.md) | Optional | The API caller can opt in to verify the card through PayPal offered verification services (e.g. Smart Dollar Auth, 3DS). | getVerification(): ?CardVerification | setVerification(?CardVerification verification): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CardAttributesBuilder;
use PaypalServerSdkLib\Models\Builders\CardCustomerInformationBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneWithTypeBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\Builders\VaultInstructionBaseBuilder;
use PaypalServerSdkLib\Models\StoreInVaultInstruction;
use PaypalServerSdkLib\Models\Builders\CardVerificationBuilder;
use PaypalServerSdkLib\Models\OrdersCardVerificationMethod;

$cardAttributes = CardAttributesBuilder::init()
    ->customer(
        CardCustomerInformationBuilder::init()
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
            ->merchantCustomerId('merchant_customer_id2')
            ->build()
    )
    ->vault(
        VaultInstructionBaseBuilder::init()
            ->storeInVault(StoreInVaultInstruction::ON_SUCCESS)
            ->build()
    )
    ->verification(
        CardVerificationBuilder::init()
            ->method(OrdersCardVerificationMethod::ENUM_3D_SECURE)
            ->build()
    )
    ->build();
```

