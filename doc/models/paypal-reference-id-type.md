
# Paypal Reference Id Type

The PayPal reference ID type.

## Enumeration

`PaypalReferenceIdType`

## Fields

| Name | Description |
|  --- | --- |
| `ODR` | An order ID. |
| `TXN` | A transaction ID. |
| `SUB` | A subscription ID. |
| `PAP` | A pre-approved payment ID. |

## Example

```php
use PaypalServerSdkLib\Models\PaypalReferenceIdType;

$paypalReferenceIdType = PaypalReferenceIdType::ODR;
```

