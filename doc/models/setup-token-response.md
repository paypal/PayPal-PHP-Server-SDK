
# Setup Token Response

Minimal representation of a cached setup token.

## Structure

`SetupTokenResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's server so the saved payment source can be used for future transactions.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9a-zA-Z_-]+$` | getId(): ?string | setId(?string id): void |
| `customer` | [`?Customer`](../../doc/models/customer.md) | Optional | This object defines a customer in your system. Use it to manage customer profiles, save payment methods and contact details. | getCustomer(): ?Customer | setCustomer(?Customer customer): void |
| `status` | [`?string(PaymentTokenStatus)`](../../doc/models/payment-token-status.md) | Optional | The status of the payment token.<br><br>**Default**: `PaymentTokenStatus::CREATED`<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9A-Z_]+$` | getStatus(): ?string | setStatus(?string status): void |
| `paymentSource` | [`?SetupTokenResponsePaymentSource`](../../doc/models/setup-token-response-payment-source.md) | Optional | The setup payment method details. | getPaymentSource(): ?SetupTokenResponsePaymentSource | setPaymentSource(?SetupTokenResponsePaymentSource paymentSource): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional, Read-only | An array of related [HATEOAS links](https://developer.paypal.com/api/rest/responses/#hateoas).<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `32` | getLinks(): ?array | setLinks(?array links): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SetupTokenResponseBuilder;
use PaypalServerSdkLib\Models\Builders\CustomerBuilder;
use PaypalServerSdkLib\Models\PaymentTokenStatus;
use PaypalServerSdkLib\Models\Builders\SetupTokenResponsePaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\SetupTokenResponseCardBuilder;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\Builders\CardResponseAddressBuilder;

$setupTokenResponse = SetupTokenResponseBuilder::init()
    ->id('id2')
    ->customer(
        CustomerBuilder::init()
            ->id('id0')
            ->merchantCustomerId('merchant_customer_id2')
            ->build()
    )
    ->status(PaymentTokenStatus::CREATED)
    ->paymentSource(
        SetupTokenResponsePaymentSourceBuilder::init()
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
            ->build()
    )
    ->build();
```

