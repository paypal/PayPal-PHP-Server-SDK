
# Apple Pay Attributes Response

Additional attributes associated with the use of Apple Pay.

## Structure

`ApplePayAttributesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `vault` | [`?VaultResponse`](../../doc/models/vault-response.md) | Optional | The details about a saved payment source. | getVault(): ?VaultResponse | setVault(?VaultResponse vault): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ApplePayAttributesResponseBuilder;
use PaypalServerSdkLib\Models\Builders\VaultResponseBuilder;
use PaypalServerSdkLib\Models\VaultStatus;
use PaypalServerSdkLib\Models\Builders\VaultCustomerBuilder;
use PaypalServerSdkLib\Models\Builders\NameBuilder;

$applePayAttributesResponse = ApplePayAttributesResponseBuilder::init()
    ->vault(
        VaultResponseBuilder::init()
            ->id('id6')
            ->status(VaultStatus::APPROVED)
            ->customer(
                VaultCustomerBuilder::init()
                    ->id('id0')
                    ->name(
                        NameBuilder::init()
                            ->givenName('given_name2')
                            ->surname('surname8')
                            ->build()
                    )
                    ->build()
            )
            ->build()
    )
    ->build();
```

