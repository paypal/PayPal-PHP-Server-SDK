
# Payment Supplementary Data

The supplementary data.

## Structure

`PaymentSupplementaryData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `relatedIds` | [`?RelatedIdentifiers`](../../doc/models/related-identifiers.md) | Optional | Identifiers related to a specific resource. | getRelatedIds(): ?RelatedIdentifiers | setRelatedIds(?RelatedIdentifiers relatedIds): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PaymentSupplementaryDataBuilder;
use PaypalServerSdkLib\Models\Builders\RelatedIdentifiersBuilder;

$paymentSupplementaryData = PaymentSupplementaryDataBuilder::init()
    ->relatedIds(
        RelatedIdentifiersBuilder::init()
            ->orderId('order_id2')
            ->authorizationId('authorization_id0')
            ->captureId('capture_id0')
            ->build()
    )
    ->build();
```

