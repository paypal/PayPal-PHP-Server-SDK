
# Supplementary Data

Supplementary data about a payment. This object passes information that can be used to improve risk assessments and processing costs, for example, by providing Level 2 and Level 3 payment data.

## Structure

`SupplementaryData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?CardSupplementaryData`](../../doc/models/card-supplementary-data.md) | Optional | Merchants and partners can add Level 2 and 3 data to payments to reduce risk and payment processing costs. For more information about processing payments, see checkout or multiparty checkout. | getCard(): ?CardSupplementaryData | setCard(?CardSupplementaryData card): void |
| `risk` | [`?RiskSupplementaryData`](../../doc/models/risk-supplementary-data.md) | Optional | Additional information necessary to evaluate the risk profile of a transaction. | getRisk(): ?RiskSupplementaryData | setRisk(?RiskSupplementaryData risk): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SupplementaryDataBuilder;
use PaypalServerSdkLib\Models\Builders\CardSupplementaryDataBuilder;
use PaypalServerSdkLib\Models\Builders\Level2CardProcessingDataBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\Level3CardProcessingDataBuilder;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;
use PaypalServerSdkLib\Models\Builders\RiskSupplementaryDataBuilder;
use PaypalServerSdkLib\Models\Builders\ParticipantMetadataBuilder;

$supplementaryData = SupplementaryDataBuilder::init()
    ->card(
        CardSupplementaryDataBuilder::init()
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
            ->build()
    )
    ->risk(
        RiskSupplementaryDataBuilder::init()
            ->customer(
                ParticipantMetadataBuilder::init()
                    ->ipAddress('ip_address0')
                    ->build()
            )
            ->build()
    )
    ->build();
```

