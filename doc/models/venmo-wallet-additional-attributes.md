
# Venmo Wallet Additional Attributes

Additional attributes associated with the use of this Venmo Wallet.

## Structure

`VenmoWalletAdditionalAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`?VenmoWalletCustomerInformation`](../../doc/models/venmo-wallet-customer-information.md) | Optional | The details about a customer in PayPal's system of record. | getCustomer(): ?VenmoWalletCustomerInformation | setCustomer(?VenmoWalletCustomerInformation customer): void |
| `vault` | [`?VenmoWalletVaultAttributes`](../../doc/models/venmo-wallet-vault-attributes.md) | Optional | Resource consolidating common request and response attirbutes for vaulting Venmo Wallet. | getVault(): ?VenmoWalletVaultAttributes | setVault(?VenmoWalletVaultAttributes vault): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\VenmoWalletAdditionalAttributesBuilder;
use PaypalServerSdkLib\Models\Builders\VenmoWalletCustomerInformationBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneWithTypeBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\Builders\VenmoWalletVaultAttributesBuilder;
use PaypalServerSdkLib\Models\StoreInVaultInstruction;
use PaypalServerSdkLib\Models\VenmoPaymentTokenUsageType;
use PaypalServerSdkLib\Models\VenmoPaymentTokenUsagePattern;
use PaypalServerSdkLib\Models\VenmoPaymentTokenCustomerType;

$venmoWalletAdditionalAttributes = VenmoWalletAdditionalAttributesBuilder::init()
    ->customer(
        VenmoWalletCustomerInformationBuilder::init()
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
        VenmoWalletVaultAttributesBuilder::init(
            StoreInVaultInstruction::ON_SUCCESS,
            VenmoPaymentTokenUsageType::MERCHANT
        )
            ->description('description6')
            ->usagePattern(VenmoPaymentTokenUsagePattern::THRESHOLD_PREPAID)
            ->customerType(VenmoPaymentTokenCustomerType::CONSUMER)
            ->permitMultiplePaymentTokens(false)
            ->build()
    )
    ->build();
```

