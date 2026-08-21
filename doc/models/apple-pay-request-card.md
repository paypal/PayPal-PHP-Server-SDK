
# Apple Pay Request Card

The payment card to be used to fund a payment. Can be a credit or debit card.

## Structure

`ApplePayRequestCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(CardType)`](../../doc/models/card-type.md) | Optional | Type of card. i.e Credit, Debit and so on.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[A-Z_]+$` | getType(): ?string | setType(?string type): void |
| `brand` | [`?string(CardBrand)`](../../doc/models/card-brand.md) | Optional | The card network or brand. Applies to credit, debit, gift, and payment cards.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[A-Z_]+$` | getBrand(): ?string | setBrand(?string brand): void |
| `billingAddress` | [`?Address`](../../doc/models/address.md) | Optional | The portable international postal address. Maps to [AddressValidationMetadata](https://github.com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-controls-the-autocomplete-attribute). | getBillingAddress(): ?Address | setBillingAddress(?Address billingAddress): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ApplePayRequestCardBuilder;
use PaypalServerSdkLib\Models\CardType;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;

$applePayRequestCard = ApplePayRequestCardBuilder::init()
    ->type(CardType::DEBIT)
    ->brand(CardBrand::RUPAY)
    ->billingAddress(
        AddressBuilder::init(
            'country_code8'
        )
            ->addressLine1('address_line_12')
            ->addressLine2('address_line_28')
            ->adminArea2('admin_area_28')
            ->adminArea1('admin_area_14')
            ->postalCode('postal_code0')
            ->build()
    )
    ->build();
```

