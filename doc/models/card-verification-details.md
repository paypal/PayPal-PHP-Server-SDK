
# Card Verification Details

Card Verification details including the authorization details and 3D SECURE details.

## Structure

`CardVerificationDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `networkTransactionId` | `?string` | Optional | Transaction Identifier as given by the network to indicate a previously executed CIT authorization. Only present when authorization is successful for a verification.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1024`, *Pattern*: `^[a-zA-Z0-9-_@.:&+=*^'~#!$%()]+$` | getNetworkTransactionId(): ?string | setNetworkTransactionId(?string networkTransactionId): void |
| `date` | `?string` | Optional | The date that the transaction was authorized by the scheme. This field may not be returned for all networks. MasterCard refers to this field as "BankNet reference date".<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4`, *Pattern*: `^[0-9]+$` | getDate(): ?string | setDate(?string date): void |
| `network` | [`?string(CardBrand)`](../../doc/models/card-brand.md) | Optional | The card network or brand. Applies to credit, debit, gift, and payment cards.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[A-Z_]+$` | getNetwork(): ?string | setNetwork(?string network): void |
| `time` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular expression provides guidance but does not reject all invalid dates.</blockquote><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getTime(): ?string | setTime(?string time): void |
| `amount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getAmount(): ?Money | setAmount(?Money amount): void |
| `processorResponse` | [`?CardVerificationProcessorResponse`](../../doc/models/card-verification-processor-response.md) | Optional | The processor response information for payment requests, such as direct credit card transactions. | getProcessorResponse(): ?CardVerificationProcessorResponse | setProcessorResponse(?CardVerificationProcessorResponse processorResponse): void |
| `threeDSecure` | `mixed` | Optional | DEPRECATED. This field is DEPRECATED. Please find the 3D secure authentication data in 'three_d_secure' object under 'authentication_result' object instead of the 'verification' field. | getThreeDSecure(): | setThreeDSecure( threeDSecure): void |

## Example (as JSON)

```json
{
  "network_transaction_id": "network_transaction_id4",
  "date": "date8",
  "network": "EFTPOS",
  "time": "time2",
  "amount": {
    "currency_code": "currency_code6",
    "value": "value0"
  }
}
```

