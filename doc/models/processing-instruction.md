
# Processing Instruction

The instruction to process an order.

## Enumeration

`ProcessingInstruction`

## Fields

| Name | Description |
|  --- | --- |
| `ORDER_COMPLETE_ON_PAYMENT_APPROVAL` | API Caller expects the Order to be auto completed (i.e. for PayPal to authorize or capture depending on the intent) on completion of payer approval. This option is not relevant for payment_source that typically do not require a payer approval or interaction. This option is currently only available for the following payment_source: Alipay, BANCOMAT Pay, Bancontact, BLIK, boletobancario, eps, giropay, GrabPay, iDEAL, MB WAY Multibanco, MyBank, OXXO, P24, PayU, PUI, SafetyPay, SatisPay, Swish, Sofort, Trustly, Verkkopankki, WeChat Pay |

