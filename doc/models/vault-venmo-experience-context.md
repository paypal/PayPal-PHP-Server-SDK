
# Vault Venmo Experience Context

Customizes the Vault creation flow experience for your customers.

## Structure

`VaultVenmoExperienceContext`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brandName` | `?string` | Optional | The label that overrides the business name in the PayPal account on the PayPal site. The pattern is defined by an external party and supports Unicode.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `300`, *Pattern*: `^.*$` | getBrandName(): ?string | setBrandName(?string brandName): void |
| `shippingPreference` | [`?string(OrderApplicationContextShippingPreference)`](../../doc/models/order-application-context-shipping-preference.md) | Optional | The shipping preference. This only applies to PayPal payment source.<br><br>**Default**: `OrderApplicationContextShippingPreference::GET_FROM_FILE`<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9A-Z_]+$` | getShippingPreference(): ?string | setShippingPreference(?string shippingPreference): void |
| `vaultInstruction` | [`?string(VaultInstructionAction)`](../../doc/models/vault-instruction-action.md) | Optional | Vault Instruction on action to be performed after a successful payer approval.<br><br>**Default**: `VaultInstructionAction::ON_CREATE_PAYMENT_TOKENS`<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[A-Z_]+$` | getVaultInstruction(): ?string | setVaultInstruction(?string vaultInstruction): void |

## Example (as JSON)

```json
{
  "shipping_preference": "GET_FROM_FILE",
  "vault_instruction": "ON_CREATE_PAYMENT_TOKENS",
  "brand_name": "brand_name0"
}
```

