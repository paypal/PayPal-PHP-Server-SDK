
# Vaulted Digital Wallet Shipping Details

The shipping details.

## Structure

`VaultedDigitalWalletShippingDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | [`?ShippingName`](../../doc/models/shipping-name.md) | Optional | The name of the party. | getName(): ?ShippingName | setName(?ShippingName name): void |
| `emailAddress` | `?string` | Optional | The internationalized email address. Note: Up to 64 characters are allowed before and 255 characters are allowed after the @ sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted @ sign exists.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `254`, *Pattern*: ``^(?:[A-Za-z0-9!#$%&'*+/=?^_`{\|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{\|}~-]+)*\|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]\|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\|\[(?:(?:25[0-5]\|2[0-4][0-9]\|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]\|2[0-4][0-9]\|[01]?[0-9][0-9]?\|[A-Za-z0-9-]*[A-Za-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]\|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$`` | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |
| `phoneNumber` | [`?PhoneNumberWithCountryCode`](../../doc/models/phone-number-with-country-code.md) | Optional | The phone number, in its canonical international [E.164 numbering plan format](https://www.itu.int/rec/T-REC-E.164/en). | getPhoneNumber(): ?PhoneNumberWithCountryCode | setPhoneNumber(?PhoneNumberWithCountryCode phoneNumber): void |
| `type` | [`?string(FulfillmentType)`](../../doc/models/fulfillment-type.md) | Optional | A classification for the method of purchase fulfillment (e.g shipping, in-store pickup, etc). Either `type` or `options` may be present, but not both.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9A-Z_]+$` | getType(): ?string | setType(?string type): void |
| `address` | [`?Address`](../../doc/models/address.md) | Optional | The portable international postal address. Maps to [AddressValidationMetadata](https://github.com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-controls-the-autocomplete-attribute). | getAddress(): ?Address | setAddress(?Address address): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\VaultedDigitalWalletShippingDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\ShippingNameBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberWithCountryCodeBuilder;
use PaypalServerSdkLib\Models\FulfillmentType;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;

$vaultedDigitalWalletShippingDetails = VaultedDigitalWalletShippingDetailsBuilder::init()
    ->name(
        ShippingNameBuilder::init()
            ->fullName('full_name6')
            ->build()
    )
    ->emailAddress('email_address6')
    ->phoneNumber(
        PhoneNumberWithCountryCodeBuilder::init(
            'country_code2',
            'national_number6'
        )->build()
    )
    ->type(FulfillmentType::PICKUP_IN_STORE)
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
    ->build();
```

