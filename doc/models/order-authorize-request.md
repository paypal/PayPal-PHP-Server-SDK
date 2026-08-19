
# Order Authorize Request

The authorization of an order request.

## Structure

`OrderAuthorizeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentSource` | [`?OrderAuthorizeRequestPaymentSource`](../../doc/models/order-authorize-request-payment-source.md) | Optional | The payment source definition. | getPaymentSource(): ?OrderAuthorizeRequestPaymentSource | setPaymentSource(?OrderAuthorizeRequestPaymentSource paymentSource): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\OrderAuthorizeRequestBuilder;
use PaypalServerSdkLib\Models\Builders\OrderAuthorizeRequestPaymentSourceBuilder;
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

$orderAuthorizeRequest = OrderAuthorizeRequestBuilder::init()
    ->paymentSource(
        OrderAuthorizeRequestPaymentSourceBuilder::init()
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
            ->build()
    )
    ->build();
```

