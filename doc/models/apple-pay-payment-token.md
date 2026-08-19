
# Apple Pay Payment Token

A resource representing a response for Apple Pay.

## Structure

`ApplePayPaymentToken`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?ApplePayCard`](../../doc/models/apple-pay-card.md) | Optional | The payment card to be used to fund a payment. Can be a credit or debit card. | getCard(): ?ApplePayCard | setCard(?ApplePayCard card): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ApplePayPaymentTokenBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayCardBuilder;
use PaypalServerSdkLib\Models\CardType;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;

$applePayPaymentToken = ApplePayPaymentTokenBuilder::init()
    ->card(
        ApplePayCardBuilder::init()
            ->name('name6')
            ->type(CardType::UNKNOWN)
            ->brand(CardBrand::CB_NATIONALE)
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
            ->build()
    )
    ->build();
```

