
# Payment Source

The payment source definition.

## Structure

`PaymentSource`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?CardRequest`](../../doc/models/card-request.md) | Optional | The payment card to use to fund a payment. Can be a credit or debit card. Note: Passing card number, cvv and expiry directly via the API requires PCI SAQ D compliance. *PayPal offers a mechanism by which you do not have to take on the PCI SAQ D burden by using hosted fields - refer to this Integration Guide*. | getCard(): ?CardRequest | setCard(?CardRequest card): void |
| `token` | [`?Token`](../../doc/models/token.md) | Optional | The tokenized payment source to fund a payment. | getToken(): ?Token | setToken(?Token token): void |
| `paypal` | [`?PaypalWallet`](../../doc/models/paypal-wallet.md) | Optional | A resource that identifies a PayPal Wallet is used for payment. | getPaypal(): ?PaypalWallet | setPaypal(?PaypalWallet paypal): void |
| `bancontact` | [`?BancontactPaymentRequest`](../../doc/models/bancontact-payment-request.md) | Optional | Information needed to pay using Bancontact. | getBancontact(): ?BancontactPaymentRequest | setBancontact(?BancontactPaymentRequest bancontact): void |
| `blik` | [`?BlikPaymentRequest`](../../doc/models/blik-payment-request.md) | Optional | Information needed to pay using BLIK. | getBlik(): ?BlikPaymentRequest | setBlik(?BlikPaymentRequest blik): void |
| `eps` | [`?EpsPaymentRequest`](../../doc/models/eps-payment-request.md) | Optional | Information needed to pay using eps. | getEps(): ?EpsPaymentRequest | setEps(?EpsPaymentRequest eps): void |
| `giropay` | [`?GiropayPaymentRequest`](../../doc/models/giropay-payment-request.md) | Optional | Information needed to pay using giropay. | getGiropay(): ?GiropayPaymentRequest | setGiropay(?GiropayPaymentRequest giropay): void |
| `ideal` | [`?IdealPaymentRequest`](../../doc/models/ideal-payment-request.md) | Optional | Information needed to pay using iDEAL. | getIdeal(): ?IdealPaymentRequest | setIdeal(?IdealPaymentRequest ideal): void |
| `mybank` | [`?MybankPaymentRequest`](../../doc/models/mybank-payment-request.md) | Optional | Information needed to pay using MyBank. | getMybank(): ?MybankPaymentRequest | setMybank(?MybankPaymentRequest mybank): void |
| `p24` | [`?P24PaymentRequest`](../../doc/models/p24-payment-request.md) | Optional | Information needed to pay using P24 (Przelewy24). | getP24(): ?P24PaymentRequest | setP24(?P24PaymentRequest p24): void |
| `sofort` | [`?SofortPaymentRequest`](../../doc/models/sofort-payment-request.md) | Optional | Information needed to pay using Sofort. | getSofort(): ?SofortPaymentRequest | setSofort(?SofortPaymentRequest sofort): void |
| `trustly` | [`?TrustlyPaymentRequest`](../../doc/models/trustly-payment-request.md) | Optional | Information needed to pay using Trustly. | getTrustly(): ?TrustlyPaymentRequest | setTrustly(?TrustlyPaymentRequest trustly): void |
| `applePay` | [`?ApplePayRequest`](../../doc/models/apple-pay-request.md) | Optional | Information needed to pay using ApplePay. | getApplePay(): ?ApplePayRequest | setApplePay(?ApplePayRequest applePay): void |
| `googlePay` | [`?GooglePayRequest`](../../doc/models/google-pay-request.md) | Optional | Information needed to pay using Google Pay. | getGooglePay(): ?GooglePayRequest | setGooglePay(?GooglePayRequest googlePay): void |
| `venmo` | [`?VenmoWalletRequest`](../../doc/models/venmo-wallet-request.md) | Optional | Information needed to pay using Venmo. | getVenmo(): ?VenmoWalletRequest | setVenmo(?VenmoWalletRequest venmo): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\CardRequestBuilder;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneWithTypeBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\Builders\TokenBuilder;
use PaypalServerSdkLib\Models\TokenType;
use PaypalServerSdkLib\Models\Builders\PaypalWalletBuilder;
use PaypalServerSdkLib\Models\Builders\BancontactPaymentRequestBuilder;
use PaypalServerSdkLib\Models\Builders\ExperienceContextBuilder;
use PaypalServerSdkLib\Models\ExperienceContextShippingPreference;
use PaypalServerSdkLib\Models\Builders\BlikPaymentRequestBuilder;
use PaypalServerSdkLib\Models\Builders\BlikExperienceContextBuilder;
use PaypalServerSdkLib\Models\Builders\BlikLevel0PaymentObjectBuilder;
use PaypalServerSdkLib\Models\Builders\BlikOneClickPaymentRequestBuilder;

$paymentSource = PaymentSourceBuilder::init()
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
    ->bancontact(
        BancontactPaymentRequestBuilder::init(
            'name0',
            'country_code0'
        )
            ->experienceContext(
                ExperienceContextBuilder::init()
                    ->brandName('brand_name2')
                    ->locale('locale6')
                    ->shippingPreference(ExperienceContextShippingPreference::NO_SHIPPING)
                    ->returnUrl('return_url4')
                    ->cancelUrl('cancel_url6')
                    ->build()
            )
            ->build()
    )
    ->blik(
        BlikPaymentRequestBuilder::init(
            'name2',
            'country_code2'
        )
            ->email('email4')
            ->experienceContext(
                BlikExperienceContextBuilder::init()
                    ->brandName('brand_name2')
                    ->locale('locale6')
                    ->shippingPreference(ExperienceContextShippingPreference::NO_SHIPPING)
                    ->returnUrl('return_url4')
                    ->cancelUrl('cancel_url6')
                    ->build()
            )
            ->level0(
                BlikLevel0PaymentObjectBuilder::init(
                    'auth_code8'
                )->build()
            )
            ->oneClick(
                BlikOneClickPaymentRequestBuilder::init(
                    'consumer_reference2'
                )
                    ->authCode('auth_code0')
                    ->aliasLabel('alias_label6')
                    ->aliasKey('alias_key4')
                    ->build()
            )
            ->build()
    )
    ->build();
```

