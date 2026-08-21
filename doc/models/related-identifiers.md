
# Related Identifiers

Identifiers related to a specific resource.

## Structure

`RelatedIdentifiers`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `orderId` | `?string` | Optional | Order ID related to the resource.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `20`, *Pattern*: `^[A-Z0-9]+$` | getOrderId(): ?string | setOrderId(?string orderId): void |
| `authorizationId` | `?string` | Optional | Authorization ID related to the resource.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `20`, *Pattern*: `^[A-Z0-9]+$` | getAuthorizationId(): ?string | setAuthorizationId(?string authorizationId): void |
| `captureId` | `?string` | Optional | Capture ID related to the resource.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `20`, *Pattern*: `^[A-Z0-9]+$` | getCaptureId(): ?string | setCaptureId(?string captureId): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\RelatedIdentifiersBuilder;

$relatedIdentifiers = RelatedIdentifiersBuilder::init()
    ->orderId('order_id2')
    ->authorizationId('authorization_id4')
    ->captureId('capture_id6')
    ->build();
```

