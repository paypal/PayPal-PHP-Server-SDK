
# Apple Pay Attributes

Additional attributes associated with apple pay.

## Structure

`ApplePayAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`?CustomerInformation`](../../doc/models/customer-information.md) | Optional | The details about a customer in PayPal's system of record. | getCustomer(): ?CustomerInformation | setCustomer(?CustomerInformation customer): void |
| `vault` | [`?VaultInstruction`](../../doc/models/vault-instruction.md) | Optional | Base vaulting specification. The object can be extended for specific use cases within each payment_source that supports vaulting. | getVault(): ?VaultInstruction | setVault(?VaultInstruction vault): void |

## Example (as JSON)

```json
{
  "customer": {
    "id": "id0",
    "email_address": "email_address2",
    "phone": {
      "phone_type": "OTHER",
      "phone_number": {
        "national_number": "national_number6"
      }
    }
  },
  "vault": {
    "store_in_vault": "ON_SUCCESS"
  }
}
```

