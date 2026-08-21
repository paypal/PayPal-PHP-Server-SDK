
# Order Capture Request Payment Source

The payment source definition.

## Structure

`OrderCaptureRequestPaymentSource`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?CardRequest`](../../doc/models/card-request.md) | Optional | The payment card to use to fund a payment. Can be a credit or debit card. Note: Passing card number, cvv and expiry directly via the API requires PCI SAQ D compliance. *PayPal offers a mechanism by which you do not have to take on the PCI SAQ D burden by using hosted fields - refer to this Integration Guide*. | getCard(): ?CardRequest | setCard(?CardRequest card): void |
| `token` | [`?Token`](../../doc/models/token.md) | Optional | The tokenized payment source to fund a payment. | getToken(): ?Token | setToken(?Token token): void |
| `paypal` | [`?PaypalWallet`](../../doc/models/paypal-wallet.md) | Optional | A resource that identifies a PayPal Wallet is used for payment. | getPaypal(): ?PaypalWallet | setPaypal(?PaypalWallet paypal): void |
| `applePay` | [`?ApplePayRequest`](../../doc/models/apple-pay-request.md) | Optional | Information needed to pay using ApplePay. | getApplePay(): ?ApplePayRequest | setApplePay(?ApplePayRequest applePay): void |
| `googlePay` | [`?GooglePayRequest`](../../doc/models/google-pay-request.md) | Optional | Information needed to pay using Google Pay. | getGooglePay(): ?GooglePayRequest | setGooglePay(?GooglePayRequest googlePay): void |
| `venmo` | [`?VenmoWalletRequest`](../../doc/models/venmo-wallet-request.md) | Optional | Information needed to pay using Venmo. | getVenmo(): ?VenmoWalletRequest | setVenmo(?VenmoWalletRequest venmo): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\OrderCaptureRequestPaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\CardRequestBuilder;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneWithTypeBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\Builders\TokenBuilder;
use PaypalServerSdkLib\Models\TokenType;
use PaypalServerSdkLib\Models\Builders\PaypalWalletBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayRequestBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayDecryptedTokenDataBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayTokenizedCardBuilder;
use PaypalServerSdkLib\Models\CardType;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\ApplePayPaymentDataType;
use PaypalServerSdkLib\Models\Builders\ApplePayPaymentDataBuilder;
use PaypalServerSdkLib\Models\Builders\GooglePayRequestBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberWithCountryCodeBuilder;
use PaypalServerSdkLib\Models\Builders\GooglePayRequestCardBuilder;
use PaypalServerSdkLib\Models\Builders\GooglePayDecryptedTokenDataBuilder;
use PaypalServerSdkLib\Models\GooglePayPaymentMethod;
use PaypalServerSdkLib\Models\Builders\GooglePayCardBuilder;
use PaypalServerSdkLib\Models\GooglePayAuthenticationMethod;

$orderCaptureRequestPaymentSource = OrderCaptureRequestPaymentSourceBuilder::init()
    ->card(
        CardRequestBuilder::init()
            ->name('name6')
            ->number('number6')
            ->expiry('expiry4')
            ->securityCode('security_code8')
            ->billingAddress(
                AddressBuilder::init(
                    'country_code8'
                )
                    ->addressLine1('address_line_12')
                    ->addressLine2('address_line_28')
                    ->adminArea2('admin_area_28')
                    ->adminArea1('admin_area_14')
                    ->postalCode('postal_code0')
                    ->build()
            )
            ->build()
    )
    ->token(
        TokenBuilder::init(
            'id6',
            TokenType::BILLING_AGREEMENT
        )->build()
    )
    ->paypal(
        PaypalWalletBuilder::init()
            ->vaultId('vault_id0')
            ->emailAddress('email_address0')
            ->name(
                NameBuilder::init()
                    ->givenName('given_name2')
                    ->surname('surname8')
                    ->build()
            )
            ->phone(
                PhoneWithTypeBuilder::init(
                    PhoneNumberBuilder::init(
                        'national_number6'
                    )->build()
                )
                    ->phoneType(PhoneType::OTHER)
                    ->build()
            )
            ->birthDate('birth_date8')
            ->build()
    )
    ->applePay(
        ApplePayRequestBuilder::init()
            ->id('id0')
            ->name('name0')
            ->emailAddress('email_address8')
            ->phoneNumber(
                PhoneNumberBuilder::init(
                    'national_number6'
                )->build()
            )
            ->decryptedToken(
                ApplePayDecryptedTokenDataBuilder::init(
                    ApplePayTokenizedCardBuilder::init()
                        ->name('name4')
                        ->number('number2')
                        ->expiry('expiry2')
                        ->type(CardType::UNKNOWN)
                        ->build()
                )
                    ->transactionAmount(
                        MoneyBuilder::init(
                            'currency_code6',
                            'value2'
                        )->build()
                    )
                    ->deviceManufacturerId('device_manufacturer_id6')
                    ->paymentDataType(ApplePayPaymentDataType::ENUM_3DSECURE)
                    ->paymentData(
                        ApplePayPaymentDataBuilder::init()
                            ->cryptogram('cryptogram6')
                            ->eciIndicator('eci_indicator0')
                            ->emvData('emv_data0')
                            ->pin('pin4')
                            ->build()
                    )
                    ->build()
            )
            ->build()
    )
    ->googlePay(
        GooglePayRequestBuilder::init()
            ->name('name8')
            ->emailAddress('email_address6')
            ->phoneNumber(
                PhoneNumberWithCountryCodeBuilder::init(
                    'country_code2',
                    'national_number6'
                )->build()
            )
            ->card(
                GooglePayRequestCardBuilder::init()
                    ->name('name6')
                    ->type(CardType::UNKNOWN)
                    ->brand(CardBrand::CB_NATIONALE)
                    ->billingAddress(
                        AddressBuilder::init(
                            'country_code8'
                        )
                            ->addressLine1('address_line_12')
                            ->addressLine2('address_line_28')
                            ->adminArea2('admin_area_28')
                            ->adminArea1('admin_area_14')
                            ->postalCode('postal_code0')
                            ->build()
                    )
                    ->build()
            )
            ->decryptedToken(
                GooglePayDecryptedTokenDataBuilder::init(
                    GooglePayPaymentMethod::CARD,
                    GooglePayCardBuilder::init()
                        ->name('name6')
                        ->number('number6')
                        ->expiry('expiry4')
                        ->type(CardType::UNKNOWN)
                        ->build(),
                    GooglePayAuthenticationMethod::PAN_ONLY
                )
                    ->messageId('message_id0')
                    ->messageExpiration('message_expiration2')
                    ->cryptogram('cryptogram6')
                    ->eciIndicator('eci_indicator0')
                    ->build()
            )
            ->build()
    )
    ->build();
```

