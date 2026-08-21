
# Vault Apple Pay Request

A resource representing a request to vault Apple Pay.

## Structure

`VaultApplePayRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | Encrypted Apple Pay token, containing card information. This token would be base64 encoded.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `10000`, *Pattern*: `^.*$` | getToken(): ?string | setToken(?string token): void |
| `card` | [`?ApplePayRequestCard`](../../doc/models/apple-pay-request-card.md) | Optional | The payment card to be used to fund a payment. Can be a credit or debit card. | getCard(): ?ApplePayRequestCard | setCard(?ApplePayRequestCard card): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\VaultApplePayRequestBuilder;
use PaypalServerSdkLib\Models\Builders\ApplePayRequestCardBuilder;
use PaypalServerSdkLib\Models\CardType;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;

$vaultApplePayRequest = VaultApplePayRequestBuilder::init()
    ->token('token8')
    ->card(
        ApplePayRequestCardBuilder::init()
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

