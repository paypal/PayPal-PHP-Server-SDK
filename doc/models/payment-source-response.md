
# Payment Source Response

The payment source used to fund the payment.

## Structure

`PaymentSourceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?CardResponse`](../../doc/models/card-response.md) | Optional | The payment card to use to fund a payment. Card can be a credit or debit card. | getCard(): ?CardResponse | setCard(?CardResponse card): void |
| `paypal` | [`?PayPalWalletResponse`](../../doc/models/pay-pal-wallet-response.md) | Optional | The PayPal Wallet response. | getPaypal(): ?PayPalWalletResponse | setPaypal(?PayPalWalletResponse paypal): void |
| `bancontact` | [`?BancontactPaymentObject`](../../doc/models/bancontact-payment-object.md) | Optional | Information used to pay Bancontact. | getBancontact(): ?BancontactPaymentObject | setBancontact(?BancontactPaymentObject bancontact): void |
| `blik` | [`?BLIKPaymentObject`](../../doc/models/blik-payment-object.md) | Optional | Information used to pay using BLIK. | getBlik(): ?BLIKPaymentObject | setBlik(?BLIKPaymentObject blik): void |
| `eps` | [`?EPSPaymentObject`](../../doc/models/eps-payment-object.md) | Optional | Information used to pay using eps. | getEps(): ?EPSPaymentObject | setEps(?EPSPaymentObject eps): void |
| `giropay` | [`?GiropayPaymentObject`](../../doc/models/giropay-payment-object.md) | Optional | Information needed to pay using giropay. | getGiropay(): ?GiropayPaymentObject | setGiropay(?GiropayPaymentObject giropay): void |
| `ideal` | [`?IDEALPaymentObject`](../../doc/models/ideal-payment-object.md) | Optional | Information used to pay using iDEAL. | getIdeal(): ?IDEALPaymentObject | setIdeal(?IDEALPaymentObject ideal): void |
| `mybank` | [`?MyBankPaymentObject`](../../doc/models/my-bank-payment-object.md) | Optional | Information used to pay using MyBank. | getMybank(): ?MyBankPaymentObject | setMybank(?MyBankPaymentObject mybank): void |
| `p24` | [`?P24PaymentObject`](../../doc/models/p24-payment-object.md) | Optional | Information used to pay using P24(Przelewy24). | getP24(): ?P24PaymentObject | setP24(?P24PaymentObject p24): void |
| `sofort` | [`?SofortPaymentObject`](../../doc/models/sofort-payment-object.md) | Optional | Information used to pay using Sofort. | getSofort(): ?SofortPaymentObject | setSofort(?SofortPaymentObject sofort): void |
| `trustly` | [`?TrustlyPaymentObject`](../../doc/models/trustly-payment-object.md) | Optional | Information needed to pay using Trustly. | getTrustly(): ?TrustlyPaymentObject | setTrustly(?TrustlyPaymentObject trustly): void |
| `applePay` | [`?ApplePayPaymentObject`](../../doc/models/apple-pay-payment-object.md) | Optional | Information needed to pay using ApplePay. | getApplePay(): ?ApplePayPaymentObject | setApplePay(?ApplePayPaymentObject applePay): void |
| `googlePay` | [`?GooglePayWalletResponse`](../../doc/models/google-pay-wallet-response.md) | Optional | Google Pay Wallet payment data. | getGooglePay(): ?GooglePayWalletResponse | setGooglePay(?GooglePayWalletResponse googlePay): void |
| `venmo` | [`?VenmoWalletResponse`](../../doc/models/venmo-wallet-response.md) | Optional | Venmo wallet response. | getVenmo(): ?VenmoWalletResponse | setVenmo(?VenmoWalletResponse venmo): void |

## Example (as JSON)

```json
{
  "card": {
    "name": "name6",
    "last_digits": "last_digits0",
    "brand": "SYNCHRONY",
    "available_networks": [
      "DELTA"
    ],
    "type": "UNKNOWN"
  },
  "paypal": {
    "email_address": "email_address0",
    "account_id": "account_id4",
    "account_status": "VERIFIED",
    "name": {
      "given_name": "given_name2",
      "surname": "surname8"
    },
    "phone_type": "FAX"
  },
  "bancontact": {
    "name": "name0",
    "country_code": "country_code0",
    "bic": "bic2",
    "iban_last_chars": "iban_last_chars8",
    "card_last_digits": "card_last_digits4"
  },
  "blik": {
    "name": "name2",
    "country_code": "country_code2",
    "email": "email4",
    "one_click": {
      "consumer_reference": "consumer_reference2"
    }
  },
  "eps": {
    "name": "name6",
    "country_code": "country_code6",
    "bic": "bic8"
  }
}
```

