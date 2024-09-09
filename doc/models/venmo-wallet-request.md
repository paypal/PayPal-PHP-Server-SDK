
# Venmo Wallet Request

Information needed to pay using Venmo.

## Structure

`VenmoWalletRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `vaultId` | `?string` | Optional | The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's server so the saved payment source can be used for future transactions.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9a-zA-Z_-]+$` | getVaultId(): ?string | setVaultId(?string vaultId): void |
| `emailAddress` | `?string` | Optional | The internationalized email address.<blockquote><strong>Note:</strong> Up to 64 characters are allowed before and 255 characters are allowed after the <code>@</code> sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted <code>@</code> sign exists.</blockquote><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `254`, *Pattern*: ``(?:[a-zA-Z0-9!#$%&'*+/=?^_`{\|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{\|}~-]+)*\|(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]\|\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\|\[(?:(?:(2(5[0-5]\|[0-4][0-9])\|1[0-9][0-9]\|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]\|[0-4][0-9])\|1[0-9][0-9]\|[1-9]?[0-9])\|[a-zA-Z0-9-]*[a-zA-Z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]\|\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])`` | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |
| `experienceContext` | [`?VenmoWalletExperienceContext`](../../doc/models/venmo-wallet-experience-context.md) | Optional | Customizes the buyer experience during the approval process for payment with Venmo.<blockquote><strong>Note:</strong> Partners and Marketplaces might configure <code>shipping_preference</code> during partner account setup, which overrides the request values.</blockquote> | getExperienceContext(): ?VenmoWalletExperienceContext | setExperienceContext(?VenmoWalletExperienceContext experienceContext): void |
| `attributes` | [`?VenmoWalletAdditionalAttributes`](../../doc/models/venmo-wallet-additional-attributes.md) | Optional | Additional attributes associated with the use of this Venmo Wallet. | getAttributes(): ?VenmoWalletAdditionalAttributes | setAttributes(?VenmoWalletAdditionalAttributes attributes): void |

## Example (as JSON)

```json
{
  "vault_id": "vault_id2",
  "email_address": "email_address2",
  "experience_context": {
    "brand_name": "brand_name2",
    "shipping_preference": "NO_SHIPPING"
  },
  "attributes": {
    "customer": {
      "id": "id0",
      "email_address": "email_address2"
    },
    "vault": {
      "store_in_vault": "ON_SUCCESS",
      "description": "description6",
      "usage_pattern": "THRESHOLD_PREPAID",
      "usage_type": "MERCHANT",
      "customer_type": "CONSUMER",
      "permit_multiple_payment_tokens": false
    }
  }
}
```

