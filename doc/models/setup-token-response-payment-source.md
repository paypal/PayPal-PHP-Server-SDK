
# Setup Token Response Payment Source

The setup payment method details.

## Structure

`SetupTokenResponsePaymentSource`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?SetupTokenResponseCard`](../../doc/models/setup-token-response-card.md) | Optional | - | getCard(): ?SetupTokenResponseCard | setCard(?SetupTokenResponseCard card): void |
| `paypal` | [`?PaypalPaymentToken`](../../doc/models/paypal-payment-token.md) | Optional, Read-only | Full representation of a PayPal Payment Token. | getPaypal(): ?PaypalPaymentToken | setPaypal(?PaypalPaymentToken paypal): void |
| `venmo` | [`?VenmoPaymentToken`](../../doc/models/venmo-payment-token.md) | Optional, Read-only | Full representation of a Venmo Payment Token. | getVenmo(): ?VenmoPaymentToken | setVenmo(?VenmoPaymentToken venmo): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SetupTokenResponsePaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\SetupTokenResponseCardBuilder;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\Builders\CardResponseAddressBuilder;

$setupTokenResponsePaymentSource = SetupTokenResponsePaymentSourceBuilder::init()
    ->card(
        SetupTokenResponseCardBuilder::init()
            ->name('name6')
            ->brand(CardBrand::CB_NATIONALE)
            ->expiry('expiry4')
            ->billingAddress(
                CardResponseAddressBuilder::init(
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

