
# Cart Information

The cart information.

## Structure

`CartInformation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `itemDetails` | [`?(ItemDetails[])`](../../doc/models/item-details.md) | Optional | An array of item details.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `32767` | getItemDetails(): ?array | setItemDetails(?array itemDetails): void |
| `taxInclusive` | `?bool` | Optional | Indicates whether the item amount or the shipping amount already includes tax.<br><br>**Default**: `false` | getTaxInclusive(): ?bool | setTaxInclusive(?bool taxInclusive): void |
| `paypalInvoiceId` | `?string` | Optional | The ID of the invoice. Appears for only PayPal-generated invoices.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^[a-zA-Z0-9_'\-., ":;\!?]*$` | getPaypalInvoiceId(): ?string | setPaypalInvoiceId(?string paypalInvoiceId): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CartInformationBuilder;
use PaypalServerSdkLib\Models\Builders\ItemDetailsBuilder;

$cartInformation = CartInformationBuilder::init()
    ->itemDetails(
        [
            ItemDetailsBuilder::init()
                ->itemCode('item_code0')
                ->itemName('item_name8')
                ->itemDescription('item_description4')
                ->itemOptions('item_options2')
                ->itemQuantity('item_quantity2')
                ->build()
        ]
    )
    ->taxInclusive(false)
    ->paypalInvoiceId('paypal_invoice_id4')
    ->build();
```

