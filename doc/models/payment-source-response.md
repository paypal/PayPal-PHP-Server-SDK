
# Payment Source Response

The payment source used to fund the payment.

## Structure

`PaymentSourceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?CardResponse`](../../doc/models/card-response.md) | Optional | The payment card to use to fund a payment. Card can be a credit or debit card. | getCard(): ?CardResponse | setCard(?CardResponse card): void |
| `paypal` | [`?PaypalWalletResponse`](../../doc/models/paypal-wallet-response.md) | Optional | The PayPal Wallet response. | getPaypal(): ?PaypalWalletResponse | setPaypal(?PaypalWalletResponse paypal): void |
| `bancontact` | [`?BancontactPaymentObject`](../../doc/models/bancontact-payment-object.md) | Optional | Information used to pay Bancontact. | getBancontact(): ?BancontactPaymentObject | setBancontact(?BancontactPaymentObject bancontact): void |
| `blik` | [`?BlikPaymentObject`](../../doc/models/blik-payment-object.md) | Optional | Information used to pay using BLIK. | getBlik(): ?BlikPaymentObject | setBlik(?BlikPaymentObject blik): void |
| `eps` | [`?EpsPaymentObject`](../../doc/models/eps-payment-object.md) | Optional | Information used to pay using eps. | getEps(): ?EpsPaymentObject | setEps(?EpsPaymentObject eps): void |
| `giropay` | [`?GiropayPaymentObject`](../../doc/models/giropay-payment-object.md) | Optional | Information needed to pay using giropay. | getGiropay(): ?GiropayPaymentObject | setGiropay(?GiropayPaymentObject giropay): void |
| `ideal` | [`?IdealPaymentObject`](../../doc/models/ideal-payment-object.md) | Optional | Information used to pay using iDEAL. | getIdeal(): ?IdealPaymentObject | setIdeal(?IdealPaymentObject ideal): void |
| `mybank` | [`?MybankPaymentObject`](../../doc/models/mybank-payment-object.md) | Optional | Information used to pay using MyBank. | getMybank(): ?MybankPaymentObject | setMybank(?MybankPaymentObject mybank): void |
| `p24` | [`?P24PaymentObject`](../../doc/models/p24-payment-object.md) | Optional | Information used to pay using P24(Przelewy24). | getP24(): ?P24PaymentObject | setP24(?P24PaymentObject p24): void |
| `sofort` | [`?SofortPaymentObject`](../../doc/models/sofort-payment-object.md) | Optional | Information used to pay using Sofort. | getSofort(): ?SofortPaymentObject | setSofort(?SofortPaymentObject sofort): void |
| `trustly` | [`?TrustlyPaymentObject`](../../doc/models/trustly-payment-object.md) | Optional | Information needed to pay using Trustly. | getTrustly(): ?TrustlyPaymentObject | setTrustly(?TrustlyPaymentObject trustly): void |
| `applePay` | [`?ApplePayPaymentObject`](../../doc/models/apple-pay-payment-object.md) | Optional | Information needed to pay using ApplePay. | getApplePay(): ?ApplePayPaymentObject | setApplePay(?ApplePayPaymentObject applePay): void |
| `googlePay` | [`?GooglePayWalletResponse`](../../doc/models/google-pay-wallet-response.md) | Optional | Google Pay Wallet payment data. | getGooglePay(): ?GooglePayWalletResponse | setGooglePay(?GooglePayWalletResponse googlePay): void |
| `venmo` | [`?VenmoWalletResponse`](../../doc/models/venmo-wallet-response.md) | Optional | Venmo wallet response. | getVenmo(): ?VenmoWalletResponse | setVenmo(?VenmoWalletResponse venmo): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PaymentSourceResponseBuilder;
use PaypalServerSdkLib\Models\Builders\CardResponseBuilder;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\CardType;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\Builders\PaypalWalletResponseBuilder;
use PaypalServerSdkLib\Models\Builders\BancontactPaymentObjectBuilder;
use PaypalServerSdkLib\Models\Builders\BlikPaymentObjectBuilder;
use PaypalServerSdkLib\Models\Builders\BlikOneClickPaymentObjectBuilder;
use PaypalServerSdkLib\Models\Builders\EpsPaymentObjectBuilder;

$paymentSourceResponse = PaymentSourceResponseBuilder::init()
    ->card(
        CardResponseBuilder::init()
            ->name('name6')
            ->brand(CardBrand::CB_NATIONALE)
            ->type(CardType::UNKNOWN)
            ->build()
    )
    ->paypal(
        PaypalWalletResponseBuilder::init()
            ->emailAddress('email_address0')
            ->accountId('account_id4')
            ->name(
                NameBuilder::init()
                    ->givenName('given_name2')
                    ->surname('surname8')
                    ->build()
            )
            ->phoneType(PhoneType::FAX)
            ->build()
    )
    ->bancontact(
        BancontactPaymentObjectBuilder::init()
            ->name('name0')
            ->countryCode('country_code0')
            ->bic('bic2')
            ->ibanLastChars('iban_last_chars8')
            ->cardLastDigits('card_last_digits4')
            ->build()
    )
    ->blik(
        BlikPaymentObjectBuilder::init()
            ->name('name2')
            ->countryCode('country_code2')
            ->email('email4')
            ->oneClick(
                BlikOneClickPaymentObjectBuilder::init()
                    ->consumerReference('consumer_reference2')
                    ->build()
            )
            ->build()
    )
    ->eps(
        EpsPaymentObjectBuilder::init()
            ->name('name6')
            ->countryCode('country_code6')
            ->bic('bic8')
            ->build()
    )
    ->build();
```

