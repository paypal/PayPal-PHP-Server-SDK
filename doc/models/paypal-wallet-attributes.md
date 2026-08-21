
# Paypal Wallet Attributes

Additional attributes associated with the use of this PayPal Wallet.

## Structure

`PaypalWalletAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`?PaypalWalletCustomerRequest`](../../doc/models/paypal-wallet-customer-request.md) | Optional | - | getCustomer(): ?PaypalWalletCustomerRequest | setCustomer(?PaypalWalletCustomerRequest customer): void |
| `vault` | [`?PaypalWalletVaultInstruction`](../../doc/models/paypal-wallet-vault-instruction.md) | Optional | - | getVault(): ?PaypalWalletVaultInstruction | setVault(?PaypalWalletVaultInstruction vault): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PaypalWalletAttributesBuilder;
use PaypalServerSdkLib\Models\Builders\PaypalWalletCustomerRequestBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneWithTypeBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\Builders\PaypalWalletVaultInstructionBuilder;
use PaypalServerSdkLib\Models\PaypalPaymentTokenUsageType;
use PaypalServerSdkLib\Models\StoreInVaultInstruction;
use PaypalServerSdkLib\Models\UsagePattern;
use PaypalServerSdkLib\Models\PaypalPaymentTokenCustomerType;

$paypalWalletAttributes = PaypalWalletAttributesBuilder::init()
    ->customer(
        PaypalWalletCustomerRequestBuilder::init()
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
        PaypalWalletVaultInstructionBuilder::init(
            PaypalPaymentTokenUsageType::MERCHANT
        )
            ->storeInVault(StoreInVaultInstruction::ON_SUCCESS)
            ->description('description6')
            ->usagePattern(UsagePattern::THRESHOLD_PREPAID)
            ->customerType(PaypalPaymentTokenCustomerType::CONSUMER)
            ->permitMultiplePaymentTokens(false)
            ->build()
    )
    ->build();
```

