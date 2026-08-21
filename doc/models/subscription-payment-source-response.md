
# Subscription Payment Source Response

The payment source used to fund the payment.

## Structure

`SubscriptionPaymentSourceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?CardResponseWithBillingAddress`](../../doc/models/card-response-with-billing-address.md) | Optional | The payment card used to fund the payment. Card can be a credit or debit card. | getCard(): ?CardResponseWithBillingAddress | setCard(?CardResponseWithBillingAddress card): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SubscriptionPaymentSourceResponseBuilder;
use PaypalServerSdkLib\Models\Builders\CardResponseWithBillingAddressBuilder;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;

$subscriptionPaymentSourceResponse = SubscriptionPaymentSourceResponseBuilder::init()
    ->card(
        CardResponseWithBillingAddressBuilder::init()
            ->name('name6')
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
            ->expiry('expiry4')
            ->currencyCode('currency_code2')
            ->build()
    )
    ->build();
```

