
# Paypal Wallet Vault Response

The details about a saved PayPal Wallet payment source.

## Structure

`PaypalWalletVaultResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The PayPal-generated ID for the saved payment source.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255` | getId(): ?string | setId(?string id): void |
| `status` | [`?string(PaypalWalletVaultStatus)`](../../doc/models/paypal-wallet-vault-status.md) | Optional | The vault status.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9A-Z_]+$` | getStatus(): ?string | setStatus(?string status): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional, Read-only | An array of request-related HATEOAS links.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10` | getLinks(): ?array | setLinks(?array links): void |
| `customer` | [`?PaypalWalletCustomer`](../../doc/models/paypal-wallet-customer.md) | Optional | The details about a customer in PayPal's system of record. | getCustomer(): ?PaypalWalletCustomer | setCustomer(?PaypalWalletCustomer customer): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PaypalWalletVaultResponseBuilder;
use PaypalServerSdkLib\Models\PaypalWalletVaultStatus;
use PaypalServerSdkLib\Models\Builders\PaypalWalletCustomerBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneWithTypeBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;

$paypalWalletVaultResponse = PaypalWalletVaultResponseBuilder::init()
    ->id('id0')
    ->status(PaypalWalletVaultStatus::APPROVED)
    ->customer(
        PaypalWalletCustomerBuilder::init()
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
    ->build();
```

