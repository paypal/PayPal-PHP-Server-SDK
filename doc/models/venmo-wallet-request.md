
# Venmo Wallet Request

Information needed to pay using Venmo.

## Structure

`VenmoWalletRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `vaultId` | `?string` | Optional | The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's server so the saved payment source can be used for future transactions.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9a-zA-Z_-]+$` | getVaultId(): ?string | setVaultId(?string vaultId): void |
| `emailAddress` | `?string` | Optional | The internationalized email address. Note: Up to 64 characters are allowed before and 255 characters are allowed after the @ sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted @ sign exists.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `254`, *Pattern*: ``(?:[a-zA-Z0-9!#$%&'*+/=?^_`{\|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{\|}~-]+)*\|(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]\|\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\|\[(?:(?:(2(5[0-5]\|[0-4][0-9])\|1[0-9][0-9]\|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]\|[0-4][0-9])\|1[0-9][0-9]\|[1-9]?[0-9])\|[a-zA-Z0-9-]*[a-zA-Z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]\|\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])`` | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |
| `experienceContext` | [`?VenmoWalletExperienceContext`](../../doc/models/venmo-wallet-experience-context.md) | Optional | Customizes the buyer experience during the approval process for payment with Venmo. Note: Partners and Marketplaces might configure shipping_preference during partner account setup, which overrides the request values. | getExperienceContext(): ?VenmoWalletExperienceContext | setExperienceContext(?VenmoWalletExperienceContext experienceContext): void |
| `attributes` | [`?VenmoWalletAdditionalAttributes`](../../doc/models/venmo-wallet-additional-attributes.md) | Optional | Additional attributes associated with the use of this Venmo Wallet. | getAttributes(): ?VenmoWalletAdditionalAttributes | setAttributes(?VenmoWalletAdditionalAttributes attributes): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\VenmoWalletRequestBuilder;
use PaypalServerSdkLib\Models\Builders\VenmoWalletExperienceContextBuilder;
use PaypalServerSdkLib\Models\VenmoWalletExperienceContextShippingPreference;
use PaypalServerSdkLib\Models\Builders\CallbackConfigurationBuilder;
use PaypalServerSdkLib\Models\CallbackEvents;
use PaypalServerSdkLib\Models\VenmoWalletExperienceContextUserAction;
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

$venmoWalletRequest = VenmoWalletRequestBuilder::init()
    ->vaultId('vault_id8')
    ->emailAddress('email_address8')
    ->experienceContext(
        VenmoWalletExperienceContextBuilder::init()
            ->brandName('brand_name2')
            ->shippingPreference(VenmoWalletExperienceContextShippingPreference::NO_SHIPPING)
            ->orderUpdateCallbackConfig(
                CallbackConfigurationBuilder::init(
                    [
                        CallbackEvents::SHIPPING_OPTIONS,
                        CallbackEvents::SHIPPING_ADDRESS,
                        CallbackEvents::SHIPPING_OPTIONS
                    ],
                    'callback_url6'
                )->build()
            )
            ->userAction(VenmoWalletExperienceContextUserAction::CONTINUE_)
            ->build()
    )
    ->attributes(
        VenmoWalletAdditionalAttributesBuilder::init()
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
            ->build()
    )
    ->build();
```

