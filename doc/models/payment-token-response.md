
# Payment Token Response

Full representation of a saved payment token.

## Structure

`PaymentTokenResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's server so the saved payment source can be used for future transactions.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9a-zA-Z_-]+$` | getId(): ?string | setId(?string id): void |
| `customer` | [`?CustomerResponse`](../../doc/models/customer-response.md) | Optional | Customer in merchant's or partner's system of records. | getCustomer(): ?CustomerResponse | setCustomer(?CustomerResponse customer): void |
| `paymentSource` | [`?PaymentTokenResponsePaymentSource`](../../doc/models/payment-token-response-payment-source.md) | Optional | The vaulted payment method details. | getPaymentSource(): ?PaymentTokenResponsePaymentSource | setPaymentSource(?PaymentTokenResponsePaymentSource paymentSource): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional, Read-only | An array of related [HATEOAS links](https://developer.paypal.com/api/rest/responses/#hateoas).<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `32` | getLinks(): ?array | setLinks(?array links): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PaymentTokenResponseBuilder;
use PaypalServerSdkLib\Models\Builders\CustomerResponseBuilder;
use PaypalServerSdkLib\Models\Builders\PaymentTokenResponsePaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\CardPaymentTokenEntityBuilder;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\Builders\CardResponseAddressBuilder;
use PaypalServerSdkLib\Models\CardType;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayPaymentTokenBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayCardBuilder;

$paymentTokenResponse = PaymentTokenResponseBuilder::init()
    ->id('id8')
    ->customer(
        CustomerResponseBuilder::init()
            ->id('id0')
            ->merchantCustomerId('merchant_customer_id2')
            ->build()
    )
    ->paymentSource(
        PaymentTokenResponsePaymentSourceBuilder::init()
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
            ->build()
    )
    ->build();
```

