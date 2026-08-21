
# Setup Token Request

Setup Token Request where the `source` defines the type of instrument to be stored.

## Structure

`SetupTokenRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`?Customer`](../../doc/models/customer.md) | Optional | This object defines a customer in your system. Use it to manage customer profiles, save payment methods and contact details. | getCustomer(): ?Customer | setCustomer(?Customer customer): void |
| `paymentSource` | [`SetupTokenRequestPaymentSource`](../../doc/models/setup-token-request-payment-source.md) | Required | The payment method to vault with the instrument details. | getPaymentSource(): SetupTokenRequestPaymentSource | setPaymentSource(SetupTokenRequestPaymentSource paymentSource): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SetupTokenRequestBuilder;
use PaypalServerSdkLib\Models\Builders\SetupTokenRequestPaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\SetupTokenRequestCardBuilder;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;
use PaypalServerSdkLib\Models\Builders\VaultPaypalWalletRequestBuilder;
use PaypalServerSdkLib\Models\UsagePattern;
use PaypalServerSdkLib\Models\Builders\VaultedDigitalWalletShippingDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\ShippingNameBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberWithCountryCodeBuilder;
use PaypalServerSdkLib\Models\FulfillmentType;
use PaypalServerSdkLib\Models\PaypalPaymentTokenUsageType;
use PaypalServerSdkLib\Models\Builders\VaultVenmoRequestBuilder;
use PaypalServerSdkLib\Models\Builders\VaultApplePayRequestBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayRequestCardBuilder;
use PaypalServerSdkLib\Models\CardType;
use PaypalServerSdkLib\Models\Builders\VaultTokenRequestBuilder;
use PaypalServerSdkLib\Models\VaultTokenRequestType;
use PaypalServerSdkLib\Models\Builders\CustomerBuilder;

$setupTokenRequest = SetupTokenRequestBuilder::init(
    SetupTokenRequestPaymentSourceBuilder::init()
        ->card(
            SetupTokenRequestCardBuilder::init()
                ->name('name6')
                ->number('number6')
                ->expiry('expiry4')
                ->securityCode('security_code8')
                ->brand(CardBrand::CB_NATIONALE)
                ->build()
        )
        ->paypal(
            VaultPaypalWalletRequestBuilder::init()
                ->description('description2')
                ->usagePattern(UsagePattern::THRESHOLD_PREPAID)
                ->shipping(
                    VaultedDigitalWalletShippingDetailsBuilder::init()
                        ->name(
                            ShippingNameBuilder::init()
                                ->fullName('full_name6')
                                ->build()
                        )
                        ->emailAddress('email_address2')
                        ->phoneNumber(
                            PhoneNumberWithCountryCodeBuilder::init(
                                'country_code2',
                                'national_number6'
                            )->build()
                        )
                        ->type(FulfillmentType::SHIPPING)
                        ->address(
                            AddressBuilder::init(
                                'country_code6'
                            )
                                ->addressLine1('address_line_16')
                                ->addressLine2('address_line_26')
                                ->adminArea2('admin_area_20')
                                ->adminArea1('admin_area_12')
                                ->postalCode('postal_code8')
                                ->build()
                        )
                        ->build()
                )
                ->permitMultiplePaymentTokens(false)
                ->usageType(PaypalPaymentTokenUsageType::MERCHANT)
                ->build()
        )
        ->venmo(
            VaultVenmoRequestBuilder::init()
                ->description('description6')
                ->usagePattern(UsagePattern::UNSCHEDULED_PREPAID)
                ->shipping(
                    VaultedDigitalWalletShippingDetailsBuilder::init()
                        ->name(
                            ShippingNameBuilder::init()
                                ->fullName('full_name6')
                                ->build()
                        )
                        ->emailAddress('email_address2')
                        ->phoneNumber(
                            PhoneNumberWithCountryCodeBuilder::init(
                                'country_code2',
                                'national_number6'
                            )->build()
                        )
                        ->type(FulfillmentType::SHIPPING)
                        ->address(
                            AddressBuilder::init(
                                'country_code6'
                            )
                                ->addressLine1('address_line_16')
                                ->addressLine2('address_line_26')
                                ->adminArea2('admin_area_20')
                                ->adminArea1('admin_area_12')
                                ->postalCode('postal_code8')
                                ->build()
                        )
                        ->build()
                )
                ->permitMultiplePaymentTokens(false)
                ->usageType(PaypalPaymentTokenUsageType::MERCHANT)
                ->build()
        )
        ->applePay(
            VaultApplePayRequestBuilder::init()
                ->token('token6')
                ->card(
                    ApplePayRequestCardBuilder::init()
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
        ->token(
            VaultTokenRequestBuilder::init(
                'id6',
                VaultTokenRequestType::SETUP_TOKEN
            )->build()
        )->build()
)
    ->customer(
        CustomerBuilder::init()
            ->id('id0')
            ->merchantCustomerId('merchant_customer_id2')
            ->build()
    )
    ->build();
```

