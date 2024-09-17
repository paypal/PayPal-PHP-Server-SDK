
# Setup Token Request Payment Source

The payment method to vault with the instrument details.

## Structure

`SetupTokenRequestPaymentSource`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?SetupTokenRequestCard`](../../doc/models/setup-token-request-card.md) | Optional | A Resource representing a request to vault a Card. | getCard(): ?SetupTokenRequestCard | setCard(?SetupTokenRequestCard card): void |
| `paypal` | [`?VaultPaypalWalletRequest`](../../doc/models/vault-paypal-wallet-request.md) | Optional | A resource representing a request to vault PayPal Wallet. | getPaypal(): ?VaultPaypalWalletRequest | setPaypal(?VaultPaypalWalletRequest paypal): void |
| `venmo` | [`?VaultVenmoRequest`](../../doc/models/vault-venmo-request.md) | Optional | - | getVenmo(): ?VaultVenmoRequest | setVenmo(?VaultVenmoRequest venmo): void |
| `token` | [`?VaultTokenRequest`](../../doc/models/vault-token-request.md) | Optional | The Tokenized Payment Source representing a Request to Vault a Token. | getToken(): ?VaultTokenRequest | setToken(?VaultTokenRequest token): void |

## Example (as JSON)

```json
{
  "card": {
    "name": "name6",
    "number": "number6",
    "expiry": "expiry4",
    "security_code": "security_code8",
    "brand": "RUPAY"
  },
  "paypal": {
    "description": "description2",
    "shipping": {
      "name": {
        "full_name": "full_name6"
      },
      "type": "SHIPPING",
      "address": {
        "address_line_1": "address_line_16",
        "address_line_2": "address_line_26",
        "admin_area_2": "admin_area_20",
        "admin_area_1": "admin_area_12",
        "postal_code": "postal_code8",
        "country_code": "country_code6"
      }
    },
    "permit_multiple_payment_tokens": false,
    "usage_type": "usage_type2",
    "customer_type": "customer_type6"
  },
  "venmo": {
    "description": "description6",
    "shipping": {
      "name": {
        "full_name": "full_name6"
      },
      "type": "SHIPPING",
      "address": {
        "address_line_1": "address_line_16",
        "address_line_2": "address_line_26",
        "admin_area_2": "admin_area_20",
        "admin_area_1": "admin_area_12",
        "postal_code": "postal_code8",
        "country_code": "country_code6"
      }
    },
    "permit_multiple_payment_tokens": false,
    "usage_type": "usage_type6",
    "customer_type": "customer_type0"
  },
  "token": {
    "id": "id6",
    "type": "SETUP_TOKEN"
  }
}
```

