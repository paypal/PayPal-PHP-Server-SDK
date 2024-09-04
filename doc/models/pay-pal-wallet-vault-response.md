
# Pay Pal Wallet Vault Response

The details about a saved PayPal Wallet payment source.

## Structure

`PayPalWalletVaultResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The PayPal-generated ID for the saved payment source.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255` | getId(): ?string | setId(?string id): void |
| `status` | [`?string(PayPalWalletVaultStatus)`](../../doc/models/pay-pal-wallet-vault-status.md) | Optional | The vault status.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9A-Z_]+$` | getStatus(): ?string | setStatus(?string status): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional | An array of request-related HATEOAS links.<br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10` | getLinks(): ?array | setLinks(?array links): void |
| `customer` | [`?PayPalWalletCustomer`](../../doc/models/pay-pal-wallet-customer.md) | Optional | The details about a customer in PayPal's system of record. | getCustomer(): ?PayPalWalletCustomer | setCustomer(?PayPalWalletCustomer customer): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "status": "CREATED",
  "links": [
    {
      "href": "href6",
      "rel": "rel0",
      "method": "HEAD"
    }
  ],
  "customer": {
    "id": "id0",
    "email_address": "email_address2",
    "phone": {
      "phone_type": "OTHER",
      "phone_number": {
        "national_number": "national_number6"
      }
    },
    "merchant_customer_id": "merchant_customer_id2"
  }
}
```

