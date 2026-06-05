
# Processor Response

The processor response information for payment requests, such as direct credit card transactions.

## Structure

`ProcessorResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `avsCode` | [`?string(AvsCode)`](../../doc/models/avs-code.md) | Optional, Read-only | The address verification code for Visa, Discover, Mastercard, or American Express transactions. | getAvsCode(): ?string | setAvsCode(?string avsCode): void |
| `cvvCode` | [`?string(CvvCode)`](../../doc/models/cvv-code.md) | Optional, Read-only | The card verification value code for for Visa, Discover, Mastercard, or American Express. | getCvvCode(): ?string | setCvvCode(?string cvvCode): void |
| `responseCode` | [`?string(ProcessorResponseCode)`](../../doc/models/processor-response-code.md) | Optional, Read-only | Processor response code for the non-PayPal payment processor errors. | getResponseCode(): ?string | setResponseCode(?string responseCode): void |
| `paymentAdviceCode` | [`?string(PaymentAdviceCode)`](../../doc/models/payment-advice-code.md) | Optional, Read-only | The declined payment transactions might have payment advice codes. The card networks, like Visa and Mastercard, return payment advice codes. | getPaymentAdviceCode(): ?string | setPaymentAdviceCode(?string paymentAdviceCode): void |

## Example (as JSON)

```json
{
  "avs_code": "M",
  "cvv_code": "U",
  "response_code": "PPII",
  "payment_advice_code": "03"
}
```

