
# Subscriber

The subscriber response information.

## Structure

`Subscriber`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `emailAddress` | `?string` | Optional | The internationalized email address. Note: Up to 64 characters are allowed before and 255 characters are allowed after the @ sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted @ sign exists.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `254`, *Pattern*: ``(?:[a-zA-Z0-9!#$%&'*+/=?^_`{\|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{\|}~-]+)*\|(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]\|\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\|\[(?:(?:(2(5[0-5]\|[0-4][0-9])\|1[0-9][0-9]\|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]\|[0-4][0-9])\|1[0-9][0-9]\|[1-9]?[0-9])\|[a-zA-Z0-9-]*[a-zA-Z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]\|\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])`` | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |
| `payerId` | `?string` | Optional | The account identifier for a PayPal account.<br><br>**Constraints**: *Minimum Length*: `13`, *Maximum Length*: `13`, *Pattern*: `^[2-9A-HJ-NP-Z]{13}$` | getPayerId(): ?string | setPayerId(?string payerId): void |
| `name` | [`?Name`](../../doc/models/name.md) | Optional | The name of the party. | getName(): ?Name | setName(?Name name): void |
| `shippingAddress` | [`?ShippingDetails`](../../doc/models/shipping-details.md) | Optional | The shipping details. | getShippingAddress(): ?ShippingDetails | setShippingAddress(?ShippingDetails shippingAddress): void |
| `paymentSource` | [`?SubscriptionPaymentSourceResponse`](../../doc/models/subscription-payment-source-response.md) | Optional | The payment source used to fund the payment. | getPaymentSource(): ?SubscriptionPaymentSourceResponse | setPaymentSource(?SubscriptionPaymentSourceResponse paymentSource): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SubscriberBuilder;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\Builders\ShippingDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\ShippingNameBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberWithCountryCodeBuilder;
use PaypalServerSdkLib\Models\FulfillmentType;
use PaypalServerSdkLib\Models\Builders\ShippingOptionBuilder;
use PaypalServerSdkLib\Models\ShippingType;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;
use PaypalServerSdkLib\Models\Builders\SubscriptionPaymentSourceResponseBuilder;
use PaypalServerSdkLib\Models\Builders\CardResponseWithBillingAddressBuilder;

$subscriber = SubscriberBuilder::init()
    ->emailAddress('email_address8')
    ->payerId('payer_id8')
    ->name(
        NameBuilder::init()
            ->givenName('given_name2')
            ->surname('surname8')
            ->build()
    )
    ->shippingAddress(
        ShippingDetailsBuilder::init()
            ->name(
                ShippingNameBuilder::init()
                    ->fullName('full_name6')
                    ->build()
            )
            ->emailAddress('email_address8')
            ->phoneNumber(
                PhoneNumberWithCountryCodeBuilder::init(
                    'country_code2',
                    'national_number6'
                )->build()
            )
            ->type(FulfillmentType::PICKUP_IN_STORE)
            ->options(
                [
                    ShippingOptionBuilder::init(
                        'id2',
                        'label2',
                        false
                    )
                        ->type(ShippingType::SHIPPING)
                        ->amount(
                            MoneyBuilder::init(
                                'currency_code6',
                                'value0'
                            )->build()
                        )->build()
                ]
            )->build()
    )
    ->paymentSource(
        SubscriptionPaymentSourceResponseBuilder::init()
            ->card(
                CardResponseWithBillingAddressBuilder::init()
                    ->name('name6')
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
                    ->expiry('expiry4')
                    ->currencyCode('currency_code2')
                    ->build()
            )
            ->build()
    )
    ->build();
```

