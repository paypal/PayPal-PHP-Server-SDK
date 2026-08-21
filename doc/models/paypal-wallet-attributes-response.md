
# Paypal Wallet Attributes Response

Additional attributes associated with the use of a PayPal Wallet.

## Structure

`PaypalWalletAttributesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `vault` | [`?PaypalWalletVaultResponse`](../../doc/models/paypal-wallet-vault-response.md) | Optional | The details about a saved PayPal Wallet payment source. | getVault(): ?PaypalWalletVaultResponse | setVault(?PaypalWalletVaultResponse vault): void |
| `cobrandedCards` | [`?(CobrandedCard[])`](../../doc/models/cobranded-card.md) | Optional | An array of merchant cobranded cards used by buyer to complete an order. This array will be present if a merchant has onboarded their cobranded card with PayPal and provided corresponding label(s).<br><br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `25` | getCobrandedCards(): ?array | setCobrandedCards(?array cobrandedCards): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PaypalWalletAttributesResponseBuilder;
use PaypalServerSdkLib\Models\Builders\PaypalWalletVaultResponseBuilder;
use PaypalServerSdkLib\Models\PaypalWalletVaultStatus;
use PaypalServerSdkLib\Models\Builders\PaypalWalletCustomerBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneWithTypeBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\Builders\CobrandedCardBuilder;
use PaypalServerSdkLib\Models\Builders\PayeeBaseBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$paypalWalletAttributesResponse = PaypalWalletAttributesResponseBuilder::init()
    ->vault(
        PaypalWalletVaultResponseBuilder::init()
            ->id('id6')
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
            ->build()
    )
    ->cobrandedCards(
        [
            CobrandedCardBuilder::init()
                ->labels(
                    [
                        'labels4',
                        'labels3'
                    ]
                )
                ->payee(
                    PayeeBaseBuilder::init()
                        ->emailAddress('email_address4')
                        ->merchantId('merchant_id6')
                        ->build()
                )
                ->amount(
                    MoneyBuilder::init(
                        'currency_code6',
                        'value0'
                    )->build()
                )->build(),
            CobrandedCardBuilder::init()
                ->labels(
                    [
                        'labels4',
                        'labels3'
                    ]
                )
                ->payee(
                    PayeeBaseBuilder::init()
                        ->emailAddress('email_address4')
                        ->merchantId('merchant_id6')
                        ->build()
                )
                ->amount(
                    MoneyBuilder::init(
                        'currency_code6',
                        'value0'
                    )->build()
                )->build()
        ]
    )->build();
```

