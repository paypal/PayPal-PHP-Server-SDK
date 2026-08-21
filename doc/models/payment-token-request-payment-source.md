
# Payment Token Request Payment Source

The payment method to vault with the instrument details.

## Structure

`PaymentTokenRequestPaymentSource`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?PaymentTokenRequestCard`](../../doc/models/payment-token-request-card.md) | Optional | A Resource representing a request to vault a Card. | getCard(): ?PaymentTokenRequestCard | setCard(?PaymentTokenRequestCard card): void |
| `token` | [`?VaultTokenRequest`](../../doc/models/vault-token-request.md) | Optional | The Tokenized Payment Source representing a Request to Vault a Token. | getToken(): ?VaultTokenRequest | setToken(?VaultTokenRequest token): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PaymentTokenRequestPaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\PaymentTokenRequestCardBuilder;
use PaypalServerSdkLib\Models\CardBrand;
use PaypalServerSdkLib\Models\Builders\VaultTokenRequestBuilder;
use PaypalServerSdkLib\Models\VaultTokenRequestType;

$paymentTokenRequestPaymentSource = PaymentTokenRequestPaymentSourceBuilder::init()
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
    )->build();
```

