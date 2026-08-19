
# Payment Token Response Payment Source

The vaulted payment method details.

## Structure

`PaymentTokenResponsePaymentSource`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?CardPaymentTokenEntity`](../../doc/models/card-payment-token-entity.md) | Optional | Full representation of a Card Payment Token including network token. | getCard(): ?CardPaymentTokenEntity | setCard(?CardPaymentTokenEntity card): void |
| `paypal` | [`?PaypalPaymentToken`](../../doc/models/paypal-payment-token.md) | Optional, Read-only | Full representation of a PayPal Payment Token. | getPaypal(): ?PaypalPaymentToken | setPaypal(?PaypalPaymentToken paypal): void |
| `venmo` | [`?VenmoPaymentToken`](../../doc/models/venmo-payment-token.md) | Optional, Read-only | Full representation of a Venmo Payment Token. | getVenmo(): ?VenmoPaymentToken | setVenmo(?VenmoPaymentToken venmo): void |
| `applePay` | [`?ApplePayPaymentToken`](../../doc/models/apple-pay-payment-token.md) | Optional | A resource representing a response for Apple Pay. | getApplePay(): ?ApplePayPaymentToken | setApplePay(?ApplePayPaymentToken applePay): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PaymentTokenResponsePaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\CardPaymentTokenEntityBuilder;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\Builders\CardResponseAddressBuilder;
use PaypalServerSdkLib\Models\CardType;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayPaymentTokenBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayCardBuilder;

$paymentTokenResponsePaymentSource = PaymentTokenResponsePaymentSourceBuilder::init()
    ->card(
        CardPaymentTokenEntityBuilder::init()
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
    ->applePay(
        ApplePayPaymentTokenBuilder::init()
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
            ->build()
    )
    ->build();
```

