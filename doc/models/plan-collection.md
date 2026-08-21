
# Plan Collection

The list of plans with details.

## Structure

`PlanCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `plans` | [`?(BillingPlan[])`](../../doc/models/billing-plan.md) | Optional | An array of plans.<br><br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `32767` | getPlans(): ?array | setPlans(?array plans): void |
| `totalItems` | `?int` | Optional | The total number of items.<br><br>**Constraints**: `>= 0`, `<= 500000000` | getTotalItems(): ?int | setTotalItems(?int totalItems): void |
| `totalPages` | `?int` | Optional | The total number of pages.<br><br>**Constraints**: `>= 0`, `<= 100000000` | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional, Read-only | An array of request-related [HATEOAS links](/docs/api/reference/api-responses/#hateoas-links).<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10` | getLinks(): ?array | setLinks(?array links): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PlanCollectionBuilder;
use PaypalServerSdkLib\Models\Builders\BillingPlanBuilder;
use PaypalServerSdkLib\Models\SubscriptionPlanStatus;

$planCollection = PlanCollectionBuilder::init()
    ->plans(
        [
            BillingPlanBuilder::init()
                ->productId('product_id0')
                ->name('name4')
                ->status(SubscriptionPlanStatus::INACTIVE)
                ->description('description4')
                ->build(),
            BillingPlanBuilder::init()
                ->productId('product_id0')
                ->name('name4')
                ->status(SubscriptionPlanStatus::INACTIVE)
                ->description('description4')
                ->build(),
            BillingPlanBuilder::init()
                ->productId('product_id0')
                ->name('name4')
                ->status(SubscriptionPlanStatus::INACTIVE)
                ->description('description4')
                ->build()
        ]
    )
    ->totalItems(244)
    ->totalPages(24)
    ->build();
```

