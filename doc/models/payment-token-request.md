
# Payment Token Request

Payment Token Request where the `source` defines the type of instrument to be stored.

## Structure

`PaymentTokenRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`?Customer`](../../doc/models/customer.md) | Optional | This object defines a customer in your system. Use it to manage customer profiles, save payment methods and contact details. | getCustomer(): ?Customer | setCustomer(?Customer customer): void |
| `paymentSource` | [`PaymentTokenRequestPaymentSource`](../../doc/models/payment-token-request-payment-source.md) | Required | The payment method to vault with the instrument details. | getPaymentSource(): PaymentTokenRequestPaymentSource | setPaymentSource(PaymentTokenRequestPaymentSource paymentSource): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PaymentTokenRequestBuilder;
use PaypalServerSdkLib\Models\Builders\PaymentTokenRequestPaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\PaymentTokenRequestCardBuilder;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\Builders\VaultTokenRequestBuilder;
use PaypalServerSdkLib\Models\VaultTokenRequestType;
use PaypalServerSdkLib\Models\Builders\CustomerBuilder;

$paymentTokenRequest = PaymentTokenRequestBuilder::init(
    PaymentTokenRequestPaymentSourceBuilder::init()
        ->card(
            PaymentTokenRequestCardBuilder::init()
                ->name('name6')
                ->number('number6')
                ->expiry('expiry4')
                ->securityCode('security_code8')
                ->brand(CardBrand::CB_NATIONALE)
                ->build()
        )
        ->token(
            VaultTokenRequestBuilder::init(
                'id6',
                VaultTokenRequestType::SETUP_TOKEN
            )->build()
        )->build()
)
    ->customer(
        CustomerBuilder::init()
            ->id('id0')
            ->merchantCustomerId('merchant_customer_id2')
            ->build()
    )
    ->build();
```

