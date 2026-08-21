
# Google Pay Decrypted Token Data

Details shared by Google for the merchant to be shared with PayPal. This is required to process the transaction using the Google Pay payment method.

## Structure

`GooglePayDecryptedTokenData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `messageId` | `?string` | Optional | A unique ID that identifies the message in case it needs to be revoked or located at a later time.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `250`, *Pattern*: `^.*$` | getMessageId(): ?string | setMessageId(?string messageId): void |
| `messageExpiration` | `?string` | Optional | Date and time at which the message expires as UTC milliseconds since epoch. Integrators should reject any message that's expired.<br><br>**Constraints**: *Minimum Length*: `13`, *Maximum Length*: `13`, *Pattern*: `\d{13}` | getMessageExpiration(): ?string | setMessageExpiration(?string messageExpiration): void |
| `paymentMethod` | [`string(GooglePayPaymentMethod)`](../../doc/models/google-pay-payment-method.md) | Required | The type of the payment credential. Currently, only CARD is supported.<br><br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4` | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `card` | [`GooglePayCard`](../../doc/models/google-pay-card.md) | Required | The payment card used to fund a Google Pay payment. Can be a credit or debit card. | getCard(): GooglePayCard | setCard(GooglePayCard card): void |
| `authenticationMethod` | [`string(GooglePayAuthenticationMethod)`](../../doc/models/google-pay-authentication-method.md) | Required | Authentication Method which is used for the card transaction.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `50` | getAuthenticationMethod(): string | setAuthenticationMethod(string authenticationMethod): void |
| `cryptogram` | `?string` | Optional | Base-64 cryptographic identifier used by card schemes to validate the token verification result. This is a conditionally required field if authentication_method is CRYPTOGRAM_3DS.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2000` | getCryptogram(): ?string | setCryptogram(?string cryptogram): void |
| `eciIndicator` | `?string` | Optional | Electronic Commerce Indicator may not always be present. It is only returned for tokens on the Visa card network. This value is passed through in the payment authorization request.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `256`, *Pattern*: `^.*$` | getEciIndicator(): ?string | setEciIndicator(?string eciIndicator): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\GooglePayDecryptedTokenDataBuilder;
use PaypalServerSdkLib\Models\GooglePayPaymentMethod;
use PaypalServerSdkLib\Models\Builders\GooglePayCardBuilder;
use PaypalServerSdkLib\Models\CardType;
use PaypalServerSdkLib\Models\GooglePayAuthenticationMethod;

$googlePayDecryptedTokenData = GooglePayDecryptedTokenDataBuilder::init(
    GooglePayPaymentMethod::CARD,
    GooglePayCardBuilder::init()
        ->name('name6')
        ->number('number6')
        ->expiry('expiry4')
        ->type(CardType::UNKNOWN)
        ->build(),
    GooglePayAuthenticationMethod::PAN_ONLY
)
    ->messageId('message_id8')
    ->messageExpiration('message_expiration0')
    ->cryptogram('cryptogram8')
    ->eciIndicator('eci_indicator2')
    ->build();
```

