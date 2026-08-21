
# Customer Vault Payment Tokens Response

Collection of payment tokens saved for a given customer.

## Structure

`CustomerVaultPaymentTokensResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalItems` | `?int` | Optional | Total number of items.<br><br>**Constraints**: `>= 1`, `<= 50` | getTotalItems(): ?int | setTotalItems(?int totalItems): void |
| `totalPages` | `?int` | Optional | Total number of pages.<br><br>**Constraints**: `>= 1`, `<= 10` | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `customer` | [`?VaultResponseCustomer`](../../doc/models/vault-response-customer.md) | Optional | This object defines a customer in your system. Use it to manage customer profiles, save payment methods and contact details. | getCustomer(): ?VaultResponseCustomer | setCustomer(?VaultResponseCustomer customer): void |
| `paymentTokens` | [`?(PaymentTokenResponse[])`](../../doc/models/payment-token-response.md) | Optional | **Constraints**: *Minimum Items*: `0`, *Maximum Items*: `64` | getPaymentTokens(): ?array | setPaymentTokens(?array paymentTokens): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional, Read-only | An array of related [HATEOAS links](https://developer.paypal.com/api/rest/responses/#hateoas).<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `32` | getLinks(): ?array | setLinks(?array links): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CustomerVaultPaymentTokensResponseBuilder;
use PaypalServerSdkLib\Models\Builders\VaultResponseCustomerBuilder;
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

$customerVaultPaymentTokensResponse = CustomerVaultPaymentTokensResponseBuilder::init()
    ->totalItems(50)
    ->totalPages(10)
    ->customer(
        VaultResponseCustomerBuilder::init()
            ->id('id0')
            ->merchantCustomerId('merchant_customer_id2')
            ->build()
    )
    ->paymentTokens(
        [
            PaymentTokenResponseBuilder::init()
                ->id('id4')
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
                ->build(),
            PaymentTokenResponseBuilder::init()
                ->id('id4')
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
                ->build()
        ]
    )
    ->build();
```

