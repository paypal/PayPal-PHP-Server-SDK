
# Level 2 Card Processing Data

The level 2 card processing data collections. If your merchant account has been configured for Level 2 processing this field will be passed to the processor on your behalf. Please contact your PayPal Technical Account Manager to define level 2 data for your business.

## Structure

`Level2CardProcessingData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoiceId` | `?string` | Optional | Use this field to pass a purchase identification value of up to 127 ASCII characters. The length of this field will be adjusted to meet network specifications (25chars for Visa and Mastercard, 17chars for Amex), and the original invoice ID will still be displayed in your existing reports.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^[\w‘\-.,":;\!?]*$` | getInvoiceId(): ?string | setInvoiceId(?string invoiceId): void |
| `taxTotal` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getTaxTotal(): ?Money | setTaxTotal(?Money taxTotal): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\Level2CardProcessingDataBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;

$level2CardProcessingData = Level2CardProcessingDataBuilder::init()
    ->invoiceId('invoice_id4')
    ->taxTotal(
        MoneyBuilder::init(
            'currency_code4',
            'value0'
        )->build()
    )->build();
```

