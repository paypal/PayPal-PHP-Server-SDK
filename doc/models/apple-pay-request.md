
# Apple Pay Request

Information needed to pay using ApplePay.

## Structure

`ApplePayRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | ApplePay transaction identifier, this will be the unique identifier for this transaction provided by Apple. The pattern is defined by an external party and supports Unicode.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `250`, *Pattern*: `^.*$` | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | The full name representation like Mr J Smith.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `300` | getName(): ?string | setName(?string name): void |
| `emailAddress` | `?string` | Optional | The internationalized email address. Note: Up to 64 characters are allowed before and 255 characters are allowed after the @ sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted @ sign exists.<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `254`, *Pattern*: ``^(?:[A-Za-z0-9!#$%&'*+/=?^_`{\|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{\|}~-]+)*\|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]\|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\|\[(?:(?:25[0-5]\|2[0-4][0-9]\|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]\|2[0-4][0-9]\|[01]?[0-9][0-9]?\|[A-Za-z0-9-]*[A-Za-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]\|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$`` | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |
| `phoneNumber` | [`?PhoneNumber`](../../doc/models/phone-number.md) | Optional | The phone number in its canonical international [E.164 numbering plan format](https://www.itu.int/rec/T-REC-E.164/en). | getPhoneNumber(): ?PhoneNumber | setPhoneNumber(?PhoneNumber phoneNumber): void |
| `decryptedToken` | [`?ApplePayDecryptedTokenData`](../../doc/models/apple-pay-decrypted-token-data.md) | Optional | Information about the Payment data obtained by decrypting Apple Pay token. | getDecryptedToken(): ?ApplePayDecryptedTokenData | setDecryptedToken(?ApplePayDecryptedTokenData decryptedToken): void |
| `storedCredential` | [`?CardStoredCredential`](../../doc/models/card-stored-credential.md) | Optional | Provides additional details to process a payment using a `card` that has been stored or is intended to be stored (also referred to as stored_credential or card-on-file). Parameter compatibility: `payment_type=ONE_TIME` is compatible only with `payment_initiator=CUSTOMER`. `usage=FIRST` is compatible only with `payment_initiator=CUSTOMER`. `previous_transaction_reference` or `previous_network_transaction_reference` is compatible only with `payment_initiator=MERCHANT`. Only one of the parameters - `previous_transaction_reference` and `previous_network_transaction_reference` - can be present in the request. | getStoredCredential(): ?CardStoredCredential | setStoredCredential(?CardStoredCredential storedCredential): void |
| `vaultId` | `?string` | Optional | The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's server so the saved payment source can be used for future transactions.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9a-zA-Z_-]+$` | getVaultId(): ?string | setVaultId(?string vaultId): void |
| `attributes` | [`?ApplePayAttributes`](../../doc/models/apple-pay-attributes.md) | Optional | Additional attributes associated with apple pay. | getAttributes(): ?ApplePayAttributes | setAttributes(?ApplePayAttributes attributes): void |
| `experienceContext` | [`?ApplePayExperienceContext`](../../doc/models/apple-pay-experience-context.md) | Optional | Customizes the payer experience during the approval process for the payment. | getExperienceContext(): ?ApplePayExperienceContext | setExperienceContext(?ApplePayExperienceContext experienceContext): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ApplePayRequestBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayDecryptedTokenDataBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayTokenizedCardBuilder;
use PaypalServerSdkLib\Models\CardType;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\ApplePayPaymentDataType;
use PaypalServerSdkLib\Models\Builders\ApplePayPaymentDataBuilder;

$applePayRequest = ApplePayRequestBuilder::init()
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
    ->build();
```

