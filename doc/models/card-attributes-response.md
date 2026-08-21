
# Card Attributes Response

Additional attributes associated with the use of this card.

## Structure

`CardAttributesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `vault` | [`?CardVaultResponse`](../../doc/models/card-vault-response.md) | Optional | The details about a saved Card payment source. | getVault(): ?CardVaultResponse | setVault(?CardVaultResponse vault): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CardAttributesResponseBuilder;
use PaypalServerSdkLib\Models\Builders\CardVaultResponseBuilder;
use PaypalServerSdkLib\Models\VaultStatus;
use PaypalServerSdkLib\Models\Builders\CardCustomerInformationBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneWithTypeBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;

$cardAttributesResponse = CardAttributesResponseBuilder::init()
    ->vault(
        CardVaultResponseBuilder::init()
            ->id('id6')
            ->status(VaultStatus::APPROVED)
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
            ->build()
    )
    ->build();
```

