
# Refund Incomplete Reason

The reason why the refund has the `PENDING` or `FAILED` status.

## Enumeration

`RefundIncompleteReason`

## Fields

| Name | Description |
|  --- | --- |
| `ECHECK` | The customer's account is funded through an eCheck, which has not yet cleared. |

## Example

```php
use PaypalServerSdkLib\Models\RefundIncompleteReason;

$refundIncompleteReason = RefundIncompleteReason::ECHECK;
```

