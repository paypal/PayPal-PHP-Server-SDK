
# Authorization Status with Details

The status fields and status details for an authorized payment.

## Structure

`AuthorizationStatusWithDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`?string(AuthorizationStatus)`](../../doc/models/authorization-status.md) | Optional, Read-only | The status for the authorized payment. | getStatus(): ?string | setStatus(?string status): void |
| `statusDetails` | [`?AuthorizationStatusDetails`](../../doc/models/authorization-status-details.md) | Optional | The details of the authorized payment status. | getStatusDetails(): ?AuthorizationStatusDetails | setStatusDetails(?AuthorizationStatusDetails statusDetails): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\AuthorizationStatusWithDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\AuthorizationStatusDetailsBuilder;
use PaypalServerSdkLib\Models\AuthorizationIncompleteReason;

$authorizationStatusWithDetails = AuthorizationStatusWithDetailsBuilder::init()
    ->statusDetails(
        AuthorizationStatusDetailsBuilder::init()
            ->reason(AuthorizationIncompleteReason::PENDING_REVIEW)
            ->build()
    )
    ->build();
```

