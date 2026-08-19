
# Order Authorize Response Payment Source

The payment source used to fund the payment.

## Structure

`OrderAuthorizeResponsePaymentSource`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?CardResponse`](../../doc/models/card-response.md) | Optional | The payment card to use to fund a payment. Card can be a credit or debit card. | getCard(): ?CardResponse | setCard(?CardResponse card): void |
| `paypal` | [`?PaypalWalletResponse`](../../doc/models/paypal-wallet-response.md) | Optional | The PayPal Wallet response. | getPaypal(): ?PaypalWalletResponse | setPaypal(?PaypalWalletResponse paypal): void |
| `applePay` | [`?ApplePayPaymentObject`](../../doc/models/apple-pay-payment-object.md) | Optional | Information needed to pay using ApplePay. | getApplePay(): ?ApplePayPaymentObject | setApplePay(?ApplePayPaymentObject applePay): void |
| `googlePay` | [`?GooglePayWalletResponse`](../../doc/models/google-pay-wallet-response.md) | Optional | Google Pay Wallet payment data. | getGooglePay(): ?GooglePayWalletResponse | setGooglePay(?GooglePayWalletResponse googlePay): void |
| `venmo` | [`?VenmoWalletResponse`](../../doc/models/venmo-wallet-response.md) | Optional | Venmo wallet response. | getVenmo(): ?VenmoWalletResponse | setVenmo(?VenmoWalletResponse venmo): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\OrderAuthorizeResponsePaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\CardResponseBuilder;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\CardType;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\Builders\PaypalWalletResponseBuilder;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayPaymentObjectBuilder;
use PaypalServerSdkLib\Models\Builders\GooglePayWalletResponseBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberWithCountryCodeBuilder;
use PaypalServerSdkLib\Models\Builders\GooglePayCardResponseBuilder;
use PaypalServerSdkLib\Models\Builders\VenmoWalletResponseBuilder;

$orderAuthorizeResponsePaymentSource = OrderAuthorizeResponsePaymentSourceBuilder::init()
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
    ->applePay(
        ApplePayPaymentObjectBuilder::init()
            ->id('id0')
            ->token('token6')
            ->name('name0')
            ->emailAddress('email_address8')
            ->phoneNumber(
                PhoneNumberBuilder::init(
                    'national_number6'
                )->build()
            )->build()
    )
    ->googlePay(
        GooglePayWalletResponseBuilder::init()
            ->name('name8')
            ->emailAddress('email_address6')
            ->phoneNumber(
                PhoneNumberWithCountryCodeBuilder::init(
                    'country_code2',
                    'national_number6'
                )->build()
            )
            ->card(
                GooglePayCardResponseBuilder::init()
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
            ->build()
    )
    ->venmo(
        VenmoWalletResponseBuilder::init()
            ->emailAddress('email_address4')
            ->accountId('account_id8')
            ->userName('user_name2')
            ->name(
                NameBuilder::init()
                    ->givenName('given_name2')
                    ->surname('surname8')
                    ->build()
            )
            ->phoneNumber(
                PhoneNumberBuilder::init(
                    'national_number6'
                )->build()
            )->build()
    )->build();
```

