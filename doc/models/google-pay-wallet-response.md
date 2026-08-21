
# Google Pay Wallet Response

Google Pay Wallet payment data.

## Structure

`GooglePayWalletResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The full name representation like Mr J Smith.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `300` | getName(): ?string | setName(?string name): void |
| `emailAddress` | `?string` | Optional | The internationalized email address. Note: Up to 64 characters are allowed before and 255 characters are allowed after the @ sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted @ sign exists.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `254`, *Pattern*: ``^(?:[A-Za-z0-9!#$%&'*+/=?^_`{\|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{\|}~-]+)*\|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]\|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\|\[(?:(?:25[0-5]\|2[0-4][0-9]\|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]\|2[0-4][0-9]\|[01]?[0-9][0-9]?\|[A-Za-z0-9-]*[A-Za-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]\|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$`` | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |
| `phoneNumber` | [`?PhoneNumberWithCountryCode`](../../doc/models/phone-number-with-country-code.md) | Optional | The phone number in its canonical international [E.164 numbering plan format](https://www.itu.int/rec/T-REC-E.164/en). | getPhoneNumber(): ?PhoneNumberWithCountryCode | setPhoneNumber(?PhoneNumberWithCountryCode phoneNumber): void |
| `card` | [`?GooglePayCardResponse`](../../doc/models/google-pay-card-response.md) | Optional | The payment card to use to fund a Google Pay payment response. Can be a credit or debit card. | getCard(): ?GooglePayCardResponse | setCard(?GooglePayCardResponse card): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\GooglePayWalletResponseBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberWithCountryCodeBuilder;
use PaypalServerSdkLib\Models\Builders\GooglePayCardResponseBuilder;
use PaypalServerSdkLib\Models\CardType;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;

$googlePayWalletResponse = GooglePayWalletResponseBuilder::init()
    ->name('name0')
    ->emailAddress('email_address8')
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
    ->build();
```

