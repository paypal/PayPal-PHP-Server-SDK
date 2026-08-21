
# Card Supplementary Data

Merchants and partners can add Level 2 and 3 data to payments to reduce risk and payment processing costs. For more information about processing payments, see checkout or multiparty checkout.

## Structure

`CardSupplementaryData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `level2` | [`?Level2CardProcessingData`](../../doc/models/level-2-card-processing-data.md) | Optional | The level 2 card processing data collections. If your merchant account has been configured for Level 2 processing this field will be passed to the processor on your behalf. Please contact your PayPal Technical Account Manager to define level 2 data for your business. | getLevel2(): ?Level2CardProcessingData | setLevel2(?Level2CardProcessingData level2): void |
| `level3` | [`?Level3CardProcessingData`](../../doc/models/level-3-card-processing-data.md) | Optional | The level 3 card processing data collections, If your merchant account has been configured for Level 3 processing this field will be passed to the processor on your behalf. Please contact your PayPal Technical Account Manager to define level 3 data for your business. | getLevel3(): ?Level3CardProcessingData | setLevel3(?Level3CardProcessingData level3): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CardSupplementaryDataBuilder;
use PaypalServerSdkLib\Models\Builders\Level2CardProcessingDataBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\Level3CardProcessingDataBuilder;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;

$cardSupplementaryData = CardSupplementaryDataBuilder::init()
    ->level2(
        Level2CardProcessingDataBuilder::init()
            ->invoiceId('invoice_id4')
            ->taxTotal(
                MoneyBuilder::init(
                    'currency_code4',
                    'value0'
                )->build()
            )->build()
    )
    ->level3(
        Level3CardProcessingDataBuilder::init()
            ->shippingAmount(
                MoneyBuilder::init(
                    'currency_code0',
                    'value6'
                )->build()
            )
            ->dutyAmount(
                MoneyBuilder::init(
                    'currency_code6',
                    'value2'
                )->build()
            )
            ->discountAmount(
                MoneyBuilder::init(
                    'currency_code2',
                    'value8'
                )->build()
            )
            ->shippingAddress(
                AddressBuilder::init(
                    'country_code0'
                )
                    ->addressLine1('address_line_10')
                    ->addressLine2('address_line_20')
                    ->adminArea2('admin_area_24')
                    ->adminArea1('admin_area_16')
                    ->postalCode('postal_code2')
                    ->build()
            )
            ->shipsFromPostalCode('ships_from_postal_code4')
            ->build()
    )
    ->build();
```

