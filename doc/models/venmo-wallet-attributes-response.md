
# Venmo Wallet Attributes Response

Additional attributes associated with the use of a Venmo Wallet.

## Structure

`VenmoWalletAttributesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `vault` | [`?VenmoVaultResponse`](../../doc/models/venmo-vault-response.md) | Optional | The details about a saved venmo payment source. | getVault(): ?VenmoVaultResponse | setVault(?VenmoVaultResponse vault): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\VenmoWalletAttributesResponseBuilder;
use PaypalServerSdkLib\Models\Builders\VenmoVaultResponseBuilder;
use PaypalServerSdkLib\Models\VenmoVaultResponseStatus;
use PaypalServerSdkLib\Models\Builders\CustomerInformationBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneWithTypeBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;

$venmoWalletAttributesResponse = VenmoWalletAttributesResponseBuilder::init()
    ->vault(
        VenmoVaultResponseBuilder::init()
            ->id('id6')
            ->status(VenmoVaultResponseStatus::APPROVED)
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
            ->build()
    )
    ->build();
```

