
# Incentive Information

The incentive details.

## Structure

`IncentiveInformation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `incentiveDetails` | [`?(IncentiveDetails[])`](../../doc/models/incentive-details.md) | Optional | An array of incentive details.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `32767` | getIncentiveDetails(): ?array | setIncentiveDetails(?array incentiveDetails): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\IncentiveInformationBuilder;
use PaypalServerSdkLib\Models\Builders\IncentiveDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$incentiveInformation = IncentiveInformationBuilder::init()
    ->incentiveDetails(
        [
            IncentiveDetailsBuilder::init()
                ->incentiveType('incentive_type4')
                ->incentiveCode('incentive_code0')
                ->incentiveAmount(
                    MoneyBuilder::init(
                        'currency_code4',
                        'value0'
                    )->build()
                )
                ->incentiveProgramCode('incentive_program_code4')
                ->build()
        ]
    )
    ->build();
```

